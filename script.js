let cartCount = 0;

function addToCart() {
    cartCount++;
    document.getElementById('cart-count').innerText = cartCount;
    // Aquí podrías agregar más lógica para manejar el carrito de compras
}
