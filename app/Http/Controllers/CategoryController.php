<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backEnd.home.category.categoryEntry');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        //Using Elequoent
        //dd($request->all());// seeing which json data is coming it's worked
        $categoryEntry = new Category;

        $categoryEntry ->categoryName = $request->categoryName;
        $categoryEntry ->shortDescription = $request->shortDescription;
        $categoryEntry ->publicationStatus = $request->publicationStatus;

        $categoryEntry ->save();

        return redirect('/category/save')->with('catmessage','Data Category Insert Successfully. ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)//passing id var
    {
        //model use
        $categoryEdit = Category::where('id', $id)->first(); //value will send form
        //jekonovariable    = modelname::where('categorytable er id','passsng id var')->method
        return view('backEnd.home.category.CategoryEdit',['category'=> $categoryEdit]);// maan pathalam dhorbo value diye forme
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function manage()
    {
        $categoriestable = Category::all(); //in db slect all from categories
        //$categoriestable = Category::paginate(10);//using eloquent to paginate
        return view('backEnd.home.category.categoryManage',['categoryjekonovar'=>$categoriestable]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //dd($request->all());
        $categoryUpdate = Category::find($request->categoryId);//Category model find bole id ke mark korlam
        $categoryUpdate->categoryName = $request->categoryName;
        $categoryUpdate->shortDescription = $request->shortDescription;
        $categoryUpdate->publicationStatus = $request->publicationStatus;
        $categoryUpdate->save();

        return redirect('/category/manage')->with('editmessage','Category Updated Successfully');//falsh meesage category manage page
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoryDelete = Category::find($id);
        $categoryDelete->delete(); //delete is done

        return redirect('/category/manage')->with('delmessage','Category Deleted Successfully');
    }
}
