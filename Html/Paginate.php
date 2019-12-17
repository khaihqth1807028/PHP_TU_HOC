
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<div class="pagination">
    <a href="#">&laquo;</a>
    <a href="Paginate.php?page=1#">1</a>
    <a class="active" href="Paginate.php?page=2">2</a>
    <a href="Paginate.php?page=3#">3</a>
    <a href="Paginate.php?page=4#">4</a>
    <a href="Paginate.php?page=5#">5</a>
    <a href="Paginate.php?page=6#">6</a>
    <a href="#">&raquo;</a>


    <div class="page">
        <?php
        $page = $_GET["page"];

        echo "bạn đang ở trang" . " ". $page;

        ?>
    </div>

</div>

</body>
</html>
