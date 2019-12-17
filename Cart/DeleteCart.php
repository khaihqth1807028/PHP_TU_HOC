<?php
require_once 'boostrapCart.php';
session_start();
$id = $_GET['id'];
echo "<pre>";

unset($_SESSION['Cart'][$id]);

?>
<button type="submit" class="btn btn-primary" onclick="confirm()" >Xác nhận xóa giỏ hàng</button>


<script type="text/javascript">

    function confirm() {
        location.reload();
        alert("đã xóa")

    }
</script>
<?php header("Cart.php") ?>