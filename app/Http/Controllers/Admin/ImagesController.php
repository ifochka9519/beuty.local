<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Items;
use Redirect;
use Schema;
use App\Images;
use App\Http\Requests\CreateImagesRequest;
use App\Http\Requests\UpdateImagesRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\FileUploadTrait;


class ImagesController extends Controller {

	/**
	 * Display a listing of images
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $images = Images::all();

		return view('admin.images.index', compact('images'));
	}

	/**
	 * Show the form for creating a new images
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
        $items = Items:: all();
	    
	    return view('admin.images.create', compact('items'));
	}

	/**
	 * Store a newly created images in storage.
	 *
     * @param CreateImagesRequest|Request $request
	 */
	public function store(CreateImagesRequest $request)
	{
	    $request = $this->saveFiles($request);

        $image = new Images();
        $image->image = $request['image'];
        $image->item_id = $request['item_id'];



        $image->save();

        $item = Items::find($request['item_id']);

        $image->item($item);

		return redirect()->route(config('quickadmin.route').'.images.index');
	}

	/**
	 * Show the form for editing the specified images.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$images = Images::find($id);
	    
	    
		return view('admin.images.edit', compact('images'));
	}

	/**
	 * Update the specified images in storage.
     * @param UpdateImagesRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateImagesRequest $request)
	{
		$images = Images::findOrFail($id);

        $request = $this->saveFiles($request);

		$images->update($request->all());

		return redirect()->route(config('quickadmin.route').'.images.index');
	}

	/**
	 * Remove the specified images from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Images::destroy($id);

		return redirect()->route(config('quickadmin.route').'.images.index');
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
            Images::destroy($toDelete);
        } else {
            Images::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.images.index');
    }

}
