<?php
    function debug($var, $die = false)
    {
        if(!$die){
            echo "<pre>";
            print_r($var);
        }else{
            echo "<pre>";
            print_r($var);
            die();
        }
    }
// fiue
