const sideLinks = document.querySelectorAll('.sidebar .side-menu li a:not(.logout)');

sideLinks.forEach(item => {
    const li = item.parentElement;
    item.addEventListener('click', () => {
        sideLinks.forEach(i => {
            i.parentElement.classList.remove('active');
        })
        li.classList.add('active');
    })
});

const menuBar = document.querySelector('.content nav .bx.bx-menu');
const sideBar = document.querySelector('.sidebar');

menuBar.addEventListener('click', () => {
    sideBar.classList.toggle('close');
});

function toggleElement(elementId) {
    const elementIds = ['overview', 'transactions', 'cards', 'loans', 'account', 'settings'];

    elementIds.forEach(function(id) {
        var element = document.getElementById(id);
        if (id === elementId) {
            element.style.display = "block"; // Show the specified element
        } else {
            element.style.display = "none"; // Hide other elements
        }
    });
}