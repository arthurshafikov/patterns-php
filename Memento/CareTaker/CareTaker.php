<?php

namespace CareTaker;

use TextEditors\TextEditor;

class CareTaker
{
    private array $history = [];

    public function __construct(private readonly TextEditor $textEditor)
    {
    }

    public function addText(string $text, int $fontSize): void
    {
        $this->history[] = $this->textEditor->save();
        $this->textEditor->addText($text, $fontSize);
    }

    public function undo(): void
    {
        $lastMemento = array_pop($this->history);
        $this->textEditor->restore($lastMemento);
    }
}
