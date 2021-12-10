<?php
require_once 'Bis2bis/PingPong.php';

use Bis2bis\PingPong;

$saque = new PingPong;

echo $saque->turn("0:0");