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
    <section class="content">
        <?php if (!empty($this->session->flashdata())) {
            echo $this->session->flashdata('pesan');
        } ?>
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border"><?php if ($this->session->userdata('level') == 'Petugas') { ?>
                            <a href="transaksi/pinjam"><button class="btn btn-primary">
                                    <i class="fa fa-plus"> </i> Tambah Pinjam</button></a><?php } ?>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <br />
                        <div class="table-responsive">
                            <div class="container mt-3">
                                <div class="row justify-content-center">
                                    <div class="col-md-8">
                                        <div class="card">
                                            <div class="card-header">
                                                Edit Multiple Data
                                            </div>
                                            <form method="post" action="<?= base_url('multiple/approval/' . $get_id) ?>">
                                                <div class="card-body">
                                                    <table class="table table-striped">
                                                        <tr>
                                                            <th>NIS</th>
                                                            <th>Nama</th>
                                                            <th>Status</th>
                                                        </tr>
                                                        <?php
                                                        // var_dump($get_id);
                                                        // die;
                                                        // $i = 1;
                                                        // var_dump($users->name);
                                                        // die;

                                                        ?>
                                                        <input type="hidden" name="name" value="<?= $users->name ?>">
                                                        <tr>
                                                            <td><?= $users->no_induk_siswa ?></td>
                                                            <td><?= $users->name ?></td>
                                                            <td>
                                                                <?php if ($users->status == 0) : ?>
                                                                    <span style="color: #FFFFFF; background-color:#009111" class="badge badge-success badge-pills">Default</span>
                                                                <?php elseif ($users->staus == 1) : ?>
                                                                    <span style="color: #FFFFFF; background-color:red" class="badge badge-danger badge-pills">Terlambat</span>
                                                                <?php else : ?>
                                                                    <span class="badge badge-secondary badge-pills">Pending</span>
                                                                <?php endif ?>
                                                                <!-- <?= $users->status ?> -->
                                                            </td>
                                                        </tr>

                                                    </table>
                                                </div>
                                                <div class="card-footer text-right">
                                                    <a href="<?= base_url('multiple') ?>" class="btn btn-secondary">Kembali</a>
                                                    <button type="submit" class="btn btn-danger">Terlambat</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>