<?php

namespace DataParsers;

class XlsDataParser extends AbstractDataParser
{
    protected function openFile(string $filepath): void
    {
        echo "Opening an xls file $filepath...\n";

        // open file code...
    }

    protected function extractData(): string
    {
        echo "Reading from xls file...\n";

        // read from file code...

        return json_encode(['a' => 2, 'b' => 4]);
    }

    protected function parseDataIntoArray(string $data): array
    {
        echo "Decoding data from xls file...\n";

        // parse/decode data code...

        return json_decode($data, true);
    }

    protected function closeFile(): void
    {
        echo "Closing the xls file...\n";

        // close file code...
    }
}
