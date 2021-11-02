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
                                    <input type="hidden" class="form-control" name="id" value="<?= $users['id'] ?>">
                                    <input type="text" class="form-control" name="siswa" value="<?= $users['name'] ?>">
                                    <?= form_error('siswa', '<small class="text-danger">', '</small>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Nomor Induk</label>
                                    <input type="text" class="form-control" name="no_induk_siswa" value="<?= $users['no_induk_siswa'] ?>">
                                    <?= form_error('no_induk_siswa', '<small class="text-danger">', '</small>') ?>
                                </div>

                                <?php
                                // var_dump($kelas);
                                // die;
                                ?>
                                <div class="form-group">
                                    <label>Kelas</label>
                                    <select name="kelas" class="form-control select2" required="required">
                                        <option disabled selected value> -- Pilih Kelas -- </option>

                                        <?php foreach ($kelas as $row) : ?>
                                            <?php
                                            // var_dump($row);
                                            // die;
                                            ?>
                                            <?php if ($row['nama_kelas'] == $users['kelas']) : ?>
                                                <option value="<?= $row['nama_kelas'] ?>" selected><?= $row['nama_kelas'] ?></option>
                                            <?php else : ?>
                                                <option value="<?= $row['nama_kelas'] ?>"><?= $row['nama_kelas'] ?></option>
                                            <?php endif ?>
                                        <?php endforeach ?>
                                    </select>
                                    <?= form_error('kelas', '<small class="text-danger">', '</small>') ?>
                                    <div class="box-header with-border">
                                        <button type="submit" class="btn btn-primary btn-md">Simpan</button>
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