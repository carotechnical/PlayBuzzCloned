<?php
/**
 * Created by Jacky.
 * User: Jacky
 * File: QuizPersonality.php
 * Project: PlayBuzzCloned
 */

namespace Modules\Backend\Controllers;


class QuizPersonalityController extends ControllerBase
{
    protected $model_name = 'QuizPersonality';

    public function indexAction()
    {
        $this->listAction();
    }

    public function saveAction()
    {
        $data = $this->request->getPost();
        echo '<pre>';
        print_r($data);
        echo '</pre>';
        $rs = array(
           'result1' => array(
               'title' => '',
               'url' => '',
               'text' => '',
           ),
            'result2' => array(
                'title' => '',
                'url' => '',
                'text' => '',
            ),

        );

        $qs = array(
            array(
                'title' => 'question #1',
                'url' => 'question #1',
                'answer' => array(
                    array(
                        'text' => 'as 1-1',
                        'url' => '',
                        'associate' => array(
                            'result1' => 1,
                            'result2' => 0
                        )
                    ),
                    array(
                        'text' => 'as 1-2',
                        'url' => '',
                        'associate' => array(
                            'result1' => 1,
                            'result2' => 0
                        )
                    )
                )
            ),
            array(
                'title' => 'question #2',
                'url' => 'question #2',
                'answer' => array(
                    array(
                        'text' => 'as 2-1',
                        'url' => '',
                        'associate' => array(
                            'result1' => 1,
                            'result2' => 0
                        )
                    ),
                    array(
                        'text' => 'as 2-2',
                        'url' => '',
                        'associate' => array(
                            'result1' => 1,
                            'result2' => 0
                        )
                    )
                )
            ),
        );
        echo json_encode(array(array(
            array(
                'text' => 'as 1-1',
                'url' => '',
                'associate' => array(
                    'result1' => 1,
                    'result2' => 0
                )
            ),
            array(
                'text' => 'as 1-2',
                'url' => '',
                'associate' => array(
                    'result1' => 1,
                    'result2' => 0
                )
            )
        ),array(
            array(
                'text' => 'as 2-1',
                'url' => '',
                'associate' => array(
                    'result1' => 1,
                    'result2' => 0
                )
            ),
            array(
                'text' => 'as 2-2',
                'url' => '',
                'associate' => array(
                    'result1' => 1,
                    'result2' => 0
                )
            )
        )));
        $this->view->disable();
        die();
    }
}