<?php
include_once 'Product.class.php';

$p1 = new Product('1', 'Tv', 1000, 2);
$p2 = new Product('2', 'Phone', 1000, 1);
$p3 = new Product('3', 'Computer', 2000, 1);

$cart[] = (array)$p1;
$cart[] = (array)$p2;
$cart[] = (array)$p3;

foreach($cart as $item){
    print_r($item);
    echo '<br>';
    echo "darabszám: ".$item['quantity'];
    echo '<br>';
}

?>