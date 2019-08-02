<?php namespace Intertech\Posts;

use Intertech\Posts\Controllers\Posts as PostsController;
use Intertech\Posts\Models\Post as PostModel;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }


    public function boot()
    {

        PostModel::extend(function ($model) {
            $model->belongsToMany['comments'] = ['\Intertech\Posts\Models\Comment'];
        });

        PostsController::extendFormFields(function ($form, $model, $context) {
            if (!$model instanceof \Intertech\Posts\Models\Post) {
                return;
            }

            $form->addTabFields([
                'comments' => [
                    'label' => 'Comment',
                    'type' => 'list',
                    'list' => '$/intertech/posts/models/comment/columns.yaml',
                    'prompt' => 'Click the %s to find a teacher',
                    'select' => 'id',
                    'tab' => 'Comments'
                ]
            ]);
        });



//        Posts::extendFormFields(function($form, $model, $context) {
//
//            if (!$model instanceof \Intertech\Posts\Models\Post) {
//                return;
//            }
//            if (!$model->exists) {
//                return;
//            }
//
//            $form->addTabFields([
//                'comments' => [
//                    'label' => 'Comment',
//                    'comment' => 'Associate this user with a teacher.',
//                    'type' => 'recordfinder',
//                    'list' => '$/ex/vct/models/teacher/columns.yaml',
//                    'prompt' => 'Click the %s to find a teacher',
//                    'select' => 'concat(first_name, " ", last_name)',
//                    'tab' => 'account'
//                ]
//            ]);
//
//
//        });
    }
}
