<?php
/**
 * Created by Jacky.
 * User: Jacky
 * File: BuzzController.php
 * Project: PlayBuzzCloned
 */

namespace Modules\Backend\Controllers;


class BuzzController extends ControllerBase
{
    protected $model_name = 'Buzz';

    public function indexAction()
    {
        $this->listAction();
    }
}