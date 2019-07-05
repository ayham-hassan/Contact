<?php namespace App\Events\Backend\Type;

use Illuminate\Queue\SerializesModels;
/**
 * Class TypeUpdated.
 */
class TypeUpdated
{
    use SerializesModels;
    /**
     * @var
     */

    public $type;

    /**
     * @param $type
     */
    public function __construct($type)
    {
        $this->type = $type;
    }
}
