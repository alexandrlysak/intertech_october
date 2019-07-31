<?php namespace Intertech\Posts\Models;

use Model;

/**
 * Model
 */
class Comment extends Model
{
    use \October\Rain\Database\Traits\Validation;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'intertech_posts_comments';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var array
     */
    public $belongsToMany = [

        'answers' => [
            'Intertech\Posts\Models\Answer',
            'table' => 'intertech_posts_posts_com_answers'
        ]

    ];



//    public $belongsToMany = [
//        'tags' => [
//            'Intertech\Posts\Models\Tag',
//            'table' => 'intertech_posts_posts_tags',
//            'order' => 'title'
//        ],
//
//        'tags' => [
//            'Intertech\Posts\Models\Comment',
//            'table' => 'intertech_posts_posts_comments',
//            'order' => 'id'
//        ]
//    ];
}
