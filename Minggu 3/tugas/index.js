let nama = document.querySelector('#nama');
let alamat = document.querySelector('#alamat');
let hobby = document.querySelector('#hobby');
let tanggalLahir = document.querySelector('#tanggalLahir');
let pekerjaan = document.querySelector('#pekerjaan');
let jenisKelamin = document.querySelectorAll('input[name="flexRadioDefault"]');
let checklis = document.querySelector('#checklis');
let form = document.querySelector('form');

function checkInput() {
  if (nama.value === '' || alamat.value === '' || hobby.value === '' || tanggalLahir.value === '' || pekerjaan.value === '' || jenisKelamin[0].checked === false && jenisKelamin[1].checked === false) {
    alert('Input tidak boleh kosong!');
  } 
}

form.addEventListener('submit', function (event) {
  event.preventDefault();
  checkInput();
  if (!checklis.checked) {
    alert('Checklis harus sebelum submit!');
  } else {
    confirm('Apakah anda yakin ingin mengirimkan form ini?');
  }
});
