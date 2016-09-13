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

  /**
   * GET /hundredjumps/latest
   */
  public function getHundredJumpsLatest() {
    $file = fopen("dl/hundredjumps/latest", "r") or die("unknown");
    $latest = fread($file, filesize("dl/hundredjumps/latest"));
    fclose($file);
    return $latest;
  }

  /**
   * GET /hundredjumps/latest/etc2
   */
  public function getHundredJumpsLatestETC2() {
    return response()->download("dl/hundredjumps/etc2/HundredJumps-armv7-es2.apk");
  }

  /**
   * GET /hundredjumps/latest/atc
   */
  public function getHundredJumpsLatestATC() {
    return response()->download("dl/hundredjumps/atc/HundredJumps-armv7-es2.apk");
  }
}
