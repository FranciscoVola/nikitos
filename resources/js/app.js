import './bootstrap';
import Alpine from 'alpinejs'

window.Alpine = Alpine
Alpine.start()


window.openDeleteModal = function (id, resource = 'categorias') {
    const modal = document.getElementById('deleteModal');
    const form = document.getElementById('deleteForm');

    if (!modal || !form) return;

    form.action = `/admin/${resource}/${id}`;

    modal.classList.remove('hidden');
    modal.classList.add('flex');
};

window.closeDeleteModal = function () {
    const modal = document.getElementById('deleteModal');
    if (!modal) return;

    modal.classList.add('hidden');
    modal.classList.remove('flex');
};
