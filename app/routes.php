<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{

	
 $content = file_get_contents('http://es.fifa.com/classicfootball/news/rss.xml');
     $flux = new SimpleXmlElement($content);
    return View::make('layouts.index')->with("flux",$flux);
  

	
});
