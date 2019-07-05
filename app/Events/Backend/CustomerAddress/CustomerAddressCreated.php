<?php
namespace App\Events\Backend\CustomerAddress;

use Illuminate\Queue\SerializesModels;
/**
 * Class CustomerAddressCreated.
 */
class CustomerAddressCreated
{
    use SerializesModels;
    /**
     * @var
     */

    public $customer_address;

    /**
     * @param $customer_address
     */
    public function __construct($customer_address)
    {
        $this->customer_address = $customer_address;
    }
}
