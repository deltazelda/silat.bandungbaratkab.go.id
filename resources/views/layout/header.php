<body class="">
	<div class="wrapper ">
		<div class="sidebar" data-color="azure" data-background-color="white" data-image="assets/img/sidebar-4.jpg">
			<!--
				Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

				Tip 2: you can also add an image using data-image tag
			-->
			<div class="logo">		
				<a href="<?php echo $linkApp; ?>" class="simple-text logo-mini">
				  <img src="<?php echo $LogoDPMPTSP; ?>" alt="Smiley face" height=<?php echo $heightLogo; ?> width=<?php echo $widthLogo; ?>>
				</a>
			</div>
			<div class="sidebar-wrapper">
				<div id="accordion">
					<ul class="nav">
						<li class="nav-item active">
							<a class="nav-link" href="./index">
								<i class="material-icons">dashboard</i>
								<p>Dashboard</p>
							</a>
						</li>
						
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuSuratMasuk" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="material-icons">ballot</i>
								<p> </p>
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuSuratMasuk">
								<?php 
								if($login == true){ 
									if(($_SESSION['dpmptsp_jenis_user'] == 'Administrator')||($_SESSION['dpmptsp_jenis_user'] == 'Operator')||($_SESSION['dpmptsp_jenis_user'] == 'Tata Usaha')){ ?>	
									<a class="dropdown-item" href="./buatsurat?zlD4=PrdSE1">
										<i class="material-icons">loupe</i>
										Buat Surat
									</a>
									<a class="dropdown-item" href="./listmail?zlD4=PrdSE1">
										<i class="material-icons">mail</i>
										Daftar Surat
									</a>
									<?php } ?>
									<a class="dropdown-item" href="./todolist?zlD4=PrdSE1">
										<i class="material-icons">markunread_mailbox</i>
										To-Do List
									</a>
									<a class="dropdown-item" href="./ekspedisisurat?zlD4=PrdSE1">
										<i class="material-icons">shutter_speed</i>
										Monitoring
									</a>
								<?php } ?>
							</div>
						</li>
						
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuSuratKeluar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="material-icons">ballot</i>
								<p>Surat Keluar</p>
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuSuratKeluar">
								<?php 
								if($login == true){ 
									?>	
									<a class="dropdown-item" href="./buatsurat?zlD4=PrdSE2">
										<i class="material-icons">loupe</i>
										Buat Surat
									</a>
									<a class="dropdown-item" href="./listmail?zlD4=PrdSE2">
										<i class="material-icons">mail</i>
										Daftar Surat
									</a>
									<a class="dropdown-item" href="./todolist?zlD4=PrdSE2">
										<i class="material-icons">markunread_mailbox</i>
										To-Do List
									</a>
									<a class="dropdown-item" href="./ekspedisisurat?zlD4=PrdSE2">
										<i class="material-icons">shutter_speed</i>
										Monitoring
									</a>
								<?php } ?>
							</div>
						</li>