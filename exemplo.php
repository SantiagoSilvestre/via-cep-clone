<?php

require_once "vendor/autoload.php";

use Santiago\ViaCepCloneTeste\Search;

$busca = new Search;

$result = $busca->getAddressFromZipcode('05783010');

print_r($result);