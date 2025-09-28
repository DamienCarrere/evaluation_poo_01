<?php


class Visiteur
{
    protected string $name;
    protected bool $ticket;

    public function __construct(string $name, bool $ticket = false)
    {
        $this->name = $name;
        $this->ticket = $ticket;
    }

    public function hasTicket()
    {
        return $this->ticket;
    }

    public function getName()
    {
        return $this->name;
    }
}
