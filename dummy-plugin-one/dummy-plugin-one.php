<?php

/*
 * Plugin Name: Dummy Plugin One
 */

require __DIR__ . '/vendor/autoload.php';

// $product = new Yoast_Product_Double();
$product = new Yoast_Product('api.example.com', 'Dummy Plugin', 'dummy-plugin', '1.0.0');
$manager = new Yoast_Plugin_License_Manager($product);
