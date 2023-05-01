<?php

namespace VideoProcessors;

use Exception;
use VideoProcessors\Codecs\Codec;
use VideoProcessors\Codecs\MPEG4CompressionCodec;
use VideoProcessors\Codecs\OggCompressionCodec;

class CodecFactory
{
    public function extract(VideoFile $videoFile): Codec
    {
        switch (pathinfo($videoFile->filename, PATHINFO_EXTENSION)) {
            case "mp4":
                return new MPEG4CompressionCodec;
            case "ogg":
                return new OggCompressionCodec;
            default:
                throw new Exception("Unsupported source codec");
        }
    }
}
