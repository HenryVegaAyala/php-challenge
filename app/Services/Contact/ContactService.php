<?php

namespace App\Services;

use App\Contact;
use App\Repository\Contact\Interfaces\ContactRepositoryInterface;
use App\Services\Contact\Interfaces\ContactServiceInterface;

/**
 * Class ContactService
 *
 * @package App\Services
 */
class ContactService implements ContactServiceInterface
{
    /**
     * @var ContactRepositoryInterface
     */
    private $contactRepository;

    /**
     * ContactService constructor.
     *
     * @param ContactRepositoryInterface $contactRepository
     */
    public function __construct(ContactRepositoryInterface $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    /**
     * @param string $name
     *
     * @return Contact
     */
    public function findByName(string $name): Contact
    {
        return $this->contactRepository->findByName($name);
    }

    /**
     * @param string $number
     *
     * @return bool
     */
    public function validateNumber(string $number): bool
    {
        $response = false;
        if (preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $number)) {
            $response = true;
        }

        return $response;
    }
}
