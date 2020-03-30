<?php


class Cart {
    private $id;
    private $cartDetails;
    private $total;
    function __construct($id, $cartDetails, $total) {
        $this->id = $id;
        $this->cartDetails = $cartDetails;
        $this->total = $total;
    }
    function getId() {
        return $this->id;
    }

    function getCartDetails() {
        return $this->cartDetails;
    }

    function getTotal() {
        return $this->total;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCartDetails($cartDetails) {
        $this->cartDetails = $cartDetails;
    }

    function setTotal($total) {
        $this->total = $total;
    }


}
