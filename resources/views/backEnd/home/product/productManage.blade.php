@extends('backEnd.admin')

@section('title_back_area')
    Dynamic Product Manage
@endsection

@section('backEndcontent')
   <!-- start page content -->
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
                                <a href="{{ url('/product/save')}}" id="addRow" class="btn btn-info">
                                        Add New Product <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-6">
                                <div class="btn-group pull-right">
                                    <a class="btn deepPink-bgcolor  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="javascript:;">
                                                <i class="fa fa-print"></i> Print </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="table-scrollable">

                    <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">

                        <!--Flashing Different Datas-->
                        {{Session::get('editmessage')}}
                        {{Session::get('delmessage')}}
                        <h4 style="color:white">{{Session::get('proupdatemess')}}</h4>
                        <h4 style="color:white">{{Session::get('prodelmess')}}</h4>
                        {{-- <h4> Total Item Table: {{$products->total()}} </h4>
                        <h4> Item per page: {{$products->perpage()}} </h4>
                        <h4> Item On This Page: {{$products->count()}} </h4>
                        <h4> Page No: {{$products->currentPage()}} </h4>
                        <h4> Item From: {{$products->firstItem()}} to {{$products->lastItem()}} </h4> --}}
                        <thead>
                                <tr>
                                    <th></th>
                                    <th> SL No </th>
                                    <th> Product Name </th>
                                    <th> Category Name </th>
                                    <th> Price </th>
                                    <th> Qty </th>
                                    <th> Short Descrtiption </th>
                                    <th> Long Descrtiption </th>
                                    <th> Picture </th>
                                    <th> Publication Status </th>
                                    <th> Action </th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                    $i=0;
                                ?>

                                @foreach($products as $product)
                                    <tr class="odd gradeX">
                                        <td></td>
                                        <td class="left">{{ ++$i }}</td>
                                            <td> {{ $product->productName }}</td>
                                            <td> {{ $product->catName }}</td>
                                            <td> {{ $product->price }}</td>
                                            <td> {{ $product->qty }}</td>

                                            <td class="left"> {{ $product->shortDescription }}</td>
                                            <td class="left"> {{ $product->longDescription }}</td>
                                            <td><img src= "{{asset($product->pic) }}" width="100" alt="no pic"></td>
                                            <td><a href="#">{{ ($product->publicationStatus == 1) ? 'Published': 'Unpublished' }} </a></td>

                                        <td>
                                            <a href="{{url('/product/view/'.$product->id) }}" target="__blank" class="btn btn-success btn-xs">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <a href="{{url('/product/edit/'.$product->id) }}"  class="btn btn-primary btn-xs">
                                                <i class="fa fa-pencil"></i>
                                            </a>

                                            <a href="{{url('/product/delete/'.$product->id) }}" onclick="return confirm('Are you sure to Delete?')" class="btn btn-danger btn-xs" >
                                                <i class="fa fa-trash-o "></i>
                                            </a>
                                        </td>
                                    </tr>

                                @endforeach

                            </tbody>
                        </table>
                        {{-- {{$products->links()}} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<!-- end page content -->
@endsection
