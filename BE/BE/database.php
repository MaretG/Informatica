<?php

$product = array(
                      array("title" => "Bert", "image" => "bert.png", "text" => "Dit is het Bert product", "prijs" => 12.5 ),
                      array("title" => "Ernie", "image" => "ernie.png", "text" => "Dit is het Ernie product", "prijs" => 7.5 ),
                      array("title" => "Bernie", "image" => "bernie.jpg", "text" => "Dit is het Bernie product", "prijs" => 10.5 ),
                      array("title" => "Rick", "image" => "rickandmorty.jpg", "text" => "Dit is het Rick product", "prijs" => 15.0 )
  
);

echo $product[0]["title"];

?>