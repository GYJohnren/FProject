<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
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
        <div className='home-container'>
                <div id='food-items' className='food-items'>
                    <div className='menu-container'>
                        <!-- {/* Simulating ItemCard click */} -->
                        <!-- START -->
                        <div className='item-card' onClick={onClick} style={{ cursor: 'pointer'}}>
            <div className='card-top'>
                <i className='fa fa-star' id='rating'>
                    4.5
                </i>
            </div>
            <img src='https://netstorage-kami.akamaized.net/images/3313e069ce4209e6.jpg?imwidth=900' alt='ulam to' />
            <div className='ppp'>
            <p className='item-name'>Kaldereta</p>
            <p className='item-price'>₱75</p>
            </div>
        </div>
        <!-- END -->
                    </div>
                </div>
                <div id="category-list">
            <div class="fade-in-container">
                <p class="item-menu">Best Seller</p>
                <div class="border"></div>
            </div>
            <div class="fade-in-container">
                {{-- Include the ItemList component content here --}}
            </div>
        </div>
    </div>

    @if ($isFloatingWindowVisible)
        <div class="floating-window">
            <div class="fw-content">
                <div class="itemhaha">
                    {{-- Include the ItemCard component content here --}}
                </div>
                <div class="quando">
                    <p class="quandos">Quantity</p>
                    <div class="arrowsheez">
                        <button class="lefto" onclick="decreaseQuantity()"><i class="fas fa-plus-circle"></i></button>
                        <input class="intsek" type="text" value="{{ $quantity }}" onchange="setQuantity(parseInt(this.value) || 0)">
                        <button class="righto" onclick="increaseQuantity()"><i class="fas fa-minus-circle"></i></button>
                    </div>
                </div>
                @if ($isMaxQuantityReached)
                    <p class="pp">Maximum quantity is reached.</p>
                @endif
                <button class="add-i" onclick="handleAddItem()"><i class="fas fa-cart-plus carti"></i></button>
                <button class="cancel-b" onclick="handleCancel()">Cancel</button>
            </div>
        </div>
    @endif
      </div>
    </div>
    <script src="{{ asset('js/home.js') }}"></script>

  </body>
</html>