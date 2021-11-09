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
                    <!-- <div class="box-header with-border"><?php if ($this->session->userdata('level') == 'Petugas') { ?>
                            <a href="transaksi/pinjam"><button class="btn btn-primary">
                                    <i class="fa fa-plus"> </i> Tambah Pinjam</button></a><?php } ?> -->

                </div>
                <!-- /.box-header -->

                <body>
                    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                        <div class="container">
                            <!-- <a class="navbar-brand" href="#"></a> -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <!-- <ul class="navbar-nav ml-auto">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><i class="fa fa-home"></i>Table</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><i class="fa fa-tasks"></i>Form</a>
                                        </li>
                                    </ul> -->
                            </div>
                        </div>
                    </nav>
                    <div class="container mt-3">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">
                                        Data Siswa
                                    </div>
                                    <div class="col-md-12">
                                        <?php
                                        $pesan = $this->session->flashdata('pesan');
                                        if ($pesan) {
                                        ?>
                                            <div class="alert alert-success">
                                                <?= $pesan ?>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-striped">
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>No Induk Siswa</th>
                                                <th>Kelas</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            <?php
                                            $i = 1;

                                            foreach ($users as $row) {
                                            ?>
                                                <tr>
                                                    <td><?= $i++ ?></td>
                                                    <td><?= $row->name ?></td>
                                                    <td><?= $row->no_induk_siswa ?></td>
                                                    <td><?= $row->kelas ?></td>
                                                    <td>
                                                        <?php if ($row->status == 0) : ?>
                                                            <span style="background-color:#009111" class="badge badge-success">Tidak Terlambat</span>
                                                        <?php elseif ($row->status == 1) : ?>
                                                        <?php else : ?>
                                                        <?php endif ?>
                                                    </td>
                                                    <td>
                                                        <a href="<?php echo ('multiple/edit/' . $row->id) ?>" class="btn btn-secondary btn-sm">Ubah</a>

                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </table>
                                    </div>
                                    <div class="card-footer">
                                        <nav aria-label="...">
                                            <ul class="pagination">
                                                <li class="page-item disabled">
                                                    <a class="page-link">Previous</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item active" aria-current="page">
                                                    <a class="page-link" href="#">2</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">Next</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </body>
            </div>
        </div>
</div>
</section>
</div>