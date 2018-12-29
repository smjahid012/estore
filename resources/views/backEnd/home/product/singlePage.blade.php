@extends('backEnd.admin')

@section('title_back_area')
    Dynamic Product View
@endsection

@section('backEndcontent')
<div class="tab-content">
        <div class="tab-pane active fontawesome-demo" id="tab1">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-box">
                        <div class="card-head">
                            <header>All Product Manage</header>
                            <div class="tools">
                                <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                            </div>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-6">
                                    <div class="btn-group">
                                    <a href="{{ url('/product/manage')}}" id="addRow" class="btn btn-info">
                                            Show Product  <i class="fa fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div><img src="{{ asset($product->pic)}}" widht="300"> </div><br>
                        Name: {{ $product->productName}} <br>
                        Category Name: {{$product->catName}} <br>
                        Price: {{ $product->price}} <br>
                        Quantity: {{$product->qty}} <br>
                        <p><h4>Short Description</h4>{{ $product->shortDescription }}</p> <br>
                        <p><h4>Long Description</h4>{{ $product->longDescription }}</p> <br>
                        Publication Status: {{ ($product->publicationStatus == 1) ? 'Published': 'Unpublished' }}
                    </div>
                <div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
