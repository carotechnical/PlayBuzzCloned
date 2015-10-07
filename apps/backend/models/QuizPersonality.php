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
            'result' => array(
                'type' => 'customCode',
                'label' => 'Results',
                'customCode' => '
<div id="pl-items-result">
    <div class="pl-item highlight-box">
        <a href="javascript:void(0)" onclick="$(this).parent().remove();" class="pl-close-btn fa fa-close"></a>
        <p><input name="result_title[]" onchange="quiz_populate_associate_result()" class="form-control" type="text" placeholder="Result title" value=""></p>
        <p><input name="result_url[]" class="form-control custom-upload-value" type="text" placeholder="Photo/Video URL"></p>
        <p><b>or upload</b>
            <span class="btn btn-default btn-file">
                            Browse <input type="file" onchange="custom_upload_file(this)" class="custom-upload-file" parent="pl-item" location="gallery" output="custom-upload-value">
                        </span>
                        </p>
        <p><textarea name="result_text[]" class="form-control" placeholder="Add text to result.."></textarea></p>
    </div>
    <div class="pl-item highlight-box">
        <p><input name="result_title[]" onchange="quiz_populate_associate_result()" class="form-control" type="text" placeholder="Result title" value=""></p>
        <p><input name="result_url[]" class="form-control custom-upload-value" type="text" placeholder="Photo/Video URL"></p>
        <p><b>or upload</b>
            <span class="btn btn-default btn-file">
                            Browse <input type="file" onchange="custom_upload_file(this)" class="custom-upload-file" parent="pl-item" location="gallery" output="custom-upload-value">
                        </span>
                        </p>
        <p><textarea name="result_text[]" class="form-control" placeholder="Add text to result.."></textarea></p>
    </div>
</div>
<div>
    <p><input id="addQuizResult" type="button" class="btn btn-success pull-left" value="Add result"></p>
</div>
                '
            ),
            'question' => array(
                'type' => 'customCode',
                'label' => 'Questions',
                'customCode' => '
<div class="pl-quiz-question">
    <div class="highlight-box">
        <div class="pl-question">
            <p><input name="question_text[]" class="form-control" type="text" placeholder="Write question here..." value=""></p>
            <p><input name="question_url[]" class="form-control custom-upload-value" type="text" placeholder="Photo/Video URL"></p>
            <p><b>or upload</b>
                <span class="btn btn-default btn-file">
                                Browse <input type="file" onchange="custom_upload_file(this)" class="custom-upload-file" parent="pl-question" location="gallery" output="custom-upload-value">
                            </span>
                            </p>
            <p><hr/></p>
        </div>
        <div class="pl-answer pl-small-list">
            <input type="hidden" name="question_answer[]" class="question_answer">
            <div class="pl-small-item">
                <p><input class="form-control answer_text" type="text" placeholder="enter answer..." value=""></p>
                <p><input class="form-control answer_url custom-upload-value" type="text" placeholder="Photo/Video URL"></p>
                <p><b>or upload</b>
                    <span class="btn btn-default btn-file">
                                    Browse <input type="file" onchange="custom_upload_file(this)" class="custom-upload-file" parent="pl-small-item" location="gallery" output="custom-upload-value">
                                </span>
                                </p>
                <p>-Associate results-</p>
                <ul class="pl-small-list-answer">
                </ul>
            </div>
            <div class="pl-small-item">
                <p><input class="form-control answer_text" type="text" placeholder="enter answer..." value=""></p>
                <p><input class="form-control answer_url custom-upload-value" type="text" placeholder="Photo/Video URL"></p>
                <p><b>or upload</b>
                    <span class="btn btn-default btn-file">
                                    Browse <input type="file" onchange="custom_upload_file(this)" class="custom-upload-file" parent="pl-small-item" location="gallery" output="custom-upload-value">
                                </span>
                                </p>
                <p>-Associate results-</p>
                <ul class="pl-small-list-answer">
                </ul>
            </div>
        </div>
        <p><input onclick="quiz_add_answer_from_question(this)" type="button" class="btn btn-success pull-left" value="Add answer"></p>
    </div>
</div>
<div>
    <p><input id="addQuizQuestion" type="button" class="btn btn-success pull-left" value="Add question"></p>
    <input type="hidden" id="data-result" name="data-result">
</div>
<script type="text/javascript">$(".form-horizontal").submit(function(){parse_data_for_save(); return false; });</script>',
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