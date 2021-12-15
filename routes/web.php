<?php

use App\Http\Livewire\Login\Login;
use App\Http\Livewire\Telefono\Index;
use App\Http\Livewire\Telefono\TelefonosCreate;
use App\Http\Livewire\Telefono\TelefonosDelete;
use App\Http\Livewire\Telefono\TelefonosEdit;
use App\Http\Livewire\Telefono\TelefonosMostrar;
use App\Http\Livewire\Usuario\UsuarioCreate;
use App\Http\Livewire\Usuario\UsuarioDelete;
use App\Http\Livewire\Usuario\UsuarioEdit;
use App\Http\Livewire\Usuario\UsuarioIndex;
use App\Http\Livewire\Usuario\UsuarioMostrar;
use App\Http\Livewire\Ventas\VentasCreate;
use App\Http\Livewire\Ventas\VentasDelete;
use App\Http\Livewire\Ventas\VentasEdit;
use App\Http\Livewire\Ventas\VentasIndex;
use App\Http\Livewire\Ventas\VentasMostrar;
use Illuminate\Support\Facades\Route;


//Rutas de la seccion login
Route::get('/login', Login::class)->name('login');

Route::group(['middleware' => 'auth'], function (){

    //Rutas de la seccion de telefonos
Route::get('/telefono', Index::class)->name('telefono.index');
Route::get('/telefono/create', TelefonosCreate::class)->name('telefono.create');
Route::get('/telefono/{telefono}/editar', TelefonosEdit::class)->name('telefono.edit');
Route::get('/telefono/{telefono}/eliminar', TelefonosDelete::class)->name('telefono.delete');
Route::get('/telefono/{telefono}/mostrar', TelefonosMostrar::class)->name('telefono.mostrar');


//Rutas de la seccion usuarios
Route::get('/usuario', UsuarioIndex::class)->name('usuario.index');
Route::get('/usuario/create', UsuarioCreate::class)->name('usuario.create');
Route::get('/usuario/{usuario}/edit', UsuarioEdit::class)->name('usuario.edit');
Route::get('/usuario/{usuario}/delete', UsuarioDelete::class)->name('usuario.delete');
Route::get('/usuario/{usuario}/mostrar', UsuarioMostrar::class)->name('usuario.mostrar');


//Rutas de la seccion de ventas
Route::get('/ventas', VentasIndex::class)->name('ventas');
Route::get('/ventas/create', VentasCreate::class)->name('ventas.create');
Route::get('/ventas/{venta}/mostrar', VentasMostrar::class)->name('ventas.mostrar');
Route::get('/ventas/{venta}/editar', VentasEdit::class)->name('ventas.editar');
Route::get('/ventas/{venta}/eliminar', VentasDelete::class)->name('ventas.eliminar');



});



