<?php
class controller_main extends Controller
{
    function action_default()
    {
        $this->view->generate('main_view.php', 'template_view.php');
    }
}