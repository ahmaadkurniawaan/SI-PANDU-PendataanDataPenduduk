<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <!-- <div class="card" style="width: 14rem; height:18rem;">
                    <img src="..." class="card-img-top" alt="...">
                </div> -->
                <div class="card-body">
                    <h5 class="card-title"> <?= $detail->nama; ?> </h5>

                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">&rarr; <?= $detail->alamat; ?> </li>
                    <li class="list-group-item">&rarr; <?= $detail->no_ktp; ?> </li>
                    <li class="list-group-item">&rarr; <?= $detail->jenis_kelamin; ?> </li>
                </ul>

            </div>  
        </div>
    </div>
</div>