<?php

namespace App\Http\Controllers;

use App\Models\Health;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HealthController extends Controller
{
    //

    public function healthCheck(Request $request)
    {
        $db = null;
        $cache = true;
        $status = 200;

        try{
            DB::select('SELECT 1');
            $db = true;
        }
        catch(Exception $e)
        {
            $db = false;
            $status = 500;
        }

        $record = new Health();
        $record->db = true;
        $record->cache = true;
        $record->uuid = $request->header('X-Owner');
        $record->save();

        return response()->json([
            'db' => $db,
            'cache' => $cache
        ], $status);
    }
}
