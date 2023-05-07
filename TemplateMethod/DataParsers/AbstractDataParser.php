<?php

namespace DataParsers;

abstract class AbstractDataParser
{
    public function getDataFromFile(string $filepath): array
    {
        $this->openFile($filepath);
        $data = $this->extractData();
        $parsedData = $this->parseDataIntoArray($data);
        $this->closeFile();

        return $parsedData;
    }

    abstract protected function openFile(string $filepath): void;
    abstract protected function extractData(): string;
    abstract protected function parseDataIntoArray(string $data): array;
    abstract protected function closeFile(): void;
}
