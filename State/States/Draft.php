<?php

namespace States;

use Documents\Document;

class Draft implements State
{
    public function __construct(
        protected readonly string $username,
        protected readonly Document $document
    ) {
    }

    public function render(): void
    {
        if ($this->username === Document::AUTHOR_USERNAME) {
            echo "Draft contents...\n";
            return;
        }

        echo "User is not an author, cannot render a draft\n";
    }

    public function publish(): void
    {
        if ($this->username === Document::AUTHOR_USERNAME) {
            echo "Draft is set to a new state - moderation because user is an author\n";
            $this->document->setState(new Moderation($this->username, $this->document));
        } else if ($this->username === Document::ADMIN_USERNAME) {
            echo "Draft is set to a new state - published because user is an admin\n";
            $this->document->setState(new Published($this->username, $this->document));
        } else {
            echo "Draft cannot be published by $this->username\n";
        }
    }
}
