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

// route to show the duck form

Route::get('/authtest', array('before' => 'auth.basic', function()
{
    return View::make('hello');
}));

Route::get('/ducks', function()
{
    return View::make('duck-form');
});

Route::group(array('prefix' => 'api/v1', 'before' => 'auth.basic'), function()
{
    Route::resource('url', 'UrlController');
});

// route to process the ducks form
Route::post('/ducks', function()
{

    // process the form here

    // Skapar validerande regler ----------
    $rules = array(
        'name'      => 'required',
    // bara en klassisk validering för ditt namn!
        'email'     => 'required|email|unique:ducks',
    // Ett krav samt ett unikt värde i "duck" tabellen
        'password'  => 'required',
        'password_confirm'  => 'required|same:password',
    // kräver lösenord som även måste matcha fälten
    );

    $validator = Validator::make(Input::all(), $rules);

    if ($validator->fails()) {

        // Felmeddelanden från validatorn
        $messages = $validator->messages();

        return Redirect::to('/ducks')
            -> withErrors($validator)
            -> withInput(Input::except('password', 'password_confirm'));

    } else {

        $duck = new Duck;
        $duck->name         = Input::get('name');
        $duck->email        = Input::get('email');
        $duck->password     = Hash::make(Input::get('password'));

        //spara våran anka
        $duck->save();

        //redirect -------------
        return Redirect::to('ducks');
    }

});

Route::get('/', 'HomeController@index');
Route::get("/search/{key}/{val}", "SearchController@index");
