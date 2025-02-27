<!DOCTYPE html>
<html lang="en">

<head>
    @include('website.partials.head')
</head>
<!-- body -->

<body class="main-layout">
    {{-- <section class="discount-banner text-center text-white py-4">
        <div class="container-fluid">
          <h2 class="fw-bold text-danger">🔥 Special Offer for Long Stays! 🔥</h2>
          <p class="lead">Stay more than <strong>5 nights</strong> and enjoy a <strong>10% discount</strong> on your stay!</p>
          <p class="fs-4">
            <span class="fw-bold text-warning">$45 per night</span> instead of <del>$50</del> for long stays.
          </p>
          <a href="#booking" class="btn btn-lg btn-danger fw-bold">Book Now & Save!</a>
        </div>
      </section>
      
      <style>
        .discount-banner {
          background: #000; /* Black background */
          border-top: 5px solid red;
          border-bottom: 5px solid red;
        }
      </style> --}}
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="Interconnect Airport Cottages" /></div>
    </div>
    <!-- end loader -->


    
    @include('website.offers-scroll-banner')




    <!-- header -->
    <header>
        @include('website.partials.header')
    </header>
    <!-- end header inner -->
    <!-- end header -->
    <!-- banner -->
    @include('website.partials.home.main_banner')
    <!-- end banner -->
    <!-- about -->
    @include('website.partials.home.about')
    <!-- end about -->
    <!-- our_room -->
    @include('website.partials.home.our_room')
    <!-- end our_room -->
    <!-- gallery -->
    @include('website.partials.home.gallery')
    <!-- end gallery -->
    <!-- blog -->
    {{-- @include('website.partials.home.blog') --}}
    <!-- end blog -->
    <!--  contact -->
    @include('website.partials.contact')
    <!-- end contact -->
    <!--  footer -->
    <footer>
        @include('website.partials.footer')
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    @livewireScripts
    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script> --}}

</body>

</html>
