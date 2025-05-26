<?php
/*
  This file handles movie deletion. It verifies:
  1. The user is logged in
  2. The user is an admin
  3. A valid movie ID is provided
  Then it deletes the movie and redirects back to the dashboard
*/
session_start();
include_once('config.php');

// Check if user is logged in and is admin
if (!isset($_SESSION['username']) || $_SESSION['is_admin'] != 'true') {
    header("Location: login.php");
    exit;
}

// Check if ID is provided
if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: dashboard.php");
    exit;
}

$movie_id = $_GET['id'];

// Check if any bookings exist for this movie
$check_bookings = $conn->prepare("SELECT COUNT(*) as count FROM bookings WHERE movie_id = :movie_id");
$check_bookings->bindParam(':movie_id', $movie_id);
$check_bookings->execute();
$booking_result = $check_bookings->fetch(PDO::FETCH_ASSOC);

// If there are bookings, don't allow deletion
if ($booking_result['count'] > 0) {
    // Set error message in session
    $_SESSION['error_message'] = "Cannot delete movie because it has active bookings. Please delete the bookings first.";
    header("Location: dashboard.php");
    exit;
}

try {
    // Delete the movie
    $delete_movie = $conn->prepare("DELETE FROM movies WHERE id = :id");
    $delete_movie->bindParam(':id', $movie_id);
    $delete_movie->execute();
    
    // Set success message
    $_SESSION['success_message'] = "Movie deleted successfully!";
} catch (PDOException $e) {
    // Set error message
    $_SESSION['error_message'] = "Error deleting movie: " . $e->getMessage();
}

// Redirect back to dashboard
header("Location: dashboard.php");
exit;
?>
