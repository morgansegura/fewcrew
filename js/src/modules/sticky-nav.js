/**
 * @Author: Morgan Segura
 * @Date:   2021-04-22 08:06:03
 * @Last Modified by:   Morgan Segura
 * @Last Modified time: 2022-05-12 15:09:18
 */
// If you use this module,
// remember to comment out window.scrollTo(0, 0); from navigation.js
function stickyNav() {
  const header = document.querySelector('.header-container')
  const navbar = document.querySelector('.header-nav')
  const offset = 200
  const headerHeight = header.offsetHeight
  const scrollValue = window.scrollY

  console.log({ scrollValue })
  console.log({ headerHeight })

  if (scrollValue > headerHeight) {
    header.classList.remove('slideInDown')
    header.classList.add('is-fixed', 'slideOutUp')
  } else if (scrollValue < headerHeight) {
    header.classList.remove('is-fixed', 'slideOutUp', 'slideInDown')
  }

  if (window.pageYOffset > headerHeight + offset) {
    header.classList.remove('slideOutUp')
    header.classList.add('is-fixed', 'slideInDown')
  }
}

window.addEventListener('scroll', stickyNav)
window.addEventListener('DOMContentLoaded', stickyNav)
