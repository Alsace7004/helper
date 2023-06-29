<?php

namespace Alsace\Helper\Controllers;






class HelperController{
    public function index(){
        $message = "Here is the message that display on the index page !!!";

        return view('helper::index', compact('message'));
    }
}

?>