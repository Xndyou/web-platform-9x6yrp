// Ambil elemen-elemen HTML yang diperlukan
const gambar = document.getElementById('gambar');
const tombolView = document.getElementById('tombol-view');

// Tambahkan event listener pada tombol
tombolView.addEventListener('click', function() {
    // Perlihatkan gambar saat tombol ditekan
    gambar.style.display = 'block';
    
    // Sembunyikan tombol setelah gambar ditampilkan
    tombolView.style.display = 'none';
});
