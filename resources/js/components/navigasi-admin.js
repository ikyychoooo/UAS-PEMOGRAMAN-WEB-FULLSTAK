const btnHamburger = document.querySelector(".container-hamburger");
const btnClose = document.querySelector(".btn-close");
const sidebar = document.querySelector(".container-sidebar");
const bgBlur = document.querySelector(".bg-blur");

btnHamburger.addEventListener("click", () => {
    sidebar.classList.add("active");
    bgBlur.classList.add("active");
});

function closeSidebar() {
    sidebar.classList.remove("active");
    bgBlur.classList.remove("active");
}

btnClose.addEventListener("click", closeSidebar);
bgBlur.addEventListener("click", closeSidebar);
