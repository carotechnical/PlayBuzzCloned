<?php
/**
 * Created by Jacky.
 * User: Jacky
 * File: Buzz.php
 * Project: PlayBuzzCloned
 */

namespace Modules\Backend\Models;


class Buzz extends ModelBase
{
    public $id;
    public $created;
    public $user_created_id;
    public $deleted;
    public $name;
    public $slug;
    public $thumbnail;
    public $description;
    public $category_id;

    public $list_view = array(
        'fields' => array(
            'thumbnail' => array(
                'type' => 'image',
                'label' => 'Thumbnail',
                'link' => true,
            ),
            'name' => array(
                'type' => 'text',
                'label' => 'Name',
                'link' => true,
                'search' => true,
                'operator' => 'like'
            ),
            'type' => array(
                'type' => 'select',
                'options' => 'buzz_type_list',
                'label' => 'Type'
            ),
            'category_id' => array(
                'type' => 'relate',
                'model' => 'Categories',
                'label' => 'Category'
            )
        ),
    );

    public $edit_view = array(
        'title' => 'name',
        'fields' => array(
            'type' => array(
                'type' => 'select',
                'options' => 'buzz_type_list',
                'label' => 'Type'
            ),
            'thumbnail' => array(
                'type' => 'image',
                'label' => 'Thumbnail',
                'required' => true
            ),
            'name' => array(
                'type' => 'text',
                'label' => 'Name',
                'required' => true
            ),
            'slug' => array(
                'type' => 'text',
                'label' => 'Slug'
            ),
            'category_id' => array(
                'type' => 'relate',
                'model' => 'Categories',
                'label' => 'Category'
            ),
            'description' => array(
                'type' => 'textarea',
                'label' => 'Description',
            ),
        )
    );

    public $detail_view = array(
        'title' => 'name',
        'fields' => array(
            'type' => array(
                'type' => 'select',
                'options' => 'buzz_type_list',
                'label' => 'Type'
            ),
            'thumbnail' => array(
                'type' => 'image',
                'label' => 'Thumbnail',
            ),
            'name' => array(
                'type' => 'text',
                'label' => 'Name',
            ),
            'slug' => array(
                'type' => 'text',
                'label' => 'Slug'
            ),
            'category_id' => array(
                'type' => 'relate',
                'model' => 'Categories',
                'label' => 'Category'
            ),
            'description' => array(
                'type' => 'textarea',
                'label' => 'Description',
            ),
        )
    );

}