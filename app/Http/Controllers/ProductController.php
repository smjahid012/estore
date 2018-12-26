<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product; // for product entry
use DB; //for query builder purpose

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoryindex = Category::where('publicationStatus', 1)->get();
        return view('backEnd.home.product.productEntry',['categories'=>$categoryindex]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function manage()
    {
        $products = DB::table('products')
            ->join('categories','categories.id', '=','categoryId')
            ->select('products.*','categories.categoryName as catName')
            ->get();

            //join('tablenamefrom','table.id', '=', 'desiredtableid' )
            //->select('product all','the field we need');
            //to get data

        return view('backEnd.home.product.productManage',['products'=>$products]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $product= new Product();
        $product->productName = $request->productName;
        //variable-> db field name=productName = $request->formdata through ddrequest get(name)
        $product->categoryId = $request->categoryId;
        $product->qty = $request->qty;
        $product->price = $request->price;
        $product->shortDescription = $request->shortDescription;
        $product->longDescription = $request->longDescription;
        $product->pic = 'Picture';
        $product->publicationStatus = $request->publicationStatus;

        $product->save();

        //save pic through lastid id unique
        $lastId = $product->id;

        //request pic file & save it to variable
        $pictureInfo = $request->file('pic');
        // echo "<Pre>";
        //      print_r($pictureInfo);
        // echo "</Pre>";

        //saving pic original name with last id
        $picName = $lastId.$pictureInfo->getClientOriginalName();
        //echo $picName;

        //create folder
        $folder = "productImage/";

        //product upload method with folder & picname
        $pictureInfo->move($folder,$picName);

        //creating picurl
        $picUrl = $folder.$picName;

        //updating product model with lastid
        $productPic = Product::find($lastId);

        //pic saving & updating model with picurl
        $productPic->pic = $picUrl;
        $productPic->save();

        //savind data with redirect
        return redirect('/product/save')->with('message','Product Inserted Successfully');

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
