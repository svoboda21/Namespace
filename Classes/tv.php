<?php
    spl_autoload_register (
        function ($className)
        {
            include $className.'.php';
        }
    );
    class Tv extends Product
    {
        public function __construct($name,$color,$diagonal,$price)
        {
            $this->diagonal=$diagonal;
            $this->price=$price;
        }
        public function getDiscount($price,$discount,$category,$delivery)
        {
            $finalprice = $price - ($price * $discount / 100);
            $this->delivery = $delivery+50;
            $this->price = $finalprice;
            return $finalprice;
        }
        public function getPrice($price, $weight, $category,$delivery)
        {
            if ($category == 'Машина') {
                $discount = ($weight>10000) ? 10 : 0;
                $delivery=($discount==0) ? 200 : 250;
                $this->getDiscount($price,$discount,$category,$delivery);
            } else {
                $discount=10;
                $this->getDiscount($price,$discount,$category,$delivery);
            }
        }
    }