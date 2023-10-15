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
	return View::make('index');
	//return View::make('hello');
});

Route::get('/chi_siamo', function()
{
	return View::make('chisiamo');	
});

Route::get('/dove_siamo', function()
{
	return View::make('dovesiamo');	
});

Route::get('/home', function()
{
	return View::make('index');	
});

Route::get('/contatti', function()
{
	return View::make('contatti');	
});

Route::get('/impianti_idraulici', function()
{
	return View::make('idraulica');	
});

Route::get('/impianti_elettrici', function()
{
	return View::make('elettrica');	
});

Route::get('/impianti_termoidraulici', function()
{
	return View::make('termo');	
});

Route::get('/automatismi_cancelli_serrande_sbarre', function()
{
	return View::make('automatismi');	
});

Route::get('/telecamere_videosorveglianza', function()
{
	return View::make('telecamere');	
});

Route::get('/impianti_allarme', function()
{
	return View::make('allarme');	
});

Route::get('/fotovoltaico_solare_termico', function()
{
	return View::make('fotovoltaico');	
});

Route::get('/carpenteria_acciaio_inox', function()
{
	return View::make('carpenteria');	
});
