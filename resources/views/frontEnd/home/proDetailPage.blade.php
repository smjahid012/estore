
@extends('frontEnd.master')

@section('title_area')
    Laravel Premium Homepage frontEnd Ecommerce Online Shop
@endsection


@section('allcontent')

<div class="body-content outer-top-xs">
	<div class='container'>
		<div class='row single-product'>

                <div class='col-md-9'>
                        <div class="detail-block">
                            <div class="row  wow fadeInUp">

                <div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
                <div class="product-item-holder size-big single-product-gallery small-gallery">




                    <div id="owl-single-product">
                           <?php $productById = DB::table('products')
                            ->join('categories','categories.id', '=','categoryId')//foreign key primary key realtion
                            ->select('products.*','categories.categoryName as catName')
                            ->orderBy('id', 'desc')
                            ->where('products.publicationStatus',1)
                            ->first();

                foreach ($productById as $productid) { ?>

                        <div class="single-product-gallery-item" id="slide1">
                            <a data-lightbox="image-1" data-title="Gallery" href="{{ asset($productid->pic) }}">
                            <img class="img-responsive" alt="" src="{{ asset('frontEnd') }}/images/blank.gif" data-echo="{{ asset($product->pic) }}" />
                            </a>
                        </div><!-- /.single-product-gallery-item -->


                        <div class="single-product-gallery-item" id="slide2">
                            <a data-lightbox="image-1" data-title="Gallery" href="{{ asset('frontEnd') }}/images/products/p9.jpg">
                                <img class="img-responsive" alt="" src="{{ asset('frontEnd') }}/images/blank.gif" data-echo="{{ asset('frontEnd') }}/images/products/p9.jpg" />
                            </a>
                        </div><!-- /.single-product-gallery-item -->

                        <div class="single-product-gallery-item" id="slide3">
                            <a data-lightbox="image-1" data-title="Gallery" href="{{ asset('frontEnd') }}/images/products/p10.jpg">
                                <img class="img-responsive" alt="" src="{{ asset('frontEnd') }}/images/blank.gif" data-echo="{{ asset('frontEnd') }}/images/products/p10.jpg" />
                            </a>
                        </div><!-- /.single-product-gallery-item -->

                        <div class="single-product-gallery-item" id="slide4">
                            <a data-lightbox="image-1" data-title="Gallery" href="{{ asset('frontEnd') }}/images/products/p11.jpg">
                                <img class="img-responsive" alt="" src="{{ asset('frontEnd') }}/images/blank.gif" data-echo="{{ asset('frontEnd') }}/images/products/p11.jpg" />
                            </a>
                        </div><!-- /.single-product-gallery-item -->

                        <div class="single-product-gallery-item" id="slide5">
                            <a data-lightbox="image-1" data-title="Gallery" href="{{ asset('frontEnd') }}/images/products/p12.jpg">
                                <img class="img-responsive" alt="" src="{{ asset('frontEnd') }}/images/blank.gif" data-echo="{{ asset('frontEnd') }}/images/products/p12.jpg" />
                            </a>
                        </div><!-- /.single-product-gallery-item -->

                        <div class="single-product-gallery-item" id="slide6">
                            <a data-lightbox="image-1" data-title="Gallery" href="{{ asset('frontEnd') }}/images/products/p13.jpg">
                                <img class="img-responsive" alt="" src="{{ asset('frontEnd') }}/images/blank.gif" data-echo="{{ asset('frontEnd') }}/images/products/p13.jpg" />
                            </a>
                        </div><!-- /.single-product-gallery-item -->

                        <div class="single-product-gallery-item" id="slide7">
                            <a data-lightbox="image-1" data-title="Gallery" href="{{ asset('frontEnd') }}/images/products/p14.jpg">
                                <img class="img-responsive" alt="" src="{{ asset('frontEnd') }}/images/blank.gif" data-echo="{{ asset('frontEnd') }}/images/products/p14.jpg" />
                            </a>
                        </div><!-- /.single-product-gallery-item -->

                        <div class="single-product-gallery-item" id="slide8">
                            <a data-lightbox="image-1" data-title="Gallery" href="{{ asset('frontEnd') }}/images/products/p15.jpg">
                                <img class="img-responsive" alt="" src="{{ asset('frontEnd') }}/images/blank.gif" data-echo="{{ asset('frontEnd') }}/images/products/p15.jpg" />
                            </a>
                        </div><!-- /.single-product-gallery-item -->

                        <div class="single-product-gallery-item" id="slide9">
                            <a data-lightbox="image-1" data-title="Gallery" href="{{ asset('frontEnd') }}/images/products/p16.jpg">
                                <img class="img-responsive" alt="" src="{{ asset('frontEnd') }}/images/blank.gif" data-echo="{{ asset('frontEnd') }}/images/products/p16.jpg" />
                            </a>
                        </div><!-- /.single-product-gallery-item -->
     <?php } ?>
                    </div><!-- /.single-product-slider -->


                    <div class="single-product-gallery-thumbs gallery-thumbs">

                        <div id="owl-single-product-thumbnails">
                            <div class="item">
                                <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="1" href="#slide1">
                                    <img class="img-responsive" width="85" alt="" src="{{ asset('frontEnd') }}/images/blank.gif" data-echo="{{ asset('frontEnd') }}/images/products/p17.jpg" />
                                </a>
                            </div>

                            <div class="item">
                                <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="2" href="#slide2">
                                    <img class="img-responsive" width="85" alt="" src="{{ asset('frontEnd') }}/images/blank.gif" data-echo="{{ asset('frontEnd') }}/images/products/p18.jpg"/>
                                </a>
                            </div>
                            <div class="item">

                                <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="3" href="#slide3">
                                    <img class="img-responsive" width="85" alt="" src="{{ asset('frontEnd') }}/images/blank.gif" data-echo="{{ asset('frontEnd') }}/images/products/p19.jpg" />
                                </a>
                            </div>
                            <div class="item">

                                <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="4" href="#slide4">
                                    <img class="img-responsive" width="85" alt="" src="{{ asset('frontEnd') }}/images/blank.gif" data-echo="{{ asset('frontEnd') }}/images/products/p20.jpg" />
                                </a>
                            </div>
                            <div class="item">

                                <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="5" href="#slide5">
                                    <img class="img-responsive" width="85" alt="" src="{{ asset('frontEnd') }}/images/blank.gif" data-echo="{{ asset('frontEnd') }}/images/products/p21.jpg" />
                                </a>
                            </div>
                            <div class="item">

                                <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="6" href="#slide6">
                                    <img class="img-responsive" width="85" alt="" src="{{ asset('frontEnd') }}/images/blank.gif" data-echo="{{ asset('frontEnd') }}/images/products/p22.jpg" />
                                </a>
                            </div>
                            <div class="item">

                                <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="7" href="#slide7">
                                    <img class="img-responsive" width="85" alt="" src="{{ asset('frontEnd') }}/images/blank.gif" data-echo="{{ asset('frontEnd') }}/images/products/p23.jpg" />
                                </a>
                            </div>
                            <div class="item">

                                <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="8" href="#slide8">
                                    <img class="img-responsive" width="85" alt="" src="{{ asset('frontEnd') }}/images/blank.gif" data-echo="{{ asset('frontEnd') }}/images/products/p24.jpg" />
                                </a>
                            </div>
                            <div class="item">

                                <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="9" href="#slide9">
                                    <img class="img-responsive" width="85" alt="" src="{{ asset('frontEnd') }}/images/blank.gif" data-echo="{{ asset('frontEnd') }}/images/products/p25.jpg" />
                                </a>
                            </div>
                        </div><!-- /#owl-single-product-thumbnails -->



                    </div><!-- /.gallery-thumbs -->

                </div><!-- /.single-product-gallery -->
            </div><!-- /.gallery-holder -->
                        <div class='col-sm-6 col-md-7 product-info-block'>
                            <div class="product-info">
                                <h1 class="name">{{$product->productName}}</h1>

                                <div class="rating-reviews m-t-20">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="rating rateit-small"></div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="reviews">
                                                <a href="#" class="lnk">(13 Reviews)</a>
                                            </div>
                                        </div>
                                    </div><!-- /.row -->
                                </div><!-- /.rating-reviews -->

                                <div class="stock-container info-container m-t-10">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class="stock-box">
                                                <span class="label">Availability :</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="stock-box">
                                                <span class="value">{{$product->qty}}</span>
                                            </div>
                                        </div>
                                    </div><!-- /.row -->
                                </div><!-- /.stock-container -->

                                <div class="description-container m-t-20">
                                        {{$product->shortDescription}}
                                </div><!-- /.description-container -->

                                <div class="price-container info-container m-t-20">
                                    <div class="row">


                                        <div class="col-sm-6">
                                            <div class="price-box">
                                                <span class="price">${{$product->price}}</span>
                                                <span class="price-strike">$900.00</span>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="favorite-button m-t-10">
                                                <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Wishlist" href="#">
                                                    <i class="fa fa-heart"></i>
                                                </a>
                                                <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Add to Compare" href="#">
                                                   <i class="fa fa-signal"></i>
                                                </a>
                                                <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="E-mail" href="#">
                                                    <i class="fa fa-envelope"></i>
                                                </a>
                                            </div>
                                        </div>

                                    </div><!-- /.row -->
                                </div><!-- /.price-container -->

                                <div class="quantity-container info-container">
                                    <div class="row">

                                    <form action="{{url('/add_to_cart')}}" method="POST">
                                        @csrf <!--without this field it will say seesion expired-->
                                        <div class="col-sm-2">
                                            <span class="label">Qty:</span>
                                        </div>

                                        <div class="col-sm-2">
                                            <div class="cart-quantity">
                                                <div class="quant-input">
                                                    <input name="qty" type="text" value="1">

                                                <input type="hidden" name="id" value="{{$product->id}}"> <!-- in db porduct_id is given named by id field-->

                                            </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-7">
                                            <button type="submit"
                                                class="btn btn-primary"><i class="fa fa-shopping-cart inner-right-vs"></i> ADD TO CART</a>
                                            </button>
                                        </div>
                                    </form>

                                    </div><!-- /.row -->
                                </div><!-- /.quantity-container -->






                            </div><!-- /.product-info -->
                        </div><!-- /.col-sm-7 -->
                    </div><!-- /.row -->
                    </div>

                    <div class="product-tabs inner-bottom-xs  wow fadeInUp">
                        <div class="row">
                            <div class="col-sm-3">
                                <ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
                                    <li class="active"><a data-toggle="tab" href="#description">DESCRIPTION</a></li>
                                    <li><a data-toggle="tab" href="#review">REVIEW</a></li>
                                    <li><a data-toggle="tab" href="#tags">TAGS</a></li>
                                </ul><!-- /.nav-tabs #product-tabs -->
                            </div>
                            <div class="col-sm-9">

                                <div class="tab-content">

                                    <div id="description" class="tab-pane in active">
                                        <div class="product-tab">
                                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br><br> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                    </div><!-- /.tab-pane -->

                                    <div id="review" class="tab-pane">
                                        <div class="product-tab">

                                            <div class="product-reviews">
                                                <h4 class="title">Customer Reviews</h4>

                                                <div class="reviews">
                                                    <div class="review">
                                                        <div class="review-title"><span class="summary">We love this product</span><span class="date"><i class="fa fa-calendar"></i><span>1 days ago</span></span></div>
                                                        <div class="text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit.Aliquam suscipit."</div>
                                                                                                            </div>

                                                </div><!-- /.reviews -->
                                            </div><!-- /.product-reviews -->



                                            <div class="product-add-review">
                                                <h4 class="title">Write your own review</h4>
                                                <div class="review-table">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th class="cell-label">&nbsp;</th>
                                                                    <th>1 star</th>
                                                                    <th>2 stars</th>
                                                                    <th>3 stars</th>
                                                                    <th>4 stars</th>
                                                                    <th>5 stars</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="cell-label">Quality</td>
                                                                    <td><input type="radio" name="quality" class="radio" value="1"></td>
                                                                    <td><input type="radio" name="quality" class="radio" value="2"></td>
                                                                    <td><input type="radio" name="quality" class="radio" value="3"></td>
                                                                    <td><input type="radio" name="quality" class="radio" value="4"></td>
                                                                    <td><input type="radio" name="quality" class="radio" value="5"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="cell-label">Price</td>
                                                                    <td><input type="radio" name="quality" class="radio" value="1"></td>
                                                                    <td><input type="radio" name="quality" class="radio" value="2"></td>
                                                                    <td><input type="radio" name="quality" class="radio" value="3"></td>
                                                                    <td><input type="radio" name="quality" class="radio" value="4"></td>
                                                                    <td><input type="radio" name="quality" class="radio" value="5"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="cell-label">Value</td>
                                                                    <td><input type="radio" name="quality" class="radio" value="1"></td>
                                                                    <td><input type="radio" name="quality" class="radio" value="2"></td>
                                                                    <td><input type="radio" name="quality" class="radio" value="3"></td>
                                                                    <td><input type="radio" name="quality" class="radio" value="4"></td>
                                                                    <td><input type="radio" name="quality" class="radio" value="5"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table><!-- /.table .table-bordered -->
                                                    </div><!-- /.table-responsive -->
                                                </div><!-- /.review-table -->

                                                <div class="review-form">
                                                    <div class="form-container">
                                                        <form role="form" class="cnt-form">

                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputName">Your Name <span class="astk">*</span></label>
                                                                        <input type="text" class="form-control txt" id="exampleInputName" placeholder="">
                                                                    </div><!-- /.form-group -->
                                                                    <div class="form-group">
                                                                        <label for="exampleInputSummary">Summary <span class="astk">*</span></label>
                                                                        <input type="text" class="form-control txt" id="exampleInputSummary" placeholder="">
                                                                    </div><!-- /.form-group -->
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputReview">Review <span class="astk">*</span></label>
                                                                        <textarea class="form-control txt txt-review" id="exampleInputReview" rows="4" placeholder=""></textarea>
                                                                    </div><!-- /.form-group -->
                                                                </div>
                                                            </div><!-- /.row -->

                                                            <div class="action text-right">
                                                                <button class="btn btn-primary btn-upper">SUBMIT REVIEW</button>
                                                            </div><!-- /.action -->

                                                        </form><!-- /.cnt-form -->
                                                    </div><!-- /.form-container -->
                                                </div><!-- /.review-form -->

                                            </div><!-- /.product-add-review -->

                                        </div><!-- /.product-tab -->
                                    </div><!-- /.tab-pane -->

                                    <div id="tags" class="tab-pane">
                                        <div class="product-tag">

                                            <h4 class="title">Product Tags</h4>
                                            <form role="form" class="form-inline form-cnt">
                                                <div class="form-container">

                                                    <div class="form-group">
                                                        <label for="exampleInputTag">Add Your Tags: </label>
                                                        <input type="email" id="exampleInputTag" class="form-control txt">


                                                    </div>

                                                    <button class="btn btn-upper btn-primary" type="submit">ADD TAGS</button>
                                                </div><!-- /.form-container -->
                                            </form><!-- /.form-cnt -->

                                            <form role="form" class="form-inline form-cnt">
                                                <div class="form-group">
                                                    <label>&nbsp;</label>
                                                    <span class="text col-md-offset-3">Use spaces to separate tags. Use single quotes (') for phrases.</span>
                                                </div>
                                            </form><!-- /.form-cnt -->

                                        </div><!-- /.product-tab -->
                                    </div><!-- /.tab-pane -->

                                </div><!-- /.tab-content -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.product-tabs -->



                </div><!-- /.col -->



		</div><!-- /.row -->

</div><!-- /.container -->
</div><!-- /.body-content -->





@endsection
