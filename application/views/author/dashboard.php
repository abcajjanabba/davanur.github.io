<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Author</title>
</head>
<body>
    <h2>Dashboard Author</h2>
    <a href="<?= base_url('author/uploadFilm') ?>">Tambah Film</a>
    <table border="1">
        <tr>
            <th>Nama Film</th>
            <th>Trailer</th>
            <th>Gambar</th>
            <th>Deskripsi</th>
            <th>Genre</th>
            <th>Tahun</th>
            <th>Negara</th>
            <th>Rating</th>
            <th>Durasi</th>
        </tr>
        <?php if (!empty($films)) : ?>
    <?php foreach ($films as $film) : ?>
        <tr>
            <td><?= $film['judul']; ?></td>
            <td><?= $film['trailer']; ?></td>
            <td><?= $film['poster']; ?></td>
            <td><?= $film['deskripsi']; ?></td>
            <td><?= $film['genre']; ?></td>
            <td><?= $film['tahun']; ?></td>
            <td><?= $film['negara']; ?></td>
            <td><?= $film['rating']; ?></td>
            <td><?= $film['durasi']; ?></td>
        </tr>
    <?php endforeach; ?>
<?php else : ?>
    <tr><td colspan="9">Tidak ada data film</td></tr>
<?php endif; ?>

    </table>
</body>
</html>
