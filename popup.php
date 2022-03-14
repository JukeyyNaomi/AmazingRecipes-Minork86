<?php

$title = "";
$publisher = "";
$text = "";
$ingredients = "";
$prepare_time = "";


if ($_SERVER[REQUEST_METHOD] === "POST"){
    $title = $_POST["recipe"];
    $publisher = $_POST["publisher"];
    $text = $_POST["text"];
    $ingredients = $_POST["ingredients"];
    $prepare_time = $_POST["time"];

    function newPost(){
        return "
        <div class=\"recipe\">
        <h3>" . $title . "</h3>
        <p>Geplaatst door: " . $publisher . "<br/> Bereidingstijd: " . $time . " minuten.</p>
        <img class=\"feature\" src=\"Images/pot-pie.jpg\" width\"100%\">
        <p>" . $text . "</p>
        <br/><a href=\"#\">Bekijk recept</a>
        ";
    }
}

?>