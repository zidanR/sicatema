<?php if (!defined('BASEPATH')) exit('No direct script acess allowed'); ?>
<div class="content-wrapper">
	<section class="content-header">
		<h1>
			<i class="fa fa-edit" style="color:green"> </i> <?= $title_web; ?>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i>&nbsp; Dashboard</a></li>
			<li class="active"><i class="fa fa-file-text"></i>&nbsp; <?= $title_web; ?></li>
		</ol>
	</section>
	<div class="box-body">
		<br />
		<div class="table-responsive">
			<div class="container mt-3">
				<div class="row justify-content-center">
					<div class="col-md-8">
						<form action="" method="post">
							<div class="card">
								<div class="card-header">
									Tambahkan Data Siswa
								</div>
								<div class="form-group">
									<label>Nama Siswa</label>
									<input type="text" class="form-control" name="siswa" placeholder="Nama Siswa">
									<?= form_error('siswa', '<small class="text-danger">', '</small>') ?>
								</div>
								<div class="form-group">
									<label>Nomor Induk</label>
									<input type="text" class="form-control" name="no_induk_siswa" placeholder="No Induk Siswa">
									<?= form_error('no_induk_siswa', '<small class="text-danger">', '</small>') ?>
								</div>
								<div class="form-group">
									<label>Kelas</label>
									<select name="kelas" class="form-control select2" required="required">
										<option disabled selected value> -- Pilih Kelas -- </option>

										<?php foreach ($users as $row) : ?>
											<option value="<?= $row->kelas ?>"><?= $row->kelas ?></option>
										<?php endforeach ?>
									</select>
									<div class="box-header with-border">
										<input type="hidden" name="tambah" value="tambah">
										<button type="submit" class="btn btn-primary btn-md">Submit</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>