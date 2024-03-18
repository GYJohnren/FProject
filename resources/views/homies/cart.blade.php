<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="home/css/home.css">
    <link rel="stylesheet" type="text/css" href="home/css/cart.css">
    <title>Vite + React</title>
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
    <div class='asdfg'>
                <div class='fade-in-container'>
                    <p class='item-menu'>Best Seller</p>
                    <div class='border'></div>
                </div>
                <div class='cart-container'>
                    <div class='cart-list-container'>
                        <div class='cart-list'>
                            <div class='cart-list-header'>
                                <h3>Item</h3>
                                <h3>Name</h3>
                                <h3>Quantity</h3>
                                <h3>Price</h3>
                            </div>
                            <!-- CART LIST -->
                            <!-- START -->
                            <div class="cart-list-item">
                                <div class="item-image-container">
                                    <img
                                        class="item-image"
                                        src="https://netstorage-kami.akamaized.net/images/3313e069ce4209e6.jpg?imwidth=900"
                                    />
                                </div>
                                <h3 class="item-name">Kare-Kare</h3>
                                <span class="item-quantity">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="20px"
                                        height="20px"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                    >
                                        <g clip-path="url(#clip0_429_10969)">
                                            <circle
                                                cx="12"
                                                cy="11.999"
                                                r="9"
                                                stroke="#ffffff"
                                                stroke-width="2.5"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                            <path
                                                d="M9 12H15"
                                                stroke="#ffffff"
                                                stroke-width="2.5"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_429_10969">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    5
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="20px"
                                        height="20px"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                    >
                                        <g clip-path="url(#clip0_429_10970)">
                                            <circle
                                                cx="12"
                                                cy="11.999"
                                                r="9"
                                                stroke="#ffffff"
                                                stroke-width="2.5"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                            <path
                                                d="M12 9V15"
                                                stroke="#ffffff"
                                                stroke-width="2.5"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                            <path
                                                d="M9 12H15"
                                                stroke="#ffffff"
                                                stroke-width="2.5"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_429_10970">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </span>
                                <span class="item-price">$50</span>
                            </div>
                            <!-- END -->
                        </div>
                    </div>
                    <div class='cart-summary'>
                        <h3>Total Item: 4</h3>
                        <h3>Total Price: $40</h3>
                        <button>
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512" class="carti" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M504.717 320H211.572l6.545 32h268.418c15.401 0 26.816 14.301 23.403 29.319l-5.517 24.276C523.112 414.668 536 433.828 536 456c0 31.202-25.519 56.444-56.824 55.994-29.823-.429-54.35-24.631-55.155-54.447-.44-16.287 6.085-31.049 16.803-41.548H231.176C241.553 426.165 248 440.326 248 456c0 31.813-26.528 57.431-58.67 55.938-28.54-1.325-51.751-24.385-53.251-52.917-1.158-22.034 10.436-41.455 28.051-51.586L93.883 64H24C10.745 64 0 53.255 0 40V24C0 10.745 10.745 0 24 0h102.529c11.401 0 21.228 8.021 23.513 19.19L159.208 64H551.99c15.401 0 26.816 14.301 23.403 29.319l-47.273 208C525.637 312.246 515.923 320 504.717 320zM408 168h-48v-40c0-8.837-7.163-16-16-16h-16c-8.837 0-16 7.163-16 16v40h-48c-8.837 0-16 7.163-16 16v16c0 8.837 7.163 16 16 16h48v40c0 8.837 7.163 16 16 16h16c8.837 0 16-7.163 16-16v-40h48c8.837 0 16-7.163 16-16v-16c0-8.837-7.163-16-16-16z"></path></svg>
                            Order
                        </button>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </body>
</html>