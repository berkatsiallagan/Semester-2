<?php
// Superclass (Induk)
class Pembayaran {
    public function prosesTransaksi($jumlah) {
        return "Memproses pembayaran sebesar Rp" . number_format($jumlah, 0, ',', '.') . "...";
    }
}

// Subclass (Transfer Bank)
class TransferBank extends Pembayaran {
    public function prosesTransaksi($jumlah) {
        return "Transfer bank sebesar Rp" . number_format($jumlah, 0, ',', '.') . " sedang diproses melalui rekening.";
    }
}

// Subclass (E-Wallet)
class EWallet extends Pembayaran {
    public function prosesTransaksi($jumlah) {
        return "Pembayaran Rp" . number_format($jumlah, 0, ',', '.') . " telah berhasil melalui e-wallet.";
    }
}

// Subclass (Kartu Kredit)
class KartuKredit extends Pembayaran {
    public function prosesTransaksi($jumlah) {
        return "Transaksi kartu kredit sebesar Rp" . number_format($jumlah, 0, ',', '.') . " sedang diverifikasi.";
    }
}

// Membuat objek
$pembayaran = new Pembayaran();
$transferBank = new TransferBank();
$eWallet = new EWallet();
$kartuKredit = new KartuKredit();

// Output
echo $pembayaran->prosesTransaksi(500000) . "\n"; // Output default
echo $transferBank->prosesTransaksi(1000000) . "\n"; // Output transfer bank
echo $eWallet->prosesTransaksi(250000) . "\n"; // Output e-wallet
echo $kartuKredit->prosesTransaksi(3000000) . "\n"; // Output kartu kredit
?>
