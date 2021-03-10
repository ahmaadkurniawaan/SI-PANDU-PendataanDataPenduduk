<div class="container mt-5">
    <div class="row">
        <!-- Flash data -->
        <?= $this->session->flashdata('message'); ?>
        <!-- Flash data -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Tambahkan Data Bantuan</h5>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="nik">Nomor Induk Penduduk (nik)</label>
                            <input type="text" name="nik" class="form-control" id="nik" aria-describedby="nik">
                            <?= form_error('nik', '<small class="text-danger ">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label for="nama">Nama lengkap</label>
                            <input type="text" name="nama" class="form-control" id="nama" aria-describedby="nama">
                            <?= form_error('nama', '<small class="text-danger ">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select id="jenis_kelamin" class="form-control" name="jenis_kelamin">
                                <option selected>Pilih</option>
                                <option value="laki-laki">laki-laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="umur">Umur</label>
                            <input type="text" name="umur" class="form-control" id="umur" aria-describedby="umur">
                            <?= form_error('umur', '<small class="text-danger ">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="jenis_bantuan">Jenis Bantuan</label>
                            <select id="jenis_bantuan" class="form-control" name="jenis_bantuan">
                                <option selected>Pilih</option>
                                <option value="BLT">BLT</option>
                                <option value="Covid 19">Covid 19</option>
                                <option value="Lansia">Lansia</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select id="status" class="form-control" name="status">
                                <option selected>Pilih</option>
                                <option value="dapat">Dapat</option>
                                <option value="tidak dapat">Tidak Dapat</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jumlah">Jumlah Dana</label>
                            <input type="text" name="jumlah" class="form-control" id="jumlah" aria-describedby="jumlah">
                            <?= form_error('jumlah', '<small class="text-danger ">', '</small>'); ?>
                        </div>



                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>