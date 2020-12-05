<?php namespace Pixel\Store\Models;

use Model;

/**
 * Model
 */
class Product extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'pixel_store_product';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    protected $jsonable = ['option'];

    public $attachOne = [
        'product_image' => 'System\Models\File',
        'product_image_2' => 'System\Models\File'
    ];

    public $attachMany = [
        'product_gallery' => 'System\Models\File'
    ];
}
