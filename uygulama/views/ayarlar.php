<div class="col-lg-12 col-md-12">
	<?php echo $this->session->flashdata('guncelleme_durumu'); ?>
</div>

<div class="col-lg-6 col-md-6">
	<div class="card shadow mb-4">
		<div class="card-header py-3 collapse show">
			<a href="#collapseCardGenel" class="d-block card-header py-3" data-toggle="collapse" role="button"
			   aria-expanded="false" aria-controls="collapseCardGenel">
				<h6 class="m-0 font-weight-bold text-primary">Genel Ayarlar</h6>
			</a>

		</div>
		<div class="card-body" id="collapseCardGenel">
			<table class="table table-striped" id="ayarTableGenel">
				<thead>
				<tr>
					<th>Ayar</th>
					<th>Değer</th>
					<th>İşlem</th>
				</tr>
				</thead>
				<tbody>
				<?php foreach ($genel as $value): ?>
					<tr>
						<td id="cell-<?php echo $value->id ?>-ayar"><?php echo $value->ayar; ?></td>
						<td id="cell-<?php echo $value->id ?>-deger"><?php echo $value->deger; ?></td>
						<td>
							<button id="guncelle-ayar-<?php echo $value->id ?>" class="btn btn-sm btn-primary"
									data-toggle="tooltip" data-placement="top" data-id="<?php echo $value->id ?>"
									title="Düzenlemek için tıklayın." data-toggle="modal"
									data-target=".kayit-guncelle-modal-lg">
								<i class="fa fa-pencil-alt"></i>
							</button>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<div class="col-lg-6 col-md-6">
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<a href="#collapseCardSite" class="d-block card-header py-3" data-toggle="collapse" role="button"
			   aria-expanded="false" aria-controls="collapseCardSite">
				<h6 class="m-0 font-weight-bold text-primary">Site Ayarları</h6>
			</a>

		</div>
		<div class="card-body" id="collapseCardSite">
			<table class="table table-striped" id="ayarTableSite">
				<thead>
				<tr>
					<th>Ayar</th>
					<th>Değer</th>
					<th>İşlem</th>
				</tr>
				</thead>
				<tbody>
				<?php foreach ($site1 as $value): ?>
					<tr>
						<td id="cell-<?php echo $value->id ?>-ayar"><?php echo $value->ayar; ?></td>
						<td id="cell-<?php echo $value->id ?>-deger"><?php echo $value->deger; ?></td>
						<td>
							<button id="guncelle-ayar-<?php echo $value->id ?>" class="btn btn-sm btn-primary"
									data-toggle="tooltip" data-placement="top" data-id="<?php echo $value->id ?>"
									title="Düzenlemek için tıklayın." data-toggle="modal"
									data-target=".kayit-guncelle-modal-lg">
								<i class="fa fa-pencil-alt"></i>
							</button>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<div class="col-lg-6 col-md-6">
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<a href="#collapseCardSocials" class="d-block card-header py-3" data-toggle="collapse" role="button"
			   aria-expanded="false" aria-controls="collapseCardSocials">
				<h6 class="m-0 font-weight-bold text-primary">Sosyal Medya Hesap Ayarlar</h6>
			</a>

		</div>
		<div class="card-body" id="collapseCardSocials">
			<div class="card-body">
				<table class="table table-striped" id="ayarTableSocials">
					<thead>
					<tr>
						<th>Ayar</th>
						<th>Değer</th>
						<th>İşlem</th>
					</tr>
					</thead>
					<tbody>
					<?php foreach ($socials as $value): ?>
						<tr>
							<td id="cell-<?php echo $value->id ?>-ayar"><?php echo $value->ayar; ?></td>
							<td id="cell-<?php echo $value->id ?>-deger"><?php echo $value->deger; ?></td>
							<td>
								<button id="guncelle-ayar-<?php echo $value->id ?>" class="btn btn-sm btn-primary"
										data-toggle="tooltip" data-placement="top" data-id="<?php echo $value->id ?>"
										title="Düzenlemek için tıklayın." data-toggle="modal"
										data-target=".kayit-guncelle-modal-lg">
									<i class="fa fa-pencil-alt"></i>
								</button>
							</td>
						</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="col-lg-6 col-md-6">
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<a href="#collapseCardText" class="d-block card-header py-3" data-toggle="collapse" role="button"
			   aria-expanded="false" aria-controls="collapseCardText">
				<h6 class="m-0 font-weight-bold text-primary">Text Ayarlar</h6>
			</a>

		</div>
		<div class="card-body" id="collapseCardText">
			<table class="table table-striped" id="ayarTableText">
				<thead>
				<tr>
					<th>Ayar</th>
					<th>Değer</th>
					<th>İşlem</th>
				</tr>
				</thead>
				<tbody>
				<?php foreach ($text as $value): ?>
					<tr>
						<td id="cell-<?php echo $value->id ?>-ayar"><?php echo $value->ayar; ?></td>
						<td id="cell-<?php echo $value->id ?>-deger"><?php echo $value->deger; ?></td>
						<td>
							<button id="guncelle-ayar-<?php echo $value->id ?>" class="btn btn-sm btn-primary"
									data-toggle="tooltip" data-placement="top" data-id="<?php echo $value->id ?>"
									title="Düzenlemek için tıklayın." data-toggle="modal"
									data-target=".kayit-guncelle-modal-lg">
								<i class="fa fa-pencil-alt"></i>
							</button>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<div class="col-lg-6 col-md-6">
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<a href="#collapseCardDin" class="d-block card-header py-3" data-toggle="collapse" role="button"
			   aria-expanded="false" aria-controls="collapseCarddin">
				<h6 class="m-0 font-weight-bold text-primary">Din Dersi Yayınları Ayarları</h6>
			</a>

		</div>
		<div class="card-body" id="collapseCardDin">
			<table class="table table-striped" id="ayarTableDin">
				<thead>
				<tr>
					<th>Ayar</th>
					<th>Değer</th>
					<th>İşlem</th>
				</tr>
				</thead>
				<tbody>
				<?php foreach ($din as $value): ?>
					<tr>
						<td><?php echo $value->ayar; ?></td>
						<td><?php echo $value->deger; ?></td>
						<td>
							<button id="guncelle-ayar-<?php echo $value->id ?>" class="btn btn-sm btn-primary"
									data-toggle="tooltip" data-placement="top" data-id="<?php echo $value->id ?>"
									title="Düzenlemek için tıklayın.">
								<i class="fa fa-pencil-alt"></i>
							</button>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>


<div class="modal fade  kayit-guncelle-modal-lg" id="kayit-guncelle-modal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Kayıt Güncelle</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Kapat">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="container">
					<form id="form-ayar-guncelle" method="post" action="ayarlar/ayar_guncelle">
						<label for="deger">Güncellenecek Bilgi: <b id="b-ayar-adi"></b></label>
						<input name="deger" id="modal-form-text" type="text" class="form-control form-control-lg"
							   required/>
						<input name="id" id="modal-form-hidden" type="hidden"/>
					</form>
				</div>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" id="btn-modal-guncelle">Güncelle</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">İptal</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" charset="utf8"
		src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
<script>
	$(function () {


		$('#ayarTableDin, #ayarTableGenel , #ayarTableSite, #ayarTableSocials, #ayarTableText').DataTable();

		$("button[id^='guncelle-ayar-']").click(function () {
			let $ayar = $("#cell-" + $(this).attr("data-id") + "-ayar").text();
			let $deger = $("#cell-" + $(this).attr("data-id") + "-deger").text();
			//console.log($metin);
			$("#modal-form-text").val($deger);
			$("#modal-form-hidden").val($(this).attr("data-id"));
			$("#b-ayar-adi").text($ayar);
			$("#kayit-guncelle-modal").modal();

		});

		$('#btn-modal-guncelle').click(function () {
			$('form#form-ayar-guncelle').submit();
		});
	})
</script>


