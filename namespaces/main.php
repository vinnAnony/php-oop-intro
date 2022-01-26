<?php
require 'models/Customer.php';
require 'models/Product.php';

use models\Customer;
use models\Product;

$customer = new Customer('Bob');
echo $customer->getName()."\n";

$product = new Product('Xiaomi Note 10');
echo $product->getName()."\n";