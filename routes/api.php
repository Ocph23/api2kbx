<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegionalController;
use App\Models\Penjualan;
use App\Models\Regional;
use App\Models\Kanwil;
use App\Models\Tracking;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::post('login', [AuthController::class, "login"]);
Route::post('register', [AuthController::class, "register"]);
Route::post('logout', [AuthController::class, "logout"]);
Route::post('refresh', [AuthController::class, "refresh"]);


Route::get('regional', [RegionalController::class, "index"]);


Route::get('regional/withkanwil', function () {
    // If the Content-Type and Accept headers are set to 'application/json', 
    // this will return a JSON structure. This will be cleaned up later.
    $regional = Regional::all();
    foreach ($regional as $key => $value) {
        $value['items'] = $value->kanwils;
    }

    return $regional;
});

Route::get('regional/{id}', function ($id) {
    $result = Regional::find($id);
    $result->kanwils;
    return $result;
});


Route::get('regional/kanwil/{id}', function ($id) {
    return Regional::find($id)->kanwils;
});

Route::post('regional', function (Request $request) {
    return Regional::create($request->all());
});


Route::put('regional/{id}', function (Request $request, $id) {
    $Regional = Regional::findOrFail($id);
    $Regional->update($request->all());

    return $Regional;
});

Route::delete('regional/{id}', function ($id) {
    Regional::find($id)->delete();
    return 204;
});



Route::get('kanwil', function () {
    // If the Content-Type and Accept headers are set to 'application/json', 
    // this will return a JSON structure. This will be cleaned up later.
    return Kanwil::all();
});

Route::get('kanwil/{id}', function ($id) {
    return Kanwil::find($id);
});

Route::post('kanwil', function (Request $request) {
    $model = $request->all();
    return Kanwil::create($model);
});

Route::put('kanwil/{id}', function (Request $request, $id) {
    $kanwil = Kanwil::findOrFail($id);
    $kanwil->update($request->all());
    return $kanwil;
});

Route::delete('kanwil/{id}', function ($id) {
    Kanwil::find($id)->delete();
    return 204;
});

Route::get('penjualan', function () {
    return Penjualan::all();
});

Route::get('penjualan/{id}', function ($id) {
    return Penjualan::find($id);
});

Route::get('penjualan/stt/{id}', function ($id) {
    $penjualan = Penjualan::where('stt', $id)->first();
    $penjualan['tracking'] = $penjualan->trackings;
    return $penjualan;
});

Route::get('penjualan/tracking/{id}', function ($id) {
    $result = Penjualan::find($id);
    $result->trackings;
    return $result;
});



Route::get('penjualan/date/{month}/{year}', function ($month, $year) {
    $result = Penjualan::whereMonth('tanggal', $month)
    ->whereYear('tanggal', $year)
    ->get();
    return $result;
});

Route::post('penjualan', function (Request $request) {
    $model = $request->all();
    $model['tanggal'] = date('Y-m-d H:i:s', strtotime($model['tanggal']));
    return Penjualan::create($model);
});

Route::put('penjualan/{id}', function (Request $request, $id) {
    $penjualan = Penjualan::findOrFail($id);
    $model = $request->all();
    $model['tanggal'] = date('Y-m-d H:i:s', strtotime($model['tanggal']));
    $penjualan->update($model);
    return $penjualan;
});

Route::delete('penjualan/{id}', function ($id) {
    Penjualan::find($id)->delete();
    return 204;
});


Route::get('tracking', function () {
    // If the Content-Type and Accept headers are set to 'application/json', 
    // this will return a JSON structure. This will be cleaned up later.
    return Tracking::all();
});

Route::get('tracking/{id}', function ($id) {
    return Tracking::find($id);
});

Route::post('tracking', function (Request $request) {
    $model = $request->all();
    $model['tanggal'] = date('Y-m-d H:i:s', strtotime($model['tanggal']));
    return Tracking::create($model);
});

Route::put('tracking/{id}', function (Request $request, $id) {
    $tracking = Tracking::findOrFail($id);
    $tracking->update($request->all());

    return $tracking;
});

Route::delete('tracking/{id}', function ($id) {
    Tracking::find($id)->delete();
    return 204;
});