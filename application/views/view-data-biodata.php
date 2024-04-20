<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?= base_url('asset/css/bootstrap.css') ?>>
    <title>Tampil Biodata</title>
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Form Tampil Biodata</h2>
    <table class="table">
        <tbody>
            <tr>
            <th>Nama</th>
            <th>:</th>
            <td> <?= $nama; ?> </td>
            </tr>
            <tr>
            <th>Email</th>
            <th>:</th>
            <td> <?= $email; ?> </td>
            </tr>
            <tr>
            <th>Alamat</th>
            <th>:</th>
            <td> <?= $alamat; ?> </td>
            </tr>
            <tr>
            <th>Tanggal Lahir</th>
            <th>:</th>
            <td> <?= $tanggal_lahir; ?> </td>
            </tr>
            <tr>
            <th>Jenis Kelamin</th>
            <th>:</th>
            <td> <?= $jenis_kelamin; ?> </td>
            </tr>
            <tr>
            <th>Pekerjaan</th>
            <th>:</th>
            <td> <?= $pekerjaan; ?> </td>
            </tr>
            <button type="reset"><a href="<?= base_url('index'); ?>">kembali</a> </button>
        </tbody>
        </table>
</div>
</body>

<!-- Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>