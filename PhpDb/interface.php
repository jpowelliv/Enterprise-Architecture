<-<!-- Joseph Powell IV CIS 376 -->
<?php
/* 
 My first attempt at building a interace :-(
 */
interface Stock{
    public function products();
}

//class definitions
class Title implements Stock {
    public function products() {
        echo " $title ";
    }
}

class Price implements Stock {
    public function products() {
        echo " $price ";
    }
}

//list
$title = new Title();
$price = new Price();
$stocks = array($title, $price);

//action
foreach ($stocks as $stock) {
    $stock->products();
}
?>