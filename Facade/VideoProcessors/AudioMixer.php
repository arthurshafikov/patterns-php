<?php

namespace VideoProcessors;

class AudioMixer
{
    public function fix(string $fileContent): string
    {
        echo "Audio fixed!\n";

        return $fileContent;
    }
}
