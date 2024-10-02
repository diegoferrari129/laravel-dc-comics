import './bootstrap';
import '~resources/scss/app.scss';
import '~icons/bootstrap-icons.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

const deleteButtons = document.querySelectorAll('.delete_comic')

deleteButtons.forEach((button) => {
    button.addEventListener('click', (e) => {
        e.preventDefault();

        const modal = document.getElementById('deleteComicModal');

        const bootstrap_modal = new bootstrap.Modal(modal);
        bootstrap_modal.show();

        const confirmButton = document.querySelector('.confirm_delete');

        confirmButton.addEventListener('click', () => {

            button.parentElement.submit();
        });
    })
}) 