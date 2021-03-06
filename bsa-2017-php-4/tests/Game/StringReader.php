<?php

namespace BinaryStudioAcademyTests\Game;

use BinaryStudioAcademy\Game\Contracts\Io\Reader;

class StringReader implements Reader
{
    private $command;

    public function __construct(string $command)
    {
        $this->command = $command;
    }

    public function read(): string
    {
        return $this->command;
    }

    public function getStream()
    {
        // TODO: Implement getStream() method.
    }
}
