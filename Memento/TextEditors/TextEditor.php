<?php

namespace TextEditors;

use Memento\Memento;

class TextEditor
{
    private string $text = "";
    private int $fontSize = 12;
    private int $textLength = 0;

    public function addText(string $text, int $fontSize): void
    {
        $this->text .= $text;
        $this->fontSize = $fontSize;
        $this->textLength = strlen($this->text);

        echo "Current condition:\n";
        echo "Text: " . $this->text . "\n";
        echo "FontSize: " . $this->fontSize . "\n";
        echo "TextLength: " . $this->textLength . "\n\n";
    }

    public function save(): Memento
    {
        return new Memento([
            'text' => $this->text,
            'dateTime' => date("Y-m-d H:i:s"),
            'fontSize' => $this->fontSize,
            'textLength' => $this->textLength,
        ]);
    }

    public function restore(Memento $memento): void
    {
        $state = $memento->getState();
        $this->text = $state['text'];
        $this->dateTime = $state['dateTime'];
        $this->fontSize = $state['fontSize'];
        $this->textLength = $state['textLength'];
    }
}
