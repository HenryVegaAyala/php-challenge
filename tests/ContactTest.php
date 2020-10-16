<?php

namespace Tests;

use App\Contact;
use App\Repository\Contact\ContactRepository;
use PHPUnit\Framework\TestCase;

/**
 * Class ContactTest
 *
 * @package Tests
 */
class ContactTest extends TestCase
{
    /** @test */
    public function this_contact_does_not_exist()
    {
        $contact = new Contact();
        $container = new ContactRepository($contact);
        $data = $container->findByName('Lucas');
        $name = $data->getName();

        self::assertEmpty($name);
    }

    /** @test */
    public function this_contact_exist()
    {
        $contact = new Contact();
        $container = new ContactRepository($contact);
        $data = $container->findByName('Henry');
        $name = $data->getName();

        self::assertNotEmpty($name);
    }

}
