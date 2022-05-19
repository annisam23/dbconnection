<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Studi</title>
</head>

<body>
    <div class="col-md-12">
        <h3>
            Daftar Program Studi
        </h3>
        <table class="table" border="1">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Kode</th>
                    <th>Nama Prodi</th>
                    <th>Ketua Prodi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nomor = 1;
                foreach ($list_prodi as $row) {
                ?>
                    <tr>
                        <td><?= $nomor ?></td>
                        <td><?= $row->kode ?></td>
                        <td><?= $row->nama ?></td>
                        <td><?= $row->kaprodi ?></td>
                    </tr>
                <?php
                    $nomor++;
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>