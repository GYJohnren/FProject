

<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/logowhite.png" type="">
      <title>Mangan</title> 
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />

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
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')

    <div class="container">
        <h1>Your Orders</h1>
        <table class="table">
            <thead>
                <tr class="th_color">
                    <th class="th_des">Product</th> 
                    <th class="th_des">Quantity</th>
                    <th class="th_des">Message</th> 
                    <th class="th_des">Total Price</th>
                    <th class="th_des">Status</th>


                    
                    <!-- Add more columns as needed -->
                </tr>
            </thead>
            <tbody>

                @foreach($data as $data)
                    
                <tr>
                <td>{{ $data->product->title ?? 'Product Not Found' }}</td>
                            <td>{{$data->quantity}}</td>
                            <td>{{$data->message}}</td>
                            <td>{{$data->totalprice}}</td>
                            <td>{{$data->status}}</td>

                        
                    </tr>
                    @endforeach   
            </tbody>

        </table>
    </div>

    

