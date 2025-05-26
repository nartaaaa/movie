<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="text-center">
   <form action="register.php" method="post">
    <img class="mb-4" src="" alt=""  width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Register</h1>

    <div class="form-floating">
        <input type="text" class="form-control" id="floatinginput" placeholder="emri" name="emri">
        <label for="floatingInput">Emri</label>
    </div>
    <div class="form-floating">
        <input type="text" class="form-control" id="floatinginput" placeholder="username" name="username">
        <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating">
        <input type="text" class="form-control" id="floatinginput" placeholder="Email" name="email">
        <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating">
        <input type="text" class="form-control" id="floatinginput" placeholder="Password" name="password">
        <label for="floatingInput">password</label>
    </div>
    <div class="form-floating">
        <input type="text" class="form-control" id="floatinginput" placeholder="Confirm Password" name="confirm password">
        <label for="floatingInput">Confirm Password</label>
    </div>
    <div class="checkboz mb-3">
        <label >
            <input type="chechkbox" value="remember-me">Remember me
        </label>
    </div>
    <button class="w-100 btn btn-1g btn-primary" type="submit">Sign up</button>
    <span>Already have an account:</span><a href="login.php">Sign in</a>

   </form> 
</body>
</html>