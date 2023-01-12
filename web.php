<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get(
    '/greeting_page/{name}',
    static function (string $name): string {
        return "
        <!DOCTYPE HTML>
        <html>
            <head>
                <meta charset='utf-8'>
                <title>This greeting page users</title>
                <style type='text/css'>
                    body {
                        margin: 0;
                        padding: 0;
                        background-color:cyan;
                    }
                    div { 
                        display: flex;
                        justify-content: center;
                        font-size: 120%;
                        font-family: Verdana, Arial, Helvetica, sans-serif; 
                        color: #333366;
                    }
                    h1{
                        font-size: 100%;
                        font-family: Verdana, Arial, Helvetica, sans-serif; 
                        color: #333366;
                    }
                </style>
            </head> 
            <body>
                <div>
                    <h1>Hello, {$name}!</h1>
                </div>
                <div>This first page for first lesson 'Deep immersion in Laravel'</div>
                
            </body>
        </html>";
    }
);

Route::get(
    '/information_page',
    static function (): string {
        return "
        <!DOCTYPE HTML>
        <html>
            <head>
                <meta charset='utf-8'>
                <title>Page greeting user</title>
                <style type='text/css'>
                    body {
                        margin: 0;
                        padding: 0;
                        background-color:cyan;
                    }
                    div { 
                        display: flex;
                        justify-content: center;
                        font-size: 120%;
                        font-family: Verdana, Arial, Helvetica, sans-serif; 
                        color: #333366;
                    }
                    h1{
                        font-size: 100%;
                        font-family: Verdana, Arial, Helvetica, sans-serif; 
                        color: #333366;
                    }
                </style>
            </head> 
            <body>
                <div>
                    <h1>Это страница с информацией о проекте.</h1>
                </div>
                <div>
                    В рамках домашенго задания первого урока - изучения фреймофрка Laravel, <br>
                    нам необходимо было установить рабочее окружение (Docker + Laravel)  <br>
                    Текущая информация подтверждает готовность домашенего задаяния.        
                </div>  
            </body>
        </html>";
    }
);

Route::get(
    '/news',
    static function (): string {
        return "
        <!DOCTYPE HTML>
        <html>
            <head>
                <meta charset='utf-8'>
                <title>Page greeting user</title>
                <style type='text/css'>
                    body {
                        margin: 0;
                        padding: 0;
                        background-color:cyan;
                    }
                    div { 
                        display: flex;
                        justify-content: center;
                        font-size: 120%;
                        font-family: Verdana, Arial, Helvetica, sans-serif; 
                        color: #333366;
                    }
                    h1{
                        font-size: 100%;
                        font-family: Verdana, Arial, Helvetica, sans-serif; 
                        color: #333366;
                    }
                </style>
            </head> 
            <body>
                <div>
                    <h2>Новостная страница.</h2>
                </div>
                <div>
                    <h1>Названы самые популярные у россиян в 2020 году породы кошек</h1>      
                </div> 
                <div>
                Самыми популярными в этом году породами кошек у россиян стали мейн-куны, британские и сибирские. 
                </div>    
            </body>
        </html>";
    }
);

