<?php

namespace VideoProcessors;

use VideoProcessors\Codecs\Codec;

class BitrateReader
{
    public function read(string $filename, Codec $codec): string
    {
        return "";
    }

    public function convert(string $buffer, Codec $destinationCodec): string
    {
        return "";
    }
}
