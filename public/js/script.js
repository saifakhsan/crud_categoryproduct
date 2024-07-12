document.addEventListener('DOMContentLoaded', () => {
    const deleteButton = document.getElementById('deleteButton');

    deleteButton.addEventListener('click', () => {
        const userConfirmed = confirm('Apakah kamu yakin ingin menghapus ini?');
        if (userConfirmed) {
            // Proses penghapusan dilakukan di sini
            alert('Item telah dihapus.');
        } else {
            // Jika pengguna membatalkan
            alert('Item tidak jadi dihapus.');
        }
    });
});
