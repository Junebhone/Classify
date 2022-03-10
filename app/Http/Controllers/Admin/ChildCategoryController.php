<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ChildCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ChildCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $child_categories = ChildCategory::paginate(2);
        return view('admin.childcategories.index', compact('child_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.childcategories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Storage::exists('public/temp/' . $request->image)) {
            Storage::move('public/temp/' . $request->image, 'public/childcategories/' . Str::remove('tmp-', $request->image));
        }
        ChildCategory::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'sub_category_id' => $request->sub_category_id,
            'image' => Str::remove('tmp-', $request->image)
        ]);


        return redirect()->route('admin.childcategories.index')->with('noti', ["icon" => "success", "title" => "ChildCategory Successfully Created"]);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $child_category = ChildCategory::find($id);
        return view('admin.childcategories.edit', compact('child_category'));
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
        $child_category = ChildCategory::find($id);
        $child_category->name = $request->name;
        $child_category->slug = Str::slug($request->name);
        if ($request->image) {
            if (Storage::exists('public/temp/' . $request->image)) {
                Storage::move('public/temp/' . $request->image, 'public/childcategories/' . Str::remove('tmp-', $request->image));
                $child_category->image = Str::remove('tmp-', $request->image);
            }
        }
        $child_category->update();
        return redirect()->route('admin.childcategories.index')->with('noti', ["icon" => "success", "title" => "Child Category Successfully Edited"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $child_category = ChildCategory::findOrFail($id);
        $child_category->delete();

        return redirect()->route('admin.childcategories.index')->with('noti', ["icon" => "success", "title" => "Child Category Successfully Deleted"]);
    }
}
