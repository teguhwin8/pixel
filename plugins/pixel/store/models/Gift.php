<?php namespace Pixel\Store\Models;

use Model;

/**
 * Model
 */
class Gift extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    public $attachOne = [
        'gift_icon' => 'System\Models\File'
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'pixel_store_gift';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
