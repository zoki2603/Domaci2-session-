<?php

include_once "../DB/dbconnect.php";
include_once "../controler/CartController.php";
include_once "../model/Cart/Cart.php";

$conn = DB::getInstance();

$purchase = Product::getAllPurchaseProducts($conn);;
$id_user = $_GET["id"];
$purchase_date = $_GET["date"];

?>
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

    <title>Shop</title>
</head>

<body>
    <nav class="navbar">
        <div class="logo">
            <h1>SHOP</h1>
        </div>
        <ul class="menu">

            <li><a href="purchase.php">Purchase</a></li>
            <li><a href="">Registar</a></li>
            <li><a href="admin.php">Admin</a></li>
            <li><a href="logout.php">Logout</a></li>

            <li><a href="cartItems.php"><span></span><i class="fas fa-shopping-cart"></i></a></li>

            <div class="menu-btn">
                <i class="fa fa-bars"></i>
            </div>
    </nav>
    <h1 class="pheading">Purchase Product</h1>

    <sectoin class="sec">
        <div class="products">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Ime i Prezime Kupca</th>
                        <th scope="col">Grad</th>
                        <th scope="col">Adresa Stanovanja</th>
                        <th scope="col">Ime Proizvoda</th>
                        <th scope="col">Kolicina </th>
                        <th scope="col">Cena Proizvoda</th>
                        <th scope="col">Datum Porudzbine</th>
                        <th scope="col">Poruci</th>
                    </tr>
                </thead>
                <tbody>

                    <?php while ($row = mysqli_fetch_assoc($purchase)) { ?>

                        <?php if ($row["id_user"] == $id_user && $row["date"] == $purchase_date) { ?>


                            <form action="" method="POST">
                                <tr>
                                    <th scope="row"><?php echo 1 ?></th>
                                    <td><?php echo $row["username"] . ' ' . $row["lastname"]; ?></td>
                                    <td><?php echo $row["city"] ?></td>
                                    <td><?php echo $row["address"] ?></td>
                                    <td><?php echo $row["productName"] ?></td>
                                    <td><?php echo $row["quantity"] ?></td>
                                    <td><?php echo $row["price"] ?>$</td>
                                    <td><?php echo $row["date"] ?></td>
                                    <td><input type="submit" name="order" value="Oreder" class="btn btn-success"></td>



                                </tr>
                            <?php } ?>
                        <?php } ?>

                        <tr>
                            <td colspan="3">Ukupna Cena: <?php echo $cart->sumAll() ?>$ </td>
                        </tr>
                        <tr>
                            <td colspan="8" style="color: red;font-size: large;text-align: center;"> </td>

                        </tr>
                            </form>
                            <tr>
                                <td>
                                <td colspan="8" style="color: red;font-size: large;text-align: center;"> </td>
                                </td>
                            </tr>
                            </tr>
                </tbody>
            </table>

        </div>
    </sectoin>

    <footer>
        <p>Copyrights at <a href="">Shop</a></p>
    </footer>


</body>

</html>