<?php

namespace Proxy;

use Exception;
use Youtube\YoutubeQueryManager;

/**
 * Class YoutubeQueryManagerProxy
 *
 * @mixin YoutubeQueryManager
 */
class YoutubeQueryManagerProxy
{
    public function __construct(protected readonly YoutubeQueryManager $youtubeQueryManager)
    {
    }

    public function __call(string $name, array $arguments)
    {
        if (method_exists($this->youtubeQueryManager, $name)) {
            // some pre-query action, e.g.
            echo "Logging the $name call to YoutubeQueryManager at " . date("d-m-Y H:i:s") . "\n";

            return $this->youtubeQueryManager->$name($arguments);
        }

        throw new Exception("Method $name doesn't exist in YoutubeQueryManager");
    }
}
