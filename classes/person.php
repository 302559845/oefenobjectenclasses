<?php

class person
{
    private $name;
    private $birthdate;

    function __construct(string $name,  int $birthdate){
        $this->name= $name;
        $this->birthdate= $birthdate;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getBirthdate(): int
    {
        return $this->birthdate;
    }
}