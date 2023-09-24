<?php

namespace App\Http\Controllers;

use App\Models\Images;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImageController extends Controller
{
    public function index($id)
    {
        $product = Product::with('images')->find($id);
        return view('admins.admin.product.imag',compact('product'));
    }

    public function imageUpload(Request $request): RedirectResponse
    {
        $request->validate([
            'image.*' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:5120',
        ]);
        DB::beginTransaction();
        $attribute = Images::create([]);
        //save translations
        $attribute->product_id = $request->producte_id;

        foreach ($request->image as $value) {
            $imageName = time().'_'.$value->getClientOriginalName();
            $value->move(public_path('images'),$imageName);
            $imageNams[] = $imageName;
        }
        $attribute->picture = $imageNams ;
        $attribute->save();
        DB::commit();
        return redirect()->back()->withSuccess('You have successfully upload image.')->with('image',$imageNams);
    }
}
