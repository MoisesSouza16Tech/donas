<?php
include_once("validador.php");
include_once("global.php");

ini_set('display_errors', 0);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrin-to-fit=no">

	<title>Contas - Donas</title>

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
                <a class="nav-link" href="relatorios.php">
                <svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
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
				<a class="nav-link d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" href="contas.php">
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
						class="bi bi-person-fill" viewBox="0 0 16 16">
						<path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
					</svg>
					<span class="textoNav">Contas</span></a>
			</li>

			<hr class="sidebar-divider my-0">

			<li class="nav-item active">
				<a class="nav-link" href="denuncias.php">
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
						class="bi bi-flag" viewBox="0 0 16 16">
						<path
							d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12.435 12.435 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A19.626 19.626 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a19.587 19.587 0 0 0 1.349-.476l.019-.007.004-.002h.001M14 1.221c-.22.078-.48.167-.766.255-.81.252-1.872.523-2.734.523-.886 0-1.592-.286-2.203-.534l-.008-.003C7.662 1.21 7.139 1 6.5 1c-.669 0-1.606.229-2.415.478A21.294 21.294 0 0 0 3 1.845v6.433c.22-.078.48-.167.766-.255C4.576 7.77 5.638 7.5 6.5 7.5c.847 0 1.548.28 2.158.525l.028.01C9.32 8.29 9.86 8.5 10.5 8.5c.668 0 1.606-.229 2.415-.478A21.317 21.317 0 0 0 14 7.655V1.222z" />
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
		<!-- End of Sidebar -->


		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

				<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

					<!-- Sidebar Toggle (Topbar) -->
					<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
							class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
							<path
								d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
						</svg>
					</button>

					<!-- Topbar Search -->
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

					<!-- Topbar Navbar -->
					<ul class="navbar-nav ml-auto">

						<!-- Nav Item - Search Dropdown (Visible Only XS) -->
						<li class="nav-item dropdown no-arrow d-sm-none">
							<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
								data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-search fa-fw"></i>
							</a>
							<!-- Dropdown - Messages -->
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
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
                                    <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z" />
                                </svg>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter"><?php echo daoDenuncia::contarNotAdm() ?>+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerta Notificação
                                </h6>

                                <?php
                                $ultimasDenuncias = daoDenuncia::listarUltimasDenNaoVisualizadas();
                                $count = 0;
                                foreach ($ultimasDenuncias as $denuncia) :
                                    $denunciaNaoVisualizada = $denuncia['visualizadoDenuncia'] == 0;
                                    $style = $denunciaNaoVisualizada ? ' border-radius: 5px; background-color: #ffff;' : '';
                                    $hoverStyle = $denunciaNaoVisualizada ? 'border: 1px solid #971881; border-radius: 5px; background-color: #ffff; transition: all 0.3s;' : '';
                                ?>

                                    <a class="dropdown-item d-flex align-items-center" href="ver-mais-denu.php?id=<?php echo $denuncia['idDenuncia']; ?>" style="<?php echo $style; ?>" onmouseover="this.style='<?php echo $hoverStyle; ?>'" onmouseout="this.style='<?php echo $style; ?>'">
                                        <div class="mr-3">
                                            <div class="icon-circle bg-primary">
                                                <img class='rounded-circle imageDenunNot' src='../<?php echo $denuncia['fotoCliente'] ?>' alt=''>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="small text-gray-500">
                                                <?php echo date('d/m/Y', strtotime($denuncia['dataDenuncia'])); ?>
                                            </div>
                                            <span class="font-weight-bold">
                                                Denúncia não analisada de
                                                <?php echo $denuncia['nomeCliente']; ?>
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

						<!-- Nav Item - User Information -->
						<li class="nav-item dropdown no-arrow">
							<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
								data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="mr-2 d-none d-lg-inline text-gray-600 small">Heloisa Martins</span>
								<img class="img-profile rounded-circle" src="../assets/media/Adm-dash.jpg">
							</a>
							<!-- Dropdown - User Information -->
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

				<!-- Begin Page Content -->
				<div class="container-fluid">

					<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Contas</h1>
    <a href="gerar-relatorio-donas.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
             class="bi bi-files" viewBox="0 0 16 16">
            <path
                d="M13 0H6a2 2 0 0 0-2 2 2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 13V4a2 2 0 0 0-2-2H5a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1zM3 4a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4z" />
        </svg> Gerar Relatório
    </a>
</div>


					<div class="container-fluid py-4">
						<div class="row">
							<div class="col-12">
								<div class="card mb-4">

									<div class="card-body px-0 pt-0 pb-2">
									<div class="card-body px-0 pt-0 pb-2">
										<div class="input-group mb-3" style="
	margin-right: 15px;
	margin-top: 15px;
	margin-bottom: 15px;
	width: 50%;
	margin-left: 15px;
">
											<input type="text" class="form-control bg-light border-0 small"
												id="searchInput" placeholder="Procurar cliente...." aria-label="Search"
												aria-describedby="basic-addon2" style="
	border: 1px solid #971881!important;
	border-top-left-radius: 10px;
	border-top-right-radius: 0px;
	border-bottom-right-radius: 0px;
	border-bottom-left-radius: 10px;
">
											<div class="input-group-append">
												<button class="btn btn-primary" type="button" style="
">
													<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19"
														fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
														<path
															d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z">
														</path>
													</svg>
												</button>
											</div>
										</div>
									

									</div>
										<div class="table-responsive p-0">
											<table class="table align-items-center mb-0">
												<thead>
													<tr>
														<th class="text-uppercase lista">ID</th>
														<th class="text-uppercase lista">Nome</th>
														<th class="text-uppercase lista">Cadastrado</th>
														<th class="text-uppercase lista">Situação Conta</th>
														<th class="text-uppercase lista">Alterar</th>
													</tr>
												</thead>
												<tbody>
													<?php
													$clientes = daoCliente::listar();

													foreach ($clientes as $c) {
														?>
														<tr>
															<td class="align-middle text-center text-sm">
																<p>
																	<?php echo $c['idCliente'] ?>
																</p>
															</td>
															<td>
																<div class="d-flex px-2 py-1">
																	<div>
																		<img src="../<?php echo $c['fotoCliente'] ?>"
																			class="avatar avatar-sm me-3" alt="user6">
																	</div>
																	<div class="d-flex flex-column justify-content-center">
																		<h6 class="text-sm">
																			<?php echo $c['nomeCliente'] ?>
																		</h6>
																		<p class="text-xs text-secondary mb-0">
																			<?php echo $c['emailCliente'] ?>
																		</p>
																	</div>
																</div>
															</td>

															<td>
																<p class="text-xs font-weight-bold mb-0">Desde
																	<?php echo $c['dataCadastro'] ?>
																</p>
															</td>

															<td class="text-center align-middle"
																style="    text-align: center;">
																<?php
																switch ($c['statusConta']) {
																	case 1:
																		echo '<p class="text-xs font-weight-bold mb-0" style="color:#11ae70;">Desbloqueada</p>';
																		echo '<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-patch-check" viewBox="0 0 16 16" style="color:#11ae70;">
                <path fill-rule="evenodd" d="M10.354 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path>
                <path d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911l-1.318.016z"></path>
            </svg>';
																		break;
																	case 0:
																		echo '<p class="text-xs font-weight-bold mb-0" style="color: #a30006;">Bloqueada</p>';
																		echo '<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-patch-check" viewBox="0 0 16 16" style="color: #a30006; ">
                <path fill-rule="evenodd" d="M10.354 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path>
                <path d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911l-1.318.016z"></path>
            </svg>';
																		break;
																	default:
																		echo '<p class="text-xs font-weight-bold mb-0" style="color: #YOUR_COLOR_FOR_UNKNOWN_STATUS;">Status desconhecido</p>';
																}
																?>
															</td>




															<form method="POST" id="form-subcategoria" action="../api/cliente/alterarStatus.php" onsubmit="showModal(event)" data-bs-toggle="modal"
																data-bs-target="#alteraStatusVendedora" class="mr-3">
																<input type="hidden" name="id"
																	value="<?php echo $c['idCliente']; ?>">
																<td class="align-middle text-center">
																	<button
																		class="botaoTabela <?php echo $c['statusConta'] ? 'ativado' : ''; ?>"
																		type="submit">
																	</button>
																</td>
															</form>
															
															</td>
														</tr>
														<?php
													}
													?>

												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
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
						<h3 class="modal-title h3 mb-0 text-gray-800"
							style="display: block; text-align: center;"><a
								href="">Alteração de Status</a></h3>
						<button type="button" class="close" data-bs-dismiss="modal" aria-label="Fechar">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<h5 style="text-align: center; font-weight: bold;">Alterando status de Cliente!</h5>
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
		<script>
    // Função para exibir o modal
    function showModal() {
        $('#denunAceita').modal('show');
    }

    // Função para fechar o modal com temporizador
    function fecharModalComTemporizador(modalId, loadingId) {
        $(loadingId).show(); // Mostra o botão de carregamento
        setTimeout(function () {
            $(modalId).modal('hide'); // Fecha o modal após 3 segundos
        }, 3500);
    }

    // Chama a função quando o modal é exibido
    $('#denunAceita').on('shown.bs.modal', function () {
        fecharModalComTemporizador('#denunAceita', '#loading');
    });

    // Se você tiver outros modais, adicione eventos semelhantes aqui...

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
		<script>
			document.getElementById('alterarStatusBtn').addEventListener('click', function () {
				// Altera a classe 'ativado' dinamicamente
				this.classList.toggle('ativado');
			});
		</script>
			<script>
		$(document).ready(function () {
			$("#searchInput").on("keyup", function () {
				var value = $(this).val().toLowerCase();
				$("tbody tr").filter(function () {
					$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
				});
			});
		});


	</script>

</body>

</html>