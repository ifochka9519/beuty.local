<?php

namespace App\Http\Controllers;

use App\Images;
use App\Item;
use App\Items;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\Null_;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::where('deleted_at', NULL)->get();

        /*foreach ($items as $item){

            $item->description = str::limit($item->description,  25);
        }*/

        return view('index')->with('items', $items);
    }

    public function mix()
    {
        $items = Item::where('deleted_at', NULL)->where('category_id','4')->get();

        return view('pricing')->with('items', $items);
    }

    public function necklace()
    {
        $items = Item::where('deleted_at', NULL)->where('category_id','1')->get();

        return view('pricing')->with('items', $items);
    }

    public function earrings()
    {
        $items = Item::where('deleted_at', NULL)->where('category_id','2')->get();

        return view('pricing')->with('items', $items);
    }

    public function bracelets()
    {
        $items = Item::where('deleted_at', NULL)->where('category_id','3')->get();

        return view('pricing')->with('items', $items);
    }

    public function item(Request $request)
    {
        $id = $request['id'];
        $item = Items::find($id);
        $images = Images::where('item_id', $id)->get();
        return view('item')->with(['images'=> $images, 'item'=> $item]);
    }
}
