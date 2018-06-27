<?php
    spl_autoload_register (
        function ($className)
        {
            include $className.'.php';
        }
        );
    class Car extends Product
    {
        public $transmission='Механика';
        public $engine;
        public function getTransmission($transmission)
        {
        return $this->transmission=$transmission;
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
