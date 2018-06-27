<?php
    spl_autoload_register(
        function ($className)
        {
            include 'classes/'.$className.'.php';
        }
    );
    $cart=new cart;
    $cart->addToCart('name',00);
    echo "<pre>";
    print_r($cart);






