<div class="nimda-wrapper">
    <div class="container">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Dibuat Pada</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Nama Toko</th>
                    <th scope="col">Nomer Handphone</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Kota/Provinsi Toko</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($pendaftar as $p) : ?>
                    <tr>
                        <th scope="row"><?= $i++ ?></th>
                        <td><?= $p['created_at'] ?></td>
                        <td><?= $p['nama_lengkap'] ?></td>
                        <td><?= $p['nama_toko'] ?></td>
                        <td><?= $p['no_hp'] ?></td>
                        <td><?= $p['alamat_toko'] ?></td>
                        <td><?= $p['provinsi_toko'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>