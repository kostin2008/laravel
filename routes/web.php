<?php

use Faker\Provider\Lorem;
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

Route::get('/name/{name}', function (string $name): string {
    return "Привет, {$name} !!!";
});

$title = 'Страница c информацией о проекте';
$text = 'Информацией о проекте!';
$content = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium, deserunt numquam sunt error veniam, illo ad cumque, voluptatem molestiae rem veritatis delectus ea aliquam quis earum dicta porro ab vel omnis quod sapiente iusto vero iure magnam? Reprehenderit iusto animi eius beatae unde fugiat libero, quae, adipisci laborum hic perspiciatis et! Neque temporibus sunt harum, voluptatum nam expedita fugit provident blanditiis dolorum. Nulla commodi deserunt voluptatibus suscipit magni dolor possimus nisi, rem optio maxime officia debitis voluptas, sed ut illum voluptatum dolorum hic. Nam iusto soluta, voluptates error tempore iure dicta consequatur eligendi sed nemo, labore distinctio, quas dolor? Explicabo possimus libero quam dolorum id illum corrupti eveniet ratione impedit enim cumque similique ad provident vitae eaque a dignissimos, soluta nostrum. Tempore neque commodi illo aperiam recusandae nulla aliquid distinctio repellat reiciendis, inventore blanditiis sunt numquam alias suscipit sapiente, quod nam? Maiores odit dolorem, exercitationem, ut iure alias quaerat quam provident odio expedita id reiciendis earum commodi! Nostrum perspiciatis nesciunt quo possimus autem voluptas eum amet molestias veniam impedit sunt, illum itaque voluptatem quod, corporis excepturi quam tempore facere quibusdam voluptate ipsum necessitatibus delectus omnis repellat. Culpa sed magni est sint, eum iure maiores quae enim nihil. Aliquid incidunt dolores sequi, aut voluptates possimus atque id recusandae iusto quod, culpa voluptate placeat! Quo, animi minus, incidunt porro sit recusandae possimus sed eos non molestiae tenetur ratione architecto? Magnam quasi labore sit inventore, tempore suscipit in laudantium praesentium ea repudiandae? Magni, enim similique beatae necessitatibus voluptas placeat minima soluta sed vero in dolorem libero sit veritatis totam aperiam illo esse quos eveniet commodi inventore. Pariatur consectetur cumque explicabo illum quas asperiores culpa officiis libero illo consequuntur hic sequi consequatur esse eos optio praesentium qui cupiditate numquam et, corporis quaerat repudiandae quisquam? Commodi, accusantium ipsa fuga minus repellat officiis ut porro architecto!";


Route::get('/info', function() use ($title, $text, $content){


    return <<<php

        <!doctype html>
        <html lang="en">
        <head>
        <meta charset="UTF-8">
        <title>$title</title>
        </head>

        <body>
        <h1>$text</h1>
        <p>$content</p>
        </body>
        </html>
    php;

});