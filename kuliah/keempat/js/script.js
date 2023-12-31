const tombolCari = document.querySelector('.tombol-cari');
const keyword = document.querySelector('.keyword');
const container = document.querySelector('.container');

//hialngkan tombol cari
tombolCari.style.display = 'none';


//event ketika menuliskan keyword
keyword.addEventListener('keyup', function () {
  //ajax
  //xmlhttprequet (cara lama)
  // const xhr = new XMLHttpRequest();

  // xhr.onreadystatechange = function () {
  //   if (xhr.readyState == 4 && xhr.status == 200) {
  //     container.innerHTML = xhr.responseText;
  //   }
  // }

  // xhr.open('get', 'ajax/ajax_cari.php?keyword=' + keyword.value);
  // xhr.send();

  //cara baru
  fetch('ajax/ajax_cari.php?keyword=' + keyword.value)
    .then((response) => response.text())
    .then((response) => (container.innerHTML = response));
});

//preview image
function previewImage() {
  const gambar = document.querySelector('.gambar');
  const imgPreview = document.querySelector('.img-preview');

  const ofReader = new FileReader();
  ofReader.readAsDataURL(gambar.files[0]);

  ofReader.onload = function (oFREvent) {
    imgPreview.src = oFREvent.target.result;
  }
}