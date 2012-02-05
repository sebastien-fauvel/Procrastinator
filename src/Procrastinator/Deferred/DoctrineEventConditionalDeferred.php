<?php
namespace Procrastinator\Deferred;
use InvalidArgumentException;

class DoctrineEventConditionalDeferred extends CallbackDeferred
{
    private $events;

    public function __construct($name, $callback, $events)
    {
        if (!$events) {
            throw new InvalidArgumentException('No events specified');
        }

        parent::__construct($name, $callback);
        $this->events = (array) $events;
    }

    public function getEvents()
    {
        return $this->events;
    }
}