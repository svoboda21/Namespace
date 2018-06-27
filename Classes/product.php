<?php
    abstract class Product
    {
        abstract function getDiscount($price,$discount,$category,$delivery)
        {
        }
        abstract function getPrice($price, $weight, $category,$delivery)
        {
        }

    }