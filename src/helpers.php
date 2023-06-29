<?php

if (! function_exists('first_helper')) {

    function first_helper()
    { 
       return "I'm the first helper function of the package"; 
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
        return "I'm the second helper function of the package";
    }
}





