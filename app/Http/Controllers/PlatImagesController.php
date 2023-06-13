<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PlatImage;

class PlatImagesController extends Controller
{
    public function getplatbyidimages($plat_id)
    {

        $plans = PlatImage::where('plat_id', $plat_id)->get();
        return response()->json([
            'status' => 200,
            'images' => $plans,
        ]);
    }
}
