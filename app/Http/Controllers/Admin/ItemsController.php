<?php

namespace App\Http\Controllers\Admin;

use App\Categories;
use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Items;
use App\Http\Requests\CreateItemsRequest;
use App\Http\Requests\UpdateItemsRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\FileUploadTrait;


class ItemsController extends Controller {

	/**
	 * Display a listing of items
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $items = Items::all();

		return view('admin.items.index', compact('items'));
	}

	/**
	 * Show the form for creating a new items
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    $categories = Categories::all();
	    
	    return view('admin.items.create', compact('categories'));
	}

	/**
	 * Store a newly created items in storage.
	 *
     * @param CreateItemsRequest|Request $request
	 */
	public function store(CreateItemsRequest $request)
	{
	    $request = $this->saveFiles($request);

	    $item = new Items();
	    $item->title = $request['title'];
	    $item->description = $request['description'];
	    $item->image = $request['image'];
	    $item->category_id = $request['category_id'];



	    $item->save();

        $category = Categories::find($request['category_id']);

        $item->category($category);

		//Items::create($request->all());

		return redirect()->route(config('quickadmin.route').'.items.index');
	}

	/**
	 * Show the form for editing the specified items.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$items = Items::find($id);
        $categories = Categories::all();
	    
	    
		return view('admin.items.edit', compact('items'))->with('categories', $categories);
	}

	/**
	 * Update the specified items in storage.
     * @param UpdateItemsRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateItemsRequest $request)
	{
		$item = Items::findOrFail($id);

        $request = $this->saveFiles($request);

        $item->title = $request['title'];
        $item->description = $request['description'];
        $item->image = $request['image'];
        $item->category_id = $request['category_id'];



        $item->save();

        $category = Categories::find($request['category_id']);

        $item->category($category);


		return redirect()->route(config('quickadmin.route').'.items.index');
	}

	/**
	 * Remove the specified items from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Items::destroy($id);

		return redirect()->route(config('quickadmin.route').'.items.index');
	}

    /**
     * Mass delete function from index page
     * @param Request $request
     *
     * @return mixed
     */
    public function massDelete(Request $request)
    {
        if ($request->get('toDelete') != 'mass') {
            $toDelete = json_decode($request->get('toDelete'));
            Items::destroy($toDelete);
        } else {
            Items::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.items.index');
    }

}
