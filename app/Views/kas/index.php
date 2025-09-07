<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<style>
    /* Efek tombol interaktif */
    .btn-tambah {
        background-color: #28a745;
        color: white;
        font-weight: bold;
        border: none;
        transition: all 0.2s ease;
    }

    .btn-tambah:hover {
        background-color: #218838;
        transform: scale(1.05);
        box-shadow: 0 0 10px rgba(40, 167, 69, 0.5);
    }

    .btn-tambah:active {
        transform: scale(0.95);
        background-color: #1e7e34;
    }

    .btn-edit {
        background-color: #ffc107;
        color: black;
        font-weight: bold;
        border: none;
        transition: all 0.2s ease;
    }

    .btn-edit:hover {
        background-color: #e0a800;
        transform: scale(1.05);
        box-shadow: 0 0 10px rgba(255, 193, 7, 0.5);
    }

    .btn-edit:active {
        transform: scale(0.95);
        background-color: #d39e00;
    }

    .btn-hapus {
        background-color: #dc3545;
        color: white;
        font-weight: bold;
        border: none;
        transition: all 0.2s ease;
    }

    .btn-hapus:hover {
        background-color: #c82333;
        transform: scale(1.05);
        box-shadow: 0 0 10px rgba(220, 53, 69, 0.5);
    }

    .btn-hapus:active {
        transform: scale(0.95);
        background-color: #bd2130;
    }
</style>

<!-- Konten HTML -->
<div class="mb-3">
    <div class="text-white rounded text-center fw-bold py-3 px-4 mb-3 fs-3"
        style="width: 100%; background-color: #191970;">
        Dashboard Kas RT
    </div>

    <a href="/kas/tambah" class="btn btn-tambah mb-3">+ Tambah iuran</a>
</div>

<table class="table table-bordered">
    <tr>
        <th>Tanggal</th>
        <th>Jenis</th>
        <th>Nama Warga dan Keterangan iuran</th>
        <th>Jumlah</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($kas as $row): ?>
        <tr>
            <td><?= $row['tanggal'] ?></td>
            <td><?= ucfirst($row['jenis']) ?></td>
            <td><?= $row['keterangan'] ?></td>
            <td>Rp <?= number_format($row['jumlah'], 0, ',', '.') ?></td>
            <td>
                <a href="/kas/edit/<?= $row['id'] ?>" class="btn btn-edit btn-sm">Edit</a>
                <a href="/kas/hapus/<?= $row['id'] ?>" onclick="return confirm('Yakin?')" class="btn btn-hapus btn-sm">Hapus</a>
            </td>
        </tr>
    <?php endforeach ?>

    <!-- ✅ Baris Total Masuk -->
    <tr>
        <td colspan="3" class="text-center fw-bold text-success">Total Masuk :</td>
        <td class="fw-bold text-success">Rp <?= number_format($totalMasuk ?? 0, 0, ',', '.') ?></td>
        <td></td>
    </tr>

    <!-- ✅ Baris Total Keluar -->
    <tr>
        <td colspan="3" class="text-center fw-bold text-danger">Total Keluar :</td>
        <td class="fw-bold text-danger">Rp <?= number_format($totalKeluar ?? 0, 0, ',', '.') ?></td>
        <td></td>
    </tr>

    <!-- ✅ Baris Total Keseluruhan -->
    <tr>
        <td colspan="3" class="text-center fw-bold">Total Keseluruhan :</td>
        <td class="fw-bold">Rp <?= number_format($total ?? 0, 0, ',', '.') ?></td>
        <td></td>
    </tr>
</table>
</div>

<?= $this->endSection() ?>