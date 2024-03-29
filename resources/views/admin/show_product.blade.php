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
    <link rel="shortcut icon" href="/../../logo/logowhite.png" />

    <style type="text/css">
        .center
        {
            margin:auto;
            width: 50%;
            border: 2px solid white;
            text-align: center;
            margin-top: 40px;
        }

        .font_size
        {
            text-align: center;
            font-size: 40px;
            padding-top: 20px;
        }

        .img_size
        {
            width: 150px;
            height: 150px;
        }

        .th_color
        {
            background: grey; class="th_des"
        }

        .th_des
        {
            padding: 20px;
            background-color:white;
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
                
                <h2 class="font_size">All Products</h2>

                <table class="center">
                    <tr class="th_color">
                        <th class="th_des">Product Title</th>
                        <th class="th_des">Product Description</th>
                        <th class="th_des">Product Price</th>
                        <th class="th_des">Product Image</th>
                        <th class="th_des">Edit</th>
                        <th class="th_des">Delete</th>
                    </tr>

                    @foreach($product as $product)

                    <tr>
                        <td>{{$product->title}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->price}}</td>
                        <td>
                            <img class="img_size" src="/product/{{$product->image}}">
                        </td>

                        <td>
                            <a class="btn btn-success" href="{{url('update_product',$product->id)}}">Edit</a>
                        </td>
                        <td>
                            <a class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')" href="{{url('delete_product',$product->id)}}">Delete</a>
                        </td>
                    </tr>

                    @endforeach

                </table>

            </div>
        </div> 
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>