<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/login.css">


    <title>Shop</title>
</head>

<body>
    <nav class="navbar">
        <div class="logo">
            <h1>SHOP</h1>
        </div>
        <ul class="menu">
            <?php
            if (!isset($_SESSION["user"])) { ?>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Registar</a></li>
            <?php } else { ?>
                <li><a href="logout.php">Logout</a></li>
                <li><a href="home.php">Home</a></li>
                <li><a href="cartItems.php"><span></span><i class="fas fa-shopping-cart"></i></a></li>
            <?php } ?>
            <div class="menu-btn">
                <i class="fa fa-bars"></i>
            </div>
    </nav>

    <section class="my-5 py-5">
        <div class="container text-center mt-3 pt-5">
            <h2 class="form-weight-bold">Login</h2>
            <hr class="hr">
        </div>
        <div class="mx-auto container">
            <form action="../controler/loginController.php" id="login-form" method="post">
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" id="login-email" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" id="login-password" name="password" placeholder="Password">
                </div>
                <div class="form-group">

                    <input type="submit" class="btn" name="submit" id="login-btn" value="Login">
                </div>
            </form>
        </div>
    </section>



    <footer>
        <p>Copyrights at <a href="">Shop</a></p>
    </footer>


</body>

</html>