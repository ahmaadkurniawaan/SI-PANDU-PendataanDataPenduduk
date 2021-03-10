<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">NIK&rarr;<?= $detail->nik; ?> </h5>

                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">&rarr; <?= $detail->nama; ?> </li>
                    <li class="list-group-item">&rarr; <?= $detail->jenis_kelamin; ?> </li>
                    <li class="list-group-item">&rarr; <?= $detail->umur; ?> </li>
                    <li class="list-group-item">&rarr; <?= $detail->jenis_bantuan; ?> </li>
                    <li class="list-group-item">&rarr; <?= $detail->status; ?> </li>
                    <li class="list-group-item">&rarr;Rp.<strong><?= $detail->jumlah; ?></strong> </li>
                </ul>

            </div>
        </div>
    </div>
</div>