<?php namespace Intertech\Posts\Models;

use Model;

/**
 * Model
 */
class Tag extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'intertech_posts_tags';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
