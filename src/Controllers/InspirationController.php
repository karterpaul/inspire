<?php
namespace Karterpaul\Inspire\Controllers;

use Illuminate\Http\Request;
use Karterpaul\Inspire\Inspire;

class InspirationController
{
     public function __invoke(Inspire $inspire) {
        $quote = $inspire->justDoIt();
        return view('inspire::index', compact('quote'));
        //return $quote;
    }

     /*
     public function index(Inspire $inspire) {
        $quote = $inspire->justDoIt();

        return $quote;
     }
      */

}
