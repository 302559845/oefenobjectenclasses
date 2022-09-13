<?php

class auteur extends person
{
    private $email;
    private $gender;
    private $books;

     function __construct(string $name, int $birthdate, string $email, )
    {
        parent::__construct($name, $birthdate);
    }
}