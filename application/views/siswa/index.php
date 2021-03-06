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
                    <div class="box-header with-border">
                        <?php if ($this->session->userdata('level') == 'Admin') { ?>
                            <a href="Datasiswa/add"><button class="btn btn-primary">
                                    <i class="fa fa-plus"> </i> Tambah Data Siswa</button></a>
                        <?php } ?>
                    </div>
                    <!-- <div class="box-header with-border"><?php if ($this->session->userdata('level') == 'Petugas') { ?>
                            <a href="transaksi/pinjam"><button class="btn btn-primary">
                                    <i class="fa fa-plus"> </i> Tambah Pinjam</button></a><?php } ?> -->

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
                                            Data Multiple Users
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
                                                    <th>Name</th>
                                                    <th>No Induk Siswa</th>
                                                    <th>Kelas</th>
                                                    <th>Action</th>
                                                </tr>
                                                <?php

                                                foreach ($users as $row) {
                                                ?>
                                                    <tr>
                                                        <td><?= $row->name ?></td>
                                                        <td><?= $row->no_induk_siswa ?></td>
                                                        <td><?= $row->kelas ?></td>
                                                        <td>
                                                            <!-- <a href="<?= base_url('Multiple/edit/' . $row->id) ?>" class="btn btn-primary btn-sm">Approval</a> -->
                                                            <a href="<?= base_url('Datasiswa/edit_siswa/' . $row->id) ?>" class="btn btn-success btn-sm">Edit</a>
                                                            <!-- <a class="btn btn-danger" onclick="Swal.fire(
                                                                    {
                                                                        title: 'Apakah anda yakin ingin menghapus data?'<?= $row->name ?>,                                                                        text: 'data akan di hapus permanen',
                                                                        icon: 'warning',
                                                                        showCancelButton: true,
                                                                        confirmButtonColor:  '#3498db',
                                                                        cancelButtonColor: '#FF0033',
                                                                        confirmButtonText: 'Ya,Hapus Saja!',
                                                                        cancelButtonText: 'Tidak, Urungkan!'}).then((result) => {
                                                                            if(result.isConfirmed){
                                                                                Swal.fire(
                                                                                    'Telah dihapus',
                                                                                    'Data telah dihapuskan',
                                                                                    'Berhasil'
                                                                                )
                                                                            }
                                                                        })
                                                                " class="btn btn-danger" href="<?= base_url('Multiple/delete') ?>">Delete</button> -->
                                                            <form action='<?= base_url('Multiple/delete/') ?>' id='deletedata' method='POST'>
                                                                <button class="btn btn-danger" id="swal-delete<?= $row->id ?>" type="submit" onclick="Swaldelete()">
                                                                    Delete
                                                                </button>
                                                                <script>
                                                                    function Swaldelete() {
                                                                        Swal.fire({
                                                                            title: 'Apakah anda yakin ingin menghapus data <?= $row->name ?> ?',
                                                                            text: 'data akan di hapus permanen',
                                                                            icon: 'warning',
                                                                            showCancelButton: true,
                                                                            confirmButtonColor: '#3498db',
                                                                            cancelButtonColor: '#FF0033',
                                                                            confirmButtonText: 'Ya,Hapus Saja!',
                                                                            cancelButtonText: 'Tidak, Urungkan!'
                                                                        }).then((result) => {

                                                                            if (result.isConfirmed) {
                                                                                Swal.fire(
                                                                                    'Telah dihapus',
                                                                                    'Data telah dihapuskan',
                                                                                    'Berhasil',
                                                                                )
                                                                            }
                                                                        })
                                                                    }
                                                                </script>
                                                                <input type='hidden' name='id' id="delete-id" value='<?= $row->id ?>'>
                                                            </form>

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
                    </div>
                </div>
            </div>
        </div>
</div>
</section>
</div>