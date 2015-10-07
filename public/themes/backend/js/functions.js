/**
 * Created by VINHPHUC on 9/22/2015.
 */
$(document).ready(function(){
    $('#addItem').click(function(){
        var html = '<div class="pl-item highlight-box">'
                  +'<p><input name="item_title[]" class="form-control" type="text" placeholder="Item title"></p>'
                  +'<p><input name="item_url[]" class="form-control custom-upload-value" type="text" placeholder="Photo/Video URL"></p>'
                  +'<p><b>or upload </b>'
                  +'<span class="btn btn-default btn-file">'
                  +'Browse <input type="file" onchange="custom_upload_file(this)" class="custom-upload-file" parent="pl-item" location="gallery" output="custom-upload-value">'
                  +'</span></p>'
                  +'<p><textarea name="item_caption[]" class="form-control" placeholder="Type your caption..."></textarea></p>'
                  +'</div>';
       $('#pl-items-list').append(html);
    });

    $('#addQuizResult').click(function(){
       var html = '<div class="pl-item highlight-box">'
           +'<p><input name="result_title[]" class="form-control" type="text" placeholder="Result title"></p>'
           +'<p><input name="result_url[]" class="form-control custom-upload-value" type="text" placeholder="Photo/Video URL"></p>'
           +'<p><b>or upload </b>'
           +'<span class="btn btn-default btn-file">'
           +'Browse <input type="file" onchange="custom_upload_file(this)" class="custom-upload-file" parent="pl-item" location="gallery" output="custom-upload-value">'
           +'</span></p>'
           +'<p><textarea name="result_text[]" class="form-control" placeholder="Add text to result.."></textarea></p>'
           +'</div>';
        $('#pl-items-result').append(html);
    });

    $('#addQuizQuestion').click(function(){
        var html =  '<div class="highlight-box">' +
                        '<div class="pl-question">' +
                            '<p><input name="question_text[]" class="form-control" type="text" placeholder="Write question here..." value=""></p>' +
                            '<p><input name="question_url[]" class="form-control custom-upload-value" type="text" placeholder="Photo/Video URL"></p>' +
                            '<p><b>or upload</b>' +
                                '<span class="btn btn-default btn-file">' +
                                'Browse <input type="file" onchange="custom_upload_file(this)" class="custom-upload-file" parent="pl-question" location="gallery" output="custom-upload-value">' +
                                '</span></p>' +
                            '<p><hr/></p>' +
                        '</div>' +
                        '<div class="pl-answer pl-small-list">' +
                            '<input type="hidden" name="question_answer[]" class="question_answer">' +
                            '<div class="pl-small-item">' +
                                '<p><input class="form-control answer_text" type="text" placeholder="enter answer..." value=""></p>' +
                                '<p><input class="form-control answer_url custom-upload-value" type="text" placeholder="Photo/Video URL"></p>' +
                                '<p><b>or upload</b>' +
                                    '<span class="btn btn-default btn-file">' +
                                    'Browse <input type="file" onchange="custom_upload_file(this)" class="custom-upload-file" parent="pl-small-item" location="gallery" output="custom-upload-value">' +
                                    '</span></p>' +
                                '<p>-Associate results-</p>' +
                                '<ul class="pl-small-list-answer"></ul>' +
                            '</div>' +
                            '<div class="pl-small-item">' +
                                '<p><input class="form-control answer_text" type="text" placeholder="enter answer..." value=""></p>' +
                                '<p><input class="form-control answer_url custom-upload-value" type="text" placeholder="Photo/Video URL"></p>' +
                                '<p><b>or upload</b>' +
                                    '<span class="btn btn-default btn-file">' +
                                    'Browse <input type="file" onchange="custom_upload_file(this)" class="custom-upload-file" parent="pl-small-item" location="gallery" output="custom-upload-value">' +
                                    '</span></p>' +
                                '<p>-Associate results-</p>' +
                                '<ul class="pl-small-list-answer"></ul>' +
                            '</div>' +
                        '</div>' +
                        '<p><input onclick="quiz_add_answer_from_question(this)" type="button" class="btn btn-success pull-left" value="Add answer"></p>' +
                    '</div>';
        $('.pl-quiz-question').append(html);
        quiz_populate_associate_result();
    });
});
/* -List */
function editview_convert_item_list_from_json(string_json) {
    if(!string_json) {
        return false;
    }
    var json = JSON.parse(string_json);
    var html = '';
    $.each(json, function(k,v){

        html += '<div class="pl-item highlight-box">'
            +'<p><input name="item_title[]" class="form-control" type="text" placeholder="Item title" value="'+ v.title+'"></p>'
            +'<p><input name="item_url[]" class="form-control custom-upload-value" type="text" placeholder="Photo/Video URL" value="'+ v.url+'"></p>'
            +'<p><b>or upload </b>'
            +'<span class="btn btn-default btn-file">'
            +'Browse <input type="file" onchange="custom_upload_file(this)" class="custom-upload-file" parent="pl-item" location="gallery" output="custom-upload-value">'
            +'</span></p>'
            +'<p><textarea name="item_caption[]" class="form-control" placeholder="Type your caption...">'+ v.caption+'</textarea></p>'
            +'</div>';
    });

    $('#pl-items-list').html(html);
}

function detailview_convert_item_list_from_json(string_json){
    if(!string_json) {
        return false;
    }
    var json = JSON.parse(string_json);
    var html = '';
    $.each(json, function(k,v){

        html += '<div class="pl-item">'
               +'<p><b>Title:</b><br/>'+ v.title+'</p>'
               +'<p><b>Image/Video URL:</b><br/>'+ v.url+'</p>'
               +'<p><b>Caption:</b><br/>'+ v.caption+'</p>'
               +'<p><hr/></p>'
               +'</div>';
    });

    $('#pl-items-list').html(html);
}
/* List- */
/* -Quiz */
function quiz_populate_associate_result(){
    var html = '';
    $('#pl-items-result').find('input[name="result_title[]"]').each(function(){

        html += '<li>' +
                '<span>'+$(this).val()+'</span>' +
                '<select class="point_associate">' +
                '<option value="0">0</option>' +
                '<option value="1">1</option>' +
                '<option value="2">2</option>' +
                '</select>' +
                '</li>';
    });

    $('.pl-small-list-answer').html(html);
}

function quiz_add_answer_from_question(obj){
    var html = '<div class="pl-small-item">' +
        '<p><input class="form-control answer_text" type="text" placeholder="enter answer..." value=""></p>' +
        '<p><input class="form-control answer_url custom-upload-value" type="text" placeholder="Photo/Video URL"></p>' +
        '<p><b>or upload</b>' +
        '<span class="btn btn-default btn-file">' +
        'Browse <input type="file" onchange="custom_upload_file(this)" class="custom-upload-file" parent="pl-small-item" location="gallery" output="custom-upload-value">' +
        '</span></p>' +
        '<p>-Associate results-</p>' +
        '<ul class="pl-small-list-answer"></ul>' +
        '</div>';
    $(obj).parents('.highlight-box').find('.pl-answer').append(html);
    quiz_populate_associate_result();
}

function parse_data_for_save(){

    var arr = new Array;
    $('.pl-answer').each(function(i){

        $(this).find('.pl-small-item').each(function(j){
            arr[j]['text'] = $(this).find('.answer_text').val();
            arr[j]['url'] = $(this).find('.answer_url').val();

            $(this).find('.point_associate').each(function(k){
                arr[j]['associate'][k] = $(this).val();
            });
        })
    });

    console.log(arr);
    //$('#data-result').val(string_json);
}
/* Quiz- */