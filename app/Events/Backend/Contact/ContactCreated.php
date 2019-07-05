<?php
namespace App\Events\Backend\Contact;

use Illuminate\Queue\SerializesModels;
/**
 * Class ContactCreated.
 */
class ContactCreated
{
    use SerializesModels;
    /**
     * @var
     */

    public $contact;

    /**
     * @param $contact
     */
    public function __construct($contact)
    {
        $this->contact = $contact;
    }
}
