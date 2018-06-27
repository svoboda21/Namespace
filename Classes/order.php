<?php
    spl_autoload_register (
        function ($className)
        {
        include $className.'.php';
        }
    );
    class Order extends Cart
    {
        public function getPrint
        {
            echo $this->name;
            echo $this->price;
        }
    }
