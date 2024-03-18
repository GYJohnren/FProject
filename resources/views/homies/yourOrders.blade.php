<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="home/css/home.css">
    <link rel="stylesheet" type="text/css" href="home/css/yourOrders.css">
    <title>Vite + React</title>
    <style> 

    </style> 
  </head>
  <body>
    <div id="root"><div class="container">
      <div class='navbar-container'>
            <div class='brand-logo'>
                <img src="{{ asset('images/example.jpg') }}" alt='logo' />
            </div>
            <div class='menu-item'>
                <a href='/'>Home</a>
                <a href='/cart'>Cart</a>
                <a href='/your+orders'>Your Orders</a>
                <a href='/orders'>Orders</a>
                <a href='/account'>Log out</a>
            </div>
        </div>
        <div id="food-container">
        <div id='header'>
            <div class='search'>
                <input type='text' placeholder='What are you craving for today?' />
                <button class='search-btn'>Search</button>
            </div>
           
        </div>
        <div class="asd">
    <div class="fade-in-container">
        <p class="item-menu">Your Orders</p>
        <div class="border"></div>
    </div>
</div>
<div class="asd"></div>
<div class="your_orders-container">
    <div class="your_orders-list-container-two">
        <div class="your_orders-list">
            <div class="your_orders-list-header">
                <h3>Item</h3>
                <h3>Name</h3>
                <h3>Quantity</h3>
                <h3>Price</h3>
            </div>
            <div class="your_orders-list-item">
                <div class="order-image-container">
                    <img class="order-image" src="https://netstorage-kami.akamaized.net/images/3313e069ce4209e6.jpg?imwidth=900" alt="Kare-Kare">
                </div>
                <h3 class="order-name">Kare-Kare</h3>
                <span class="order-quantity">x{{ $quantity }}</span>
                <span class="order-price">P50</span>
            </div>
            <button class="buttonsheez" onclick="handleFloatingWindowButtonClick()">Total</button>
        </div>
    </div>
    
    <div class="your_orders-list-container">
        <div class="fade-in-container">
            <p class="item-menu">Shipping Information</p>
        </div>
        <div class="your_orders-list">
            <div class="deliveries">
                <div class="standard" onclick="handleStandardDeliveryClick()">
                    <div class="left">
                        <h4 class="stan">Standard Delivery</h4>
                        <h5 class="stan">Estimated Delivery</h5>
                    </div>
                    <div class="right">
                        <p class="es">P50</p>
                        <p class="es">5hrs</p>
                    </div>
                </div>
                <div class="express" onclick="handleExpressDeliveryClick()">
                    <div class="left">
                        <h4 class="stan">Express Delivery</h4>
                        <h5 class="stan">Estimated Delivery</h5>
                    </div>
                    <div class="right">
                        <p class="es">P60</p>
                        <p class="es">5hrs</p>
                    </div>
                </div>
                <div class="pick" onclick="handlePickDeliveryClick()">
                    <div class="left">
                        <h4 class="stan">Store Pick Up</h4>
                        <h5 class="stan">Estimated Delivery</h5>
                    </div>
                    <div class="right">
                        <p class="es">P40</p>
                        <p class="es">5hrs</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@if ($isFloatingWindowOpen)
    <div class="floating-www">
        <div class="bag">
            <div class="toto">
                <div class="tata">
                    <h2 class="tutu">Subtotal</h2>
                    <h2 class="tutu">Shipping fee</h2>
                </div>
                <div class="tota">
                    <p class="sub">{{ $subtotal }}</p>
                    <p class="shipping">{{ $shippingfee }}</p>
                </div>
            </div>
            <h1 class="eyyy">Total</h1>
            <div class="actions">
                <button class="proceed" onclick="handleProceed()">Proceed to Checkout</button>
                <button class="cancel" onclick="handleCloseFloatingWindow()">Cancel</button>
            </div>
        </div>
    </div>
@endif

@if ($isTrackOrderWindowOpen)
    <div class="void">
        <div class="fade-in-container">
            <p class="item-menu">Track Your Order</p>
            <div class="border"></div>
        </div>
        <div class="track-order-window">
            <!-- Add content for track order window -->
        </div>
    </div>
@endif

        </div>
      </div></div>
    <script src="{{ asset('js/yourOrders.js') }}"></script>
  </body>
</html>