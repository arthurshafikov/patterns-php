<?php

use Documents\Document;
use States\Draft;
use States\Moderation;

require 'autoloader.php';

$document = new Document();
$draftState = new Draft(Document::AUTHOR_USERNAME, $document);
$document->setState($draftState);

// DRAFT
$document->render();
$document->publish();

// MODERATION
$document->render();
$document->publish();

echo "\n";

$moderation = new Moderation(Document::ADMIN_USERNAME, $document);

$document->setState($moderation);
$document->render();
$document->publish();

// PUBLISHED
$document->render();
$document->publish();

/*
Draft contents...
Draft is set to a new state - moderation because user is an author
Moderation doc contents...
Cannot change the state of moderation doc as an author...

Moderation doc contents...
Moderation doc has been changed to published because user is admin...
Public doc contents...
Document is already published!
*/
