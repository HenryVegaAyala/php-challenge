<?php

namespace App\Repository\Mobile;

use App\Mobile;
use App\Repository\Mobile\Interfaces\MobileRepositoryInterface;

/**
 * Class MobileRepository
 *
 * @package App\Repository\Mobile
 */
class MobileRepository implements MobileRepositoryInterface
{
    /**
     * MobileRepository constructor.
     *
     * @param Mobile $model
     */
    public function __construct(Mobile $model)
    {
        parent::__construct($model);
    }

}
