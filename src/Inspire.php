<?php
namespace Karterpaul\Inspire;

use Illuminate\Support\Facades\Http;
use Log;

class Inspire {
    public function justDoIt() {
        $response = Http::get('https://zenquotes.io/api/today');
 
        return $response[0]['q'] . ' -' . $response[0]['a'];
    }
}
?>
