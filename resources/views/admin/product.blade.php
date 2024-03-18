<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />

    <style type="text/css">

        .div_center
        {
            text-align: center;
            padding-top: 40px;
        }
        .font_size
        {
            font-size: 40px;
            padding-bottom: 40px;
        }

        label
        {
            display: inline-block;
            width: 200px;
        }

        .div_design
        {
            padding-bottom: 15px;
        }
    </style>
  </head>
  <body>
    
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">

            @if(session()->has('message'))

            <div class="alert alert-success">

              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

              {{session()->get('message')}}

            </div>

            @endif

            <div class="div_center">

                <h1 class="font_size">Add Product</h1>

                <form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                <div class="div_design">
                <label>Product Title</label>
                <input style= "color: black;" type="text" name="title" placeholder="Write a title" required="">
                </div>

                <div class="div_design">
                <label>Product Description</label>
                <input style= "color: black;" type="text" name="description" placeholder="Write a description" required="">
                </div>

                <div class="div_design">
                <label>Product Price</label>
                <input style= "color: black;" type="number" name="price" placeholder="Write a price" required="">
                </div>

                <div class="div_design">
                <label>Product Image Here :</label>
                <input style= "color: black;" type="file" name="image" placeholder="Write a title" required="">
                </div>

                <div class="div_design">
                
                <input type="submit" value="Add Product" class="btn btn-primary">
                </div>

                </form>

            </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
    
  </body>
</html>

                <!-- <label>Description</label>
                <input type="text" name="description" placeholder="Write a description">

                <label>Price</label>
                <input type="text" name="price" placeholder="Write a price">

                <label>Product Image Here</label>
                <input type="text" name="image" placeholder="Write a title"> -->