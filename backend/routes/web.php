<?php

use App\Models\Venta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canRegister' => Features::enabled(Features::registration()),
    ]);
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get(
    'ventas',
    function(){
        return Inertia::render('NuevaVenta');
        /* return response()->json([
            'ventas'=>Venta::all()
            ]
        ); */
    }
);

Route::prefix('productos')->group(
    function(){
        Route::get('nuevo',
            function(){return Inertia::render('NuevoProducto');}
        );
        Route::post('guardar',
            function(Request $solicitud){
                return Inertia::render(
                    'NuevoProducto',
                    ['dato'=>$solicitud->producto]
                );
            }
        );
    }
);


require __DIR__.'/settings.php';
