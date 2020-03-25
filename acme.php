<?php

/**
 * Class1 short summary.
 *
 * Class1 description.
 *
 * @version 1.0
 * @author DELL
 */


class Catelogue
{

    private $product = array();
    private $code;
    private $productDesc;
    private $price;
    private $offer;




    function setProduct($product)
    {
        $this->code =$product[0];
        $this->productDesc =$product[1];
        $this->price =$product[2];
        $this->offer =$product[3];
    }

    public function getProduct()
    {
        array_push($this->product,$this->code);
        array_push($this->product,$this->productDesc);
        array_push($this->product,$this->price);
        array_push($this->product,$this->offer);


        return $this->product;
    }
}

class Delivery
{

    private $orders = array();
    private $cost;

    function setDelivery($delivery)
    {
        $this->order =$delivery[0];
        $this->cost =$delivery[1];
       }

    public function getDelivery()
    {
        array_push($this->orders,$this->order);
        array_push($this->orders,$this->cost);


        return $this->orders;
    }
}