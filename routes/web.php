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
use Illuminate\Http\Request;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function () {
    return "hello";
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/test', 'TestController@index')->name('test');


Route::get('/redirect',function(){
    $query=http_build_query([
        'client_id' => 3,
        'redirect_uri' => 'http://laravelnetv.app/callback',
        'response_type' => 'code',
        'scope' => '',
    ]);
    return redirect('http://laravelnetv.app/oauth/authorize?'.$query);
});

Route::get('/callback',function(Request $request){
   // var_dump($request);

    $http=new GuzzleHttp\Client();
    $result= $http->post('http://laravelnetv.app/oauth/token',[
        'form_params'=>[
            'grant_type' => 'authorization_code',
            'client_id' => 3,
            'client_secret' => '2q6uxpQGnqeUdGgmXbicfcJNJgl1v7EyM1tBXLwy',
            'redirect_uri' => 'http://laravelnetv.app/callback',
            'code' => $request->code,
        ],
    ]);
    return json_decode((string)$result->getBody(),true);

});

Route::get('/pwdcli',function (){
    $http = new GuzzleHttp\Client;
    $response = $http->post('http://laravelnetv.app/oauth/token', [
        'form_params' => [
            'grant_type' => 'password',
            'client_id' => 4,
            'client_secret' => 'sJSzwPFD08z8GoGkosgqJTWHGxLKty74dk505yoM',
            'username' => '362296660@qq.com',
            'password' => '58451201314',
            'scope' => '',
        ],
    ]);
    return json_decode((string)$response->getBody(),true);
});