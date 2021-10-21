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
                                                        <th>Action</th>
                                                    </tr>
                                                    <?php

                                                    foreach ($users as $row) {
                                                    ?>
                                                        <tr>
                                                            <td><?= $row->name ?></td>
                                                            <td>
                                                                <a href="<?php echo ('multiple/edit/' . $row->id) ?>" class="btn btn-success btn-sm">Approval</a>
                                                            </td>
                                                        </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                </table>
                                            </div>
                                            <div class="card-footer">
                                                Page
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