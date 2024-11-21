let cart = JSON.parse(localStorage.getItem('cart')) || [];






// Cargar productos en el carrito


updateCartCount();






// Agregar productos al carrito


document.querySelectorAll('.agregarBtn').forEach(button => {


button.addEventListener('click', () => {


const producto = button.parentElement;


const id = producto.getAttribute('data-id');


const nombre = producto.getAttribute('data-nombre');


const precio = parseFloat(producto.getAttribute('data-precio'));






const item = { id, nombre, precio };


cart.push(item);


localStorage.setItem('cart', JSON.stringify(cart));


updateCartCount();


alert(`${nombre} agregado al carrito!`);


});


});






// Mostrar el carrito


document.getElementById('carritoBtn').addEventListener('click', () => {


showCart();


});






// Función para mostrar el carrito


function showCart() {


const modal = document.getElementById('carrito');


const carritoItems = document.getElementById('carritoItems');


const totalPrecio = document.getElementById('totalPrecio');






carritoItems.innerHTML = '';


let total = 0;






cart.forEach((item, index) => {


carritoItems.innerHTML += `


<div style="display: flex; justify-content: space-between; align-items: center;">


<span>${item.nombre} - $${item.precio.toFixed(2)}</span>


<button class="eliminarBtn" data-index="${index}">Eliminar</button>


</div>


`;


total += item.precio;


});






totalPrecio.textContent = total.toFixed(2);


modal.style.display = "block";






// Agregar eventos de eliminar


document.querySelectorAll('.eliminarBtn').forEach(button => {


button.addEventListener('click', (e) => {


const index = e.target.getAttribute('data-index');


cart.splice(index, 1);


localStorage.setItem('cart', JSON.stringify(cart));


showCart(); // Actualizar el carrito


updateCartCount();


});


});


}






// Cerrar el modal del carrito


document.querySelector('.close').onclick = function() {


document.getElementById('carrito').style.display = "none";


}






// Registrar usuario


document.getElementById('registerForm').addEventListener('submit', (e) => {


e.preventDefault();


const nombre = document.getElementById('nombre').value;


const email = document.getElementById('email').value;


const contraseña = document.getElementById('contraseña').value;


const mensajeRegistro = document.getElementById('mensajeRegistro');






// Validaciones básicas


if (!nombre || !email || !contraseña) {


mensajeRegistro.textContent = 'Por favor, completa todos los campos.';


mensajeRegistro.className = 'error';


return;


}


mensajeRegistro.textContent = 'Registro exitoso!';


mensajeRegistro.className = '';






// Limpiar el formulario


e.target.reset();


});






// Comprar


document.getElementById('comprarBtn').addEventListener('click', () => {


if (cart.length === 0) {


alert('El carrito está vacío.');


return;


}


alert('Gracias por tu compra!');


cart = [];


localStorage.removeItem('cart');


updateCartCount();


document.getElementById('carrito').style.display = "none";


});






// Mostrar detalles del producto


document.querySelectorAll('.detalleBtn').forEach(button => {


button.addEventListener('click', () => {


const producto = button.parentElement;


const nombre = producto.getAttribute('data-nombre');


const descripcion = `Descripción detallada de ${nombre}.`; // Cambiar por una descripción real






document.getElementById('detalleNombre').textContent = nombre;


document.getElementById('detalleDescripcion').textContent = descripcion;


document.getElementById('detalleProducto').style.display = "block";






// Agregar al carrito desde detalles


document.getElementById('agregarDetalleBtn').onclick = () => {


const precio = parseFloat(producto.getAttribute('data-precio'));


const item = { id: producto.getAttribute('data-id'), nombre, precio };


cart.push(item);


localStorage.setItem('cart', JSON.stringify(cart));


updateCartCount();


alert(`${nombre} agregado al carrito!`);


document.getElementById('detalleProducto').style.display = "none";


}


});


});






// Cerrar el modal de detalles


document.querySelector('.closeDetalle').onclick = function() {


document.getElementById('detalleProducto').style.display = "none";


}






// Actualizar conteo del carrito


function updateCartCount() {


const cartCount = document.getElementById('cartCount');


cartCount.textContent = cart.length;


}






// Filtros de productos


document.getElementById('todosBtn').addEventListener('click', () => filterProducts('todos'));


document.getElementById('pastelesBtn').addEventListener('click', () => filterProducts('pasteles'));


document.getElementById('cookiesBtn').addEventListener('click', () => filterProducts('cookies'));


document.getElementById('cafesBtn').addEventListener('click', () => filterProducts('cafes'));






function filterProducts(categoria) {


const productos = document.querySelectorAll('.producto');


productos.forEach(producto => {


if (categoria === 'todos' || producto.getAttribute('data-categoria') === categoria) {


producto.style.display = 'inline-block';


} else {


producto.style.display = 'none';


}


});


}

