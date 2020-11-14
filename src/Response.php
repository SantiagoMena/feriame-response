<?php
namespace Feriame\Response;

abstract class Response
{
    abstract protected function getResponse();

    public function getArray(): array
    {
        return $this->getResponse();
    }

    public function getJson(): string
    {
        return json_encode($this->getResponse());
    }
}