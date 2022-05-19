<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mata Kuliah</title>
</head>

<body>
    <div class="col-md-12">
        <h3>
            Daftar Mata Kuliah
        </h3>
        <table class="table" border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Kode</th>
                    <th>Nama Mata Kuliah</th>
                    <th>Dosen</th>
                    <th>Semester</th>
            </thead>
            <tbody>
                <?php
                foreach ($list_mk as $mk) {
                ?>
                    <tr>
                        <TD><?= $mk->id ?></TD>
                        <td><?= $mk->kode ?></td>
                        <td><?= $mk->nama_matkul ?></td>
                        <td><?= $mk->dosen ?></td>
                        <td><?= $mk->smt ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>