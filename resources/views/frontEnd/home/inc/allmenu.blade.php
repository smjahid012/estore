<!-- ================================== TOP NAVIGATION ================================== -->
<div class="side-menu animate-dropdown outer-bottom-xs">
        <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>

    <nav class="yamm megamenu-horizontal">
        <ul class="nav">

                {{-- Dynamic Category Showing Done on SIdebar--}}
                <!-- foreach loop start -->

            <?php $all_published_category =DB::table('categories')
                    ->where('publicationStatus',1)
                    ->get();

            foreach ($all_published_category as $singleCategory){?>
                    <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-shopping-bag" aria-hidden="true"></i>{{ $singleCategory->categoryName}}</a>
                        <ul class="dropdown-menu mega-menu">
                            <li class="yamm-content">
                                <div class="row">
                                    <?php foreach($all_published_category as $singleCategory){?>
                                        <div class="col-sm-12 col-md-3">
                                            <ul class="links list-unstyled">
                                                <li><a href="#">{{$singleCategory->categoryName}}</a></li>
                                            </ul>
                                        </div><!-- /.col -->
                                    <?php }?> <!-- foreach loop end -->
                                </div><!-- /.row -->
                            </li><!-- /.yamm-content -->

                        </ul><!-- /.dropdown-menu -->
                    </li><!-- /.menu-item -->

            <?php }?><!-- foreach loop end -->

        </ul><!-- /.nav -->
    </nav><!-- /.megamenu-horizontal -->
</div><!-- /.side-menu -->
<!-- ================================== TOP NAVIGATION : END ================================== -->
