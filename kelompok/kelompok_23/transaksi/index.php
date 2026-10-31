<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: ../auth/login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi Kasir | FEBMart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            margin: 0;
            background: #f3f4f6;
            font-family: Arial, sans-serif;
            padding: 35px 20px;
        }

        .main-container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            overflow: hidden;
            background: #fff;
            border-radius: 14px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.08);
        }

        .header-section {
            padding: 30px 35px;
            color: #fff;
            background: linear-gradient(145deg, #29245c, #5142a5);
        }

        .brand {
            margin-bottom: 25px;
            font-size: 23px;
            font-weight: bold;
        }

        .brand i {
            margin-right: 7px;
            color: #ffad42;
        }

        .header-section h2 {
            margin-bottom: 8px;
            font-size: 25px;
            font-weight: bold;
        }

        .header-section p {
            margin-bottom: 0;
            color: #d5d9e2;
            font-size: 14px;
        }

        .content-section {
            padding: 35px;
        }

        .section-card {
            height: 100%;
            padding: 24px;
            border: 1px solid #e8e7f0;
            border-radius: 12px;
            background: #fff;
        }

        .section-title {
            margin-bottom: 5px;
            color: #29245c;
            font-size: 19px;
            font-weight: bold;
        }

        .section-description {
            margin-bottom: 22px;
            color: #888;
            font-size: 13px;
        }

        .empty-state {
            min-height: 250px;
            padding: 60px 20px;
            border: 1px dashed #d8d5e8;
            border-radius: 10px;
            color: #888;
            text-align: center;
        }

        .empty-state i {
            display: block;
            margin-bottom: 12px;
            color: #5142a5;
            font-size: 42px;
        }

        .summary-box {
            margin-bottom: 20px;
            padding: 18px;
            border-radius: 10px;
            background: #f5f4fb;
        }

        .summary-label {
            color: #888;
            font-size: 13px;
        }

        .summary-value {
            margin-top: 5px;
            color: #29245c;
            font-size: 22px;
            font-weight: bold;
        }

        .btn-back {
            display: inline-flex;
            align-items: center;
            padding: 10px 18px;
            border: 1px solid #ddd;
            border-radius: 7px;
            color: #5142a5;
            background: #f5f4fb;
            font-size: 14px;
            font-weight: bold;
            text-decoration: none;
        }

        .btn-back:hover {
            color: #29245c;
            background: #e9e6f7;
        }

        .copyright {
            padding: 20px;
            border-top: 1px solid #eee;
            color: #999;
            font-size: 12px;
            text-align: center;
        }
    </style>
</head>
<body>
    <main class="main-container">
        <header class="header-section">
            <div class="brand"><i class="bi bi-cart3"></i>FEBMart</div>
            <h2><i class="bi bi-cash-register me-2"></i>Transaksi Kasir</h2>
            <p>Kelola transaksi penjualan FEBMart melalui halaman kasir.</p>
        </header>

        <section class="content-section">
            <div class="row g-4">
                <div class="col-lg-7">
                    <div class="section-card">
                        <h3 class="section-title">Katalog Produk</h3>
                        <p class="section-description">Pilih produk yang ingin ditambahkan ke transaksi.</p>
                        <div class="empty-state">
                            <i class="bi bi-box-seam"></i>
                            <div>Belum ada produk yang ditampilkan.</div>
                            <small>Katalog produk akan tersedia pada tahap berikutnya.</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="section-card">
                        <h3 class="section-title">Keranjang Belanja</h3>
                        <p class="section-description">Daftar barang yang dipilih untuk transaksi.</p>
                        <div class="empty-state mb-4">
                            <i class="bi bi-cart"></i>
                            <div>Keranjang masih kosong.</div>
                            <small>Tambahkan produk dari katalog.</small>
                        </div>
                        <div class="summary-box">
                            <div class="summary-label">Total Pembayaran</div>
                            <div class="summary-value">Rp 0</div>
                        </div>
                    </div>
                </div>
            </div>

            <a href="../dashboard.php" class="btn-back mt-4">
                <i class="bi bi-arrow-left me-1"></i>Kembali ke Dashboard
            </a>
        </section>

        <footer class="copyright">© 2026 FEBMart. All Rights Reserved.</footer>
    </main>
</body>
</html>
