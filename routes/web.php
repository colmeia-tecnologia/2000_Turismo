<?php

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

Auth::routes();

/*
 * PAINEL
 */
Route::group([
                'domain' => 'painel.'.str_replace('http://','',env('APP_URL')),
                'namespace' => 'Painel',
                'middleware' => 'auth'
            ], function() 
{
    //Painel
    Route::get('/', 'PainelController@index');
    Route::resource('banners', 'BannerController');
    Route::resource('services', 'ServiceController');
    Route::resource('portfolios', 'PortfolioController');
    Route::resource('clients', 'ClientController');
    Route::resource('videos', 'VideoController');
    Route::resource('pages', 'PageController');
    Route::resource('product_categories', 'ProductCategoryController');
    Route::resource('product_subcategories', 'ProductSubcategoryController');
    Route::resource('users', 'UserController');
    
    //Blog
    Route::resource('post_categories', 'PostCategoryController');
    Route::resource('posts', 'PostController');


    //Validações Video
    Route::post('videos/verificaUrlCurta', 'VideoController@verifyShortenUrl')->name('videos.verificaUrlCurta');
    Route::post('videos/verificaUrlYoutubeValida', 'VideoController@verifyValidYoutubeUrl')->name('videos.verificaUrlYoutubeValida');
    Route::post('videos/obtemImagemYoutube', 'VideoController@getYoutubeThumb')->name('videos.obtemImagemYoutube');

    //Upload
    Route::get('upload', 'UploadController@index');
    Route::get('/upload/tinymce', 'UploadController@index');
    Route::post('upload/upload', 'UploadController@upload')->name('upload.upload');
    Route::get('upload/delete/{file}', 'UploadController@delete')->name('upload.delete');

    //Ativo/Inativo
    Route::post('/activate-inactivate', 'ActivateController@activateInactivate')->name('activate-inactivate');
});

Route::group([
    'namespace' => 'Site',
], function(){
    Route::get('/', 'HomeController@index')->name('index');
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/empresa', 'BusinessController@index')->name('empresa');
    Route::get('/catalogo', 'CatalogController@index')->name('catalogo');
    Route::get('/contato', 'ContactController@index')->name('contato');
    Route::post('/contato/envia', 'ContactController@send')->name('contato.send');
 
    route::get('/pagina/{title}', 'PageController@index')->name('pagina');
});

