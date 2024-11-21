const toggleButton = document.getElementById('toggleButton');
const categoryList = document.getElementById('categoryList');

toggleButton.addEventListener('click', () => {
    if (categoryList.classList.contains('hidden')) {
        categoryList.classList.remove('hidden');
        toggleButton.textContent = 'Ocultar Categorías';
    } else {
        categoryList.classList.add('hidden');
        toggleButton.textContent = 'Mostrar Categorías';
    }
});
