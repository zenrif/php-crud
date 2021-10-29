<div class="container">
    <div class="row">
        <div class="col">
            <h2 class='mt-3 mb-5'>Detail Mahasiswa</h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="<?= BASEURL; ?>/public/img/<?= $data['mhs']['foto']; ?>" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <p class="card-title"><b>Nama : </b><?= $data['mhs']['namamhs']; ?></p>
                            <p class="card-text"><b>NIM : </b><?= $data['mhs']['nim']; ?></p>
                            <p class="card-text"><b>Jenis Kelamin : </b><?= $data['mhs']['jk']; ?></p>
                            <p class="card-text"><b>Alamat : </b><?= $data['mhs']['alamat']; ?></p>
                            <p class="card-text"><b>Kota : </b><?= $data['mhs']['kota']; ?></p>
                            <p class="card-text"><b>Email : </b><?= $data['mhs']['email']; ?></p>

                            <a href="<?= BASEURL; ?>/mahasiswa" class="card-link">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>