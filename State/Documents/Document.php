<?php

namespace Documents;

use States\State;

class Document
{
    public const AUTHOR_USERNAME = "author";
    public const ADMIN_USERNAME = "admin";

    protected State $state;

    public function render(): void
    {
        $this->state->render();
    }

    public function publish(): void
    {
        $this->state->publish();
    }

    public function setState(State $state): self
    {
        $this->state = $state;

        return $this;
    }
}
