<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0"
		/>
		<title>Suyisa'SKitty</title>
		<link rel="stylesheet" href="Style.css" />
	</head>
		<script>
    function agregarAlCarrito(nombre, precio, imagen) {
        // Crear el producto con los parámetros recibidos
        const producto = {
            producto: nombre,
            precio: precio,
            imagen: imagen
        };

        // Obtener el carrito actual del localStorage o crear uno vacío
        let carrito = JSON.parse(localStorage.getItem('carrito')) || [];

        // Agregar el nuevo producto al carrito
        carrito.push(producto);

        // Guardar el carrito actualizado en localStorage
        localStorage.setItem('carrito', JSON.stringify(carrito));

        alert(`Producto ${nombre} agregado al carrito!`);
    }
</script>
	<body>
		<header>
			<div class="container-hero">
				<div class="container hero">
					<div class="customer-support">
						
						<div class="content-customer-support">
							
							
						</div>
					</div>

					<div class="container-logo">
						<img src="imagenes/Suisa-removebg-preview.png" id="Mi Foto"  width="100" height="100">
						<h1 class="logo"><a href="/">Suyisa'SKitty</a></h1>
					</div>

					<div class="container-user">
						
						
							
							
						</div>
					</div>
				</div>
			</div>

			<div class="container-navbar">
				<nav class="navbar container">
					
					<ul class="menu">
						
					<section>
						<nav class="navbar">
							<ul>
								<li>
									<a href="Paginadeosos.php">Inicio</a></li>
								<li>
									<a href=""> Catalogo ⮯ </a>
									<ul class="dropdown">
										<li><a href="#specs">peluches</a></li>
										<li><a href="#specss">productos</a></li>
										<li><a href="#specsss">Pijamas</a></li>
									</ul>
								</li>
								<li> <a href="inicio.php">Iniciar Sesion! ✎ ⋆ ☄.</a></li>
								<li> <a href="carrito2.html">Ver Carrito</a></a></li>
								<li> <a href="Acercadenosotros.html">Acerca de nosotros!</a></li>
								<li> <a href="#specssss">Contactanos!!</a></li>
							
								
								</div>
							</ul>
						</nav>
					
						<script src="scri.js"></script>

					
				</nav>
			</div>
		</seccion>

		<section class="banner">
			<div class="content-banner">
		
				
				<h2>Encuentra buenas rebajas % <br />Festeja tus festividades en Suyisa'SKitty Compra tu regalo aqui sera el mejor de todos!!</h2>
				<div class="content button"> 

                   
                
                    
                </div>
				
			</div>
		</section>


			<section class="container top-products">
				<br>
				<h1 class="heading-1">Mejores Productos</h1>

				<div class="container-products">
				
					<div class="card-product">
						<div class="container-img">

						<a href="chococo.html">
						<img src="images/choco1.jpeg" alt="Cafe Irish" /></a>
    

							
							<div class="button-group">
								
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
							</div>
							<h3>Chococat!!</h3>
							<div class="content button"> 
								<ul class="menu">
								
								
						
							</ul>
							<section id="cart" class="cart hidden">
								<h2>Tu Carrito</h2>
								<div id="cart-items"></div>
								<p><strong>Total: $<span id="total-price">0.00</span></strong></p>
								
							</section>
						</main>
					
						<script src="scri.js"> </script>
							</div>
							<p class="price">$280.50 </p>
						</div>
					</div>
				
					<div class="card-product">
						<div class="container-img">
						<a href="kitty.html">
						<img src="images/kitty.jpeg" alt="Cafe Irish" /></a>
							
				
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
							</div>
							<h3>Hello kitty!!</h3>
							<div class="content button"> 
								<ul class="menu">
								
									
							</ul>
						 
							</div>
							<p class="price">$350.90</p>
						</div>
					</div>
					<!--  -->
					<div class="card-product">
						<div class="container-img">
						<a href="cinnamon.html">
						<img src="images/cinna.jpeg" alt="Cafe Irish" /></a>
							
							
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
							</div>
							<h3>Cinnamorrol!!</h3>
							<div class="content button"> 
								<ul class="menu">
								
							</ul>
						 
							</div>
							<p class="price">$319.90</p>
						</div>
					</div>
					<!--  -->
					<div class="card-product">
						<div class="container-img">
						<a href="gudetama.html">
						<img src="images/gude.jpeg" alt="Gudetama" /></a>
						
							
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
							</div>
							<h3>Gudetamaa!!</h3>
							<div class="content button"> 
								<ul class="menu">
								
							</ul>
						 
							</div>
							<p class="price">$230.90</p>
						</div>
					</div>
				</div>
			</section>

			<section class="gallery">
				<img
					src="imagenes/imagen1.jpeg"
					alt="Gallery Img1"
					class="gallery-img-1"
				/><img
					src="imagenes/imagen2.jpeg"
					alt="Gallery Img2"
					class="gallery-img-2"
				/><img
					src="imagenes/imagen3.jpeg"
					alt="Gallery Img3"
					class="gallery-img-3"
				/><img
					src="imagenes/imagen4.jpeg"
					alt="Gallery Img4"
					class="gallery-img-4"
				/><img
					src="imagenes/imagen5.png"
					alt="Gallery Img5"
					class="gallery-img-5"
				/>
			</section>

			<section class="container specials">
				<h1 class="heading-1">Exclusivos de Rebajas </h1>

				<div class="container-products">
				
					<div class="card-product">
						<div class="container-img">
						<a href="LALA.html">
							<img src="images/lala1.jpeg" alt="Cafe Irish" /></a>
							<span class="discount">-15%</span>
							
						</div>
						<div class="content-card-product">
							<div class="stars">
								<center>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
								</center>
							</div>
							<h3>Little Twin Stars Lala Angel!!
							</h3>
							<div class="content button"> 
								<ul class="menu">
						
									
							</ul>
						 
							</div>
							<p class="price">$170.00 <span>$200.00</span></p>
						</div>
					</div>
					
					<div class="card-product">
						<div class="container-img">
						<a href="kiki1.html">
							<img
								src="images/kiki1.jpeg"
								alt="kiki"
							/>
							<span class="discount">-10%</span>
							
						</div>
						<div class="content-card-product">
							<div class="stars">
							<center>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
								<i class="fa-regular fa-star"></i>
                            </center>
							</div>
							<h3>Little Twin Stars Kiki Angel!!</h3>
							<div class="content button"> 
								<ul class="menu">
								</a>
									
							</ul>
						 
							</div>
							<p class="price">$162.00 <span>$180.00</span></p>
						</div>
					</div>
					
					<div class="card-product">
						<div class="container-img">
						<a href="lala1.html">
							<img src="images/lala2.jpeg" alt="lala2" />
							<span class="discount">-22%</span>
							
						</div>
						<div class="content-card-product">
							<div class="stars">
							<center>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
</center>
							</div>
							<h3>Little Twin Stars Lala!!</h3>
							<div class="content button"> 
								<ul class="menu">
</a>
									
							</ul>
						 
							</div>
							<p class="price">$152.00 <span>$200.90</span></p>
						</div>
					</div>
					
					<div class="card-product">
						<div class="container-img">
						<a href="kiki2.html">
							<img src="images/kiki2.jpeg" alt="kiki2" />
							<span class="discount">-25%</span>
						</div>
						<div class="content-card-product">
							<div class="stars">
							<center>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
</center>
							</div>
							<h3>Little Twin Stars Kiki!!</h3>
							<div class="content button"> 
								<ul class="menu">
								</a>
									
							</ul>
						 
							</div>
							<p class="price">$187.50 <span> $250.00</span></p>
						</div>
					</div>
				</div>
			</section>
		
			<center>
				
			<section id ="specs" class="specs-section">

				
				<br>
				<br>
				<h1 class="heading-1">Peluches!!</h1>
				<div class="carousel">
					

					<div class="carrusel-list" id="carrusel-list">
						<button class="carrusel-arrow carrusel-prev" id="button-prev" data-button="button-prev"
						onclick="app.processingButton(event)">
						<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left"
							class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg"
							viewBox="0 0 320 512">
							<path fill="currentColor"
								d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z">
							</path>
						</svg>
					</button>

					<div class="carrusel-track" id="track">

						<div class="carrusel"> 
							<div>
								<a href="kittypag.html">
									<h4> <small>Ver</small> Mas </h4>
									<picture>
										 <img src="images/kittypag.jpeg" alt="Cartera Pompompurin">
									</picture>
								</a>
							</div>


						</div>
						
						<div class="carrusel"> 
							<div>
								<a href="pochapag.html">
									<h4> <small>Ver</small> Mas </h4>
									<picture>
										 <img src="images/pochapag.jpeg" alt="Cartera Pompompurin">
									</picture>
								</a>
							</div>


						</div>
						
						<div class="carrusel"> 
							<div>
								<a href="gude.html">
									<h4> <small>Ver</small> Mas </h4>
									<picture>
										 <img src="images/gudetama.jpeg" alt="Cartera Pompompurin">
									</picture>
								</a>
							</div>


						</div>
						
						<div class="carrusel"> 
							<div>
								<a href="moca.html">
									<h4> <small>ver</small> Mas </h4>
									<picture>
										 <img src="images/Moka.jpeg" alt="Cartera Pompompurin">
									</picture>
								</a>
							</div>


						</div>
						
						<div class="carrusel"> 
							<div>
								<a href="choco.html">
									<h4> <small>Ver</small> Mas </h4>
									<picture>
										 <img src="images/choloto.jpeg" alt="Cartera Pompompurin">
									</picture>
								</a>
							</div>


						</div>
						<div class="carrusel"> 
							<div>
								<a href="batzmaru.html">
									<h4> <small>Ver</small> Mas </h4>
									<picture>
										 <img src="images/batz.jpeg" alt="Cartera Pompompurin">
									</picture>
								</a>
							</div>


						</div>
						
						<div class="carrusel"> 
							<div>
								<a href="keroppi.html">
									<h4> <small>Ver</small> Mas </h4>
									<picture>
										 <img src="images/keroppi.jpeg" alt="Cartera Pompompurin">
									</picture>
								</a>
							</div>


						</div>
						
						<div class="carrusel"> 
							<div>
								<a href="cinna.html">
									<h4> <small>Imagen</small> Mas </h4>
									<picture>
										 <img src="images/cinnamon.jpeg" alt="Cartera Pompompurin">
									</picture>
								</a>
							</div>


						</div>
						
						<div class="carrusel"> 
							<div>
								<a href="s3.html">
									<h4> <small>Ver</small> Mas </h4>
									<picture>
										 <img src="images/pompom.jpeg" alt="Cartera Pompompurin">
									</picture>
								</a>
							</div>


						</div>
						
						<div class="carrusel"> 
							<div>
								<a href="s5.html">
									<h4> <small>Ver</small> Mas </h4>
									<picture>
										 <img src="images/melody.jpeg" alt="Cartera Pompompurin">
									</picture>
								</a>
							</div>


						</div>

					</div>
					<button class="carrusel-arrow carrusel-next" id="button-next" data-button="button-next"
                onclick="app.processingButton(event)">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right"
                    class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 320 512">
                    <path fill="currentColor"
                        d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                    </path>
                </svg>
            </button>


					</div>

				</div>

				<script src="scripts.js"> </script>
			</section>
				
</section>



<br>
<br>
<br>
<br>
<br>
<section id ="specss" class="specss-section">
	<h1 class="heading-1">Mas productos de tu agrado!!</h1>
	<br>
	<br>
	
	<div class="carousel">
		

		<div class="carrusel-list" id="carrusel-list">
			<button class="carrusel-arrow carrusel-prev" id="button-prev" data-button="button-prev"
			onclick="app.processingButton(event)">
			<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left"
				class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg"
				viewBox="0 0 320 512">
				<path fill="currentColor"
					d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z">
				</path>
			</svg>
		</button>

		<div class="carrusel-track" id="track">

			<div class="carrusel"> 
				<div>
					<a href="labial.html">
						<h4> <small>Ver</small> Mas </h4>
						<picture>
							 <img src="images/labial.jpeg" alt="Cartera Pompompurin">
						</picture>
					</a>
				</div>


			</div>
			
			<div class="carrusel"> 
				<div>
					<a href="ac6.html">
						<h4> <small>Ver</small> Mas </h4>
						<picture>
							 <img src="images/bolsapocha.jpeg" alt="Cartera Pompompurin">
						</picture>
					</a>
				</div>


			</div>
			
			<div class="carrusel"> 
				<div>
					<a href="espejo.html">
						<h4> <small>Ver</small> Mas </h4>
						<picture>
							 <img src="images/espejo.jpeg" alt="Cartera Pompompurin">
						</picture>
					</a>
				</div>


			</div>
			
			<div class="carrusel"> 
				<div>
					<a href="sarten.html">
						<h4> <small>ver</small> Mas </h4>
						<picture>
							 <img src="images/sarten.jpeg" alt="Cartera Pompompurin">
						</picture>
					</a>
				</div>


			</div>
			
			<div class="carrusel"> 
				<div>
					<a href="perfume.html">
						<h4> <small>Ver</small> Mas </h4>
						<picture>
							 <img src="images/perfume.jpeg" alt="Cartera Pompompurin">
						</picture>
					</a>
				</div>


			</div>
			<div class="carrusel"> 
				<div>
					<a href="ac1.html">
						<h4> <small>Ver</small> Mas </h4>
						<picture>
							 <img src="images/cartera.jpeg" alt="Cartera Pompompurin">
						</picture>
					</a>
				</div>


			</div>
			
			<div class="carrusel"> 
				<div>
					<a href="dispensador.html">
						<h4> <small>Ver</small> Mas </h4>
						<picture>
							 <img src="images/dispensador.jpeg" alt="Cartera Pompompurin">
						</picture>
					</a>
				</div>


			</div>
			
			<div class="carrusel"> 
				<div>
					<a href="despertador.html">
						<h4> <small>Imagen</small> Mas </h4>
						<picture>
							 <img src="images/despertador.jpeg" alt="Cartera Pompompurin">
						</picture>
					</a>
				</div>


			</div>
			
			<div class="carrusel"> 
				<div>
					<a href="ensendedor.html">
						<h4> <small>Ver</small> Mas </h4>
						<picture>
							 <img src="images/Ensendedor.jpeg" alt="Cartera Pompompurin">
						</picture>
					</a>
				</div>


			</div>
			
			<div class="carrusel"> 
				<div>
					<a href="logoacc.html
					">
						<h4> <small>Ver</small> Mas </h4>
						<picture>
							 <img src="images/pulsera.jpeg" alt="Cartera Pompompurin">
						</picture>
					</a>
				</div>


			</div>

		</div>
		<button class="carrusel-arrow carrusel-next" id="button-next" data-button="button-next"
	onclick="app.processingButton(event)">
	<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right"
		class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg"
		viewBox="0 0 320 512">
		<path fill="currentColor"
			d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
		</path>
	</svg>
</button>


		</div>

	</div>

	<script src="scripts.js"> </script>
</section>
	
</section>
<br>
<br>
<br>
<br>
<br>

<section id ="specsss" class="specsss-section"></section>
	<h1 class="heading-1">Colección "Sanrio Dreams" - Pijamas para Navidad</h1>
	<br>
	<br>
	
	<div class="carousel">
		

		<div class="carrusel-list" id="carrusel-list">
			<button class="carrusel-arrow carrusel-prev" id="button-prev" data-button="button-prev"
			onclick="app.processingButton(event)">
			<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left"
				class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg"
				viewBox="0 0 320 512">
				<path fill="currentColor"
					d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z">
				</path>
			</svg>
		</button>

		<div class="carrusel-track" id="track">

			<div class="carrusel"> 
				<div>
					<a href="p7.html">
						<h4> <small>Ver</small> Mas </h4>
						<picture>
							 <img src="images/pijama 1.jpeg" alt="Cartera Pompompurin">
						</picture>
					</a>
				</div>


			</div>
			
			<div class="carrusel"> 
				<div>
					<a href="p6.html">
						<h4> <small>Ver</small> Mas </h4>
						<picture>
							 <img src="images/pijamakittyfresa.jpeg" alt="Cartera Pompompurin">
						</picture>
					</a>
				</div>


			</div>
			
			<div class="carrusel"> 
				<div>
					<a href="p8.html">
						<h4> <small>Ver</small> Mas </h4>
						<picture>
							 <img src="images/pijamakittycompleta.jpeg" alt="Cartera Pompompurin">
						</picture>
					</a>
				</div>


			</div>
			
			<div class="carrusel"> 
				<div>
					<a href="p9.html">
						<h4> <small>ver</small> Mas </h4>
						<picture>
							 <img src="images/pijamapochaverde.jpeg" alt="Cartera Pompompurin">
						</picture>
					</a>
				</div>


			</div>
			
			<div class="carrusel"> 
				<div>
					<a href="p10.html">
						<h4> <small>Ver</small> Mas </h4>
						<picture>
							 <img src="images/pijamakuromi.jpeg" alt="Cartera Pompompurin">
						</picture>
					</a>
				</div>


			</div>
			<div class="carrusel"> 
				<div>
					<a href="p1.html">
						<h4> <small>Ver</small> Mas </h4>
						<picture>
							 <img src="images/pijamablanca.jpeg" alt="Cartera Pompompurin">
						</picture>
					</a>
				</div>


			</div>
			
			<div class="carrusel"> 
				<div>
					<a href="p2.html">
						<h4> <small>Ver</small> Mas </h4>
						<picture>
							 <img src="images/pijamapochacco.jpeg" alt="Cartera Pompompurin">
						</picture>
					</a>
				</div>


			</div>
			
			<div class="carrusel"> 
				<div>
					<a href="p3.html">
						<h4> <small>Imagen</small> Mas </h4>
						<picture>
							 <img src="images/pijama blanca de hello kitty.jpeg" alt="Cartera Pompompurin">
						</picture>
					</a>
				</div>


			</div>
			
			<div class="carrusel"> 
				<div>
					<a href="p4.html
					">
						<h4> <small>Ver</small> Mas </h4>
						<picture>
							 <img src="images/pijamaazul.jpeg" alt="Cartera Pompompurin">
						</picture>
					</a>
				</div>


			</div>
			
			<div class="carrusel"> 
				<div>
					<a href="p5.html">
						<h4> <small>Ver</small> Mas </h4>
						<picture>
							 <img src="images/pijamapinkkitty.jpeg" alt="Cartera Pompompurin">
						</picture>
					</a>
				</div>


			</div>

		</div>
		<button class="carrusel-arrow carrusel-next" id="button-next" data-button="button-next"
	onclick="app.processingButton(event)">
	<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right"
		class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg"
		viewBox="0 0 320 512">
		<path fill="currentColor"
			d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
		</path>
	</svg>
</button>


		</div>

	</div>

	<script src="scripts.js"> </script>
</section>
</center>
</section>
<br>
<br>
<br>
<br>
<br>


<section id ="specssss" class="specssss-section">
		<footer class="footer">
			<div class="container container-footer">
				<div class="menu-footer">
					<div class="contact-info">
						<p class="title-footer">Direccion y Contactos</p>
						<ul>
							<li>
							Es un hecho establecido desde hace mucho tiempo, ven y diviertete en Alameda Otay Town Center <br> 📦 Envíos rápidos a todo México. <br>💌 Envíanos un mensaje directo para consultar disponibilidad. <br> Numero de telefono: (+54 1234567890) Email: SuyisaKitty45@gmail.com <br>
							📦 Métodos de pago: Aceptamos transferencias, depósitos y pagos en efectivo. <br>
							🚚 Envíos: Llega a tu puerta en 3-5 días hábiles.</li> <br>
						</ul>
						
					</div>

					<div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="address">
                          <h1>Redes Sociales</h1>
                          <ul class="Menu_footer">
                            <li class="active"> <a href="https://x.com/SuyisaSkitty?t=qfMogdQ1F3DyZCcrmPTnpQ&s=09">Twitter</a> </li>
                            <li><a href="https://www.instagram.com/suyisaskitty?igsh=OThzeGIzaXRlM28w">Instagram</a> </li>
                            
                          </ul>
                        </div>
                      </div>
			
					

					
				</div>

				<div class="copyright">
					<p>
						Derechos reservados a Suyisa'SKitty!!  &copy; 2019
					</p>

					<img src="imagenes/payment.png" alt="Pagos">
				</div>
			</div>
		</footer>

		<script
			src="https://kit.fontawesome.com/81581fb069.js"
			crossorigin="anonymous"
		></script>
		
	</section>
	</body>
</html>