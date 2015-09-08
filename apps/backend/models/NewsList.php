<?php
/**
 * Created by Jacky.
 * User: Jacky
 * File: NewsList.php
 * Project: PlayBuzzCloned
 */

namespace Modules\Backend\Models;


class NewsList extends ModelBase
{
    public $id;
    public $created;
    public $user_created_id;
    public $deleted;
    public $buzz_id;
    public $description;

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
        )
    );

}