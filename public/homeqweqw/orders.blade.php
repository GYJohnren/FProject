<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/ordersww.css') }}">
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
        <div className="orders">
        <div class="fade-in-container">
          <p class="item-menu">Order Management</p>
          <div class="border"></div>
        </div>
        <div className="totalll">
          <div className="total-orders">
            <h1 className="textT">Total Orders</h1>
            <h1 className="textTT">20</h1>
            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="food" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="M12 3 4 9v12h16V9l-8-6zm.5 9.5c0 .83-.67 1.5-1.5 1.5v4h-1v-4c-.83 0-1.5-.67-1.5-1.5v-3h1v3h.5v-3h1v3h.5v-3h1v3zM15 18h-1v-3.5h-1v-3c0-1.1.9-2 2-2V18z"></path></svg>
          </div>
          <div className="total-income">
            <h1 className="textT">Total Income</h1>
            <h1 className="textTT">20</h1>
            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="income" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0V0z"></path><path d="M11.8 10.9c-2.27-.59-3-1.2-3-2.15 0-1.09 1.01-1.85 2.7-1.85 1.78 0 2.44.85 2.5 2.1h2.21c-.07-1.72-1.12-3.3-3.21-3.81V3h-3v2.16c-1.94.42-3.5 1.68-3.5 3.61 0 2.31 1.91 3.46 4.7 4.13 2.5.6 3 1.48 3 2.41 0 .69-.49 1.79-2.7 1.79-2.06 0-2.87-.92-2.98-2.1h-2.2c.12 2.19 1.76 3.42 3.68 3.83V21h3v-2.15c1.95-.37 3.5-1.5 3.5-3.55 0-2.84-2.43-3.81-4.7-4.4z"></path></svg>
          </div>
        </div>
        <div class="fade-in-container">
          <p class="item-menu">Orders</p>
          <div class="border"></div>
        </div>
        <div className="ordershiz">
          <div className="your_orders-list">
            <div className="order-header">
              <h3>Item</h3>
              <h3>Name</h3>
              <h3>Quantity</h3>
              <h3>Price</h3>
            </div>
            <div className="sheesh">
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
            </div>
          </div>
        </div>
      </div>
        </div>
      </div>
    </div>
  </body>
</html>
