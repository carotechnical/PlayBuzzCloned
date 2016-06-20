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
    public $name;
    public $created;
    public $user_created_id;
    public $deleted;
    public $description;
    public $status;
    public $thumbnail_url;
    public $footer_text;
    public $data_items;

    public $list_view = array(
        'fields' => array(
            'name' => array(
                'type' => 'text',
                'label' => 'Title',
                'link' => true
            ),
            'status' => array(
                'type' => 'text',
                'label' => 'Status',
            ),
        ),
    );

    public $edit_view = array(
        'title' => 'name',
        'fields' => array(
            'name' => array(
                'type' => 'text',
                'label' => 'Title',
                'required' => true
            ),
            'status' => array(
                'type' => 'hidden'
            ),
            'thumbnail_url' => array(
                'type' => 'image',
                'label' => 'Thumbnail',
                'required' => true,
            ),
            'description' => array(
                'type' => 'textarea',
                'label' => 'Description',
            ),
            'data_items' => array(
                'type' => 'customCode',
                'label' => 'Items',
                'customCode' => '
<div id="pl-items-list">
    <div class="pl-item highlight-box">
        <div class="form-group">
            <div class="col-sm-12"><input name="item_title[]" class="form-control" type="text" placeholder="Item title" value=""></div>    
        </div>
        <div class="form-group">
            <div class="col-sm-7"><input name="item_url[]" class="form-control custom-upload-value" type="text" placeholder="Photo/Video URL"></div>
            <div class="col-sm-5">
                <b>or upload</b>
                <span class="btn btn-default btn-file">
                    Browse <input type="file" onchange="custom_upload_file(this)" class="custom-upload-file" parent="pl-item" location="gallery" output="custom-upload-value">
                </span>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12"><textarea name="item_caption[]" class="form-control" placeholder="Type your caption..."></textarea></div>
        </div>
    </div>
</div>
<div>
    <p><input id="addItem" type="button" class="btn btn-success pull-left" value="Add item"></p>
</div>
<script type="text/javascript">$(document).ready(function(){editview_convert_item_list_from_json(\'{{data_items}}\')});</script>
                    '
            ),
            'footer_text' => array(
                'type' => 'text',
                'label' => 'Footer text',
                'required' => false
            )
        )
    );

    public $detail_view = array(
        'title' => 'name',
        'fields' => array(
            'name' => array(
                'type' => 'text',
                'label' => 'Title',
            ),
            'status' => array(
                'type' => 'text',
                'label' => 'Status',
            ),
            'thumbnail_url' => array(
                'type' => 'image',
                'label' => 'Thumbnail',
                'required' => true,
            ),
            'description' => array(
                'type' => 'textarea',
                'label' => 'Description',
            ),
            'data_items' => array(
                'type' => 'customCode',
                'label' => 'Items',
                'customCode' => '
<div id="pl-items-list"></div>
<script type="text/javascript">$(document).ready(function(){detailview_convert_item_list_from_json(\'{{data_items}}\')});</script>
                '
            ),
            'footer_text' => array(
                'type' => 'text',
                'label' => 'Footer text',
                'required' => false
            )
        )
    );

}