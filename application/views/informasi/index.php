<div class="container mt-5">

    <div class="row mb-2">
        <div class="col">
            <a class="btn btn-primary" href="<?= base_url() ?>informasi/tambah">Tambahkan Data</a>
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
                <h4 class="list-group-item active bg-light text-dark">Data Informasi</h4>

                <?php foreach ($informasi as $info) : ?>

                    <li class="list-group-item"> <strong><?= $info['judul']; ?></strong>
                        <a class="badge badge-danger float-right p-2 ml-2" href="<?= base_url(); ?>informasi/hapus/<?= $info['id_informasi']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus !');">Hapus</a>
                        <a class="badge badge-warning float-right p-2 ml-2 text-light" href="<?= base_url(); ?>informasi/edit/<?= $info['id_informasi']; ?>  ">Edit</a>
                        <a class="badge badge-success float-right p-2 ml-2" href="<?= base_url(); ?>informasi/detail/<?= $info['id_informasi']; ?>">Detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>