<?php

namespace App\Services\Contact\Interfaces;

use App\Contact;

/**
 * Interface ContactServiceInterface
 *
 * @package App\Services\Contact\Interfaces
 */
interface ContactServiceInterface
{
    /**
     * @param string $name
     *
     * @return Contact
     */
    public function findByName(string $name): Contact;

    /**
     * @param string $number
     *
     * @return bool
     */
    public function validateNumber(string $number): bool;
}
