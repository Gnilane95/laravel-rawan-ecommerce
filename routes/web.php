<?php

use App\Http\Livewire\BlogComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\HomeComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\BijouxComponent;
use App\Http\Controllers\ProfileController;
use App\Http\Livewire\AbayasHommeComponent;
use App\Http\Livewire\VetementFemmeComponent;
use App\Http\Livewire\Bijoux\ArgentsComponent;
use App\Http\Livewire\VetementEnfantComponent;
use App\Http\Livewire\Bijoux\AciersInoxComponent;
use App\Http\Livewire\Bijoux\BijouxPersoComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\VetFemme\PullsHautsComponent;
use App\Http\Livewire\VetFemme\RobesJupesComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\VetFemme\AbayasFemmeComponent;
use App\Http\Livewire\VetFemme\PantalonsJeansComponent;
use App\Http\Livewire\VetFemme\VestesManteauxComponent;
use App\Http\Livewire\VetFemme\EnsemblesCombinaisonsComponent;

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

Route::get('/', HomeComponent::class)->name('home');
Route::get('/bijoux', BijouxComponent::class)->name('bijoux.index');
Route::get('/aciers-ynoxidables', AciersInoxComponent::class)->name('aciers-ynox.index');
Route::get('/argents', ArgentsComponent::class)->name('argents.index');
Route::get('/bijoux-personalises', BijouxPersoComponent::class)->name('bijoux-perso.index');
Route::get('/vetements-femme', VetementFemmeComponent::class)->name('vetements-femme.index');
Route::get('/robes-jupes', RobesJupesComponent::class)->name('robes-jupes.index');
Route::get('/pulls-hauts', PullsHautsComponent::class)->name('pulls-hauts.index');
Route::get('/ensembles-combinaisons', EnsemblesCombinaisonsComponent::class)->name('ensembles-combinaisons.index');
Route::get('/pantalons-jeans', PantalonsJeansComponent::class)->name('pantalons-jeans.index');
Route::get('/vestes-manteaux', VestesManteauxComponent::class)->name('vestes-manteaux.index');
Route::get('/abayas-femme', AbayasFemmeComponent::class)->name('abayas-femme.index');
Route::get('/abayas-homme', AbayasHommeComponent::class)->name('abayas-homme.index');
Route::get('/vetements-enfant', VetementEnfantComponent::class)->name('vetements-enfant.index');
Route::get('/blog', BlogComponent::class)->name('blog.index');
Route::get('/cart', CartComponent::class)->name('cart.index');
Route::get('/checkout', CheckoutComponent::class)->name('checkout.index');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/user-dashboard', UserDashboardComponent::class)->name('user.dashboard');
    Route::get('/checkout', CheckoutComponent::class)->name('checkout.index');
});

Route::middleware('auth','authadmin')->group(function () {
    Route::get('/admin-dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
});

require __DIR__.'/auth.php';
