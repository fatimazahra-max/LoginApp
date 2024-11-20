<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>

    <div class="container" id="SignUp" style="display: none;">
        <h1 class="form-title">Register 🎀</h1>
        <form method="post" action="">
            <div class="input-groupe">
                <i class="fas fa-user"></i>
                <input type="text" name="fname" id="fname"  
                placeholder="First Name" required>
                <label for="fname">First Name</labe>
            </div>
            <div class="input-groupe">
                <i class="fas fa-user"></i>
                <input type="text" name="lname" id="lname"  
                placeholder="Last Name" required>
                <label for="lname">Last Name</labe>
            </div>
            <div class="input-groupe">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email"  
                placeholder="email" required>
                <label for="email">Email</labe>
            </div>
            <div class="input-groupe">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password"  
                placeholder="password" required>
                <label for="password">Password</labe>
            </div>
            <input type="submit" value="Sign Up" class="btn" name="SignUp" >
        </form>

        <p class="or">------Or------</p>
        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
            <p> You already have account?</p>
            <button id="SignInbtn">Sign In 🎀</button>
        </div>
    </div>

    <div class="container" id="SignIn">
        <h1 class="form-title">Sign In 🎀</h1>
        <form method="post" action="">

            <div class="input-groupe">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" 
                 placeholder="email" required>
                <label for="email">Email</labe>
            </div>
            <div class="input-groupe">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" 
                 placeholder="password" required>

                <label for="fname">Password</labe>
            </div>
            <p class="recover"><a href="#">Recover Password</a> </p>
            <input type="submit" value="Sign In" class="btn" name="SignIn" >
        </form>

        <p class="or">------Or------</p>
        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
            <p> You don't have account?</p>
            <button id="SignUpbtn">Sign Up 🎀</button>
        </div> 


    </div>
    


    <?php if ($errors): ?>
        <div class="unsuccessful">
            <?php foreach ($errors as $error): ?>
                <p><?php echo($error); ?></p>
            <?php endforeach; ?>
            </div>
    <?php endif; ?>   
    
    <?php if ($success_message): ?>
    <script>
        const signIn = document.getElementById("SignIn");
        signIn.style.display = "none";
    </script>

    <p class="success"><?php echo($success_message); ?></p>
    <p class="info"><?php echo($info); ?></p>
    
    <form action="logout.php" method="post">
        <input type="submit" value="Logout" class="btn">
    </form>
<?php endif; ?>

    <script src="script.js"></script>

</body>
</html>