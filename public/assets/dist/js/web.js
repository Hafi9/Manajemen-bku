// Ambil modal dan button untuk membuka modal
var modal = document.getElementById("editModal");
var btn = document.getElementById("openModalBtn");

// Ambil elemen span yang digunakan untuk menutup modal
var span = document.querySelector(".close");

// Fungsi untuk membuka modal
function openModal() {
  modal.style.display = "block";
}

// Fungsi untuk menutup modal
function closeModal() {
  modal.style.display = "none";
}

// Tutup modal saat pengguna mengklik di luar modal
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// Tambahkan event listener ke button untuk membuka modal
btn.addEventListener("click", openModal);

// Tambahkan event listener ke span untuk menutup modal
span.addEventListener("click", closeModal);
