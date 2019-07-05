<?php
namespace App\Repositories\Backend;

use App\Models\CustomerAddress;
use App\Repositories\BaseRepository;
use Prettus\Repository\Contracts\CacheableInterface;
use Prettus\Repository\Traits\CacheableRepository;

class CustomerAddressRepository extends BaseRepository implements
    CacheableInterface
{
    use CacheableRepository;

    protected $defaultOrderBy = 'id';
    protected $defaultSortBy = 'asc';

    protected $fieldSearchable = [
        "customer_id",
        "address_id",
        "rec_date",
        "details"
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CustomerAddress::class;
    }

    public function getPaginated($paged = 25, $condions_array = null)
    {
        if ($condions_array) {
            return $this->model->where($condions_array)->paginate($paged);
        }
        return $this->model->paginate($paged);
    }
}
