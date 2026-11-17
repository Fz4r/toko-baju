<?php
require 'koneksi.php';
include 'includes/header.php';

$result = mysqli_query($conn, "SELECT * FROM produk WHERE unggulan = 1");
?>

<!-- HERO -->
<section id="beranda" class="hero d-flex align-items-center text-center">
    <div class="container">
        <h1 class="display-4 fw-bold">Selamat Datang di Toko Baju</h1>
        <p class="lead">Pakaian berkualitas dengan harga bersahabat</p>
        <a href="#produk" class="btn btn-primary btn-lg">Lihat Produk</a>
    </div>
</section>

<!-- PRODUK UNGGULAN -->
<section id="produk" class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Produk Unggulan</h2>
        <div class="row g-4">

        <?php while ($p = mysqli_fetch_assoc($result)) : ?>
            <div class="col-6 col-md-4 col-lg-3">
            <div class="card h-100 produk-card"
                role="button"
                data-bs-toggle="modal"
                data-bs-target="#modalProduk"
                data-nama="<?= htmlspecialchars($p['nama']) ?>"
                data-harga="<?= $p['harga'] ?>"
                data-stok="<?= $p['stok'] ?>"
                data-deskripsi="<?= htmlspecialchars($p['deskripsi']) ?>"
                data-gambar="assets/img/<?= htmlspecialchars($p['gambar']) ?>">
                <img src="assets/img/<?= htmlspecialchars($p['gambar']) ?>"
                    class="card-img-top" alt="<?= htmlspecialchars($p['nama']) ?>">
                <div class="card-body">
                <h5 class="card-title"><?= htmlspecialchars($p['nama']) ?></h5>
                <p class="card-text fw-bold">
                    Rp <?= number_format($p['harga'], 0, ',', '.') ?>
                </p>
                </div>
            </div>
            </div>
        <?php endwhile; ?>

        </div>
    </div>
</section>

<!-- MODAL DETAIL PRODUK -->
<div class="modal fade" id="modalProduk" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="mNama"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
            <div class="row">
            <div class="col-md-5">
                <img id="mGambar" class="img-fluid rounded" alt="">
            </div>
            <div class="col-md-7">
                <h4 id="mHarga" class="text-primary"></h4>
                <p>Stok: <span id="mStok" class="fw-bold"></span></p>
                <p id="mDeskripsi"></p>
            </div>
            </div>
        </div>
        <div class="modal-footer">
            <a id="mPesan" href="#" target="_blank" class="btn btn-success">
            Pesan via WhatsApp
            </a>
        </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>