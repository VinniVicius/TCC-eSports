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
// Home Page
Route::get('/', 'MainController@index');

// Test Area
Route::get('/area-de-testes', 'AreaTesteController@index')->name('areateste');
Route::get('/area-de-testes/treino-de-mira', 'aimTrainerView@index')->name('aimtrainerview');
Route::post('/area-de-testes/treino-de-mira', 'aimTrainerView@store');
Route::get('/area-de-testes/tempo-de-reação', 'reactionTimeController@index')->name('reactionview');
Route::post('/area-de-testes/tempo-de-reação', 'reactionTimeController@store');

// Content Page
Route::get('/conteudo/esports', 'EsportsController@index')->name('esports');
Route::get('/conteudo/fadiga-ocular', 'EyestrainController@index')->name('eyestrain');
Route::get('/conteudo/tendinite', 'TendonitisController@index')->name('tendonitis');
Route::get('/conteudo/dor-de-cabeca', 'HeadacheController@index')->name('headache');
Route::get('/conteudo/ombro-do-mouse', 'MouseShoulderController@index')->name('mouseshoulder');
Route::get('/conteudo/cotovelo-do-mouse','MouseElbowController@index')->name('mouseelbow');
Route::get('/conteudo/disfuncao-da-articulacao-sacroiliaca', 'DisfunctionController@index')->name('disfunction');
Route::get('/conteudo/sindrome-cruzada-superior', 'SyndromeController@index')->name('syndrome');
Route::get('/conteudo/tenossinovite-estenosante','TenosynovitisController@index')->name('tenosynovitis');

// Recommendation Page
Route::get('/recomendacoes/habitos-de-sono', 'SleepController@index')->name('sleep');
Route::get('/recomendacoes/alimetacao', 'LunchController@index')->name('lunch');
Route::get('/recomendacoes/hidratacao', 'HydrationController@index')->name('hydration');
Route::get('/recomendacoes/fatiga-do-sono', 'FatigueController@index')->name('fatigue');
Route::get('/recomendacoes/postura', 'PostureController@index')->name('posture');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
