

<!DOCTYPE html>
<html lang="en">

@include('frontEnd.home.inc.header') <!-- header template include -->

<div class="body-content outer-top-xs" id="top-banner-and-menu">
  <div class="container">
    <div class="row">
      <!-- ============================================== SIDEBAR ============================================== -->
      <div class="col-xs-12 col-sm-12 col-md-3 sidebar">

            @include('frontEnd.home.inc.allmenu') <!-- all menu template include -->
            @include('frontEnd.home.inc.allsidebar') <!-- all sidebar template include -->

        <div class="home-banner"> <img src="{{ asset('frontend') }}/images/banners/LHS-banner.jpg" alt="Image"> </div>
      </div>
      <!-- /.sidemenu-holder -->
      <!-- ============================================== SIDEBAR : END ============================================== -->

      <!-- ============================================== CONTENT ============================================== -->
      <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">

@include('frontEnd.home.inc.heroslider') <!-- all heroslider template include with infobox -->

<!-- ==============================================MAIN CONTENT SCROLL TABS ============================================== -->

<!-- all content extends  -->
@yield('allcontent')
<!-- all content extends  -->

    <!-- ============================================== BRANDS CAROUSEL ============================================== -->
    <div id="brands-carousel" class="logo-slider wow fadeInUp">
      <div class="logo-slider-inner">
        <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
          <div class="item m-t-15"> <a href="#" class="image"> <img data-echo="{{ asset('frontend') }}/images/brands/brand1.png" src="{{ asset('frontend') }}/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->

          <div class="item m-t-10"> <a href="#" class="image"> <img data-echo="{{ asset('frontend') }}/images/brands/brand2.png" src="{{ asset('frontend') }}/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->

          <div class="item"> <a href="#" class="image"> <img data-echo="{{ asset('frontend') }}/images/brands/brand3.png" src="{{ asset('frontend') }}/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->

          <div class="item"> <a href="#" class="image"> <img data-echo="{{ asset('frontend') }}/images/brands/brand4.png" src="{{ asset('frontend') }}/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->

          <div class="item"> <a href="#" class="image"> <img data-echo="{{ asset('frontend') }}/images/brands/brand5.png" src="{{ asset('frontend') }}/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->

          <div class="item"> <a href="#" class="image"> <img data-echo="{{ asset('frontend') }}/images/brands/brand6.png" src="{{ asset('frontend') }}/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->

          <div class="item"> <a href="#" class="image"> <img data-echo="{{ asset('frontend') }}/images/brands/brand2.png" src="{{ asset('frontend') }}/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->

          <div class="item"> <a href="#" class="image"> <img data-echo="{{ asset('frontend') }}/images/brands/brand4.png" src="{{ asset('frontend') }}/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->

          <div class="item"> <a href="#" class="image"> <img data-echo="{{ asset('frontend') }}/images/brands/brand1.png" src="{{ asset('frontend') }}/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->

          <div class="item"> <a href="#" class="image"> <img data-echo="{{ asset('frontend') }}/images/brands/brand5.png" src="{{ asset('frontend') }}/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
        </div>
        <!-- /.owl-carousel #logo-slider -->
      </div>
      <!-- /.logo-slider-inner -->

    </div>
    <!-- /.logo-slider -->
    <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
  </div>
  <!-- /.container -->
</div>
<!-- /#top-banner-and-menu -->

@include('frontEnd.home.inc.footer')
