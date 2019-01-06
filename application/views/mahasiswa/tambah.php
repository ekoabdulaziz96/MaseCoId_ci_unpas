<div class="container">
    <div class="row mt-4">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header">
                Form Tambah Data Mahasiswa
            </div>
            <div class="card-body">

                <form action="#/mahasiswa/tambah" method="POST">
                    <input type="hidden" name='id' id="id">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="your name">
                            <small class="form-text text-danger"><?= form_error('nama') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="umur">Umur</label>
                            <input type="number" class="form-control" id="umur" name="umur" placeholder="your age">
                            <small class="form-text text-danger"><?= form_error('umur') ?></small>
                        
                        </div>
                    </div>
                    
                    <div class="modal-footer">
                        <a href="<?= base_url() ?>mahasiswa">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal"><< Back</button>
                        </a>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>

            </div>
        </div>
        </div>
    </div>
</div>