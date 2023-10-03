<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data Kelas
            </button>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <form action="<?= BASEURL; ?>/kelas/cari" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="cari kelas" name="keyword" id="keyword" autocomplete="off">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <h3>Daftar Kelas</h3>
            <ul class="list-group d-flex">
                <?php foreach ($data['kelas'] as $kelas) : ?>
                    <li class="list-group-item d-flex flex-row align-items-center justify-content-between">
                        <?= $kelas['kelas']; ?>
                        <div class="d-flex justify-content-end gap-2">
                            <a href="<?= BASEURL; ?>/kelas/detail/<?= $kelas['id']; ?>" class="btn btn-primary float-right">detail</a>
                            <a href="<?= BASEURL; ?>/kelas/hapus/<?= $kelas['id']; ?>" class="btn btn-danger float-right" onclick="return confirm('yakin?');">hapus</a>
                            <a href="<?= BASEURL; ?>/kelas/ubah/<?= $kelas['id']; ?>" class="btn btn-success float-right tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $kelas['id']; ?>">ubah</a>
                            <a href="<?= BASEURL; ?>/kelas/detail/<?= $kelas['id']; ?>" class="badge badge-primary float-right">detail</a>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Tambah Data Kelas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="<?= BASEURL; ?>/kelas/tambah" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <input type="text" class="form-control" id="kelas" name="kelas" autocomplete="off" required>
                    </div>

                    <!-- <div class="form-group">
                        <label for="nrp">NRP</label>
                        <input type="number" class="form-control" id="nrp" name="nrp" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="email@example.com">
                    </div>

                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-control" id="jurusan" name="jurusan">
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Teknik Mesin">Teknik Mesin</option>
                            <option value="Teknik Industri">Teknik Industri</option>
                            <option value="Teknik Pangan">Teknik Pangan</option>
                            <option value="Teknik Planologi">Teknik Planologi</option>
                            <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                        </select>
                    </div> -->

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>