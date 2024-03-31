<!DOCTYPE html>
<html>
   <head>
   <base href="/home">

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
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')
        
         @include('home.slider')
         <!-- end slider section -->
      </div>



      <section class="product_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Product <span>Details</span>
            </h2>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="box">

                    <div class="img-box">
                        <img src="/product/{{$data->image}}">
                    </div>
                    <div class="detail-box">
                        <h5>
                            {{$data->title}}
                        </h5>
                        <h6>
                            {{$data->price}}
                        </h6>
                    </div>
                </div>
            </div>
            
            <form action="{{ url('add_order', $data->id) }}" method="POST">
    @csrf

    <div>
        <label>Quantity</label>
        <input type="text" name="quantity" id="quantityInput">
    </div>
    <div>
        <label>Message</label>
        <textarea class="textarea" placeholder="Message" type="type" name="message" required></textarea>
    </div>
    <div>
        <label>Total Price: </label>
        <span id="totalPrice">{{ $data->price }}</span> <!-- Initial total price -->
        <input type="hidden" name="totalprice" id="totalPriceInput" value="{{ $data->price }}">
    </div>

    <!-- JavaScript to calculate total price dynamically -->
    <script>
        // Get elements
        const quantityInput = document.getElementById('quantityInput');
        const totalPriceLabel = document.getElementById('totalPrice');
        const totalPriceInput = document.getElementById('totalPriceInput');
        const basePrice = {{ $data->price }}; // Get base price from PHP

        // Function to update total price
        function updateTotalPrice() {
            const quantity = parseInt(quantityInput.value) || 0;
            const totalPrice = basePrice * quantity;
            totalPriceLabel.textContent = totalPrice;
            totalPriceInput.value = totalPrice; // Update hidden input value
        }

        // Event listener for quantity input
        quantityInput.addEventListener('input', updateTotalPrice);

        // Initial call to update total price
        updateTotalPrice();
    </script>
    
    <button type="submit">Submit</button>
</form>

        </div>
    </div>
</section>



      
     
      
      @include('home.footer')
     
      <div class="cpy_">
         <p class="mx-auto">© 2024 All Rights Reserved. Mangan.<br>
         

         
         </p>
      </div>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>