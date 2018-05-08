<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\BusSaleRepository;
use App\Models\BusSale;
use App\Validators\BusSaleValidator;

/**
 * Class BusSaleRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class BusSaleRepositoryEloquent extends BaseRepository implements BusSaleRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return BusSale::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
