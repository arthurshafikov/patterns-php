<?php

namespace States;

use Documents\Document;

class Published implements State
{
    public function __construct(
        protected readonly string $username,
        protected readonly Document $document
    ) {
    }

    public function render(): void
    {
        echo "Public doc contents...\n";
    }

    public function publish(): void
    {
        echo "Document is already published!\n";
    }
}
