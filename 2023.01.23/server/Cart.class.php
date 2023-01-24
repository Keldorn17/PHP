<?php
class Cart {
    public $cart = [];

    public function __construct() {
        $this->cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : NULL;
    }

    public function addProduct($product) {
        $this->cart[] = $product;
        $_SESSION['cart'] = $this->cart;
        return TRUE;
    }
    public function getQuantitiy() {
        $totQty = 0;
        foreach($this->cart as $item)
            $totQty += $item['quantity'];
        return $totQty;
    }
    public function remove($id) {
        foreach($this->cart as $key => $arr)
            if (intval($arr['id']) == intval($id))
                unset($this->cart[$key]);
        $_SESSION['cart'] = $this->cart;
        return TRUE;
    }
}
?>