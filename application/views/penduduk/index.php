<div class="container mt-5">

    <div class="row mb-2">
        <div class="col">
            <a class="btn btn-primary" href="<?= base_url() ?>penduduk/tambah">Tambahkan Data</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <!-- Flash data -->
            <?= $this->session->flashdata('message'); ?>
            <!-- Flash data -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <ul class="list-group">
                <h4 class="list-group-item active bg-light text-dark">Data Penduduk</h4>

                <?php foreach ($penduduk as $pdk) : ?>

                    <li class="list-group-item"><?= $pdk['nama']; ?>
                        <a class="badge badge-danger float-right p-2 ml-2" href="<?= base_url(); ?>penduduk/hapus/<?= $pdk['id']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus !');">Hapus</a>
                        <a class="badge badge-warning float-right p-2 ml-2 text-light" href="<?= base_url(); ?>penduduk/edit/<?= $pdk['id']; ?>  ">Edit</a>
                        <a class="badge badge-success float-right p-2 ml-2" href="<?= base_url(); ?>penduduk/detail/<?= $pdk['id']; ?>">Detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>