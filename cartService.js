// Variables del carrito
let cart = [];
const pricePerProduct = 95.00;

// Función para agregar producto al carrito
function addToCart() {
    const quantity = parseInt(document.getElementById('quantity').value);

    // Crear un objeto del producto
    const product = {
        name: "Peluche Hello Kitty",
        price: pricePerProduct,
        quantity: quantity
    };

    // Agregar el producto al carrito
    cart.push(product);

    // Actualizar el carrito visualmente
    updateCart();
}

// Función para actualizar el carrito
function updateCart() {
    const cartItems = document.getElementById('cart-items');
    cartItems.innerHTML = '';

    let total = 0;

    // Mostrar cada producto en el carrito
    cart.forEach((product, index) => {
        const productTotal = product.price * product.quantity;
        total += productTotal;

        const cartItem = document.createElement('div');
        cartItem.innerHTML = `
            <p>${product.name} (Cantidad: ${product.quantity}) - $${productTotal.toFixed(2)}
            <button onclick="removeFromCart(${index})">Eliminar</button></p>
        `;
        cartItems.appendChild(cartItem);
    });

    // Actualizar el precio total
    document.getElementById('total-price').innerText = total.toFixed(2);
}

// Función para eliminar un producto del carrito
function removeFromCart(index) {
    cart.splice(index, 1);
    updateCart();
}

// Función para vaciar el carrito
function clearCart() {
    cart = [];
    updateCart();
}
