<?php

use Proxy\YoutubeQueryManagerProxy;
use Youtube\YoutubeQueryManager;

require 'autoloader.php';

$youtubeQueryManager = new YoutubeQueryManagerProxy(new YoutubeQueryManager);

$channels = $youtubeQueryManager->queryChannels();
$videos = $youtubeQueryManager->queryVideos();
$comments = $youtubeQueryManager->queryComments();
$comments = $youtubeQueryManager->queryComments();
$videos = $youtubeQueryManager->queryVideos();
$comments = $youtubeQueryManager->queryComments();

/*
Logging the queryChannels call to YoutubeQueryManager at 02-05-2023 14:18:30
Logging the queryVideos call to YoutubeQueryManager at 02-05-2023 14:18:30
Logging the queryComments call to YoutubeQueryManager at 02-05-2023 14:18:30
Logging the queryComments call to YoutubeQueryManager at 02-05-2023 14:18:30
Logging the queryVideos call to YoutubeQueryManager at 02-05-2023 14:18:30
Logging the queryComments call to YoutubeQueryManager at 02-05-2023 14:18:30
*/
