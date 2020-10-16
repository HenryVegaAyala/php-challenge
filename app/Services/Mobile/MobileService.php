<?php

namespace App\Services\Mobile;

use App\Services\Carrier\Interfaces\CarrierServiceInterface;
use App\Services\Contact\Interfaces\ContactServiceInterface;
use App\Services\Mobile\Interfaces\MobileServiceInterface;
use App\Traits\AwsService\AwsServiceTraits;
use phpDocumentor\Reflection\Types\Void_;

/**
 * Class MobileService
 *
 * @package App\Services\Mobile
 */
class MobileService implements MobileServiceInterface
{
    use AwsServiceTraits;

    /**
     * @var ContactServiceInterface
     */
    private $contactService;

    /**
     * @var CarrierServiceInterface
     */
    private $carrierService;

    /**
     * MobileService constructor.
     *
     * @param ContactServiceInterface $contactService
     * @param CarrierServiceInterface $carrierService
     */
    public function __construct(ContactServiceInterface $contactService, CarrierServiceInterface $carrierService)
    {
        $this->contactService = $contactService;
        $this->carrierService = $carrierService;
    }

    /**
     * @param string $name
     *
     * @return mixed
     */
    public function makeCallByName(string $name = '')
    {
        if (!empty($name)) {
            $contact = $this->contactService->findByName($name);

            return $this->carrierService->dialContact($contact);
        }
    }

    /**
     * @param string $number
     * @param string $message
     */
    public function sendSMSToContact(string $number, string $message)
    {
        $status = $this->pinpointSendSmS($message, $number);

        // TODO logica de guardado en un log
        Log::debug($status);
    }
}
