<?php
namespace App\Events\Backend\Address;

use Illuminate\Queue\SerializesModels;
/**
 * Class AddressCreated.
 */
class AddressCreated
{
    use SerializesModels;
    /**
     * @var
     */

    public $address;

    /**
     * @param $address
     */
    public function __construct($address)
    {
        $this->address = $address;
    }
}
