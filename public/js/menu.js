const menubtn = document.getElementById('burger-menu');
const submenu = document.getElementById('sub-menu-btn');

submenu.addEventListener("click", (evt) => {
    evt.preventDefault();
    submenu.classList.toggle('deployed');
});

menubtn.addEventListener("click", (evt) => {
    menubtn.classList.toggle('open');
});

