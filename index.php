<?php
require_once "template.class.php";
$uri= $_SERVER['REQUEST_URI'];
// $url = explode("/",$uri);
// array_shift($url);
// var_dump( $uri);
// $child="";

$data=["nombre"=>"Sebastian"];

if($uri =="/"){
    $child= new Template("view/index.html",$data);

}elseif($uri =="/about"){
    $child= new Template("view/about.html",$data);


}elseif($uri =="/catalogo"){
    $child= new Template("view/catalogo.html",$data);

}else{
    echo "no";
}



$title="Mi primera página";
include_once "view/app.html";