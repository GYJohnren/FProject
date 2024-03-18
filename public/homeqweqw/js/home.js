let isFloatingWindowVisible = false;
let quantity = 1;
let isMaxQuantityReached = false;

function toggleFloatingWindow() {
    isFloatingWindowVisible = !isFloatingWindowVisible;
}

function handleCancel() {
    isFloatingWindowVisible = false;
}

function handleAddItem() {
    // Implementation for adding item goes here
}

function decreaseQuantity() {
    if (quantity > 0) {
        quantity--;
        isMaxQuantityReached = false;
    }
}

function increaseQuantity() {
    if (quantity < 20) {
        quantity++;
    } else {
        isMaxQuantityReached = true;
    }
}
