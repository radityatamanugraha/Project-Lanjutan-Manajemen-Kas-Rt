<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<style>
    input.form-control,
    select.form-select,
    textarea.form-control {
        border: 1px solid #000 !important;
        box-shadow: none !important;
    }

    .btn-simpan {
        background-color: #FFD700;
        color: black;
        border: none;
        transition: all 0.2s ease;
    }

    .btn-simpan:hover {
        background-color: #FFC107;
        transform: scale(1.03);
    }

    .btn-simpan:active {
        background-color: #E0B800;
        transform: scale(0.97);
    }

    .btn-batal {
        background-color: #DC3545;
        color: white;
        border: none;
        transition: all 0.2s ease;
    }

    .btn-batal:hover {
        background-color: #C82333;
        transform: scale(1.03);
    }

    .btn-batal:active {
        background-color: #A71D2A;
        transform: scale(0.97);
    }
</style>

<div class="container mt-1">
    <div class="text-white rounded py-3 px-4 mb-4 mx-3 text-center" style="background-color: #191970;">
        <h3 class="mb-0"><strong>Tambah iuran Kas</strong></h3>
    </div>

    <form action="/kas/simpan" method="post" class="mx-3">
        <div class="mb-3">
            <label for="tanggal" class="form-label fw-bold">Tanggal</label>
            <input type="date" name="tanggal" id="tanggal" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label fw-bold">Jenis</label>
            <select name="jenis" class="form-select" required>
                <option value="" disabled selected>Pilih jenis</option>
                <option value="masuk">Masuk</option>
                <option value="keluar">Keluar</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="keterangan" class="form-label fw-bold">Nama Warga dan Keterangan iuran</label>
            <input type="text" name="keterangan" id="keterangan" class="form-control">
        </div>
        <div class="mb-3">
            <label for="jumlah" class="form-label fw-bold">Jumlah (Rp)</label>
            <input type="number" name="jumlah" id="jumlah" class="form-control" required>
        </div>
        <div class="d-flex gap-2">
            <button type="submit" class="btn fw-bold btn-simpan">
                Simpan
            </button>
            <a href="/kas" class="btn fw-bold btn-batal">
                Batal
            </a>
        </div>
    </form>
</div>

<?= $this->endSection() ?>