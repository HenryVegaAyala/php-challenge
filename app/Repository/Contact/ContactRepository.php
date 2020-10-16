<?php

namespace App\Repository\Contact;

use App\Contact;
use App\Repository\Contact\Interfaces\ContactRepositoryInterface;

/**
 * Class ContactRepository
 *
 * @package App\Repository\Contact
 */
class ContactRepository implements ContactRepositoryInterface
{
    /**
     * @var Contact
     */
    protected $model;

    /**
     * ContactRepository constructor.
     *
     * @param Contact $model
     */
    public function __construct(Contact $model)
    {
        $this->model = $model;
    }

    /**
     * @param string $name
     *
     * @return Contact
     */
    public function findByName(string $name): Contact
    {
        // TODO DB QUERY
        // $this->model->where([['name', $name]])->first();

        $data = ["Henry", "Pablo", "Diana"];

        if (in_array($name, $data, true)) {
            $this->model->setName('Henry');
            $this->model->setNumberPhone(955201758);
        } else {
            $this->model->setName("");
            $this->model->setNumberPhone("");
        }

        return $this->model;
    }
}
