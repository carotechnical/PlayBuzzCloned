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
}