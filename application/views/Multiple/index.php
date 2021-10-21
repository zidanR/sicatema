<!DOCTYPE html>
<html lang="in">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Multiple File</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-home"></i>Table</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-tasks"></i>Form</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
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
                        if($pesan)
                        {
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
                                            <a href="<?php echo('index.php/multiple/edit/'.$row->id) ?>" class="btn btn-success btn-sm">Approval</a>
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
</body>
</html>