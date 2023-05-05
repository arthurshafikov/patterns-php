<?php

use CareTaker\CareTaker;
use TextEditors\TextEditor;

require 'autoloader.php';

$textEditor = new TextEditor;

$careTaker = new CareTaker($textEditor);

$careTaker->addText("First Text ", 14);
/*
Current condition:
Text: First Text
FontSize: 14
TextLength: 11
*/
$careTaker->addText("Second Text ", 14);
/*
Current condition:
Text: First Text Second Text
FontSize: 14
TextLength: 23
*/
$careTaker->addText("Third Text ", 18);
/*
Current condition:
Text: First Text Second Text Third Text
FontSize: 18
TextLength: 34
*/
$careTaker->undo();
$careTaker->addText("Fourth Text ", 20);
/*
Current condition:
Text: First Text Second Text Fourth Text
FontSize: 20
TextLength: 35
*/
