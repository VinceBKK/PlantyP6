function increaseQuantity(event, btnElement) {
    event.preventDefault();
    let quantityContainer = btnElement.closest('.product-controls');
    let quantityElement = quantityContainer.querySelector('.quantity-input');
    let currentQuantity = parseInt(quantityElement.value);
    if (currentQuantity < 99) {
        quantityElement.value = currentQuantity + 1;
    }
}

function decreaseQuantity(event, btnElement) {
    event.preventDefault();
    let quantityContainer = btnElement.closest('.product-controls');
    let quantityElement = quantityContainer.querySelector('.quantity-input');
    let currentQuantity = parseInt(quantityElement.value);
    if (currentQuantity > 1) {
        quantityElement.value = currentQuantity - 1;
    }
}
