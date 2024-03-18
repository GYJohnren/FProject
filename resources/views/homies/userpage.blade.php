<x-app-layout>

</x-app-layout>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="home/css/home.css">
    <title>Vite + React</title>
    <style></style>
  </head>
  <body>
    <div id="root">
    <div class="container">
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
        <div class='home-container'>
                <div id='food-items' class='food-items'>
                    <div class='menu-container'>
                        <!-- {/* Simulating ItemCard click */} -->
                        <!-- START -->
                        <div class='item-card' onclick='showFloatingWindow(event)' style='cursor: pointer;'>
    <div class='card-top'>
        <i class='fa fa-star' id='rating'>4.5</i>
    </div>
    <img src='https://netstorage-kami.akamaized.net/images/3313e069ce4209e6.jpg?imwidth=900' alt='ulam to' />
    <div class='ppp'>
        <p class='item-name'>Kaldereta</p>
        <p class='item-price'>₱75</p>
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

        <div class="floating-window">
            <div class="fw-content">
                <div class="itemhaha">
                    {{-- Include the ItemCard component content here --}}
                </div>
                <div class="quando">
                    <p class="quandos">Quantity</p>
                    <div class="arrowsheez">
                        <button class="lefto" onclick="decreaseQuantity()"><i class="fas fa-plus-circle"></i></button>
                        <input class="intsek" type="text" value="" onchange="setQuantity(parseInt(this.value) || 0)">
                        <button class="righto" onclick="increaseQuantity()"><i class="fas fa-minus-circle"></i></button>
                    </div>
                </div>
               
                    <p class="pp">Maximum quantity is reached.</p>
                
                <button class="add-i" onclick="handleAddItem()">Add</button>
                <button class="cancel-b" onclick="handleCancel()">Cancel</button>
            </div>
        </div>

      </div>
    </div>
    <script src="home/js/home.js"></script>
    <script> function showFloatingWindow(event) {
    // Prevent default behavior
    event.preventDefault();

    // Get the item details
    const itemName = event.currentTarget.querySelector('.item-name').textContent;
    const itemPrice = event.currentTarget.querySelector('.item-price').textContent;

    // Show the floating window
    const floatingWindow = document.querySelector('.floating-window');
    floatingWindow.style.display = 'block';

    // Update item details in the floating window
    const itemNameElement = floatingWindow.querySelector('.item-name');
    const itemPriceElement = floatingWindow.querySelector('.item-price');

    itemNameElement.textContent = itemName;
    itemPriceElement.textContent = itemPrice;
}

// Close floating window when cancel button is clicked
function handleCancel() {
    const floatingWindow = document.querySelector('.floating-window');
    floatingWindow.style.display = 'none';
}
</script>

  </body>
</html>






















