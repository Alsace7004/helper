<?php

if (! function_exists('first_helper')) {

    function first_helper()
    { 
       return 'Je suis la premiere fonction helper du package'; 
    }
 }

 if (! function_exists('second_helper')) {
    /**
     * Generate a secure linguist asset path for the application.
     *
     * @param $path
     * @return string
     */
    function second_helper()
    {
        return "Je suis la deuxieme fonction helper du package";
    }
}





