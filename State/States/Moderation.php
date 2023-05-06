<?php

namespace States;

use Documents\Document;

class Moderation implements State
{
    public function __construct(
        protected readonly string $username,
        protected readonly Document $document
    ) {
    }

    public function render(): void
    {
        if ($this->username === Document::AUTHOR_USERNAME || $this->username === Document::ADMIN_USERNAME) {
            echo "Moderation doc contents...\n";
            return;
        }

        echo "User is not an author nor an admin, cannot render a moderation doc\n";
    }

    public function publish(): void
    {
        if ($this->username === Document::AUTHOR_USERNAME) {
            echo "Cannot change the state of moderation doc as an author...\n";
        } else if ($this->username === Document::ADMIN_USERNAME) {
            echo "Moderation doc has been changed to published because user is admin...\n";
            $this->document->setState(new Published($this->username, $this->document));
        } else {
            echo "Cannot publish the doc from moderation as $this->username\n";
        }
    }
}
