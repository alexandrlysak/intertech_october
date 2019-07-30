<?php namespace Intertech\Posts\Models;

use Model;

/**
 * Model
 */
class Post extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'intertech_posts_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsTo = [
        'category' => [
            'Intertech\Posts\Models\Category',
            'order' => 'title'
        ]
    ];
}
