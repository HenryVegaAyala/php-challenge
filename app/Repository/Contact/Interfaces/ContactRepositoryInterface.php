<?php

namespace App\Repository\Contact\Interfaces;

use App\Contact;

/**
 * Interface ContactRepositoryInterface
 *
 * @package App\Repository\Contact\Interfaces
 */
interface ContactRepositoryInterface
{
    /**
     * @param string $name
     *
     * @return Contact
     */
    public function findByName(string $name): Contact;
}
