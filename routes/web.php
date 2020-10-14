<?php

use App\Http\Controllers\HydrationController;
use App\Http\Controllers\MouseShoulderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'MainController@index');
Route::get('/area-de-testes', 'AreaTesteController@index')->name('areateste');
Route::get('/area-de-testes/aim-trainer', 'aimTrainerView@index')->name('aimtrainerview');
Route::get('/conteudo/esports', 'EsportsController@index')->name('esports');
Route::get('/conteudo/eyestrain', 'EyestrainController@index')->name('eyestrain');
Route::get('/conteudo/tendonitis', 'TendonitisController@index')->name('tendonitis');
Route::get('/conteudo/headache', 'HeadacheController@index')->name('headache');
Route::get('/conteudo/mouseshoulder', 'MouseShoulderController@index')->name('mouseshoulder');
Route::get('/conteudo/mouseelbow','MouseElbowController@index')->name('mouseelbow');
Route::get('/conteudo/disfunction', 'DisfunctionController@index')->name('disfunction');
Route::get('/conteudo/syndrome', 'SyndromeController@index')->name('syndrome');
Route::get('/conteudo/tenosynovitis','TenosynovitisController@index')->name('tenosynovitis');

Route::get('/recomendacoes/sleep', 'SleepController@index')->name('sleep');
Route::get('/recomendacoes/lunch', 'LunchController@index')->name('lunch');
Route::get('/recomendacoes/hydration', 'HydrationController@index')->name('hydration');
Route::get('/recomendacoes/fatigue', 'FatigueController@index')->name('fatigue');
Route::get('/recomendacoes/posture', 'PostureController@index')->name('posture');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
