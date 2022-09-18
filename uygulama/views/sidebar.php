<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="./">
		<div class="sidebar-brand-icon rotate-n-15">
			<i class="fas fa-tools"></i>
		</div>
		<div class="sidebar-brand-text mx-3">Yönetici Paneli<sup>v2</sup></div>
	</a>
	<?php if ($this->session->userdata('oturum_var')) { ?>
		<!-- Divider -->
		<hr class="sidebar-divider my-0">

		<!-- Nav Item - Dashboard -->
		<li class="nav-item active">
			<a class="nav-link" href="./">
				<i class="fas fa-fw fa-tachometer-alt"></i>
				<span>Anasayfa</span></a>
		</li>

		<!-- Divider -->
		<hr class="sidebar-divider">

		<!-- Heading -->
		<div class="sidebar-heading">
			Doküman Yönetimi
		</div>

		<!-- Nav Item - Pages Collapse Menu -->
		<li class="nav-item">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDokuman"
			   aria-expanded="true" aria-controls="collapseDokuman">
				<i class="fas fa-fw fa-file-alt"></i>
				<span>Dokümanlar </span>
			</a>
			<div id="collapseDokuman" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
				<div class="bg-white py-2 collapse-inner rounded">
					<h6 class="collapse-header">Dokümanlar:</h6>
					<a class="collapse-item" href="dokumanlar/dokuman-kategorileri">Doküman Kategorileri</a>
					<a class="collapse-item" href="dokumanlar/dokuman-turleri">Doküman Türleri</a>
					<a class="collapse-item" href="dokumanlar/vitrin-dokumanlari">Vitrin Dokümanları</a>
					<a class="collapse-item" href="dokumanlar/gonderilen-dokumanlar">Vitrin Dokümanları</a>

				</div>
			</div>
		</li>


		<!-- Divider -->
		<hr class="sidebar-divider">

		<!-- Heading -->
		<div class="sidebar-heading">
			Haberler - Duyurular
		</div>

		<!-- Nav Item - Pages Collapse Menu -->
		<li class="nav-item">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseHaberDuyuru"
			   aria-expanded="true" aria-controls="collapseHaberDuyuru">
				<i class="fas fa-fw fa-bullhorn"></i>
				<span>Haberler - Duyurular</span>
			</a>
			<div id="collapseHaberDuyuru" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
				<div class="bg-white py-2 collapse-inner rounded">
					<h6 class="collapse-header">Haberler - Duyurular</h6>
					<a class="collapse-item" href="haber-duyuru/haberler">Haberler</a>
					<a class="collapse-item" href="haber-duyuru/duyurular">Duyurular</a>

				</div>
			</div>
		</li>
		<!-- Divider -->
		<hr class="sidebar-divider">

		<!-- Heading -->
		<div class="sidebar-heading">
			Reklamlar
		</div>

		<!-- Nav Item - Utilities Collapse Menu -->
		<li class="nav-item">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseReklamlar"
			   aria-expanded="true" aria-controls="collapseReklamlar">
				<i class="fas fa-fw fa-ad"></i>
				<span>Reklamlar</span>
			</a>
			<div id="collapseReklamlar" class="collapse" aria-labelledby="headingUtilities"
				 data-parent="#accordionSidebar">
				<div class="bg-white py-2 collapse-inner rounded">
					<h6 class="collapse-header">Reklamlar</h6>
					<a class="collapse-item" href="reklamlar/ddy-reklamlar">DDY Reklamlar</a>
					<a class="collapse-item" href="reklamlar/ddy-bannerlar">DDY Bannerlar</a>
					<a class="collapse-item" href="reklamlar/anasayfa-kucuk-reklam">Anasayfa Küçük Reklam</a>
					<a class="collapse-item" href="reklamlar/son-eklenen-reklamlar">Son Eklenen Reklamlar</a>

				</div>
			</div>
		</li>


		<!-- Divider -->
		<hr class="sidebar-divider">

		<!-- Heading -->
		<div class="sidebar-heading">
			Kampanyalar
		</div>

		<!-- Nav Item - Utilities Collapse Menu -->
		<li class="nav-item">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseKampanyalar"
			   aria-expanded="true" aria-controls="collapseKampanyalar">
				<i class="fas fa-fw fa-percent"></i>
				<span>Kampanyalar</span>
			</a>
			<div id="collapseKampanyalar" class="collapse" aria-labelledby="headingUtilities"
				 data-parent="#accordionSidebar">
				<div class="bg-white py-2 collapse-inner rounded">
					<h6 class="collapse-header">Kampanyalar</h6>
					<a class="collapse-item" href="kampanyalar/kampanya-turleri">Kampanya Türleri</a>
					<a class="collapse-item" href="kampanyalar/kampanya-katilimlari">Kampanya Katılımları</a>
					<a class="collapse-item" href="kampanyalar/kampanya-banneri">Kampanya Bannerı</a>

				</div>
			</div>
		</li>

		<!-- Divider -->
		<hr class="sidebar-divider">


		<!-- Nav Item - Uyeler -->
		<li class="nav-item">
			<a class="nav-link" href="uyeler">
				<i class="fas fa-fw fa-users"></i>
				<span>Üyeler</span></a>
		</li>

		<!-- Nav Item - Ayarlar -->
		<li class="nav-item">
			<a class="nav-link" href="ayarlar">
				<i class="fas fa-fw fa-wrench"></i>
				<span>Ayarlar</span></a>
		</li>

		<!-- Divider -->
		<hr class="sidebar-divider">

		<!-- Nav Item - Ayarlar -->
		<li class="nav-item">
			<a class="nav-link" href="raporlar">
				<i class="fas fa-fw fa-file-alt"></i>
				<span>Raporlar</span></a>
		</li>

		<!-- Divider -->
		<hr class="sidebar-divider d-none d-md-block">

		<!-- Sidebar Toggler (Sidebar) -->
		<div class="text-center d-none d-md-inline">
			<button class="rounded-circle border-0" id="sidebarToggle"></button>
		</div>

		<?php /*
		<!-- Sidebar Message -->
		<div class="sidebar-card d-none d-lg-flex">
			<img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
			<p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
			<a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
		</div>
  */ ?>
	<?php } ?>
</ul>
<!-- End of Sidebar -->


