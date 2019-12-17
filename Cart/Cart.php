<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<?php
session_start();
$product=array();
require_once 'list.php';


?>
<?php
$total =0;
if (isset($_SESSION['Cart']) && $_SESSION['Cart']!= null){
    foreach ($_SESSION['Cart'] as $list){
        $total += $list['quantity'];
    }
}
//unset($_SESSION['Cart']);

?>
<div><h1 style="display: inline-block">Có <?php echo $total;?> sản phẩm trong giỏ hàng</h1>


<!--    <a href="ViewCart.php">Vào giỏ hàng</a>-->
</div>

<?php
foreach ($product as $list){
    ?> <div class="card" style="width: 18rem; display: inline-block;margin-left:7%;border: red 1px solid;text-align: center">
    <img class="card-img-top" src="<?php echo $list['img']?>" style="width: 100px" alt="Card image cap">
    <div class="card-body">
        <p class="card-text">Id sản phẩm :<?php echo "<strong>".$list['id']."</strong>" ?></p>
        <p class="card-text">Tên sản phẩm :<?php echo "<strong>".$list['name']."</strong>" ?></p>
        <p class="card-text">Giá sản phẩm :<?php echo "<strong>".$list['price']."</strong>" ?></p>
        <a id="cart" onclick="cart()" href="ViewCart.php?id=<?php echo $list['id']?>"> <button type="button" onclick="" class="btn btn-primary">Mua ngay</button></a>
    </div>
</div>
<?php
}
?>
<script type="text/javascript">
    function cart() {
        alert("thêm sản phẩm thành công vào trong giỏ hàng")
    }
</script>

