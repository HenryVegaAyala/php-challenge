<?php

namespace App;

/**
 * Class Contact
 *
 * @package App
 */
class Contact
{
    private $name;
    private $numberPhone;

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setNumberPhone(string $numberPhone)
    {
        $this->numberPhone = $numberPhone;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getNumberPhone()
    {
        return $this->numberPhone;
    }
}
