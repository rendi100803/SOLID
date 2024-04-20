<?php

require_once 'lampu.php';
require_once 'kipasAngin.php';
require_once 'saklar.php';

$lampu = new Lampu();
$kipasAngin = new KipasAngin();

$saklarLampu = new Saklar($lampu);
$saklarKipasAngin = new Saklar($kipasAngin);

$saklarLampu->berubah();
echo '<br/>';
$saklarKipasAngin->berubah();
echo '<br/>';
$saklarKipasAngin->berubah();

?>