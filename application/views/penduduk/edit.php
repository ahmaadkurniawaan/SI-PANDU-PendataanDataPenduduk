<div class="container mt-5">
    <!-- Flash data -->
    <?= $this->session->flashdata('message'); ?>
    <!-- Flash data -->
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Edit Data penduduk</h5>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" id="nama" aria-describedby="nama" value=" <?= $detail->nama; ?> ">
                            <?= form_error('nama', '<small class="text-danger ">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat" aria-describedby="alamat" value=" <?= $detail->alamat; ?> ">
                            <?= form_error('alamat', '<small class="text-danger ">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="no_ktp">Nomor KTP</label>
                            <input type="text" name="no_ktp" class="form-control" id="no_ktp" aria-describedby="no_ktp" value=" <?= $detail->no_ktp; ?> ">
                            <?= form_error('no_ktp', '<small class="text-danger ">', '</small>'); ?>
                        </div>

                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <div class="row mb-3">
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="gridRadios2" value=" <?= $detail->jenis_kelamin; ?> ">
                                    <label class="form-check-label" for="gridRadios2">
                                        Laki-laki
                                    </label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="gridRadios2" value=" <?= $detail->jenis_kelamin; ?> ">
                                    <label class="form-check-label" for="gridRadios2">
                                        Perempuan
                                    </label>
                                </div>
                            </div>
                        </div>


                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>