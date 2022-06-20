/**
 * @Author: Morgan Segura
 * @Date:   2021-04-22 08:06:03
 * @Last Modified by:   Morgan Segura
 * @Last Modified time: 2022-05-12 15:09:18
 */
// If you use this module,
// remember to comment out window.scrollTo(0, 0); from navigation.js
let oldValue = 0;
let newValue = 0;

function stickyNav() {
    const header = document.querySelector(".header-container");

    newValue = window.pageYOffset;

    if (oldValue < newValue) {
        header.classList.remove("is-fixed", "transition-down");
        header.classList.add("is-fixed", "transition-up");
    } else if (oldValue > newValue) {
        header.classList.remove("is-fixed", "transition-up");
        header.classList.add("is-fixed", "transition-down");
    }

    oldValue = newValue;
}

window.addEventListener("scroll", stickyNav);
window.addEventListener("DOMContentLoaded", stickyNav);
