<?php
    spl_autoload_register (
        function ($className)
        {
            include $className.'.php';
        }
    );
    class Cart
    {
        function addToCart($nameproduct, $finalprice)
        {
            $this->name = $nameproduct;
            function CartException($finalprice)
            {
                if ($finalprice == 0) {
                    throw new Exception('Цена=0');
                }
            }
            try {
                CartException($finalprice);
                } catch (Exception $e) {
                echo 'Ошибка: ',  $e->getMessage(), "\n";
                die;
            }
            $this->price = $finalprice;
        }
    }
        function delFromCart()
        {
            unset ($this->nameproduct);
            unset ($this->finalprice);
        }






