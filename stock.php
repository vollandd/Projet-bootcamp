<?php

class Stock {

    public String $type;
    public String $name;
    public String $supplier;
    public Float $buying_price;
    public Float $selling_price;
    public Int $quantity_stock;

    public function __construct($type, $name, $supplier, $buying_price, $selling_price, $quantity_stock)
    {
        $this->type = $type;
        $this->name = $name;
        $this->supplier = $supplier;
        $this->buying_price = $buying_price;
        $this->selling_price = $selling_price;
        $this->quantity_stock = $quantity_stock;
    }

    public function setType(String $type): Void 
    {
        $this->type = $type;
    }

    public function getType(): String 
    {
        return $this->type;
    }

    public function setName(String $name): Void 
    {
        $this->name = $name;
    }

    public function getName(): String 
    {
        return $this->name;
    }

    public function setSupplier(String $supplier): Void 
    {
        $this->supplier = $supplier;
    }

    public function getSupplier(): String 
    {
        return $this->supplier;
    }

    public function setBuying_price(Float $buying_price): Void 
    {
        $this->buying_price = $buying_price;
    }

    public function getBuying_price(): Float
    {
        return $this->buying_price;
    }

    public function setSelling_price(Float $selling_price): Void 
    {
        $this->selling_price = $selling_price;
    }

    public function getSelling_price(): Float
    {
        return $this->selling_price;
    }

    public function setQuantity_stock(Int $quantity_stock): Void 
    {
        $this->quantity_stock = $quantity_stock;
    }

    public function getQuantity_stock(): Int
    {
        return $this->quantity_stock;
    }

    public function add_stock($add): void
    {
        $this->quantity_stock = $this->quantity_stock + $add;
    }
}
?>