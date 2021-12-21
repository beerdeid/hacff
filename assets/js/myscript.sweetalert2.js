// Id elemen a
var dwn1 = document.getElementById("pencet1");
var dwn2 = document.getElementById("pencet2");

// Sweetalert2
/*
Swal.fire({
  title: '<strong>Support Me</strong>',
  icon: 'info',
  html:
   '<p><a href="https://saweria.co/beerde" target="_blank"><b>Klik Disini</b></a>, untuk mendukung saya agar semakin semangat membuat config. Bisa lewat (Dana, Gopay, Ovo, Link Aja, dll)</p>',
  showCloseButton: true,
  showConfirmButton: false
});
*/
dwn1.addEventListener("click", function() {
  Swal.fire({
    title: '<strong>Support Me</strong>',
    icon: 'info',
    html:
      '<p><a href="https://saweria.co/beerde" target="_blank"><b>Klik Disini</b></a>, untuk mendukung saya agar semakin semangat membuat config. Bisa lewat (Dana, Gopay, Ovo, Link Aja, dll)</p>',
    showCloseButton: true,
    showConfirmButton: false
  });
  var nyawer1 = window.open('http://dukung.imprayoga.rf.gd/' ,'_blank');
  nyawer1.focus();
});
dwn2.addEventListener("click", function() {
  Swal.fire({
    title: '<strong>Support Me</strong>',
    icon: 'info',
    html:
      '<p><a href="https://saweria.co/beerde" target="_blank"><b>Klik Disini</b></a>, untuk mendukung saya agar semakin semangat membuat config. Bisa lewat (Dana, Gopay, Ovo, Link Aja, dll)</p>',
    showCloseButton: true,
    showConfirmButton: false
  });
  var nyawer2 = window.open('http://dukung.imprayoga.rf.gd/' ,'_blank');
  nyawer2.focus();
});