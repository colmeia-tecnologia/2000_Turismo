<?php

namespace App\Models;

use App\Models\BusSale;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class BusImage.
 *
 * @package namespace App\Models;
 */
class BusImage extends Model implements Transformable
{
    use TransformableTrait;
    use LogsActivity;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'bus_id',
        'image',
        'title',
        'description',
        'order',
    ];
    
    /*
     * The attributes that are logged
     *
     * @var array
     */
    protected static $logAttributes = [
        'id', 
        'bus_id',
        'image',
        'title',
        'description',
        'order',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'deleted_at'];

    public function bus()
    {
        return $this->belongsTo(BusSale::class, 'bus_id');
    }
}
