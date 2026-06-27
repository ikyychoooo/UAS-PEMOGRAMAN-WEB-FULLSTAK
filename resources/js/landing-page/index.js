// resources/js/landing-page/index.js

document.addEventListener("DOMContentLoaded", () => {
    // ---- Navbar scroll ----
    const header = document.getElementById("lp-header");

    const onScroll = () => {
        header?.classList.toggle("scrolled", window.scrollY > 20);
    };

    window.addEventListener("scroll", onScroll, { passive: true });
    onScroll();

    // ---- Sidebar mobile ----
    const hamburger = document.querySelector(".hamburger-btn");
    const sidebar = document.querySelector(".sidebar");
    const overlay = document.querySelector(".sidebar-overlay");
    const closeBtn = document.querySelector(".sidebar-close");

    const openSidebar = () => {
        sidebar?.classList.add("open");
        overlay?.classList.add("open");
        document.body.style.overflow = "hidden";
        hamburger?.setAttribute("aria-expanded", "true");
    };

    const closeSidebar = () => {
        sidebar?.classList.remove("open");
        overlay?.classList.remove("open");
        document.body.style.overflow = "";
        hamburger?.setAttribute("aria-expanded", "false");
    };

    hamburger?.addEventListener("click", openSidebar);
    closeBtn?.addEventListener("click", closeSidebar);
    overlay?.addEventListener("click", closeSidebar);

    document.addEventListener("keydown", (e) => {
        if (e.key === "Escape") closeSidebar();
    });
});
