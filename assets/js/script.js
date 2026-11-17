const modalProduk = document.getElementById('modalProduk');

modalProduk.addEventListener('show.bs.modal', function (event) {
    const d = event.relatedTarget.dataset;   // data dari card yang diklik
    const harga = 'Rp ' + Number(d.harga).toLocaleString('id-ID');

    document.getElementById('mNama').textContent = d.nama;
    document.getElementById('mHarga').textContent = harga;
    document.getElementById('mStok').textContent = d.stok;
    document.getElementById('mDeskripsi').textContent = d.deskripsi;
    document.getElementById('mGambar').src = d.gambar;

    const btn = document.getElementById('mPesan');
    if (Number(d.stok) > 0) {
        const pesan = `Halo, saya ingin memesan:\nProduk: ${d.nama}\nHarga: ${harga}`;
        btn.href = `https://wa.me/${WA_NOMOR}?text=${encodeURIComponent(pesan)}`;
        btn.classList.remove('disabled');
        btn.textContent = 'Pesan via WhatsApp';
    } else {
        btn.href = '#';
        btn.classList.add('disabled');
        btn.textContent = 'Stok Habis';
    }
});