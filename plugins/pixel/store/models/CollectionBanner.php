<?php namespace Pixel\Store\Models;

use Model;

/**
 * Model
 */
class CollectionBanner extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    public $attachOne = [
        'collection_banner_image' => 'System\Models\File'
    ];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'pixel_store_collection_banner';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
