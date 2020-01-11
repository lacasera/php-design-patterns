<?php
require "vendor/autoload.php";

use Acme\Decorator\BasicInspection;


echo (new BasicInspection())->getCost();