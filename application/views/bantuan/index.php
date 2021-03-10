<div class="container mt-5">

    <div class="row mb-2">
        <div class="col">
            <a class="btn btn-primary" href="<?= base_url() ?>bantuan/tambah">Tambahkan Data</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <!-- Flash data -->
            <?= $this->session->flashdata('message'); ?>
            <!-- Flash data -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <ul class="list-group">
                <h4 class="list-group-item active bg-light text-dark text-center">Data Dana Bantuan</h4>

                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Umur</th>
                            <th scope="col">Status</th>
                            <th scope="col">Jumlah Dana</th>
                            <th scope="col" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($bantuan)) {
                            $no = 1;
                            foreach ($bantuan as $bnt) {
                        ?>
                                <tr>
                                    <th scope="row"><?= $no++; ?></th>
                                    <td><?= $bnt['nama']; ?></td>
                                    <td><?= $bnt['umur']; ?></td>
                                    <td><?= $bnt['status']; ?></td>
                                    <td><?= $bnt['jumlah']; ?></td>
                                    <td class="text-center">
                                        <a class="badge badge-success p-2" href="<?= base_url(); ?>bantuan/detail/<?= $bnt['id_bantuan']; ?>">Detail</a>
                                        <a class="badge badge-warning p-2" href="<?= base_url(); ?>bantuan/edit/<?= $bnt['id_bantuan']; ?>">Edit</a>
                                        <a class="badge badge-danger p-2" href="<?= base_url(); ?>bantuan/hapus/<?= $bnt['id_bantuan']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus !')">Hapus</a>
                                    </td>
                                </tr>
                        <?php
                            }
                        } else {
                            echo "";
                        }
                        ?>
                    </tbody>
                </table>
            </ul>
        </div>
    </div>
</div>