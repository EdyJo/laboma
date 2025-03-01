<!-- index.php for Petugas -->
<?php include('header.php'); ?>

<h2>Form Permohonan Surat Keterangan</h2>
<form id="form-permohonan">
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama" required><br><br>

    <label for="nim">NIM:</label>
    <input type="text" id="nim" name="nim" required><br><br>

    <label for="surat-keterangan">Surat Keterangan:</label>
    <input type="text" id="surat-keterangan" name="surat-keterangan" required><br><br>

    <label for="nomor">Nomor:</label>
    <input type="text" id="nomor" name="nomor" required><br><br>

    <label for="tanggal">Tanggal:</label>
    <input type="date" id="tanggal" name="tanggal" required><br><br>

    <label for="petugas">Petugas (Nama):</label>
    <input type="text" id="petugas" name="petugas" required><br><br>

    <button type="submit">Kirim</button>
</form>

<?php include('footer.php'); ?>
