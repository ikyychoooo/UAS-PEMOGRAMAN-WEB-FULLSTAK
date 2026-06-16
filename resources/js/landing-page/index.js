// sidebar
{
    const hamBtn = document.querySelector(".hamburger-btn");
    const hamClose = document.querySelector(".ham-close");
    const sidebar = document.querySelector(".container-sidebar");

    hamBtn.addEventListener("click", () => {
        sidebar.style.transform = "translateX(0)";
    });

    hamClose.addEventListener("click", () => {
        sidebar.style.transform = "translateX(110%)";
    });

    document.addEventListener("click", (e) => {
        const isClickInsideSidebar = sidebar.contains(e.target);
        const isClickHamburger = hamBtn.contains(e.target);

        if (!isClickInsideSidebar && !isClickHamburger) {
            sidebar.style.transform = "translateX(110%)";
        }
    });
}

// header
{
    const header = document.querySelector(".header");

    window.addEventListener("scroll", () => {
        header.classList.toggle("header-active", window.scrollY > 0);
    });
}
