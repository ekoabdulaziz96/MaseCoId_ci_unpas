<div class="container mt-3">
    <div class="row">

        <!-- sweat alert -->
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
        <!-- klasik alert  -->
        <?php if($this->session->flashdata('flash')): ?>
        <!-- <div class="col-lg-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
        </div> -->
        <?php endif ?>
    </div>
    <div class="row mb-3">
        <div class="col-lg-6">
            <!-- Button trigger modal -->
            <a href="<?= base_url() ?>mahasiswa/tambah"> 
                <!-- <button type="button" class="btn btn-primary tombolTambah" data-toggle="modal" data-target="#formModal"> -->
                <button type="button" class="btn btn-primary tombolTambah" data-toggle="modal" data-target="#formModal">
                Tambah Data
                </button>
            </a>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-lg-6">
            <form action="#/mahasiswa/cari" method='post'>
                <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="cari mahasiswa.." name="keyword" id="keyword" autocomplete='off'>
                <div class="input-group-append">
                    <button class="btn btn-outline-primary" type="submit" id="tombolCari">Cari</button>
                </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mb-3" >
        <div class="col-lg-6">
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php if(empty($mahasiswa)): ?>
                    <div class="alert alert-danger" role="alert">
                        Data Mahasiswa Tidak di temukan ..!
                    </div>
                <?php endif ?>
                <?php foreach ($mahasiswa as $mhs) : ?>
                <li class="list-group-item ">
                  <?= $mhs['nama'] ?>
                        <a href="<?= base_url() ?>/mahasiswa/hapus/<?= $mhs['id'] ?>" class="badge badge-danger float-right ml-2 tombol-hapus" data-hapusNama="<?= $mhs['nama'] ?>">delete</a>
                        <a href="<?= base_url() ?>/mahasiswa/ubah/<?= $mhs['id'] ?>" class="badge badge-warning float-right ml-1 tampilModalUbah" data-id="<?= $mhs['id'] ?>">update</a>
                        <a href="<?= base_url() ?>/mahasiswa/detail/<?= $mhs['id'] ?>" class="badge badge-primary float-right ml-1">detail</a>
                </li>
                <?php endforeach ?>

            </ul>

        </div>
    </div>
</div>


<!-- <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="labelModal">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="#/mahasiswa/tambah" method="POST">
            <input type="hidden" name='id' id="id">
            <div class="modal-body">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="your name">
                </div>
                <div class="form-group">
                    <label for="umur">Umur</label>
                    <input type="number" class="form-control" id="umur" name="umur" placeholder="your age">
                </div>
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </form> 
    </div>
  </div>
</div> -->