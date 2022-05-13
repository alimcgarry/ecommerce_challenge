<?php

use Ecommerce\ProductEntityHydrator;

require_once 'vendor/autoload.php';


$db = new PDO('mysql:host=db; dbname=ecommerce_challenge', 'root', 'password');

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$product = ProductEntityHydrator::getProduct($db,1);

echo '<pre>';
var_dump($product);

