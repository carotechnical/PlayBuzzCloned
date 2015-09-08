<?php
/**
 * Created by Jacky.
 * User: Jacky
 * File: CategoriesController.php
 * Project: PlayBuzzCloned
 */

namespace Modules\Backend\Controllers;


class CategoriesController extends ControllerBase
{
    protected $model_name = 'Categories';

    public function indexAction()
    {
        $this->listAction();
    }
}