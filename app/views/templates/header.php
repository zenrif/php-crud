<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul'] ?></title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/public/css/bootstrap.css">
    <!-- My CSS -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/public/css/style.css">
</head>


<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="<?= BASEURL; ?>">PHP CRUD</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item <?= ($data['active'] === 'home') ? 'active' : '' ?>">
                        <a class="nav-link" href="<?= BASEURL; ?>">Home <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item <?= ($data['active'] === 'mahasiswa') ? 'active' : '' ?>">
                        <a class="nav-link" href="<?= BASEURL; ?>/mahasiswa">Mahasiswa</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>