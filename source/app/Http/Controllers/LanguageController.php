<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LanguageController extends Controller
{
  public function swap($locale)
  {
    if (!in_array($locale, ['en', 'kh'])) {
      abort(400);
    } else {
      session()->put('locale', $locale);
    }

    App::setLocale($locale);
    return redirect()->back();
  }
}
