<?php


use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Http\Request;

use App\Http\Controllers\SettingsController;
use App\Http\Controllers\Login;
use App\Http\Controllers\GeneralMod;
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

Route::middleware('is_logged')->group(function () {
    Route::get('/admin', function () {
        $data['title'] = "Login";
        return view('auth/login', $data);
    })->name('/');
    Route::post('/login/action', [Login::class, 'loginAction']);
});



// Logout
Route::get('logout', function (Request $request) {
    $session = new Session();
    $session->clear();
    Redirect::to('/admin')->send();
})->name('logout');
// SWITCHER
Route::get('switcher', function () {
    $session = new Session();
    if (!empty($session->get('userdata')) && ($session->get('userdata')['in_usertype'] == 0)) {
        Redirect::to('admin/dash')->send();
    }
});

Route::prefix('admin/')->name('admin.')->middleware('admin_middleware')->group(function () {
    // DASH
    Route::get('dash', function () {
        $data['title'] = "Dashboard";
        $data['script_local'] = array("public/js/admin/dash.js");
        return view('admin.dash', $data);
    })->name('dash');

});
    Route::get('/dash', function () {
        $data['script_local'] = array("public/js/admin/dash.js?t=" . time(),);
        $data['title'] = "Dashboard";
        return view('admin.dash', $data);
    })->name('admin.dash');

// ADMIN PANEL CONFIG

//..... EDIT LABELS ...........

Route::get('/contents', function () {
    $data['title'] = "Edit Contents";
    $data['script_local'] = array("public/default/select2/select2.min.js", "public/js/admin/contents.js?t=" . time(),);
    return view('admin.contents', $data);
})->name('admin.contents');

Route::post('admin/contents/show', [SettingsController::class, 'contentsShow']);
Route::post('admin/contents/insert', [SettingsController::class, 'contentsInsert']);

// Edit Images......................

Route::get('/images', function () {
    $data['title'] = "Change Images";
    $data['script_local'] = array("public/default/ang_file/ng-file-upload-shim.min.js", "public/default/ang_file/ng-file-upload.min.js", "public/default/cropper/cropper.min.js?v=2", "public/default/select2/select2.min.js", "public/js/admin/images.js?t=".time(),);
    $data['css_local'] = array("public/default/cropper/cropper.min.css", "public/default/select2/select2.min.css");
    return view('admin.images', $data);
})->name('admin.images');

Route::post('admin/images/show', [SettingsController::class, 'imagesShow']);
Route::post('admin/images/insert', [SettingsController::class, 'imagesInsert']);




// .... THEME PAGES............


Route::get('/', [SettingsController::class, 'showHome'])->name('home');


Route::post('/image/general/upload', [SettingsController::class, 'generalImageUpload']);
