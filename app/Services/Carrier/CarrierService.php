<?php

namespace App\Services\Carrier;

use App\Contact;
use App\Services\Carrier\Interfaces\Call;
use App\Services\Carrier\Interfaces\CarrierServiceInterface;

/**
 * Class CarrierService
 *
 * @package App\Services\Carrier
 */
class CarrierService implements CarrierServiceInterface
{
    /**
     * @param Contact $contact
     *
     * @return mixed|void
     */
    public function dialContact(Contact $contact)
    {
        $numberPhone = $contact->getNumberPhone();
        if (!empty($numberPhone)) {
            $this->makeCall($numberPhone);
        }
    }

    /**
     * @param string $numberPhone
     *
     * @return mixed|string
     */
    public  function makeCall(string $numberPhone)
    {
        return 'Calling...';
    }
}
