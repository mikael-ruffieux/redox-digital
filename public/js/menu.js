const menubtn = document.getElementById("burger-menu");
const submenu = document.getElementById("sub-menu-btn");

console.log("Triggered");

if (submenu) {
    submenu.addEventListener("click", (evt) => {
        evt.preventDefault();
        submenu.classList.toggle("deployed");
    });
}

if (menubtn) {
    menubtn.addEventListener("click", (evt) => {
        menubtn.classList.toggle("open");
    });
}
