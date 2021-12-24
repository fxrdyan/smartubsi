"use strict";

$("#modal-1").fireModal({body: 'Modal body text goes here.'});
$("#modal-2").fireModal({body: 'Modal body text goes here.', center: true});

let modal_3_body = '<p>Object to create a button on the modal.</p><pre class="language-javascript"><code>';
modal_3_body += '[\n';
modal_3_body += ' {\n';
modal_3_body += "   text: 'Login',\n";
modal_3_body += "   submit: true,\n";
modal_3_body += "   class: 'btn btn-primary btn-shadow',\n";
modal_3_body += "   handler: function(modal) {\n";
modal_3_body += "     alert('Hello, you clicked me!');\n"
modal_3_body += "   }\n"
modal_3_body += ' }\n';
modal_3_body += ']';
modal_3_body += '</code></pre>';
$("#modal-3").fireModal({
  title: 'Modal with Buttons',
  body: modal_3_body,
  buttons: [
    {
      text: 'Click, me!',
      class: 'btn btn-primary btn-shadow',
      handler: function(modal) {
        alert('Hello, you clicked me!');
      }
    }
  ]
});

$("#modal-logout").fireModal({
  title: 'Yakin ingin keluar?',
  footerClass: 'bg-whitesmoke',
  body: 'Pilih "Logout" jika kamu yakin sudah selesai.',
  buttons: [
    {
      text: 'Cancel',
      class: 'btn btn-secondary btn-shadow',
      handler: function(modal) {
      }
    },
    {
      text: 'Logout',
      submit: true,
      link:'href=<?= base_url("autentifikasi/logout"); ?>',
      class: 'btn btn-danger btn-shadow',
      handler: function(modal) {
      }
    }
  ]
});

$("#modal-4").fireModal({
  footerClass: 'bg-whitesmoke',
  body: 'Add the <code>bg-whitesmoke</code> class to the <code>footerClass</code> option.',
  buttons: [
    {
      text: 'No Action!',
      class: 'btn btn-primary btn-shadow',
      handler: function(modal) {
      }
    }
  ]
});

$("#tambah-mahasiswa").fireModal({
  title: 'Tambah Data Mahasiswa',
  body: $("#modal-tambah-mahasiswa"),
  footerClass: 'bg-whitesmoke',
  autoFocus: false,
  buttons: [
    {
      text: 'Tambah',
      submit: true,
      class: 'btn btn-primary btn-shadow',
      handler: function(modal) {
      }
    }
  ]
});

$("#tambah-kelas").fireModal({
  title: 'Tambah Data Kelas',
  body: $("#modal-tambah-kelas"),
  footerClass: 'bg-whitesmoke',
  autoFocus: false,
  buttons: [
    {
      text: 'Tambah',
      submit: true,
      class: 'btn btn-primary btn-shadow',
      handler: function(modal) {
      }
    }
  ]
});

$("#tambah-kampus").fireModal({
  title: 'Tambah Data Kampus',
  body: $("#modal-tambah-kampus"),
  footerClass: 'bg-whitesmoke',
  autoFocus: false,
  buttons: [
    {
      text: 'Tambah',
      submit: true,
      class: 'btn btn-primary btn-shadow',
      handler: function(modal) {
      }
    }
  ]
});

$("#tambah-prodi").fireModal({
  title: 'Tambah Data Program Studi',
  body: $("#modal-tambah-prodi"),
  footerClass: 'bg-whitesmoke',
  autoFocus: false,
  buttons: [
    {
      text: 'Tambah',
      submit: true,
      class: 'btn btn-primary btn-shadow',
      handler: function(modal) {
      }
    }
  ]
});

$("#edit-data").fireModal({
  title: 'Edit Data Mahasiswa',
  body: $("#modal-edit"),
  footerClass: 'bg-whitesmoke',
  autoFocus: false,
  buttons: [
    {
      text: 'Simpan',
      submit: true,
      class: 'btn btn-primary btn-shadow',
      handler: function(modal) {
      }
    }
  ]
});

$("#modal-6").fireModal({
  body: '<p>Now you can see something on the left side of the footer.</p>',
  created: function(modal) {
    modal.find('.modal-footer').prepend('<div class="mr-auto"><a href="#">I\'m a hyperlink!</a></div>');
  },
  buttons: [
    {
      text: 'No Action',
      submit: true,
      class: 'btn btn-primary btn-shadow',
      handler: function(modal) {
      }
    }
  ]
});

$('.oh-my-modal').fireModal({
  title: 'My Modal',
  body: 'This is cool plugin!'
});