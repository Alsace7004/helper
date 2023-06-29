<?php




use Illuminate\Support\Facades\Route;
use Alsace\Helper\Controllers\HelperController;

Route::get('helper',[HelperController::class,'index']);


?>