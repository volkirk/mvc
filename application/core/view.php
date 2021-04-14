<?php
class View
{
   
    function generate($content_view,$template_view,$data=null) {

        //data function todo

        include 'application/views'.$template_view;
    }
}
?>