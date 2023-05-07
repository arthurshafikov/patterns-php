<?php

namespace DataParsers;

class TextDataParser extends AbstractDataParser
{
    protected function openFile(string $filepath): void
    {
        echo "Opening a text file $filepath...\n";

        // open file code...
    }

    protected function extractData(): string
    {
        echo "Reading from text file...\n";

        // read from file code...

        return serialize(['c' => 6, 'd' => 8]);
    }

    protected function parseDataIntoArray(string $data): array
    {
        echo "Decoding data from text file...\n";

        // parse/decode data code...

        return unserialize($data);
    }

    protected function closeFile(): void
    {
        echo "Closing the text file...\n";

        // close file code...
    }
}
