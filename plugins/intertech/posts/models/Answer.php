<?php namespace Intertech\Posts\Models;

use Model;

/**
 * Model
 */
class Answer extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'intertech_posts_comments_answers';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
