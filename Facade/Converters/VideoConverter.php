<?php

namespace Converters;

use File;
use VideoProcessors\AudioMixer;
use VideoProcessors\BitrateReader;
use VideoProcessors\CodecFactory;
use VideoProcessors\Codecs\MPEG4CompressionCodec;
use VideoProcessors\Codecs\OggCompressionCodec;
use VideoProcessors\VideoFile;

class VideoConverter
{
    public const MP4_CODEC = "mp4";
    public const OGG_CODEC = "ogg";

    public function convert(string $filename, string $format): File
    {
        $videoFile = new VideoFile($filename);

        $sourceCodec = (new CodecFactory)->extract($videoFile);
        echo sprintf("Source codec is %s\n", $sourceCodec::class);

        $destinationCodec = $format === "mp4"
            ? new MPEG4CompressionCodec()
            : new OggCompressionCodec();
        echo sprintf("Destination codec is %s\n", $destinationCodec::class);

        $bitrateReader = new BitrateReader;
        $buffer = $bitrateReader->read($filename, $sourceCodec);
        $converted = $bitrateReader->convert($buffer, $destinationCodec);

        $result = new File($converted);
        $result->content = (new AudioMixer())->fix($result->content);

        return $result;
    }
}
