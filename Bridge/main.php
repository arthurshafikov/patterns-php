<?php

use Devices\Radio;
use Devices\TV;
use Remotes\Remote;

require 'autoloader.php';

$tv = new TV;
$radio = new Radio;

$tvRemote = new Remote($tv);
$tvRemote->togglePower()
    ->channelUp()
    ->channelUp()
    ->volumeUp()
    ->volumeUp();

$radioRemote = new Remote($radio);
$radioRemote->togglePower()
    ->channelUp()
    ->channelUp()
    ->volumeUp()
    ->volumeUp();

/*
TV is enabled!
Channel is 1
Channel is 2
Volume is 10
Volume is 20
Radio is enabled!
Channel is 1
Channel is 2
Volume is 10
Volume is 20
*/
