composer require laravel/socialite

composer require laravel/ui --dev

php artisan ui vue --auth

$table->string('email',191)->unique();
 set max key length 191 on users table

php artisan migrate

Then goto config/services.php & put >>

'github' => [
    'client_id' => 'GITHUB_CLIENT_ID',
    'client_secret' => 'GITHUB_CLIENT_SECRET',
    'redirect' => 'http://localhost:8000/login/facebook/callback',
],

create account & login & create new app here & use the 'client_id' & 'client_secret' from settings > basic

01. At the time to create new app, You've to define  'App Domains' you can give any like 'localhost' but this field is required

02. click '+Add Platform' & choose web or anything you need

03. must give the main or root url of your site {(Website ) Site URL} http://localhost:8000/

for twitter must use 127.0.0.1 instead of localhost 
http://127.0.0.1:8000

http://apps.twitter.com
https://developer.twitter.com
https://developers.facebook.com
https://console.developers.google.com
https://github.com/settings/applications/new

Then goto web.php & declare 2 routes

Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

Then goto login controller & use this by code & also import classes or packages

public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from Facebook.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();

        // return $user->name;
        // or save to database (conditionaly)
    }

If you use laravel 5.4 then you need to add this 2 lines but if you use laravel 5.5++ then you don't need this

'providers' => [    
Laravel\Socialite\SocialiteServiceProvider::class,
],

'aliases' => [
    'Socialite' => Laravel\Socialite\Facades\Socialite::class,
    ]