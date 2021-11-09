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
                        Edit Multiple Data
                    </div>
                    <form method="post" action="<?= base_url('multiple/approval/' . $get_id) ?>">
                        <div class="card-body">
                            <table class="table table-striped">
                                <tr>
                                    <th>Kode Area</th>
                                    <th>Status</th>
                                    <th>Keterlambatan</th>
                                </tr>
                                <?php
                                // var_dump($get_id);
                                // die;
                                // $i = 1;
                                foreach ($kode_area as $row) { ?>
                                    <input type="hidden" name="kode" value="<?= $row['kode'] ?>">
                                    <tr>
                                        <td><?= $row['kode'] ?></td>
                                        <td>
                                            <?php if ($row['status'] == 0) : ?>
                                                <span class="badge badge-danger">Terlambat</span>

                                            <?php elseif ($row['status'] == 1) : ?>
                                                <span class="badge badge-warning">Pending</span>
                                            <?php endif ?>

                                        </td>
                                        <td>
                                            <label>
                                                <input type="radio" name="status" value="1" required> Diterima
                                            </label>
                                            <label>
                                                <input type="radio" name="status" value="2" required> Ditolak
                                            </label>
                                        </td>
                                    </tr>
                                <?php
                                    // $i++;
                                }
                                ?>
                            </table>
                        </div>
                        <div class="card-footer text-right">
                            <a href="<?= base_url('multiple') ?>" class="btn btn-secondary">Kembali</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>