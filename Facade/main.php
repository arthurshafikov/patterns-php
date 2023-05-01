<?php

use Converters\VideoConverter;

require 'autoloader.php';

// easy to use
$file = (new VideoConverter)->convert('somefile.mp4', VideoConverter::OGG_CODEC);

echo $file->content;
/*
Source codec is VideoProcessors\Codecs\MPEG4CompressionCodec
Destination codec is VideoProcessors\Codecs\OggCompressionCodec
Audio fixed!
*/
