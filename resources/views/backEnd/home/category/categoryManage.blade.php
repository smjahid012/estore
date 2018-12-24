@extends('backEnd.admin')

@section('title_back_area')
    Dynamic Category Manage
@endsection

@section('backEndcontent')
    <!-- start page content -->

<div class="tab-content">
    <div class="tab-pane active fontawesome-demo" id="tab1">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>All Category Manage</header>
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
                                <a href="{{ url('/category/save')}}" id="addRow" class="btn btn-info">
                                        Add New Category <i class="fa fa-plus"></i>
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

                        {{Session::get('editmessage')}}
                        {{Session::get('delmessage')}}

                        <thead>
                                <tr>
                                    <th></th>
                                    <th> SL No </th>
                                    <th> Category Name </th>
                                    <th> Short Descrtiption </th>
                                    <th> Publication Status </th>
                                    <th> Action </th>
                                </tr>
                            </thead>

                            <tbody>

                                <?php
                                    $i=0;
                                ?>

                                @foreach($categoryjekonovar as $singleCategory)

                                    <tr class="odd gradeX">
                                        <td></td>
                                        <td class="left">{{ ++$i }}</td>
                                            <td> {{ $singleCategory->categoryName }}</td>
                                            <td class="left"> {{ $singleCategory->shortDescription }}</td>
                                            <td><a href="#">{{ ($singleCategory->publicationStatus == 1) ? 'Published': 'Unpublished' }} </a></td>

                                        <td>
                                            <a href="{{url('/category/edit/'.$singleCategory->id) }}" class="btn btn-primary btn-xs">
                                                <i class="fa fa-pencil"></i>
                                            </a>

                                            <a href="{{url('/category/delete/'.$singleCategory->id) }}" class="btn btn-danger btn-xs">
                                                <i class="fa fa-trash-o "></i>
                                            </a>
                                        </td>
                                    </tr>

                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<!-- end page content -->

@endsection
