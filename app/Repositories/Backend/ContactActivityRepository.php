<?php
namespace App\Repositories\Backend;

use App\Models\ContactActivity;
use App\Repositories\BaseRepository;
use Prettus\Repository\Contracts\CacheableInterface;
use Prettus\Repository\Traits\CacheableRepository;

class ContactActivityRepository extends BaseRepository implements
    CacheableInterface
{
    use CacheableRepository;

    protected $defaultOrderBy = 'id';
    protected $defaultSortBy = 'asc';

    protected $fieldSearchable = [
        "contact_id",
        "type_id",
        "outcome_id",
        "activity_date",
        "details"
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ContactActivity::class;
    }

    public function getPaginated($paged = 25, $condions_array = null)
    {
        if ($condions_array) {
            return $this->model->where($condions_array)->paginate($paged);
        }
        return $this->model->paginate($paged);
    }
}
