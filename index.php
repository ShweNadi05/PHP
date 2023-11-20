<?php

// $clothes = [

//      ["brand" => "Adidas", "price" => 30000, "promotion" => 4, "tax" => 2],

//      ["brand" => "LV", "price" => 60000, "promotion" => 4, "tax" => 3],

//      ["brand" => "Gucci", "price" => 50000, "promotion" => 6, "tax" => 1],

//      ["brand" => "Zara", "price" => 40000, "promotion" => 3, "tax" => 4]

// ];

// for ($i = 0; $i < count($clothes); $i++)

// {

//      echo $clothes[$i] ["price"];

//      echo "<br>";

// }

// $a = [1, 2, 3, 4, 5];

// foreach ($clothes as $cloth)

// {

//     echo $cloth["promotion"];

//     echo "<br>";

// }


$categories = [

    [

        "id" => 1,

        "name" => "T-Shirt",

    ],

    [

        "id" => 2,

        "name" => "Pant",

    ],

    [
        "id" => 3,

        "name" => "Shoes",

    ]

    
    
];

$product = [

    [

        "id" => 1,

        "brand" => "Adidas",

        "color" => "blue", 

        "price" => 30000,

        "catgory_id" => 3,

    ],

    [

        "id" => 2,

        "brand" => "LV",

        "color" => "green", 

        "price" => 50000,

        "catgory_id" => 2,


    ],
    [

        "id" => 3,

        "brand" => "Gucci",

        "color" => "black", 

        "price" => 40000,

        "catgory_id" => 1,


    ],
    [

        "id" => 4,

        "brand" => "Nike",

        "color" => "white", 

        "price" => 45000,

        "catgory_id" => 1,


    ],
    [

        "id" => 5,

        "brand" => "Levis",

        "color" => "red", 

        "price" => 65000,

        "catgory_id" => 2,


    ],

];

foreach ($categories as $c)

{

    foreach ($product as $p)

    {

        if ($c["id"] == $p["catgory_id"])

        {

            echo $p["brand"];

            echo "<br>";
        }
    }

    
}










    
?>



