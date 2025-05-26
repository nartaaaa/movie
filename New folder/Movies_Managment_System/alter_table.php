<?php
// Include database connection
include 'config.php';

try {
    // Add is_approved column to bookings table if it doesn't exist
    $sql = "ALTER TABLE bookings ADD COLUMN IF NOT EXISTS is_approved varchar(255) NOT NULL DEFAULT 'false'";
    $conn->exec($sql);
    echo "Table altered successfully. The is_approved column has been added to the bookings table.";
} catch(PDOException $e) {
    echo "Error altering table: " . $e->getMessage();
}
?>
