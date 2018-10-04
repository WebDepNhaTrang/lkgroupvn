<?php
/*
 * @select: string
 * @order_col: string
 * @order_by: asc/desc
 * @cate_id: number
 */
if(! function_exists('getMenuCoffeeByCateId')){
    function getMenuCoffeeByCateId($select='*', $order_col, $order_by="asc", $cate_id=1){
        $item = App\MenuLkcoffee::select($select)
                ->where('cate_id', $cate_id)
                ->orderBy($order_col, $order_by)
                ->get();
        return $item;
    }
}

/*
 * @select: string
 * @order_col: string
 * @order_by: asc/desc
 * @limit: number
 */
if(! function_exists('getMaximCoffee')){
    function getMaximCoffee($select='*', $order_col, $order_by="asc", $limit=4){
        $item = App\MaximCoffee::select($select)
                ->orderBy($order_col, $order_by)
                ->limit($limit)
                ->get();
        return $item;
    }
}

/*
 * @select: string
 * @order_col: string
 * @order_by: asc/desc
 * @limit: number
 */
if(! function_exists('getBlogCoffee')){
    function getBlogCoffee($select='*', $order_col, $order_by="asc", $limit=2){
        $item = App\BlogCoffee::select($select)
                ->orderBy($order_col, $order_by)
                ->limit($limit)
                ->get();
        return $item;
    }
}

/*
 * @star: number
 * 
 */
if(! function_exists('renderStar')){
    function renderStar($star){
        $html = '';
        if($star > 0 && $star < 6){
            for( $i=1; $i<=$star; $i++ ){
                $html .= '<i class="fa fa-star checked"></i>';
            }
            for( $j=6-$i; $j>0; $j-- ){
                $html .= '<i class="fa fa-star"></i>';
            }
        }else{
            $html = '';
        }
        return $html;
    }
}

/*
 * @slug: string
 * 
 */
if(! function_exists('getGalleryBySlug')){
    function getGalleryBySlug($slug){
        $item = App\Gallery::select('*')
                ->where('slug', $slug)
                ->first();
        return $item;
    }
}

/*
 * @slug: string
 * 
 */
if(! function_exists('getAllGalleries')){
    function getAllGalleries(){
        $item = App\Gallery::all();
        return $item;
    }
}

