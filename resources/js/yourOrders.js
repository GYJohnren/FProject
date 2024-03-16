let isFloatingWindowOpen = false;
let subtotal = 0;
let shippingFee = 0;
let isTrackOrderWindowOpen = false;

function handleProceed() {
    isTrackOrderWindowOpen = true;
}

function handleTrackOrder() {
    // Implementation for tracking order goes here
}

function handleFloatingWindowButtonClick() {
    isFloatingWindowOpen = !isFloatingWindowOpen;
}

function handleCloseFloatingWindow() {
    isFloatingWindowOpen = false;
}

function handleStandardDeliveryClick() {
    shippingFee = 50;
}

function handleExpressDeliveryClick() {
    shippingFee = 60;
}

function handlePickDeliveryClick() {
    shippingFee = 70;
}

// Calculate the subtotal based on price and quantity
function calculateSubtotal(price, quantity) {
    const total = price * quantity;
    subtotal = total;
}