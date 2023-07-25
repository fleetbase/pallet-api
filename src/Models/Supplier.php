<?php

namespace Fleetbase\Pallet\Models;

use Fleetbase\FleetOps\Models\Vendor;

class Supplier extends Vendor
{
     /**
     * The singularName overwrite.
     *
     * @var string
     */
    protected $singularName = 'supplier';

    /**
     * These attributes that can be queried
     *
     * @var array
     */
    protected $searchableColumns = [];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];

    /**
     * Dynamic attributes that are appended to object
     *
     * @var array
     */
    protected $appends = [];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
