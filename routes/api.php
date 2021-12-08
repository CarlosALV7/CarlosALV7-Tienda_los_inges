<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

use App\Http\Controllers\API\UsuariosController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::resource('usuarios', UsuariosController::class);
Route::middleware('auth:sanctum')->group(function () { //Estas lineas sirven para que no cualquiera pueda hacer una petición//Solo una persona con token, hará la petición, de lo//contrario, no hará nada
    
});

Route::post('/sanctum/token', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
        'devicename' => 'required',
    ]);

    $user = Usuario::where('email', $request->email)->first();

    if (! $user || ! Hash::check($request->password, $user->password)) {
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }

    return $user->createToken($request->devicename)->plainTextToken;
});

Route::middleware('auth:sanctum')->get('/usuario', function (Request $request) {
    return $request->usuario();
});

Route::middleware('auth:sanctum')->get('/user/revoke', function (Request $request) {
    $user = $request -> user();
    $user -> tokens()->delete();
    return 'Los tokens han sido eliminados';
});


