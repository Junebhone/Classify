<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSubCategoryRequest;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sub_categories = SubCategory::paginate(12);

        return view('admin.subcategories.index', compact('sub_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.subcategories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubCategoryRequest $request)
    {
        if (Storage::exists('public/temp/' . $request->image)) {
            Storage::move('public/temp/' . $request->image, 'public/subcategories/' . Str::remove('tmp-', $request->image));
        }
        SubCategory::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'category_id' => $request->category_id,
            'image' => Str::remove('tmp-', $request->image)
        ]);


        return redirect()->route('admin.subcategories.index')->with('noti', ["icon" => "success", "title" => "SubCategory Successfully Created"]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $sub_category = SubCategory::find($id);
        return view('admin.subcategories.edit', compact('sub_category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sub_category = SubCategory::find($id);
        $sub_category->name = $request->name;
        $sub_category->slug = Str::slug($request->name);
        $sub_category->category_id = $request->category_id;
        if ($request->image) {
            if (Storage::exists('public/temp/' . $request->image)) {
                Storage::move('public/temp/' . $request->image, 'public/subcategories/' . Str::remove('tmp-', $request->image));
                $sub_category->image = Str::remove('tmp-', $request->image);
            }
        }
        $sub_category->update();
        return redirect()->route('admin.subcategories.index')->with('noti', ["icon" => "success", "title" => "SubCategory Successfully Edited"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sub_category = SubCategory::find($id);
        $sub_category->delete();


        return redirect()->route('admin.subcategories.index')->with('noti', ["icon" => "success", "title" => "SubCategory Successfully Edited"]);
    }
}
