<?php namespace Intertech\Posts\Models;

use Model;

/**
 * Model
 */
class Category extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'intertech_posts_categories';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
