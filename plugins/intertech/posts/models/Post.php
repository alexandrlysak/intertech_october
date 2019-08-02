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

    public $attachOne = [
        'image' => 'System\Models\File'
    ];

    public $belongsTo = [
        'category' => [
            'Intertech\Posts\Models\Category',
            'order' => 'title'
        ],

        'author' => [
            'Backend\Models\User'
        ]
    ];

    public $belongsToMany = [
        'tags' => [
            'Intertech\Posts\Models\Tag',
            'table' => 'intertech_posts_posts_tags',
            'order' => 'title'
        ],

//        'comments' => [
//            'Intertech\Posts\Models\Comment',
//            'table' => 'intertech_posts_posts_comments',
//            'order' => 'id'
//        ]
    ];

    public function beforeSave()
    {
        $this->views = 0;
        $this->author_id = 0;
    }
}


 /*

      SQLSTATE[22007]: Invalid datetime format: 1366 Incorrect integer value: '' for column `intertech_october_debian`.`intertech_posts_`.`views` at row 1
      (SQL: insert into `intertech_posts_` (`title`, `slug`, `short_description`, `full_description`, `category_id`, `views`, `author_id`, `updated_at`, `created_at`) values (Post 1, post-1, <p>Post 1</p>, <p>Post 1</p>, 2, , , 2019-08-01 18:27:29, 2019-08-01 18:27:29))" on line 664 of /home/administrator/PhpstormProjects/intertech_october/vendor/laravel/framework/src/Illuminate/Database/Connection.php
 */
