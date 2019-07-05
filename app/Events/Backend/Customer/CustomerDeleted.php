<?php namespace App\Events\Backend\Customer;

use Illuminate\Queue\SerializesModels;
/**
 * Class CustomerDeleted.
 */

class CustomerDeleted
{
    use SerializesModels;
    /**
     * @var
     */

    public $customer;

    /**
     * @param $customer
     */
    public function __construct($customer)
    {
        $this->customer = $customer;
    }
}
