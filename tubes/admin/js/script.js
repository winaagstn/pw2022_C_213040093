const keyword = document.querySelector(".keyword");
const container = document.querySelector(".container");

// event ketika kita menuliskan keyword
keyword.addEventListener("keyup", function () {
  // ajax = bagaimana cara kita untuk melakukan request terhadap sebuah sumber tanpa melakukan refresh halaman (Live Searching)

  // CARA LAMA : xmlhttprequest
  var xhr = new XMLHttpRequest();

  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      container.innerHTML = xhr.responseText;
    }
  };

  xhr.open("get", "ajax/ajax_cari.php?keyword=" + keyword.value, true);
  xhr.send();

  // CARA BARU : fetch()
  // fetch("ajax/ajax_cari.php?keyword=" + keyword.value)
  //   .then((response) => response.text())
  //   .then((response) => (container.innerHTML = response));
});

// Previe Image untuk Tambah dan Ubah
function previewImage() {
  const foto = document.querySelector(".foto");
  const imgPreview = document.querySelector(".img-preview");

  const oFReader = new FileReader();
  oFReader.readAsDataURL(foto.files[0]);

  oFReader.onload = function (oFREvent) {
    imgPreview.src = oFREvent.target.result;
  };
}
