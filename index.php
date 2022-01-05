<?php session_start(); ?>
<?php
     //request object
    if (isset($_POST['item'])) {
    
      //creating & retrieving cart
    if (isset($_SESSION['cart'])) {
        $cart = $_SESSION['cart'];
    }else {
        $cart = array();
        $_SESSION['cart'] = $cart;
    }
    //add into cart
    $cart[] = $_POST['item'];
    //place back
    $_SESSION['cart'] = $cart;   
}
?>

<html>
<head>
<!--tite-->
<title>PHP Shopping Cart</title>
</title>

<body>
<p>J.Powell IV CIS 476 <br> Let's Go Shopping</p>
Cart Contents; 
<hr>
<?php
//var_dump($cart);
if(isset($cart)) {
    echo "<ul>";
    foreach ($cart as $element) {
        echo "<li>$element</li>";
    }
    echo "<ul>";
}else {
    echo "Nothing is Here";
}
?>
    <form action="index.php" method="POST">
        Item: <input type="text" name="item" values" " /><br>
        <input type="submit" value="Add" name="add" />
    </form>

</body>
</html>