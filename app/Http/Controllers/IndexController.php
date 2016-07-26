<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class IndexController extends Controller {

  /**
   * GET /index
   */
  public function getIndex() {
    return view('index');
  }
}
