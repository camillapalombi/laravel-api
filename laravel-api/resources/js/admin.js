/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

 const { default: Axios } = require('axios');

require('./bootstrap');

import 'bootstrap';


var deleteConfirm = document.getElementById('delete-confirm');

if (deleteConfirm) {
  var confirmationForm = deleteConfirm.querySelector('form');
  document.querySelectorAll('.btn-delete').forEach(function (button) {
    button.addEventListener('click', function () {
      // mostrare l'overlay di conferma
      deleteConfirm.classList.remove('d-none');
      confirmationForm.action = confirmationForm.dataset.base + '/' + this.dataset.id;
    });
  });
  document.getElementById('btn-no').addEventListener('click', function () {
    confirmationForm.action = '';
    deleteConfirm.classList.add('d-none');
  });
}


const btnSlugger = document.querySelector('#btn-slugger');
if (btnSlugger) {
    btnSlugger.addEventListener('click', function() {
        const eleSlug = document.querySelector('#slug');
        const title = document.querySelector('#title').value;

        Axios.post('/admin/slugger', {
            originalStr: title,
        })
            .then(function (response) {
                eleSlug.value = response.data.slug;
            })
    });
}
