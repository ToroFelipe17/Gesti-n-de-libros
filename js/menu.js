// Funcionalidad para la gestión de inventarios
document.addEventListener('DOMContentLoaded', () => {
    const inventoryForm = document.getElementById('inventory-form');
    const bookInput = document.getElementById('book-input');
    const inventoryList = document.getElementById('inventory-list');

    // Agregar libro
    inventoryForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const bookName = bookInput.value.trim();
        if (bookName) {
            const li = document.createElement('li');
            li.innerHTML = `${bookName} <button class="delete-btn">Eliminar</button>`;
            inventoryList.appendChild(li);
            bookInput.value = '';
        }
    });

    // Eliminar libro
    inventoryList.addEventListener('click', (e) => {
        if (e.target.classList.contains('delete-btn')) {
            e.target.parentElement.remove();
        }
    });
});
