<?php namespace Pixel\Store\Models;

use Model;

/**
 * Model
 */
class Slider extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    public $attachOne = [
        'slider_left' => 'System\Models\File',
        'slider_right' => 'System\Models\File'
    ];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'pixel_store_slider';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
