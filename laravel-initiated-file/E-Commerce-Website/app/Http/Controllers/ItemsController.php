<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\ItemImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ItemsController extends Controller
{
    public function index()
    {

        $items = Item::all();

        return view('items.index', ['items' => $items]);
    }

    public function create()
    {
        return view('items.create');
    }



    public function store()
    {

        request()->validate([
            'image' => 'required',
            'name' => 'required',
            'in_stock' => 'required',
            'brand' => 'required',
            'price' => 'required',

        ]);


        $filename = null;
        if (request()->file('image')) {
            $file = request()->file('image');
            $filename = date('Ymdhi') . $file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);
        }


        Item::create([
            'image' =>$filename,
            'name' => request('name'),
            'in_stock' => request('in_stock'),
            'brands' => request('brand'),
            'price' => request('price'),

        ]);

        return redirect()->route('indexitem');
    }



    public function edit(Item $item)
    {
        return view('items.edit', ['item' => $item]);
    }


    public function update(Item $item)
    {
        request()->validate([
            'image' => 'required',
            'name' => 'required',
            'in_stock' => 'required',
            'brand' => 'required',
            'price' => 'required',

        ]);
        $filename = $item->image;
        if (request()->file('image')) {
            $file = request()->file('image');
            $filename = date('Ymdhi') . $file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);
        }

        $item->update([

            'image' => $filename,
            'name' => request('name'),
            'in_stock' => request('in_stock'),
            'brand' => request('brand'),
            'price' => request('price'),





        ]);

        return redirect()->route('indexitem');
    }



    public function destroy(Item $item)
    {
        // $filename = $item->image;

        // $path = public_path('public/Image');
        // $files = File::allFiles($path);
        // $image_stored = \File::allFiles(public_path('public/Image'));
        // File::delete(public_path('public/Image/{{$item->image}}'));
        $item->delete();
        unlink('public/Image/'.$item->image);
        // $image_stored->$item->delete();
        return redirect()->route('indexitem');
    }






    public function uploadImage(Request $request, $item_id)
    {

        $data = new ItemImage();
        $data['item_id'] = $item_id;
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('Ymdhi') . $file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);
            $data['image'] = $filename;
        }
        $data->save();
        return redirect()->route('indexitem');
    }
}
