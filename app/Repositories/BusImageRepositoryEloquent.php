<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\BusImageRepository;
use App\Models\BusImage;
use App\Validators\BusImageValidator;

/**
 * Class BusImageRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class BusImageRepositoryEloquent extends BaseRepository implements BusImageRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return BusImage::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
