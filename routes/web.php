<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| IMPORTANT: added the 'about' route strictly below. Do not reorder or
| delete the existing project routes — auth, the /api/v1 JWT routes,
| etc. — the real project keeps them elsewhere in this file.
|
| NOTE: any other link in this file must point to an EXISTING named
| route. We do not invent routes that are not in the repository.
*/

Route::get('/about', [AboutController::class, 'index'])->name('about');

/*
|--------------------------------------------------------------------------
| Language switcher
|--------------------------------------------------------------------------
| Switches the session locale and redirects back. The SetLocale middleware
| (app/Http/Middleware/SetLocale.php) then applies it to trans().
 */
Route::get('/lang/{locale}', function (string $locale) {
    if (in_array($locale, ['en', 'bn'], true)) {
        session(['locale' => $locale]);
    }

    $previous = url()->previous();

    return redirect()->to($previous ?: route('about'));
})->name('locale.switch');
