<?= $this->extend("layouts/template"); ?>

<?= $this->section("content"); ?>

    <h1>Info Kegiatan</h1>
    <p>Informasi Kegiatan Siswa bulan ini: </p>
    <ul>
        <li>10 Agustus - Masa Orientasi Siswa</li>
        <li>17 Agustus - Upacara Kemerdekaan</li>
    </ul>
    <p>Informasi Kegiatan Siswa bulan depan: </p>
    <ul>
        <li>12 September - ujian Tengah Semester</li>
    </ul>

<?= $this->endSection(); ?>