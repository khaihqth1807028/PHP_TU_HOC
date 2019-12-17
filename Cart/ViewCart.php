
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<?php
echo "HelloView";
session_start();
require_once "list.php";

$productid = $_GET['id'];
$newProduct = array();
foreach ($product as $value){
    $newProduct[$value['id']]=$value;
}
//unset($_SESSION['Cart']);
echo "<pre>";

?>   <table class="table">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">thumbnail</th>
        <th scope="col">Name</th>
        <th scope="col">Quantity</th>
        <th scope="col">Price</th>
        <th scope="col">Delete</th>
    </tr>
    </thead>
    <?php

if (!isset($_SESSION['Cart'])|| $_SESSION['Cart']==null){

    $_SESSION['Cart'][$productid] = $newProduct[$productid];
}

else {

    if (array_key_exists($productid, $_SESSION['Cart'])) {
        $_SESSION['Cart'][$productid]['quantity'] += 1;
        $_SESSION['Cart'][$productid]['price'] = $_SESSION['Cart'][$productid]['quantity'] * $product[$productid]['price'];
        ?>      <table class="table">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">thumbnail</th>
                <th scope="col">Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <?php foreach ($_SESSION['Cart'] as $list){
                ?>
                <tbody>
                <tr>
                    <th scope="row"><?php echo $list['id']?></th>
                    <td><img style="width: 50px" src="<?php echo $list['img']; ?>"></td>
                    <td><?php echo $list['name']?></td>
                    <td><?php echo $list['quantity']?></td>
                    <td><?php echo $list['price']?></td>
                    <td><a href="DeleteCart.php?id=<?php echo $list['id']?>">Delete</a></td>
                </tr>
                </tbody>
                <?php

            }
            ?>

        </table> <?php
    }
    else {
        $newProduct[$productid]['quantity'] = 1;
        $_SESSION['Cart'][$productid] = $newProduct[$productid];
//        ?><!--      <table class="table">-->
<!--            <thead>-->
<!--            <tr>-->
<!--                <th scope="col">Id</th>-->
<!--                <th scope="col">thumbnail</th>-->
<!--                <th scope="col">Name</th>-->
<!--                <th scope="col">Quantity</th>-->
<!--                <th scope="col">Price</th>-->
<!--                <th scope="col">Delete</th>-->
<!--            </tr>-->
<!--            </thead>-->
            <?php foreach ($_SESSION['Cart'] as $list){
                ?>
                <tbody>
                <tr>
                    <th scope="row"><?php echo $list['id']?></th>
                    <td><img style="width: 50px" src="<?php echo $list['img']; ?>"></td>
                    <td><?php echo $list['name']?></td>
                    <td><?php echo $list['quantity']?></td>
                    <td><?php echo $list['price']?></td>
                    <td><a href="DeleteCart.php?id=<?php echo $list['id']?>">Delete</a></td>
                </tr>
                </tbody>
                <?php

            }
            ?>

        </table> <?php
        }
}

?>



