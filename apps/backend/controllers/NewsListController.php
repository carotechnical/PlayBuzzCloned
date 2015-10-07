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

    public function saveAction()
    {
        $data = $this->request->getPost();
        $data['status'] = 'Active';

        $items = array();
        for($i = 0; $i < count($data['item_title']); $i++)
        {
            $items[] = array(
                'title'     => $data['item_title'][$i],
                'type'      => 'image',
                'url'       => $data['item_url'][$i],
                'caption'   => $data['item_caption'][$i],
                'position'  => (int)($i + 1),
            );
        }

        $data['data_items'] = json_encode($items);
        $record = $this->saveRecord($data);


        
        
        $this->response->redirect('/admin/newslist/detail/' . $record->id);
    }
}