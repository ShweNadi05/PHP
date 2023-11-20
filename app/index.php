<?php

    $brand = "Nike";
    $price = 0;
    $promotion = 0;
    $tax = 0;

    function caculation ( $percentage, $value)
    {

        return $value - (($percentage /100) * $value);
    }

    function promotionAmount ($promotion, $price)
    {
        return caculation ( $promotion, $price);
    }

    function totalAmount ($tax, $promotion_amount)
    {

        return caculation ($tax, $promotion_amount);
    }

    if ( $brand == "Adidas")
    {

        $price = 30000;

        $promotion = 2;

        $tax = 3;

    } else if ( $brand == "Nike" ){

         $price =50000;

         $promotion = 2;

         $tax = 1;

    } else {

        echo " No brand cound!";
    }

    echo totalAmount($tax, promotionAmount($promotion, $price));

?>