@extends('backEnd.admin')

@section('title_back_area')
    Dynamic Product Edit
@endsection

@section('backEndcontent')
<div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>Product Entry</header>
                     <button id = "panel-button"
                           class = "mdl-button mdl-js-button mdl-button--icon pull-right"
                           data-upgraded = ",MaterialButton">
                           <i class = "material-icons">more_vert</i>
                        </button>
                        <ul class = "mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                           data-mdl-for = "panel-button">
                           <li class = "mdl-menu__item"><i class="material-icons">assistant_photo</i>Action</li>
                           <li class = "mdl-menu__item"><i class="material-icons">print</i>Another action</li>
                           <li class = "mdl-menu__item"><i class="material-icons">favorite</i>Something else here</li>
                        </ul>
                </div>

                <div class="card-body" id="bar-parent">

                    {{-- <h4 style="color:white">{{Session::get('proupdatemess')}}</h4> --}}

                    {!! Form::open(['url'=>'/product/edit', 'method'=>'post', 'id'=>'form_sample_1', 'class'=>'form-horizontal','enctype'=>'multipart/form-data',
                    'name'=>'productEditForm'])!!}

                    <div class="form-body">
                        <div class="form-group row">
                                <label class="control-label col-md-3">Product Name
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                <input type="text" name="productName" value="{{$product->productName}}" data-required="1" placeholder="Enter Product Name" class="form-control input-height" /> </div>
                        </div>

                        <div class="form-group row">
                                <label class="control-label col-md-3">Category
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                    <select class="form-control input-height" name="categoryId">
                                      @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{ $category->categoryName}}</option>
                                      @endforeach
                                    </select>
                                </div>
                        </div>

                        <div class="form-group row">
                                <label class="control-label col-md-3">Quantity.
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                    <input name="qty" type="number" value="{{$product->qty}}" placeholder="Enter Your Quantity" class="form-control input-height" /> </div>
                        </div>

                        <div class="form-group row">
                                <label class="control-label col-md-3">Price
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                    <input name="price" type="number" value="{{$product->price}}" placeholder="Enter Price" class="form-control input-height" /> </div>
                        </div>

                        <div class="form-group row">
                                <label class="control-label col-md-3">Short Description
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                    <textarea name="shortDescription" placeholder="Short Description" class="form-control-textarea" rows="5" >{{$product->shortDescription}}</textarea>
                                </div>
                        </div>

                        <div class="form-group row">
                            <label class="control-label col-md-3">Long Description
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-5">
                                <textarea name="longDescription" placeholder="Long Description" class="form-control-textarea" rows="5" >{{$product->longDescription}}</textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                                <label class="control-label col-md-3">Upload Picture
                                </label>
                                <div class="compose-editor">
                                  <input type="file" name="pic" class="default" multiple>
                              </div>
                            </div>


                            <div class="form-group row">
                                <label class="control-label col-md-3">Publication Status
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                    <select class="form-control input-height" name="publicationStatus">
                                        <option value="">Select...</option>
                                        <option value="1">Published</option>
                                        <option value="0">Unpublished</option>
                                    </select>
                                </div>
                            </div>

                         <input type="hidden" name="product_id" value="{{$product->id}}"> {{--product id hidden diye prodcut change --}}

                        <div class="form-actions">
                            <div class="row">
                                <div class="offset-md-3 col-md-9">
                                    <button type="submit" class="btn btn-info">Submit</button>
                                    <button type="button" class="btn btn-default">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
            <script>
                    document.forms['productEditForm'].elements['categoryId'].value='{{ $product-> categoryId }}'
                    document.forms['productEditForm'].elements['publicationStatus'].value='{{ $product-> publicationStatus }}'
            </script>
        </div>
     </div>
</div>
@endsection
