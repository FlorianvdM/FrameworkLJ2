document.addEventListener('DOMContentLoaded', () => {

    const modal = document.getElementById('create-category-modal');
    const openButton = document.getElementById('open-create-category');
    const closeButton = document.getElementById('close-create-category');
    const cancelButton = document.getElementById('cancel-create-category');

    if (!modal || !openButton) {
        return;
    }

    openButton.addEventListener('click', () => {
        modal.showModal();
    });

    closeButton?.addEventListener('click', () => {
        modal.close();
    });

    cancelButton?.addEventListener('click', () => {
        modal.close();
    });

    modal.addEventListener('click', (event) => {
        if (event.target === modal) {
            modal.close();
        }
    });

});