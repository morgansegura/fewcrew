/**
 * @Author: Morgan Segura
 * @Date:   2021-04-22 08:06:03
 * @Last Modified by:   Morgan Segura
 * @Last Modified time: 2022-05-12 15:09:18
 */
// If you use this module,
// remember to comment out window.scrollTo(0, 0); from navigation.js
function stickyNav() {
    const header = document.querySelector(".header-container");
    // const navbar = document.querySelector('.header-nav')
    const offset = 200;
    const headerHeight = header.offsetHeight;
    const scrollValue = window.scrollY;

    if (scrollValue > headerHeight + offset) {
        header.classList.add("is-fixed");
    } else if (scrollValue < headerHeight + offset) {
        header.classList.remove("is-fixed");
    }

    if (window.pageYOffset > headerHeight + offset) {
        header.classList.add("is-fixed");
    }
}

window.addEventListener("scroll", stickyNav);
window.addEventListener("DOMContentLoaded", stickyNav);
