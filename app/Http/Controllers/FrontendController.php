<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use Voyager;

class FrontendController extends Controller
{
    public function getGalleryBySlug(Request $request){
        if ($request->ajax()) {
            $item = Gallery::select('*')
                ->where('slug', $request->slug)
                ->first();
            if($item->gallery){
                $gallery = json_decode($item->gallery);
                foreach($gallery as $k => $v){
                    $gallery[$k] = Voyager::image($v);
                }
            }
            
            return response()->json([
                'status' => true,
                'data'   => $gallery
            ]);
		}
    }
}