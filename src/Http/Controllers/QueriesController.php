<?php

declare(strict_types=1);

namespace LaravelHyperf\Telescope\Http\Controllers;

use LaravelHyperf\Telescope\EntryType;
use LaravelHyperf\Telescope\Watchers\QueryWatcher;

class QueriesController extends EntryController
{
    /**
     * The entry type for the controller.
     */
    protected function entryType(): string
    {
        return EntryType::QUERY;
    }

    /**
     * The watcher class for the controller.
     */
    protected function watcher(): string
    {
        return QueryWatcher::class;
    }
}
