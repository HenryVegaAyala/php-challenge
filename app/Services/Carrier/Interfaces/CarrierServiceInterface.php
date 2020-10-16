<?php

namespace App\Services\Carrier\Interfaces;

use App\Contact;

/**
 * Interface CarrierServiceInterface
 *
 * @package App\Services\Carrier\Interfaces
 */
interface CarrierServiceInterface
{
    /**
     * @param Contact $contact
     *
     * @return mixed
     */
    public function dialContact(Contact $contact);

    /**
     * @param string $numberPhone
     *
     * @return mixed
     */
    public  function makeCall(string $numberPhone);
}
