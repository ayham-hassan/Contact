<?php
namespace App\Events\Backend\Outcome;

use Illuminate\Queue\SerializesModels;
/**
 * Class OutcomeCreated.
 */
class OutcomeCreated
{
    use SerializesModels;
    /**
     * @var
     */

    public $outcome;

    /**
     * @param $outcome
     */
    public function __construct($outcome)
    {
        $this->outcome = $outcome;
    }
}
