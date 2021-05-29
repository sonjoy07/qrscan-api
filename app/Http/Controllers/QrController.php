<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Qr;

class QrController extends Controller
{
    public function qrCheck(Request $request)
    {
        $input = $request->input();
        // dd($input);
        $qr_data = $input['qr_data'];

        $qr_info = Qr::where('item_barcode', $qr_data)->get()->first();
        if (!empty($qr_info)) {
            return response()->json([
                'data' => $qr_info,
                'status' => true
            ]);
        }else{
            return response()->json([
                'data' => 'No Data Found',
                'status' => false
            ]);
        }
    }
}
