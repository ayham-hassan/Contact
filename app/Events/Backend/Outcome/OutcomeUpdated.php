<?php namespace App\Events\Backend\Outcome;

use Illuminate\Queue\SerializesModels;
/**
 * Class OutcomeUpdated.
 */
class OutcomeUpdated
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
