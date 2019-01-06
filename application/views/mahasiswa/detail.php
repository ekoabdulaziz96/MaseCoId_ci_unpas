<div class="container">
  <div class="row mt-4">
    <div class="col-md-6">
    <div class="card">
        <div class="card-header">
          Detail Data Mahasiswa
        </div>
        <div class="card-body">
          <h5 class="card-title"><?= $mahasiswa['nama'] ?></h5>
          <h6 class="card-subtitle mb-2 text-muted"><?= $mahasiswa['umur'] ?></h6>
          <p class="card-text">Universitas Diponegoro</p>
          <a href="<?= base_url() ?>mahasiswa" class="btn btn-secondary"><< back</a>
        </div>
      </div>
    </div>
  </div>
</div>
