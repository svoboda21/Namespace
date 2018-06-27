<?php
    function Autoload($className)
    {
        $filePath = './classes/' . $className . '.php';
        if (file_exists($filePath)) {
            include "$filePath";
        }
    }
