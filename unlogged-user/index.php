<?php

require_once "global.php";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Home</title>
	<link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="../assets/vendor/flickity/css/flickity.css" />
	<link rel="stylesheet" href="../assets/css/styles.css" />
	<link rel="stylesheet" href="../assets/vendor/bootstrap-icons-1.10.5/font/bootstrap-icons.css" />
</head>

<body>
	<div class="modal pop" id="modal-login" tabindex="-1" aria-labelledby="modal-login" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title fs-5">Puxa...</h1>
				</div>
				<div class="modal-body d-flex flex-column text-center">
					<i class="bi bi-emoji-frown"></i>
					Você precisa estar logado para acessar essa área...
				</div>
				<div class="modal-footer d-flex justify-content-around">
					<button type="button" class="button button-secondary" data-bs-dismiss="modal">OK</button>
					<a class="button" href="../login.php">FAZER LOGIN</a>
				</div>
			</div>
		</div>
	</div>

	<div id="user">
		<nav id="nav">
			<div id="nav-list">
				<a href="index.php" class="nav-link active">
					<i class="bi bi-house-door-fill"></i>
					<span>
						Home
					</span>
				</a>
				<a href="pesquisa.php" class="nav-link">
					<i class="bi bi-search"></i>
					<span>
						Pesquisa
					</span>
				</a>
				<a href="#" class="nav-link" data-bs-target="#modal-login" data-bs-toggle="modal">
					<i class="bi bi-chat"></i>
					<span>
						Conversas
					</span>
				</a>
				<a href="configuracoes.php" class="nav-link">
					<i class="bi bi-person"></i>
					<span>
						Configurações
					</span>
				</a>
			</div>
		</nav>
		<main id="main">
			<div id="pesquisa">
				<div class="search-container">
					<input type="text" role="search" placeholder="Pesquisa" class="search-field" />
					<button class="search-button">
						<i class="bi bi-search"></i>
					</button>
				</div>
			</div>
			<img src="../assets/img/rosas.svg" class="rosa-fundo">

			<div id="content">
				<div class="section">
					<div class="section-title placeholder-element placeholder-glow">
						<span class="placeholder col-4"></span>
					</div>
					<div class="section-title load">Categorias</div>
					<span class="veja-mais placeholder-element placeholder-glow">
						<span class="placeholder col-4"></span>
					</span>
					<a href="pesquisa.php" class="veja-mais load"> veja mais </a>
					<div class="carrossel-cards placeholder-element">
						<div class="card-categoria" aria-hidden="true">
							<div class="img-categoria placeholder-glow">
								<span class="placeholder"></span>
							</div>
							<p class="nome-categoria placeholder-glow">
								<span class="placeholder col-3"></span>
							</p>
						</div>
						<div class="card-categoria" aria-hidden="true">
							<div class="img-categoria placeholder-glow">
								<span class="placeholder"></span>
							</div>
							<p class="nome-categoria placeholder-glow">
								<span class="placeholder col-3"></span>
							</p>
						</div>
						<div class="card-categoria" aria-hidden="true">
							<div class="img-categoria placeholder-glow">
								<span class="placeholder"></span>
							</div>
							<p class="nome-categoria placeholder-glow">
								<span class="placeholder col-3"></span>
							</p>
						</div>
						<div class="card-categoria" aria-hidden="true">
							<div class="img-categoria placeholder-glow">
								<span class="placeholder"></span>
							</div>
							<p class="nome-categoria placeholder-glow">
								<span class="placeholder col-3"></span>
							</p>
						</div>
						<div class="card-categoria" aria-hidden="true">
							<div class="img-categoria placeholder-glow">
								<span class="placeholder"></span>
							</div>
							<p class="nome-categoria placeholder-glow">
								<span class="placeholder col-3"></span>
							</p>
						</div>
						<div class="card-categoria" aria-hidden="true">
							<div class="img-categoria placeholder-glow">
								<span class="placeholder"></span>
							</div>
							<p class="nome-categoria placeholder-glow">
								<span class="placeholder col-3"></span>
							</p>
						</div>
						<div class="card-categoria" aria-hidden="true">
							<div class="img-categoria placeholder-glow">
								<span class="placeholder"></span>
							</div>
							<p class="nome-categoria placeholder-glow">
								<span class="placeholder col-3"></span>
							</p>
						</div>
					</div>
					<div class="carrossel-cards load">
						<a class="card-categoria" href="pesquisa.php">
							<div class="img-categoria">
								<img src="../assets/img/categories/artesanato.svg" alt="Artesanato" />
							</div>
							<p class="nome-categoria">Artesanato</p>
						</a>
						<a class="card-categoria" href="pesquisa.php">
							<div class="img-categoria">
								<img src="../assets/img/categories/culinaria.svg" alt="Culinária" />
							</div>
							<p class="nome-categoria">Culinária</p>
						</a>
						<a class="card-categoria" href="pesquisa.php">
							<div class="img-categoria">
								<img src="../assets/img/categories/manicure.svg" alt="Manicure" />
							</div>
							<p class="nome-categoria">Manicure</p>
						</a>
						<a class="card-categoria" href="pesquisa.php">
							<div class="img-categoria">
								<img src="../assets/img/categories/roupas.svg" alt="Roupas" />
							</div>
							<p class="nome-categoria">Roupas</p>
						</a>
						<a class="card-categoria" href="pesquisa.php">
							<div class="img-categoria">
								<img src="../assets/img/categories/joias.svg" alt="Joias" />
							</div>
							<p class="nome-categoria">Joias</p>
						</a>
						<a class="card-categoria" href="pesquisa.php">
							<div class="img-categoria">
								<img src="../assets/img/categories/livro.svg" alt="Livros" />
							</div>
							<p class="nome-categoria">Livros</p>
						</a>
						<a class="card-categoria" href="pesquisa.php">
							<div class="img-categoria">
								<img src="../assets/img/categories/beleza.svg" alt="Beleza" />
							</div>
							<p class="nome-categoria">Beleza</p>
						</a>
					</div>
				</div>
				<div class="section">
					<div class="section-title placeholder-element placeholder-glow">
						<span class="placeholder col-4"></span>
					</div>
					<div class="section-title load">Para você</div>
					<span class="veja-mais placeholder-element placeholder-glow">
						<span class="placeholder col-4"></span>
					</span>
					<a href="pesquisa.php" class="veja-mais load"> veja mais </a>
					<div class="carrossel-cards placeholder-element">
						<div class="card-produto" href="produto.php" aria-hidden="true">
							<div class="img-card placeholder-glow">
								<span class="placeholder"></span>
							</div>
							<div class="info-card">
								<div class="nome-card placeholder-glow">
									<span class="placeholder col-5"></span>
									<span class="placeholder col-6"></span>
								</div>
								<div class="preco-card placeholder-glow">
									<div class="placeholder"></div>
								</div>
								<div class="avaliacao-card placeholder-glow">
									<span class="placeholder col-12"></span>
								</div>
								<div class="categoria-card placeholder-glow">
									<span class="placeholder col-4"></span>
								</div>
								<div class="negocio-card placeholder-glow">
									<span class="placeholder col-4 placeholder-sm"></span>
								</div>
							</div>
						</div>
						<div class="card-produto" href="produto.php" aria-hidden="true">
							<div class="img-card placeholder-glow">
								<span class="placeholder"></span>
							</div>
							<div class="info-card">
								<div class="nome-card placeholder-glow">
									<span class="placeholder col-5"></span>
									<span class="placeholder col-6"></span>
								</div>
								<div class="preco-card placeholder-glow">
									<div class="placeholder"></div>
								</div>
								<div class="avaliacao-card placeholder-glow">
									<span class="placeholder col-12"></span>
								</div>
								<div class="categoria-card placeholder-glow">
									<span class="placeholder col-4"></span>
								</div>
								<div class="negocio-card placeholder-glow">
									<span class="placeholder col-4 placeholder-sm"></span>
								</div>
							</div>
						</div>
						<div class="card-produto" href="produto.php" aria-hidden="true">
							<div class="img-card placeholder-glow">
								<span class="placeholder"></span>
							</div>
							<div class="info-card">
								<div class="nome-card placeholder-glow">
									<span class="placeholder col-5"></span>
									<span class="placeholder col-6"></span>
								</div>
								<div class="preco-card placeholder-glow">
									<div class="placeholder"></div>
								</div>
								<div class="avaliacao-card placeholder-glow">
									<span class="placeholder col-12"></span>
								</div>
								<div class="categoria-card placeholder-glow">
									<span class="placeholder col-4"></span>
								</div>
								<div class="negocio-card placeholder-glow">
									<span class="placeholder col-4 placeholder-sm"></span>
								</div>
							</div>
						</div>
						<div class="card-produto" href="produto.php" aria-hidden="true">
							<div class="img-card placeholder-glow">
								<span class="placeholder"></span>
							</div>
							<div class="info-card">
								<div class="nome-card placeholder-glow">
									<span class="placeholder col-5"></span>
									<span class="placeholder col-6"></span>
								</div>
								<div class="preco-card placeholder-glow">
									<div class="placeholder"></div>
								</div>
								<div class="avaliacao-card placeholder-glow">
									<span class="placeholder col-12"></span>
								</div>
								<div class="categoria-card placeholder-glow">
									<span class="placeholder col-4"></span>
								</div>
								<div class="negocio-card placeholder-glow">
									<span class="placeholder col-4 placeholder-sm"></span>
								</div>
							</div>
						</div>
						<div class="card-produto" href="produto.php" aria-hidden="true">
							<div class="img-card placeholder-glow">
								<span class="placeholder"></span>
							</div>
							<div class="info-card">
								<div class="nome-card placeholder-glow">
									<span class="placeholder col-5"></span>
									<span class="placeholder col-6"></span>
								</div>
								<div class="preco-card placeholder-glow">
									<div class="placeholder"></div>
								</div>
								<div class="avaliacao-card placeholder-glow">
									<span class="placeholder col-12"></span>
								</div>
								<div class="categoria-card placeholder-glow">
									<span class="placeholder col-4"></span>
								</div>
								<div class="negocio-card placeholder-glow">
									<span class="placeholder col-4 placeholder-sm"></span>
								</div>
							</div>
						</div>
						<div class="card-produto" href="produto.php" aria-hidden="true">
							<div class="img-card placeholder-glow">
								<span class="placeholder"></span>
							</div>
							<div class="info-card">
								<div class="nome-card placeholder-glow">
									<span class="placeholder col-5"></span>
									<span class="placeholder col-6"></span>
								</div>
								<div class="preco-card placeholder-glow">
									<div class="placeholder"></div>
								</div>
								<div class="avaliacao-card placeholder-glow">
									<span class="placeholder col-12"></span>
								</div>
								<div class="categoria-card placeholder-glow">
									<span class="placeholder col-4"></span>
								</div>
								<div class="negocio-card placeholder-glow">
									<span class="placeholder col-4 placeholder-sm"></span>
								</div>
							</div>
						</div>
						<div class="card-produto" href="produto.php" aria-hidden="true">
							<div class="img-card placeholder-glow">
								<span class="placeholder"></span>
							</div>
							<div class="info-card">
								<div class="nome-card placeholder-glow">
									<span class="placeholder col-5"></span>
									<span class="placeholder col-6"></span>
								</div>
								<div class="preco-card placeholder-glow">
									<div class="placeholder"></div>
								</div>
								<div class="avaliacao-card placeholder-glow">
									<span class="placeholder col-12"></span>
								</div>
								<div class="categoria-card placeholder-glow">
									<span class="placeholder col-4"></span>
								</div>
								<div class="negocio-card placeholder-glow">
									<span class="placeholder col-4 placeholder-sm"></span>
								</div>
							</div>
						</div>
					</div>
					<div class="carrossel-cards load">
						<?php

						$anuncios = daoAnuncio::listar();

						foreach ($anuncios as $a) {

							$qtdestrelas = $a['estrelasAnuncio'];

						?>
							<a class="card-produto" href="anuncio.php?a=<?php echo $a['idAnuncio']?>">
								<div class="img-card">
									<img src="../<?php echo $a['imagemPrincipalAnuncio']?>" />
								</div>
								<div class="info-card">
									<div class="nome-card"><?php echo $a['nomeAnuncio']?></div>
									<div class="preco-card">R$<?php echo number_format($a['valorAnuncio'], 2, ',')?></div>
									<div class="avaliacao-card">
										<?php
											for($i = 0 ; $i < $qtdestrelas ; $i++){
												?>
													<i class="bi bi-star-fill"></i>
												<?php
											}

											for($i = 0 ; $i < 5 - $qtdestrelas ; $i++){
												?>
													<i class="bi bi-star"></i>
												<?php
											}
										?>
									</div>
									<div class="categoria-card"><?php echo $a['nomeCategoria']?></div>
									<div class="negocio-card"><?php echo $a['nomeNegocioVendedora']?></div>
								</div>
							</a>
						<?php
						}

						?>
					</div>
				</div>
				<div class="section">
					<div class="section-title placeholder-element placeholder-glow">
						<span class="placeholder col-4"></span>
					</div>
					<div class="section-title load">Populares</div>
					<span class="veja-mais placeholder-element placeholder-glow">
						<span class="placeholder col-4"></span>
					</span>
					<a href="pesquisa.php" class="veja-mais load"> veja mais </a>
					<div class="carrossel-cards placeholder-element">
						<div class="card-produto" href="produto.php" aria-hidden="true">
							<div class="img-card placeholder-glow">
								<span class="placeholder"></span>
							</div>
							<div class="info-card">
								<div class="nome-card placeholder-glow">
									<span class="placeholder col-5"></span>
									<span class="placeholder col-6"></span>
								</div>
								<div class="preco-card placeholder-glow">
									<div class="placeholder"></div>
								</div>
								<div class="avaliacao-card placeholder-glow">
									<span class="placeholder col-12"></span>
								</div>
								<div class="categoria-card placeholder-glow">
									<span class="placeholder col-4"></span>
								</div>
								<div class="negocio-card placeholder-glow">
									<span class="placeholder col-4 placeholder-sm"></span>
								</div>
							</div>
						</div>
						<div class="card-produto" href="produto.php" aria-hidden="true">
							<div class="img-card placeholder-glow">
								<span class="placeholder"></span>
							</div>
							<div class="info-card">
								<div class="nome-card placeholder-glow">
									<span class="placeholder col-5"></span>
									<span class="placeholder col-6"></span>
								</div>
								<div class="preco-card placeholder-glow">
									<div class="placeholder"></div>
								</div>
								<div class="avaliacao-card placeholder-glow">
									<span class="placeholder col-12"></span>
								</div>
								<div class="categoria-card placeholder-glow">
									<span class="placeholder col-4"></span>
								</div>
								<div class="negocio-card placeholder-glow">
									<span class="placeholder col-4 placeholder-sm"></span>
								</div>
							</div>
						</div>
						<div class="card-produto" href="produto.php" aria-hidden="true">
							<div class="img-card placeholder-glow">
								<span class="placeholder"></span>
							</div>
							<div class="info-card">
								<div class="nome-card placeholder-glow">
									<span class="placeholder col-5"></span>
									<span class="placeholder col-6"></span>
								</div>
								<div class="preco-card placeholder-glow">
									<div class="placeholder"></div>
								</div>
								<div class="avaliacao-card placeholder-glow">
									<span class="placeholder col-12"></span>
								</div>
								<div class="categoria-card placeholder-glow">
									<span class="placeholder col-4"></span>
								</div>
								<div class="negocio-card placeholder-glow">
									<span class="placeholder col-4 placeholder-sm"></span>
								</div>
							</div>
						</div>
						<div class="card-produto" href="produto.php" aria-hidden="true">
							<div class="img-card placeholder-glow">
								<span class="placeholder"></span>
							</div>
							<div class="info-card">
								<div class="nome-card placeholder-glow">
									<span class="placeholder col-5"></span>
									<span class="placeholder col-6"></span>
								</div>
								<div class="preco-card placeholder-glow">
									<div class="placeholder"></div>
								</div>
								<div class="avaliacao-card placeholder-glow">
									<span class="placeholder col-12"></span>
								</div>
								<div class="categoria-card placeholder-glow">
									<span class="placeholder col-4"></span>
								</div>
								<div class="negocio-card placeholder-glow">
									<span class="placeholder col-4 placeholder-sm"></span>
								</div>
							</div>
						</div>
						<div class="card-produto" href="produto.php" aria-hidden="true">
							<div class="img-card placeholder-glow">
								<span class="placeholder"></span>
							</div>
							<div class="info-card">
								<div class="nome-card placeholder-glow">
									<span class="placeholder col-5"></span>
									<span class="placeholder col-6"></span>
								</div>
								<div class="preco-card placeholder-glow">
									<div class="placeholder"></div>
								</div>
								<div class="avaliacao-card placeholder-glow">
									<span class="placeholder col-12"></span>
								</div>
								<div class="categoria-card placeholder-glow">
									<span class="placeholder col-4"></span>
								</div>
								<div class="negocio-card placeholder-glow">
									<span class="placeholder col-4 placeholder-sm"></span>
								</div>
							</div>
						</div>
						<div class="card-produto" href="produto.php" aria-hidden="true">
							<div class="img-card placeholder-glow">
								<span class="placeholder"></span>
							</div>
							<div class="info-card">
								<div class="nome-card placeholder-glow">
									<span class="placeholder col-5"></span>
									<span class="placeholder col-6"></span>
								</div>
								<div class="preco-card placeholder-glow">
									<div class="placeholder"></div>
								</div>
								<div class="avaliacao-card placeholder-glow">
									<span class="placeholder col-12"></span>
								</div>
								<div class="categoria-card placeholder-glow">
									<span class="placeholder col-4"></span>
								</div>
								<div class="negocio-card placeholder-glow">
									<span class="placeholder col-4 placeholder-sm"></span>
								</div>
							</div>
						</div>
						<div class="card-produto" href="produto.php" aria-hidden="true">
							<div class="img-card placeholder-glow">
								<span class="placeholder"></span>
							</div>
							<div class="info-card">
								<div class="nome-card placeholder-glow">
									<span class="placeholder col-5"></span>
									<span class="placeholder col-6"></span>
								</div>
								<div class="preco-card placeholder-glow">
									<div class="placeholder"></div>
								</div>
								<div class="avaliacao-card placeholder-glow">
									<span class="placeholder col-12"></span>
								</div>
								<div class="categoria-card placeholder-glow">
									<span class="placeholder col-4"></span>
								</div>
								<div class="negocio-card placeholder-glow">
									<span class="placeholder col-4 placeholder-sm"></span>
								</div>
							</div>
						</div>
					</div>
					<div class="carrossel-cards load">
						<a class="card-produto" href="produto.php">
							<div class="img-card">
								<img src="../assets/img/products-services/cadernos-artesanais.jpg" />
							</div>
							<div class="info-card">
								<div class="nome-card">Cadernos artesanais</div>
								<div class="preco-card">R$25,00</div>
								<div class="avaliacao-card">
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-half"></i>
								</div>
								<div class="categoria-card">Artesanato</div>
								<div class="negocio-card">Cantinho da Arte</div>
							</div>
						</a>
						<a class="card-produto" href="produto.php">
							<div class="img-card">
								<img src="../assets/img/products-services/francesinha.jpeg" />
							</div>
							<div class="info-card">
								<div class="nome-card">Francesinha</div>
								<div class="preco-card">R$20,00</div>
								<div class="avaliacao-card">
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star"></i>
									<i class="bi bi-star"></i>
								</div>
								<div class="categoria-card">Manicure</div>
								<div class="negocio-card">Mulher Maravilha</div>
							</div>
						</a>
						<a class="card-produto" href="produto.php">
							<div class="img-card">
								<img src="../assets/img/products-services/bolo-laranja.jpg" />
							</div>
							<div class="info-card">
								<div class="nome-card">Bolo de Laranja</div>
								<div class="preco-card">R$15,00</div>
								<div class="avaliacao-card">
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
								</div>
								<div class="categoria-card">Culinária</div>
								<div class="negocio-card">Açúcar e Canela</div>
							</div>
						</a>
						<a class="card-produto" href="produto.php">
							<div class="img-card">
								<img src="../assets/img/products-services/bolo-chocolate.jpg" />
							</div>
							<div class="info-card">
								<div class="nome-card">Bolo de Chocolate</div>
								<div class="preco-card">R$25,00</div>
								<div class="avaliacao-card">
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
								</div>
								<div class="categoria-card">Culinária</div>
								<div class="negocio-card">Açúcar e Canela</div>
							</div>
						</a>
						<a class="card-produto" href="produto.php">
							<div class="img-card">
								<img src="../assets/img/products-services/sabonetes.jpg" />
							</div>
							<div class="info-card">
								<div class="nome-card">Sabonetes Artesanais de Lavanda</div>
								<div class="preco-card">R$12,00</div>
								<div class="avaliacao-card">
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-half"></i>
								</div>
								<div class="categoria-card">Beleza</div>
								<div class="negocio-card">Ana Rodrigues</div>
							</div>
						</a>
						<a class="card-produto" href="produto.php">
							<div class="img-card">
								<img src="../assets/img/products-services/pano-de-prato.jpg" />
							</div>
							<div class="info-card">
								<div class="nome-card">Pano de Prato Bordado</div>
								<div class="preco-card">R$25,00</div>
								<div class="avaliacao-card">
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star"></i>
									<i class="bi bi-star"></i>
								</div>
								<div class="categoria-card">Artesanato</div>
								<div class="negocio-card">Maria Santos</div>
							</div>
						</a>
						<a class="card-produto" href="produto.php">
							<div class="img-card">
								<img src="../assets/img/products-services/conjunto-de-velas.jpg" />
							</div>
							<div class="info-card">
								<div class="nome-card">Conjunto de Velas Perfumadas</div>
								<div class="preco-card">R$35,00</div>
								<div class="avaliacao-card">
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
								</div>
								<div class="categoria-card">Decoração</div>
								<div class="negocio-card">Isabella Silva</div>
							</div>
						</a>
						<a class="card-produto" href="produto.php">
							<div class="img-card">
								<img src="../assets/img/products-services/oleo-essencial-de-lavanda-10ml.jpg" />
							</div>
							<div class="info-card">
								<div class="nome-card">
									Óleo Essencial Relaxante de Lavanda 10ml
								</div>
								<div class="preco-card">R$30,00</div>
								<div class="avaliacao-card">
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
								</div>
								<div class="categoria-card">Bem estar</div>
								<div class="negocio-card">Luísa Oliveira</div>
							</div>
						</a>
					</div>
				</div>
			</div>
			<!-- <img src="../assets/img/rosas.svg" class="rosa-fundo"> -->
		</main>
	</div>

	<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="../assets/vendor/flickity/js/flickity.pkgd.min.js"></script>
	<script src="../assets/js/script.js"></script>
	<script>
		var elem = document.querySelectorAll(".carrossel-cards")

		if (localStorage.getItem('theme') == 'dark') {
			html.classList.add('dark')
		}

		elem.forEach((item) => {
			new Flickity(item, {
				cellAlign: "left",
				prevNextButtons: false,
				pageDots: false,
				resize: false,
				contain: true,
			});
		});
	</script>
</body>

</html>