<?php
class PagesController
{
    public function home()
    {
        require_once('views/pages/home.php');
    }
    public function error()
    {
        require_once('views/pages/error.php');
    }
    public function detail_crud()
    {
        require_once('views/pages/detail_crud.php');
    }
}
?>