<?php


class PageController extends Controller
{
    // параметр отдаётся из правила 'page/([-_a-z0-9]+)' => 'page/show/$1',
    function actionShow($url = null){
        // получаем страницу
        $page = $this->getPage($url);

        // выводим её при помощи View
        $this->view->render('page', array('page' => $page));
    }
    function getPageCount($pageSize = 10) {
        $itemCount = db_query("select count(*) from posts");
        return (int)(($itemCount+$pageSize-1)/$pageSize);
    }

    function getPage() {
        $total = $this->getPageCount();
        $page = empty($_GET['page']) ? 1 : $_GET['page'];
        if($page>$total) {
            $page = $total;
        }
        if($page<1) {
            $page = 1;
        }
        return $page;
    }

}