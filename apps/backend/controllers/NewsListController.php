<?php
/**
 * Created by Jacky.
 * User: Jacky
 * File: NewsListController.php
 * Project: PlayBuzzCloned
 */

namespace Modules\Backend\Controllers;


class NewsListController extends ControllerBase
{
    protected $model_name = 'NewsList';

    public function indexAction()
    {
        $this->listAction();
    }
}