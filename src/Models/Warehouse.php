<?php

namespace Fleetbase\Pallet\Models;

use Fleetbase\FleetOps\Models\Place;

class Warehouse extends Place
{
    /**
     * Overwrite both place resource name with `payloadKey`
     *
     * @var string
     */
    protected $payloadKey = 'warehouse';

    /**
     * The type of public Id to generate
     *
     * @var string
     */
    protected $publicIdType = 'warehouse';
}
