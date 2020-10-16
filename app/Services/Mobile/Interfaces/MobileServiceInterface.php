<?php

namespace App\Services\Mobile\Interfaces;

/**
 * Interface MobileServiceInterface
 *
 * @package App\Services\Mobile\Interfaces
 */
interface MobileServiceInterface
{
    /**
     * @param string $name
     *
     * @return mixed
     */
    public function makeCallByName(string $name = '');

    /**
     * @param string $number
     * @param string $message
     */
    public function sendSMSToContact(string $number, string $message);
}
