<?php
/**
 * Created by Jacky.
 * User: Jacky
 * File: QuizPersonality.php
 * Project: PlayBuzzCloned
 */

namespace Modules\Backend\Models;


class QuizPersonality extends ModelBase
{
    public $id;
    public $created;
    public $user_created_id;
    public $deleted;
    public $buzz_id;
    public $description;
    public $result;

    public $list_view = array(
        'fields' => array(
            'buzz_id' => array(
                'type' => 'relate',
                'label' => 'Buzz',
                'model' => 'Buzz',
                'link' => true
            )
        ),
    );

    public $edit_view = array(
        'title' => 'buzz_id',
        'fields' => array(
            'buzz_id' => array(
                'type' => 'relate',
                'label' => 'Buzz',
                'model' => 'Buzz',
                'required' => true
            ),
            'description' => array(
                'type' => 'textarea',
                'label' => 'Description',
                'required' => true
            ),
            'result' => array(
                'type' => 'textarea',
                'label' => 'Result',
                'required' => true
            ),
        )
    );

    public $detail_view = array(
        'title' => 'buzz_id',
        'fields' => array(
            'buzz_id' => array(
                'type' => 'relate',
                'label' => 'Buzz',
                'model' => 'Buzz',
            ),
            'description' => array(
                'type' => 'textarea',
                'label' => 'Description',
            ),
            'result' => array(
                'type' => 'textarea',
                'label' => 'Result',
            ),
        )
    );

}