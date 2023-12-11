<?php include_once("validador.php");
require_once "global.php";

ini_set('display_errors', 0);
error_reporting(E_ALL);

// Verificar se o ID foi passado pela URL
if (isset($_GET['id'])) {
	$idDenuncia = $_GET['id'];

	// Consultar o banco de dados para obter as informações da denúncia com o ID fornecido
	$denuncia = daoDenuncia::obterPorId($idDenuncia);

	// Agora você pode usar as informações da denúncia na página
} else {
	// Se o ID não foi passado, redirecione ou manipule a situação de acordo com sua lógica
	header('Location: denuncias.php');
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

	<link href="../assets/css/styles-dash.css" rel="stylesheet">


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

						<li class="nav-item dropdown no-arrow mx-1">
							<a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
								data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
									class="bi bi-bell-fill" viewBox="0 0 16 16">
									<path
										d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z" />
								</svg>

								<span class="badge badge-danger badge-counter">1+</span>
							</a>

							<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
								aria-labelledby="alertsDropdown">
								<h6 class="dropdown-header">
									Alerta Notificação
								</h6>
								<a class="dropdown-item d-flex align-items-center" href="#">
									<div class="mr-3">
										<div class="icon-circle bg-primary">
											<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
												fill="currentColor" class="bi bi-chat-left-text" viewBox="0 0 16 16">
												<path
													d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
												<path
													d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
											</svg>
										</div>
									</div>
									<div>
										<div class="small text-gray-500">12/06/2023</div>
										<span class="font-weight-bold">Nova denúncia de Ana Clara Rocha</span>
									</div>
								</a>
								<a class="dropdown-item text-center small text-gray-500" href="#">Ver Mais</a>
							</div>
						</li>

						<!-- Nav Item - Messages -->
						<li class="nav-item dropdown no-arrow mx-1">
							<a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
								data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
									class="bi bi-chat-right-fill" viewBox="0 0 16 16">
									<path
										d="M14 0a2 2 0 0 1 2 2v12.793a.5.5 0 0 1-.854.353l-2.853-2.853a1 1 0 0 0-.707-.293H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12z" />
								</svg>
								<!-- Counter - Messages -->
								<span class="badge badge-danger badge-counter">1</span>
							</a>
							<!-- Dropdown - Messages -->
							<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
								aria-labelledby="messagesDropdown">
								<h6 class="dropdown-header">
									Novas Mensagens
								</h6>
								<a class="dropdown-item d-flex align-items-center" href="#">
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
						</li>

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

						<h3 class="h3 mb-0 text-gray-800"><a href="denuncias.php">Denúncias</a> | Detalhes da denúncia
						</h3>
						<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><svg
								xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
								class="bi bi-files" viewBox="0 0 16 16">
								<path
									d="M13 0H6a2 2 0 0 0-2 2 2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 13V4a2 2 0 0 0-2-2H5a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1zM3 4a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4z" />
							</svg> Gerar Relatório</a>
					</div>

					<br>

					<div class="row justify-content-center">

						<div class="d-flex px-2 py-1">
							<div class="d-flex flex-column justify-content-center">
								<p class="text-xs text-secondary mb-0 textoVer">Delator(a)</p>
								<div style="display: flex; align-items: center;">
									<!-- Adicione a tag img para a foto do delator -->
									<img src="../<?php echo $denuncia['fotoCliente']; ?>" alt="Foto do Delator"
										style="width: 30px; height: 30px; border-radius: 10px; margin-right: 3px;">

									<h6 class="text-sm">
										<?php echo $denuncia['nomeCliente']; ?>
									</h6>
								</div>
								<div id="linha"></div>
							</div>
						</div>

						<div class="d-flex px-2 py-1">
							<div class="d-flex flex-column justify-content-center">
								<p class="text-xs text-secondary mb-0 textoVer">E-mail Delator(a)</p>
								<h6 class="text-sm">
									<?php echo $denuncia['emailCliente']; ?>
								</h6>
								<div id="linha"></div>
							</div>
						</div>
						<div class="d-flex px-2 py-1">
							<div class="d-flex flex-column justify-content-center">
								<p class="text-xs text-secondary mb-0 textoVer">Status Delator(a)</p>
								<h6 class="text-sm">
									<!--ID(<php echo $denuncia['idCliente']; ?>) -->
									<?php
									switch ($denuncia['statusConta']) {
										case 0:
											echo '<p class="text-xs font-weight-bold mb-0" style="color: #a30006; font-size: .99rem;">Bloqueado</p>';
											break;
										case 1:
											echo '<p class="text-xs font-weight-bold mb-0" style="color: #11ae70; font-size: .99rem;">Desbloqueado</p>';
											break;
										default:
											echo '<p class="text-xs font-weight-bold mb-0" style="color: #YOUR_COLOR_FOR_UNKNOWN_STATUS; font-size: .99rem;">Desconhecido</p>';
									}
									?>
								</h6>
								<div id="linha"></div>
							</div>
						</div>

					</div>

					<br>

					<div class="row justify-content-center">

						<div class="d-flex px-2 py-1">
							<div class="d-flex flex-column justify-content-center">
								<p class="text-xs text-secondary mb-0 textoVer">Empresa denunciada</p>
								<h6 class="text-sm">
									<?php echo $denuncia['nomeNegocioVendedora']; ?>
								</h6>
								<div id="linha"></div>
							</div>
						</div>
						<div class="d-flex px-2 py-1">

							<div class="d-flex flex-column justify-content-center">
								<p class="text-xs text-secondary mb-0 textoVer">Nome Vendedora</p>
								<h6 class="text-sm">
									<!--<php echo $denuncia['idVendedora']; ?>-->
									<?php echo $denuncia['nomeVendedora']; ?>
								</h6>
								<div id="linha"></div>
							</div>
						</div>

						<div class="d-flex px-2 py-1">
							<div class="d-flex flex-column justify-content-center">
								<p class="text-xs text-secondary mb-0 textoVer">Status Denunciado</p>
								<h6 class="text-sm">
									<!--ID(<php echo $denuncia['idCliente']; ?>) -->
									<?php
									switch ($denuncia['statusVendedora']) {
										case 0:
											echo '<p class="text-xs font-weight-bold mb-0" style="color: #a30006; font-size: .99rem;">Bloqueado</p>';
											break;
										case 1:
											echo '<p class="text-xs font-weight-bold mb-0" style="color: #11ae70; font-size: .99rem;">Desbloqueado</p>';
											break;
										default:
											echo '<p class="text-xs font-weight-bold mb-0" style="color: #YOUR_COLOR_FOR_UNKNOWN_STATUS; font-size: .99rem;">Desconhecido</p>';
									}
									?>
								</h6>
								<div id="linha"></div>
							</div>
						</div>
					</div>

					<br>
					<div class="row justify-content-center">
						<div class="d-flex px-2 py-1">
							<div class="d-flex flex-column justify-content-center">
								<p class="text-xs text-secondary mb-0 textoVer">Data denúncia</p>
								<h6 class="text-sm">
									<?php echo $denuncia['dataDenuncia']; ?>
								</h6>
								<div id="linha"></div>
							</div>
						</div>

						<div class="d-flex px-2 py-1">
							<div class="d-flex flex-column justify-content-center">
								<p class="text-xs text-secondary mb-0 textoVer">Categoria da denúncia</p>
								<h6 class="text-sm">
									<?php
									switch ($denuncia['motivoDenuncia']) {
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
								</h6>
								<div id="linha"></div>
							</div>
						</div>

						<div class="d-flex px-2 py-1">
							<div class="d-flex flex-column justify-content-center">
								<p class="text-xs text-secondary mb-0 textoVer">Status Denúncia</p>
								<h6 class="text-sm">
									<!--ID(<php echo $denuncia['idCliente']; ?>) -->
									<?php
									switch ($denuncia['visualizadoDenuncia']) {
										case 0:
											echo '<p class="text-xs font-weight-bold mb-0" style="color: #a30006; font-size: .99rem;">A Revisar</p>';
											break;
										case 1:
											echo '<p class="text-xs font-weight-bold mb-0" style="color: #11ae70; font-size: .99rem;">Analisado</p>';
											break;
										default:
											echo '<p class="text-xs font-weight-bold mb-0" style="color: #YOUR_COLOR_FOR_UNKNOWN_STATUS; font-size: .99rem;">Desconhecido</p>';
									}
									?>
								</h6>
								<div id="linha"></div>
							</div>
						</div>
					</div>
					<br>
					<div class="row justify-content-center">
						<div class="d-flex px-2 py-1">

							<div class="d-flex flex-column justify-content-center">
								<p class="text-xs text-secondary mb-0 textoVer">Descrição</p>
								<h6 class="text-sm" style="text-align: center;">
									<?php echo $denuncia['descricaoDenuncia']; ?>
								</h6>
								<div id="linhaG"></div>
							</div>
						</div>
					</div>

					<br>

					<div class="row justify-content-center">
						<form method="POST" id="form-subcategoria" action="../api/denuncia/alterarStatus.php"
							onsubmit="showModal(event)" data-bs-toggle="modal" data-bs-target="#denunAceita"
							class="mr-3">
							<input type="hidden" name="id" value="<?php echo $denuncia['idDenuncia']; ?>">
							<button
								class="botaoTabelaDenu <?php echo $denuncia['visualizadoDenuncia'] ? 'ativado' : ''; ?>"
								type="submit"></button>
						</form>

						<form method="POST" id="form-subcategoria" action="../api/dona/alterarStatusD.php"
							onsubmit="showModal(event)" data-bs-toggle="modal" data-bs-target="#alteraStatusVendedora"
							class="mr-3">
							<input type="hidden" name="id" value="<?php echo $denuncia['idVendedora']; ?>">
							<button class="botaoTabela <?php echo $denuncia['statusVendedora'] ? 'ativado' : ''; ?>"
								type="submit"> VENDEDORA</button>
						</form>
						<form method="POST" id="form-subcategoria" action="../api/cliente/alterarStatusD.php"
							onsubmit="showModal(event)" data-bs-toggle="modal" data-bs-target="#alteraStatusCliente"
							class="mr-3">
							<input type="hidden" name="idCliente" value="<?php echo $denuncia['idCliente']; ?>">
							<input type="hidden" name="idDenuncia" value="<?php echo $denuncia['idDenuncia']; ?>">
							<button class="botaoTabela <?php echo $denuncia['statusConta'] ? 'ativado' : ''; ?>"
								type="submit"> CLIENTE</button>
						</form>

					</div>


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