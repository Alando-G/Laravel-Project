<?php

use App\Http\Controllers\SweetsController;
use App\Http\Controllers\RegisterController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',function(){
    return view('home');
});

Route::get('/hello',function (){
    $username="bob";
    return view('hello')->with("username",$username);
});


Route::get("/menu",[SweetsController::class,'index']);


Route::get("/sweet",[SweetsController::class,'index']);



Route::get('/about',function(){
    $sweet ="ksl";
    $shoppingCart=["snickers","ksl","Patco"];
    $clients= ["kyle","candice","greg","rina","kimunto"];
    
    return view('aboutus')->with(compact('sweet','shoppingCart','clients'));
});



Route::get('/more',function(){
    return view('more');
});

Route::get('/register',function(){
    return view('register');
});

Route::get('/login',function(){
    return view('login');
});

Route::post('/auth-register',[RegisterController::class,'store']);














































// create_sweets_table


// Database 

// migration 
// -- a version control for our db 
// Chris, Ryan, Kim and me 
// track db changes
// creating maniputlate our db
//  adds columns adds rows and rename tables
// make file
// add column for price to my sweets 
//  runs sql on my db to create that change (INSERT INTO users ("price"))
// run migrations --all columns and tables 


// model
// representation of our table as code 
// it allows us to manipulate our DB using code      (data using OOP (Object Orientd Programming))

// less complicated SQL
// keep our DB secure, by reducing the number of executions in the actual DB.
// It give you more flexibility as developer, you can experiment before you queries.
// Code is scalable, reliable, flexible and easier to maintain.

// php artisan make:model "NameOfModel"

// snake_case
    // floor --> lowercase  
// CamelCase 
    // humps -> new words are capitalized 
    // SweetsModel






// controller
// logic of our application
// manipulte Models Create, Read, Update and Delete (CRUD)
// when CRUD, methods index, create, store, update, destroy
// specific to models or to functionality. 
//  eg 
//      SweetsController
//      BranchesController -> Branch -> create_branches_table

//  Resource Controller do all Functions : CRUD 

// php artisan make:controller ControllerName

// migration - models - Controllers


// Seeder 
// Allows us to create dummy data for a  table, so our table is not empty.
// Sweets: 1/more values.
// php artisan make:seeder SweetsSeeder
// fill in our database with our own values.





// Factory
