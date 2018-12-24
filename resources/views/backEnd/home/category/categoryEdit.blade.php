@extends('backEnd.admin')

@section('title_back_area')
    Dynamic Category Edit
@endsection


@section('backEndcontent')
<div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>Basic Information</header>
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

                    {{-- {{Session::get('editmessage')}} <!--Flashing cat successfull message--> --}}

                    {!! Form::open(['name'=>'editForm' , 'url'=>'/category/edit', 'method'=>'post', 'id'=>'form_sample_1', 'class'=>'form-horizontal'])!!}

                    <div class="form-body">
                        <div class="form-group row">
                                <label class="control-label col-md-3">Category Name
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                <input type="text" name="categoryName" value="{{ $category-> categoryName }}" data-required="1" placeholder="Enter Category Name" class="form-control input-height" />
                                </div>
                        </div>


                        <div class="form-group row">
                                <label class="control-label col-md-3">Short Description
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                    <textarea name="shortDescription"  placeholder="Short Description" class="form-control-textarea" rows="5" >{{ $category-> shortDescription }}</textarea>
                                </div>
                        </div>

                            <div class="form-group row">
                                <label class="control-label col-md-3">Publication Status
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                    <select class="form-control input-height" name="publicationStatus" >
                                        <option value="">Select...</option>
                                        <option value="1">Published</option>
                                        <option value="0">Unpublished</option>
                                    </select>
                                </div>
                            </div>

                        <input type="hidden" name="categoryId" value="{{ $category->id }}">

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
document.forms['editForm'].elements['publicationStatus'].value='{{ $category-> publicationStatus }}'
</script>
        </div>
     </div>
</div>
@endsection
