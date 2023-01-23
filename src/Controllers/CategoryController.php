<?php

namespace Jalpeshtxtech\Category\Controllers;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Jalpeshtxtech\Category\Models\Category;
use Illuminate\Http\Request;
use Jalpeshtxtech\Category\Requests\CategoryRequest;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    public function index()
    {
        $data = Category::all();
        // $data = array('category1','category2','category3','category4','category5');

        return view('category::index', compact('data'));
    }

    public function add()
    {
        return view('category::add');
    }

    public function store(CategoryRequest $request)
    {
        $user = Category::create($request->all());
        return redirect()->route('category.list')->with('success','Category Created Successfully!');
    }

    public function edit($id)
    {
        $data = Category::findOrFail($id);
        return view('category::add', compact('data'));
    }

    public function update(CategoryRequest $request, $id)
    {
        // echo "<pre>".$id;print_r($request->all());die;
        $category = Category::findOrFail($id);

        $category->category_name = $request->category_name;
        $category->description = $request->description;

        $category->save();
        // $user = Category::create($request->all());
        return redirect()->route('category.list')->with('success','Category Updated Successfully!');
    }

    public function destroy($id)
    {
        $data = Category::where('id',$id)->delete();
        return redirect()->route('category.list')->with('success','Category Deleted Successfully!');
    }
}
