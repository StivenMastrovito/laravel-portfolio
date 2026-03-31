import './bootstrap';
import '~resources/scss/app.scss';
import '~icons/bootstrap-icons.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

const modal = document.getElementById('modal');
const buttonOpenModal = document.getElementById('openModal');
const buttonCloseModal = document.getElementById('annulla');

buttonOpenModal.addEventListener('click', () => {
    modal.classList.add('active');
})

buttonCloseModal.addEventListener('click', () => {
    modal.classList.remove('active');
})