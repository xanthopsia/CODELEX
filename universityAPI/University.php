<?php

class University
{
    private $name;
    private $domains;

    public function __construct($name, $domains)
    {
        $this->name = $name;
        $this->domains = $domains;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDomains()
    {
        return $this->domains;
    }
}
