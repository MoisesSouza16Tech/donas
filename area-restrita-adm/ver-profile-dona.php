<?php include_once("validador.php");
require_once "global.php";




// Verificar se o ID foi passado pela URL
if(isset($_GET['id'])) {
	$idDenuncia = $_GET['id'];

	// Consultar o banco de dados para obter as informações da denúncia com o ID fornecido
	$denuncia = daoDenuncia::obterPorId($idDenuncia);

	// Agora você pode usar as informações da denúncia na página
} else {
	// Se o ID não foi passado, redirecione ou manipule a situação de acordo com sua lógica
	header('Location: denuncias.php');
	echo 'Não foi possivel obter o id da denúncia';
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrin-to-fit=no">

	<title>Dashboard - Donas</title>

	<link rel="shortcut icon" type="imagex/png" href="../assets/media/Logo-menor.png">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
		crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
		crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../assets/vendor/bootstrap-icons-1.10.5/font/bootstrap-icons.css" />


	<link href="../assets/css/styles-dash.css" rel="stylesheet">

	<style>
		/* New styles for layout */

		.main-section {
			display: flex;
			flex-wrap: wrap;
			justify-content: space-evenly;
		}

		.sub-section {
			flex: 0 0 calc(33.33% - 20px);
			margin: 10px;
			background-color: #ffecf2;
			/* Lighter Pink */
			border-radius: 10px;
			box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
		}

		.sub-section img {
			width: 30px;
			height: 30px;
			border-radius: 10px;
			margin-right: 3px;
		}

		.sub-section h6 {
			margin-top: 5px;
			margin-bottom: 0;
			color: #880e4f;
			/* Dark Pink */
		}

		.sub-section p,
		.sub-section h6 {
			text-align: center;
			color: #880e4f;
			/* Dark Pink */
		}

		#linha,
		#linhaG {
			width: 100%;
			height: 1px;
			background-color: #d81b60;
			/* Darker Pink */
			margin-top: 5px;
			margin-bottom: 5px;
		}

		.botaoTabela,
		.botaoTabelaDenu {
			background-color: #e91e63;
			/* Pink */
			color: #ffffff;
			/* White */
			border: none;
			padding: 10px;
			border-radius: 5px;
			cursor: pointer;
			transition: background-color 0.3s;
		}

		.botaoTabela:hover,
		.botaoTabelaDenu:hover {
			background-color: #c2185b;
			/* Darker Pink */
		}

		.ativado {
			background-color: #c2185b;
			/* Darker Pink */
		}
	</style>
</head>

<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Sidebar -->
		<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="Dashboard.php">
				<div class="sidebar-brand-icon ">
					<img src="../assets/media/LogoDash.png" class="Logo">
				</div>
				<div class="sidebar-brand-text mx-3">Donas</div>
			</a>

			<!-- Divider -->
			<hr class="sidebar-divider my-0">

			<!-- Nav Item - Dashboard -->
			<li class="nav-item active">
				<a class="nav-link" href="dashboard.php">
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
						class="bi bi-house-door" viewBox="0 0 16 16">
						<path
							d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146ZM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5Z" />
					</svg>
					<span class="textoNav">Dashboard</span></a>
			</li>


			<!-- Divider -->
			<hr class="sidebar-divider my-0">

			<li class="nav-item active">
				<a class="nav-link" href="relatorios.php">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
						class="bi bi-house-door-fill " viewBox="0 0 16 16">
						<path
							d="M13 0H6a2 2 0 0 0-2 2 2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 13V4a2 2 0 0 0-2-2H5a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1zM3 4a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4z" />
					</svg>
					<span class="textoNav">Relatórios</span></a>
			</li>


			<!-- Divider -->
			<hr class="sidebar-divider my-0">

			<li class="nav-item active">
				<a class="nav-link" href="donas.php">
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
						class="bi bi-person-badge" viewBox="0 0 16 16">
						<path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
						<path
							d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z" />
					</svg>
					<span class="textoNav">Donas</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider my-0">

			<li class="nav-item active">
				<a class="nav-link" href="contas.php">
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
						class="bi bi-person" viewBox="0 0 16 16">
						<path
							d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
					</svg>
					<span class="textoNav">Contas</span></a>
			</li>
			<hr class="sidebar-divider my-0">

			<li class="nav-item active">
				<a class="nav-link" href="denuncias.php">
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
						class="bi bi-flag-fill" viewBox="0 0 16 16">
						<path
							d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12.435 12.435 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A19.626 19.626 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a19.587 19.587 0 0 0 1.349-.476l.019-.007.004-.002h.001" />
					</svg>
					<span class="textoNav">Denúncias</span></a>
			</li>

			<hr class="sidebar-divider my-0">

			<li class="nav-item active">
				<a class="nav-link" href="cadastra-cate.php">
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
						class="bi bi-tags" viewBox="0 0 16 16">
						<path
							d="M3 2v4.586l7 7L14.586 9l-7-7H3zM2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586V2z" />
						<path
							d="M5.5 5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm0 1a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1v5.086z" />
					</svg>
					<span class="textoNav">Cadastrar Categoria</span></a>
			</li>


			<hr class="sidebar-divider my-0">

			<li class="nav-item active">
				<a class="nav-link" href="cadastra-subcate.php">
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
						class="bi bi-custom-icon" viewBox="0 0 16 16">
						<!-- Substitua os caminhos abaixo pelos caminhos do seu ícone personalizado -->
						<path
							d="M1 8c0-1.104.896-2 2-2s2 .896 2 2c0 .745-.416 1.385-1 1.732V15a1 1 0 1 1-2 0V9.732A1.977 1.977 0 0 1 1 8z" />
						<path
							d="M12 8c0-1.104.896-2 2-2s2 .896 2 2c0 .745-.416 1.385-1 1.732V15a1 1 0 1 1-2 0V9.732A1.977 1.977 0 0 1 12 8z" />
						<path
							d="M8 1c-1.104 0-2 .896-2 2 0 .745.416 1.385 1 1.732V15a1 1 0 1 0 2 0V4.732A1.977 1.977 0 0 0 10 3c0-1.104-.896-2-2-2z" />
					</svg>
					<span class="textoNav">Cadastrar Subcategoria</span>
				</a>
			</li>

			<hr class="sidebar-divider my-0">

		</ul>
		<div id="content-wrapper" class="d-flex flex-column">

			<div id="content">

				<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

					<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
							class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
							<path
								d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
						</svg>
					</button>

					<form
						class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
						<div class="input-group">
							<input type="text" class="form-control bg-light border-0 small" placeholder="Procurar ..."
								aria-label="Search" aria-describedby="basic-addon2">
							<div class="input-group-append">
								<button class="btn btn-primary" type="button">
									<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor"
										class="bi bi-search" viewBox="0 0 16 16">
										<path
											d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
									</svg>
								</button>
							</div>
						</div>
					</form>

					<ul class="navbar-nav ml-auto">

						<li class="nav-item dropdown no-arrow d-sm-none">
							<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
								data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-search fa-fw"></i>
							</a>

							<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
								aria-labelledby="searchDropdown">
								<form class="form-inline mr-auto w-100 navbar-search">
									<div class="input-group">
										<input type="text" class="form-control bg-light border-0 display-4"
											placeholder="Procurar" aria-label="Search" aria-describedby="basic-addon2">
										<div class="input-group-append">
											<button class="btn btn-primary" type="button">
												<i class="fas fa-search fa-sm"></i>
											</button>
										</div>
									</div>
								</form>
							</div>
						</li>

						<!-- Nav Item - Alerts -->
						<li class="nav-item dropdown no-arrow mx-1">
							<a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
								data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
									class="bi bi-bell-fill" viewBox="0 0 16 16">
									<path
										d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z" />
								</svg>
								<!-- Counter - Alerts -->
								<span class="badge badge-danger badge-counter">
									<?php echo daoDenuncia::contarNotAdm() ?>+
								</span>
							</a>
							<!-- Dropdown - Alerts -->
							<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
								aria-labelledby="alertsDropdown">
								<h6 class="dropdown-header">
									Alerta Notificação
								</h6>

								<?php
								$ultimasDenunciasNot = daoDenuncia::listarUltimasDenNaoVisualizadas();
								$count = 0;
								foreach($ultimasDenunciasNot as $denunciaNot):
									$denunciaNaoVisualizada = $denunciaNot['visualizadoDenuncia'] == 0;
									$style = $denunciaNaoVisualizada ? ' border-radius: 5px; background-color: #ffff;' : '';
									$hoverStyle = $denunciaNaoVisualizada ? 'border: 1px solid #971881; border-radius: 5px; background-color: #ffff; transition: all 0.3s;' : '';
									?>

									<a class="dropdown-item d-flex align-items-center"
										href="ver-mais-denu.php?id=<?php echo $denunciaNot['idDenuncia']; ?>"
										style="<?php echo $style; ?>" onmouseover="this.style='<?php echo $hoverStyle; ?>'"
										onmouseout="this.style='<?php echo $style; ?>'">
										<div class="mr-3">
											<div class="icon-circle bg-primary">
												<img class='rounded-circle imageDenunNot'
													src='../<?php echo $denunciaNot['fotoCliente'] ?>' alt=''>
											</div>
										</div>
										<div>
											<div class="small text-gray-500">
												<?php echo date('d/m/Y', strtotime($denunciaNot['dataDenuncia'])); ?>
											</div>
											<span class="font-weight-bold">
												Denúncia não analisada de
												<?php echo $denunciaNot['nomeCliente']; ?>
											</span>
										</div>
									</a>

								<?php endforeach; ?>



								<a class="dropdown-item text-center small text-gray-500" href="denuncias.php">Ver
									Mais</a>
							</div>

						</li>

						<!--<li class="nav-item dropdown no-arrow mx-1">
							<a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-right-fill" viewBox="0 0 16 16">
									<path d="M14 0a2 2 0 0 1 2 2v12.793a.5.5 0 0 1-.854.353l-2.853-2.853a1 1 0 0 0-.707-.293H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12z" />
								</svg>

								<span class="badge badge-danger badge-counter">1</span>
							</a>

							<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
								<h6 class="dropdown-header">
									Novas Mensagens
								</h6>
								<a class="dropdown-item d-flex align-items-center" href="ver-mais-denu.php?id=<?php echo $denuncia['idDenuncia']; ?>">
									<div class="dropdown-list-image mr-3">
										<img class="rounded-circle" src="../assets/media/novasMensagens.jpg" alt="...">
										<div class="status-indicator bg-success"></div>
									</div>
									<div>
										<div class="text-truncate">A minha conta foi bloqueada sem motivos ...</div>
										<div class="small text-gray-500">Ana Clara Rocha</div>
									</div>
								</a>
								<a class="dropdown-item text-center small text-gray-500" href="#">Ver Mais</a>
							</div>
						</li>-->

						<div class="topbar-divider d-none d-sm-block"></div>

						<!-- ICON MENSAGEM -->
						<li class="nav-item dropdown no-arrow mx-1">
							<a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
								data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
									class="bi bi-moon-fill" viewBox="0 0 16 16">
									<path
										d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
								</svg>
							</a>
						</li>

						<div class="topbar-divider d-none d-sm-block"></div>


						<li class="nav-item dropdown no-arrow">
							<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
								data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="mr-2 d-none d-lg-inline text-gray-600 small">Heloisa Martins</span>
								<img class="img-profile rounded-circle" src="../assets/media/Adm-dash.jpg">
							</a>

							<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
								aria-labelledby="userDropdown">
								<a class="dropdown-item" href="logout.php">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
										class="bi bi-box-arrow-left" viewBox="0 0 16 16">
										<path fill-rule="evenodd"
											d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
										<path fill-rule="evenodd"
											d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
									</svg>
									Sair
								</a>
							</div>
						</li>

					</ul>

				</nav>
				<div class="container-fluid">

					<div class="d-sm-flex align-items-center justify-content-between mb-4">
						<h3 class="h3 mb-0 text-gray-800">
							<a href="denuncias.php">Denúncias</a> | Denúncia de
							<?php
							$nomeCompleto = $denuncia['nomeVendedora'];
							$partesNome = explode(' ', $nomeCompleto);


							if(count($partesNome) >= 2) {
								echo $partesNome[0].' '.$partesNome[1];
							} else {
								echo $nomeCompleto;
							}
							?>

							<?php
							switch($denuncia['visualizadoDenuncia']) {
								case 1:
									echo '<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-patch-check" viewBox="0 0 16 16" style="color:#11ae70;">
                    <path fill-rule="evenodd" d="M10.354 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path>
                    <path d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911l-1.318.016z"></path>
                </svg>';
									//echo '<p class="text-xs font-weight-bold mb-0" style="color:#11ae70;">Analisada</p>';
									break;
								case 0:
									echo '<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-patch-check" viewBox="0 0 16 16" style="color: #a30006; ">
                    <path fill-rule="evenodd" d="M10.354 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path>
                    <path d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911l-1.318.016z"></path>
                </svg>';
									//echo '<p class="text-xs font-weight-bold mb-0" style="color: #a30006;">Análise Pendente</p>';
									break;
								default:
									echo '<p class="text-xs font-weight-bold mb-0" style="color: #YOUR_COLOR_FOR_UNKNOWN_STATUS;">Status desconhecido</p>';
							}
							?>
						</h3>
						</h3>
						<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
								class="bi bi-files" viewBox="0 0 16 16">
								<path
									d="M13 0H6a2 2 0 0 0-2 2 2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 13V4a2 2 0 0 0-2-2H5a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1zM3 4a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4z">
								</path>
							</svg> Gerar Relatório</a>
					</div>

					<div class="main-section">

						<!-- Delator Section -->
						<section class="sub-section">
							<div
								style="height: 40px; padding-top: 10px; padding-bottom: 10px; background-color: #971881; width: 100%; border-radius: 10px 10px 0 0!important;">
								<h2 class="text-xs text-secondary mb-0 textoVer"
									style=" text-align: center; color: white!important; margin-left: 0; font-weight: 600;">
									Delator(a)</h2>
							</div>
							<div class="d-flex flex-column justify-content-center"
								style="margin: 30px; margin-top: 15px;">

								<div class="d-flex flex-column justify-content-center">
									<div
										style="display: flex; align-items: center; display: flex; justify-content: center; align-items: center;">
										<img src="../<?php echo $denuncia['fotoCliente']; ?>" alt="Foto do Delator"
											style="width: 80px; height: 80px; border-radius: 50px;">
									</div>
									<div style="/* display: flex; */ align-items: center;">
										<h6 class="text-sm">Nome denunciante</h6>

										<p class="text-xs text-secondary mb-0 textoVer">
											<?php echo $denuncia['nomeCliente']; ?>
											</hp>
									</div>
									<div id="linha"></div>
								</div>

								<div class="d-flex flex-column justify-content-center">
									<h6 class="text-sm">E-mail Delator(a)</h6>
									<p class="text-xs text-secondary mb-0 textoVer">
										<?php echo $denuncia['emailCliente']; ?>
									</p>
									<div id="linha"></div>
								</div>
								<div class="d-flex flex-row">
									<!-- Bloco Status Delator(a) -->
									<div class="d-flex flex-column justify-content-center mr-4">
										<h6 class="text-sm">Status</h6>
										<h6 class="text-sm">
											<?php
											switch($denuncia['statusConta']) {
												case 1:
													echo '<p class="text-xs font-weight-bold mb-0" style="color:#11ae70;">Desbloqueado(a)</p>';
													echo '<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-patch-check" viewBox="0 0 16 16" style="color:#11ae70;">
                            <path fill-rule="evenodd" d="M10.354 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path>
                            <path d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911l-1.318.016z"></path>
                        </svg>';
													break;
												case 0:
													echo '<p class="text-xs font-weight-bold mb-0" style="color: #a30006; margin-bottom: 10px;">Bloqueado(a)</p>';
													echo '<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-patch-check" viewBox="0 0 16 16" style="color: #a30006; ">
                            <path fill-rule="evenodd" d="M10.354 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path>
                            <path d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911l-1.318.016z"></path>
                        </svg>';
													break;
												default:
													echo '<p class="text-xs font-weight-bold mb-0" style="color: #YOUR_COLOR_FOR_UNKNOWN_STATUS;">Status desconhecido</p>';
											}
											?>
										</h6>
									</div>

									<!-- Bloco Alterar Status -->
									<div class="d-flex flex-column justify-content-center">
										<h6 class="text-sm" style="margin-bottom: 5px;">Alterar Status</h6>
										<div class="d-flex justify-content-center">
											<!-- Nova div para envolver o formulário e o botão -->
											<form method="POST" id="form-subcategoria"
												action="../api/cliente/alterarStatusD.php" onsubmit="showModal(event)"
												data-bs-toggle="modal" data-bs-target="#alteraStatusCliente"
												class="mr-3" style="margin-right: 0px!important;">
												<input type="hidden" name="idCliente"
													value="<?php echo $denuncia['idCliente']; ?>">
												<input type="hidden" name="idDenuncia"
													value="<?php echo $denuncia['idDenuncia']; ?>">
												<button
													class="botaoTabela <?php echo $denuncia['statusConta'] ? 'ativado' : ''; ?>"
													type="submit"></button>
											</form>
										</div>
									</div>
								</div>
							</div>
						</section>

						<section class="sub-section">
							<div
								style="height: 40px; padding-top: 10px; padding-bottom: 10px; background-color: #971881; width: 100%; border-radius: 10px 10px 0 0!important;">
								<h2 class="text-xs text-secondary mb-0 textoVer"
									style=" text-align: center; color: white!important; margin-left: 0; font-weight: 600;">
									Denunciada</h2>
							</div>
							<div class="d-flex flex-column justify-content-center"
								style="margin: 30px; margin-top: 15px;">

								<div class="d-flex flex-column justify-content-center">
									<div
										style="display: flex; align-items: center; display: flex; justify-content: center; align-items: center;">
										<img src="../<?php echo $denuncia['fotoNegocioVendedora']; ?>"
											alt="Foto do Delator"
											style="width: 80px; height: 80px; border-radius: 50px;">
									</div>
									<div style="/* display: flex; */ align-items: center;">
										<h6 class="text-sm">Empresa denunciada</h6>
										<p class="text-xs text-secondary mb-0 textoVer">
											<?php echo $denuncia['nomeNegocioVendedora']; ?>
										</p>
									</div>
									<div id="linha"></div>
								</div>

								<div class="d-flex flex-column justify-content-center">
									<h6 class="text-sm">Nome da dona</h6>
									<p class="text-xs text-secondary mb-0 textoVer">
										<?php echo $denuncia['nomeVendedora']; ?>
									</p>
									<div id="linha"></div>
								</div>

								<div class="d-flex flex-row">
									<!-- Bloco Status Delator(a) -->
									<div class="d-flex flex-column justify-content-center mr-4">
										<h6 class="text-sm">Status</h6>
										<h6 class="text-sm">
											<?php
											switch($denuncia['statusVendedora']) {
												case 1:
													echo '<p class="text-xs font-weight-bold mb-0" style="color:#11ae70;">Desbloqueado(a)</p>';
													echo '<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-patch-check" viewBox="0 0 16 16" style="color:#11ae70;">
                            <path fill-rule="evenodd" d="M10.354 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path>
                            <path d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911l-1.318.016z"></path>
                        </svg>';
													break;
												case 0:
													echo '<p class="text-xs font-weight-bold mb-0" style="color: #a30006; margin-bottom: 10px;">Bloqueado(a)</p>';
													echo '<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-patch-check" viewBox="0 0 16 16" style="color: #a30006; ">
                            <path fill-rule="evenodd" d="M10.354 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path>
                            <path d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911l-1.318.016z"></path>
                        </svg>';
													break;
												default:
													echo '<p class="text-xs font-weight-bold mb-0" style="color: #YOUR_COLOR_FOR_UNKNOWN_STATUS;">Status desconhecido</p>';
											}
											?>
										</h6>
									</div>

									<!-- Bloco Alterar Status -->
									<div class="d-flex flex-column justify-content-center">
										<h6 class="text-sm" style="margin-bottom: 5px;">Alterar Status</h6>
										<div class="d-flex justify-content-center">
											<!-- Nova div para envolver o formulário e o botão -->
											<form method="POST" id="form-subcategoria"
												action="../api/dona/alterarStatusD.php" onsubmit="showModal(event)"
												data-bs-toggle="modal" data-bs-target="#alteraStatusVendedora"
												class="mr-3">
												<input type="hidden" name="id"
													value="<?php echo $denuncia['idVendedora']; ?>">
												<input type="hidden" name="idDenuncia"
													value="<?php echo $denuncia['idDenuncia']; ?>">
												<button
													class="botaoTabela <?php echo $denuncia['statusVendedora'] ? 'ativado' : ''; ?>"
													type="submit"></button>
											</form>
										</div>
									</div>

								</div>



							</div>
						</section>


						<!-- Detalhes da Denúncia Section -->

					</div>
					<section class="sub-section" style="padding-bottom: 15px;">
						<div
							style="height: 40px; padding-top: 10px; padding-bottom: 10px; background-color: #971881; width: 100%; border-radius: 10px 10px 0 0!important;">
							<h2 class="text-xs text-secondary mb-0 textoVer"
								style="text-align: center; color: white!important; margin-left: 0; font-weight: 600;">
								Detalhes da Denúncia
							</h2>
						</div>

						<div class="d-flex flex-column" style="margin: 0px 30px 0px 30px;">
							<div class="d-flex flex-row justify-content-between">
								<div class="d-flex flex-column justify-content-center" style="flex: 1;">
									<h6 class="text-sm">Motivo da denúncia</h6>
									<h6 class="text-sm">
										<p class="text-xs text-secondary mb-0 textoVer">
											<?php
											switch($denuncia['motivoDenuncia']) {
												case 1:
													echo 'Propaganda enganosa';
													break;
												case 2:
													echo 'Assédio';
													break;
												case 3:
													echo 'Atividades ilegais';
													break;
												case 4:
													echo 'Ofensas';
													break;
												case 5:
													echo 'Falta de segurança';
													break;
												case 6:
													echo 'Falsidade ideológica';
													break;
												case 7:
													echo 'Problemas com pedido';
													break;
												case 8:
													echo 'Pedido não recebido';
													break;
												case 9:
													echo 'Cancelado após o pagamento';
													break;
												case 10:
													echo 'Pedido não entregue';
													break;
												case 11:
													echo 'Produto extraviado';
													break;
												case 12:
													echo 'Atraso na entrega';
													break;
												case 13:
													echo 'Envio incorreto';
													break;
												case 14:
													echo 'Mau atendimento';
													break;
												case 15:
													echo 'Problemas com reembolso';
													break;
												case 16:
													echo 'Outro motivo';
													break;
												default:
													echo 'Motivo desconhecido';
													break;
											}
											?>
										</p>
									</h6>
								</div>

								<div class="d-flex flex-column justify-content-center" style="flex: 1;">
									<h6 class="text-sm">Data da denúncia</h6>
									<h6 class="text-sm">
										<p class="text-xs text-secondary mb-0 textoVer">
											<?php
											$dataFormatada = date('d/m/Y', strtotime($denuncia['dataDenuncia']));
											echo $dataFormatada;
											?>

										</p>
									</h6>
								</div>

								<div class="d-flex flex-row justify-content-between" style="flex: 1;">

									<div class="d-flex align-items-center">
										<h6 class="text-sm" style="margin-right: 5px;">Status denúncia:</h6>

										<?php
										switch($denuncia['visualizadoDenuncia']) {
											case 1:
												echo '<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-patch-check" viewBox="0 0 16 16" style="color:#11ae70;">
                    <path fill-rule="evenodd" d="M10.354 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path>
                    <path d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911l-1.318.016z"></path>
                </svg>';
												echo '<p class="text-xs font-weight-bold mb-0" style="color:#11ae70;">Analisada</p>';
												break;
											case 0:
												echo '<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-patch-check" viewBox="0 0 16 16" style="color: #a30006; ">
                    <path fill-rule="evenodd" d="M10.354 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path>
                    <path d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911l-1.318.016z"></path>
                </svg>';
												echo '<p class="text-xs font-weight-bold mb-0" style="color: #a30006;">Análise Pendente</p>';
												break;
											default:
												echo '<p class="text-xs font-weight-bold mb-0" style="color: #YOUR_COLOR_FOR_UNKNOWN_STATUS;">Status desconhecido</p>';
										}
										?>
									</div>


								</div>

							</div>

							<div class="d-flex flex-column">
								<div id="linha"></div>
								<h6 class="text-sm">Descrição da denúncia</h6>
								<p class="text-xs text-secondary mb-0 textoVer">
									<?php echo $denuncia['descricaoDenuncia']; ?>
								</p>
								<div class="d-flex justify-content-end"> <!-- Nova div para envolver o botão -->
									<form method="POST" id="form-subcategoria"
										action="../api/denuncia/alterarStatus.php" onsubmit="showModal(event)"
										data-bs-toggle="modal" data-bs-target="#denunAceita" class="mr-3">
										<input type="hidden" name="id" value="<?php echo $denuncia['idDenuncia']; ?>">
										<button
											class="botaoTabelaDenu <?php echo $denuncia['visualizadoDenuncia'] ? 'ativado' : ''; ?>"
											type="submit"></button>
									</form>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>

		<!-- Seta para subir a tela-->
		<a class="scroll-to-top rounded" href="#page-top">
			<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
				class="bi bi-arrow-up-short" viewBox="0 0 16 16">
				<path fill-rule="evenodd"
					d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z" />
			</svg>
		</a>

		<div class="modal pop" id="denunAceita" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado"
			aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="modal-title h3 mb-0 text-gray-800" id="TituloModalCentralizado"
							style="display: block; margin-left: auto; margin-right: auto;"><a
								href="denuncias.php">Status alterado</a></h3>
						<button type="button" class="close" data-bs-dismiss="modal" aria-label="Fechar">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<h5 style="text-align: center; font-weight: bold;">Alterando status da denúncia!</h5>
						<h6 style="text-align: center; font-weight: bold;">Aguarde!</h6>
						<div id="loading" style="display: none; text-align: center;">
							<div class="spinner-border" role="status">
							</div>
							<p>Carregando...</p>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="modal pop" id="alteraStatusCliente" tabindex="-1" role="dialog"
			aria-labelledby="TituloModalCentralizado" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="modal-title h3 mb-0 text-gray-800" id="TituloModalCentralizado"
							style="display: block; margin-left: auto; margin-right: auto;"><a
								href="denuncias.php">Status alterado</a></h3>
						<button type="button" class="close" data-bs-dismiss="modal" aria-label="Fechar">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<h5 style="text-align: center; font-weight: bold;">Alterando status da conta de Cliente!</h5>
						<h6 style="text-align: center; font-weight: bold;">Aguarde!</h6>
						<div id="loadingCliente" style="display: none; text-align: center;">
							<div class="spinner-border" role="status">
							</div>
							<p>Carregando...</p>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ok</button>
					</div>
				</div>
			</div>
		</div>



		<div class="modal pop" id="alteraStatusVendedora" tabindex="-1" role="dialog"
			aria-labelledby="TituloModalCentralizado" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="modal-title h3 mb-0 text-gray-800" id="TituloModalCentralizado"
							style="display: block; margin-left: auto; margin-right: auto;"><a
								href="denuncias.php">Status alterado</a></h3>
						<button type="button" class="close" data-bs-dismiss="modal" aria-label="Fechar">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<h5 style="text-align: center; font-weight: bold;">Alterando status da conta de Vendedora!</h5>
						<h6 style="text-align: center; font-weight: bold;">Aguarde!</h6>
						<div id="loadingVendedora" style="display: none; text-align: center;">
							<div class="spinner-border" role="status">
							</div>
							<p>Carregando...</p>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ok</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Seu script -->
		<script>
			// Função para exibir o botão de carregamento e fechar o modal após 3 segundos
			function fecharModalComTemporizador(modalId, loadingId) {
				$(loadingId).show(); // Mostra o botão de carregamento
				setTimeout(function () {
					$(modalId).modal('hide'); // Fecha o modal após 3 segundos
				}, 3500);
			}

			// Chama a função quando o primeiro modal é exibido
			$('#denunAceita').on('shown.bs.modal', function () {
				fecharModalComTemporizador('#denunAceita', '#loading');
			});

			// Chama a função quando o segundo modal é exibido
			$('#alteraStatusCliente').on('shown.bs.modal', function () {
				fecharModalComTemporizador('#alteraStatusCliente', '#loadingCliente');
			});

			// Chama a função quando o terceiro modal é exibido
			$('#alteraStatusVendedora').on('shown.bs.modal', function () {
				fecharModalComTemporizador('#alteraStatusVendedora', '#loadingVendedora');
			});
		</script>
		<!--LINKS-->
		<script src="..//vendor/jquery/jquery.min.js"></script>
		<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="../assets/js/sb-admin-2.min.js"></script>

</body>

</html>