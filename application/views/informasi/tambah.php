<div class="container mt-5">
    <!-- Flash data -->
    <?= $this->session->flashdata('message'); ?>
    <!-- Flash data -->
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Tambahkan Data Informasi</h5>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="judul">Judul informasi</label>
                            <input type="text" name="judul" class="form-control" id="judul" aria-describedby="judul">
                            <?= form_error('judul', '<small class="text-danger ">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label for="detail">Detail informasi</label>
                            <input type="text" name="detail" class="form-control" id="detail" aria-describedby="detail">
                            <?= form_error('detail', '<small class="text-danger ">', '</small>'); ?>
                        </div>



                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>