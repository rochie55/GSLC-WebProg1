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

/*( Route::get('/', function () {
    return view('welcome');
}); */

/* Route::get('/', function () {
    return view('navbar');
}); */

Route::get('/', function () {
    $herotype = ['DPS','Support','Tank'];
    $heroimage = ['https://images.blz-contentstack.com/v3/assets/blt2477dcaf4ebd440c/blt2ffbd1e3f3d91182/633905b7b8dbde69f5279908/GENJI_Shuriken.jpg','https://cdn.mos.cms.futurecdn.net/r5oRcsMoYK26dDbywxwrAA.jpg','https://www.gamespot.com/a/uploads/original/1727/17277836/4049523-overwatch-2-reinhardt.jpg'];
    $heroname = ['Wibu','Kiriko','Reinhardt'];
    $herodesc = ['Wibu is a CyberNinja. He flings precise and deadly Shuriken at his targets, and uses his wakizashi to deflect projectiles or delivers a Swift Strike with his technologically-advanced "dragonblade" that cuts down enemies.','Kiriko is a ninja healer who is aided by her kitsune spirit. She can throw protection suzu to her allies, or kunai against her enemies.','Clad in powered armor and swinging his hammer, Reinhardt leads a rocket-propelled charge across the battleground and defends his squadmates with a massive energy barrier.'];
    return view('display')
    ->with('type',$herotype)
    ->with('img',$heroimage)
    ->with('name',$heroname)
    ->with('desc',$herodesc);
});
