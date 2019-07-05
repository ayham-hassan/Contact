<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Attribute\AddressAttribute;
use Sofa\Eloquence\Eloquence;
use Sofa\Eloquence\Metable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Iatstuti\Database\Support\CascadeSoftDeletes;
use Kyslik\ColumnSortable\Sortable;
use Storage;

class Address extends Model
{
    use Sortable,
        AddressAttribute,
        Eloquence,
        Metable,
        SoftDeletes,
        CascadeSoftDeletes;

    /**
     * The sortable attributes.
     *
     * @var array
     */

    protected $sortable = ["id", "build_num", "street", "country"];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        "build_num",
        "street",
        "area",
        "city",
        "zipcode",
        "country",
        "details"
    ];

    public $timestamps = ["create_at", "update_at"];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
    protected $cascadeDeletes = ['customersCascade'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'addresses';

    /**
     * Get the key name for route model binding.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'id';
    }

    // ***********************************************************
    // ***********************************************************
    // ************************ RELATIONS ************************
    // ***********************************************************
    // ***********************************************************

    /**
     * Get all the customers for the Address.
     * @return \Illuminate\Database\Eloquent\Relations\belongsToMany
     */
    public function customers()
    {
        return $this->belongsToMany(Customer::class, 'customer_addresses')
            ->whereNull('customer_addresses.deleted_at')
            ->withTimestamps()
            ->withPivot(['details']);
    }

    // ***********************************************************
    // ***********************************************************
    // ************************CASCADE  RELATIONS ****************
    // ***********************************************************
    // ***********************************************************

    /**
     * Cascade Deletes for customer_addresses relation
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */

    public function customersCascade()
    {
        return $this->hasMany(CustomerAddress::class, "address_id", "id");
    }
}
