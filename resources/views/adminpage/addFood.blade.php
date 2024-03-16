<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/yourOrders.css') }}">
    <title>Vite + React</title>
  </head>
  <body>
    <div id="root">
    <div className="container">
      <div className='navbar-container'>
            <div className='brand-logo'>
                <img src="{{ asset('images/example.jpg') }}" alt='logo' />
            </div>
            <div className='menu-item'>
                <a href='/'>Home</a>
                <a href='/cart'>Cart</a>
                <a href='/your+orders'>Your Orders</a>
                <a href='/orders'>Orders</a>
                <a href='/account'>Log out</a>
            </div>
        </div>
        <div id="food-container">
        <div id='header'>
            <div className='search'>
                <input type='text' placeholder='What are you craving for today?' />
                <button className='search-btn'>Search</button>
            </div>
           
        </div>
    <div className='your_orders-container'>
                <div className='your_orders-list-container'>
                    <h1>Your order</h1>
                    <div className='your_orders-list'>
                        <div className='your_orders-list-header'>
                            <h3>Item</h3>
                            <h3>Name</h3>
                            <h3>Quantity</h3>
                            <h3>Price</h3>
                        </div>
                        <!-- LIST OF ORDERS -->
                        <!-- START -->
                        @foreach($orders as $order)
                            <div className="your_orders-list-item">
                                <div className="order-image-container">
                                <img
                                    className="order-image"
                                    src="https://netstorage-kami.akamaized.net/images/3313e069ce4209e6.jpg?imwidth=900"
                                    alt="Kare-Kare"
                                />
                                </div>
                                <h3 className="order-name">Kare-Kare</h3>
                                <span className="order-quantity">x{quantity}</span>
                                <span className="order-price">P50</span>
                            </div>
                        @endforeach
                        <!-- END -->
                    </div>
                </div>
                <div className='your_orders-summary'>
                    <h3>Total Item: 4</h3>
                    <h3>Total Price: $40</h3>
                    <button disabled>Serving...</button>
                </div>
            </div>
        </div>
      </div>
    </div>
  </body>
</html>