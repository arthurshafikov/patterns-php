<?php

use DataParsers\TextDataParser;
use DataParsers\XlsDataParser;

require 'autoloader.php';

$xlsDataParser = new XlsDataParser;
$textDataParser = new TextDataParser;

$xlsData = $xlsDataParser->getDataFromFile('some_data.xls');
var_dump($xlsData);

$textData = $textDataParser->getDataFromFile('some_data.txt');
var_dump($textData);
/*
Opening an xls file some_data.xls...
Reading from xls file...
Decoding data from xls file...
Closing the xls file...
array(2) {
  ["a"]=>
  int(2)
  ["b"]=>
  int(4)
}
Opening a text file some_data.txt...
Reading from text file...
Decoding data from text file...
Closing the text file...
array(2) {
  ["c"]=>
  int(6)
  ["d"]=>
  int(8)
}
*/
