let checkMenu = false;
const burgerMenu = document.querySelector('.burger-menu');

setTimeout(function() {
    var notification = document.querySelector('.notification-error');
    if (notification) {
      notification.remove();
    }
}, 5000);

const darkmodeToggle = document.getElementById('darkmode-toggle');
const body = document.body;

if (localStorage.getItem('darkmode') === 'enabled') {
    body.classList.add('dark-mode');
    darkmodeToggle.checked = true;
}

darkmodeToggle.addEventListener('change', () => {
    if (darkmodeToggle.checked) {
        body.classList.add('dark-mode');
        localStorage.setItem('darkmode', 'enabled');
    } else {
        body.classList.remove('dark-mode');
        localStorage.setItem('darkmode', 'disabled');
    }
});

function toggleBurgerMenu() {
    checkMenu = !checkMenu;
    burgerMenu.style.left = checkMenu ? "0vw" : "100vw";
}