// Ambil elemen yang menampung artikel, tombol navigasi, dan tombol halaman
const articleContainer = document.querySelector('.card-body');
const prevButton = document.querySelector('.prev-button');
const nextButton = document.querySelector('.next-button');
const pageButtons = document.querySelectorAll('.page-button');

// Tentukan jumlah artikel per halaman
const articlesPerPage = 4;

// Inisialisasi halaman saat ini dan artikel yang ditampilkan
let currentPage = 1;
let displayedArticles = [];

// Tampilkan atau sembunyikan artikel sesuai dengan halaman saat ini
function showArticles() {
  const articles = articleContainer.querySelectorAll('.article');
  displayedArticles = [];
  for (let i = 0; i < articles.length; i++) {
    if (i >= (currentPage - 1) * articlesPerPage && i < currentPage * articlesPerPage) {
      articles[i].style.display = 'block';
      displayedArticles.push(articles[i]);
    } else {
      articles[i].style.display = 'none';
    }
  }
}

// Panggil fungsi pertama kali untuk menampilkan artikel pada halaman pertama
showArticles();

// Tambahkan event listener untuk tombol sebelumnya
prevButton.addEventListener('click', () => {
  if (currentPage > 1) {
    currentPage--;
    showArticles();
    setActivePageButton();
  }
});

// Tambahkan event listener untuk tombol berikutnya
nextButton.addEventListener('click', () => {
  const articles = articleContainer.querySelectorAll('.article');
  if (currentPage < Math.ceil(articles.length / articlesPerPage)) {
    currentPage++;
    showArticles();
    setActivePageButton();
  }
});

// Tambahkan event listener pada setiap tombol halaman
pageButtons.forEach((button, index) => {
  button.addEventListener('click', () => {
    currentPage = index + 1;
    showArticles();
    setActivePageButton();
  });
});

// Fungsi untuk menandai tombol halaman saat ini
function setActivePageButton() {
  pageButtons.forEach(button => button.classList.remove('active'));
  pageButtons[currentPage - 1].classList.add('active');
}
