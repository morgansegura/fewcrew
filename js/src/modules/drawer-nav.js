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

const $ = jQuery;

function toggleDrawerNav() {
    const body = $("body");
    const navMenu = $(".header-nav-drawer");
    const menuSelector = $(".pushy-panel__toggle");
    const menuDeselector = $(".pushy-panel__back-btn-block ");
    const backdrop = $(".layout-backdrop");

    menuSelector.on("click", () => {
        body.addClass("no-scroll");
        navMenu.addClass("slide-in").removeClass("slide-out");
        backdrop.addClass("fade-in").removeClass("fade-out");
    });

    menuDeselector.on("click", () => {
        body.removeClass("no-scroll");
        navMenu.addClass("slide-out").removeClass("slide-in");
        backdrop.addClass("fade-out");
    });
}

window.addEventListener("DOMContentLoaded", toggleDrawerNav);
