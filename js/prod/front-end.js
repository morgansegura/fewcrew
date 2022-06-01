;(() => {
  var e = {
      4251: e => {
        'use strict'
        var t = (function () {
          var e = {
            tolerance: 0,
            duration: 800,
            easing: 'easeOutQuart',
            container: window,
            callback: function () {}
          }
          function t(e, t, n, r) {
            return (e /= r), -n * (--e * e * e * e - 1) + t
          }
          function n(e, t) {
            var n = {}
            return (
              Object.keys(e).forEach(function (t) {
                n[t] = e[t]
              }),
              Object.keys(t).forEach(function (e) {
                n[e] = t[e]
              }),
              n
            )
          }
          function r(e) {
            return e instanceof HTMLElement ? e.scrollTop : e.pageYOffset
          }
          function o() {
            var r =
                arguments.length > 0 && void 0 !== arguments[0]
                  ? arguments[0]
                  : {},
              o =
                arguments.length > 1 && void 0 !== arguments[1]
                  ? arguments[1]
                  : {}
            ;(this.options = n(e, r)),
              (this.easeFunctions = n({ easeOutQuart: t }, o))
          }
          return (
            (o.prototype.registerTrigger = function (e, t) {
              var r = this
              if (e) {
                var o = e.getAttribute('href') || e.getAttribute('data-target'),
                  i =
                    o && '#' !== o
                      ? document.getElementById(o.substring(1))
                      : document.body,
                  a = n(
                    this.options,
                    (function (e, t) {
                      var n = {}
                      return (
                        Object.keys(t).forEach(function (t) {
                          var r = e.getAttribute(
                            'data-mt-'.concat(
                              t.replace(/([A-Z])/g, function (e) {
                                return '-' + e.toLowerCase()
                              })
                            )
                          )
                          r && (n[t] = isNaN(r) ? r : parseInt(r, 10))
                        }),
                        n
                      )
                    })(e, this.options)
                  )
                'function' == typeof t && (a.callback = t)
                var s = function (e) {
                  e.preventDefault(), r.move(i, a)
                }
                return (
                  e.addEventListener('click', s, !1),
                  function () {
                    return e.removeEventListener('click', s, !1)
                  }
                )
              }
            }),
            (o.prototype.move = function (e) {
              var t = this,
                o =
                  arguments.length > 1 && void 0 !== arguments[1]
                    ? arguments[1]
                    : {}
              if (0 === e || e) {
                o = n(this.options, o)
                var i,
                  a = 'number' == typeof e ? e : e.getBoundingClientRect().top,
                  s = r(o.container),
                  d = null
                a -= o.tolerance
                var l = function n(l) {
                  var c = r(t.options.container)
                  d || (d = l - 1)
                  var u = l - d
                  if (i && ((a > 0 && i > c) || (a < 0 && i < c)))
                    return o.callback(e)
                  i = c
                  var g = t.easeFunctions[o.easing](u, s, a, o.duration)
                  o.container.scroll(0, g),
                    u < o.duration
                      ? window.requestAnimationFrame(n)
                      : (o.container.scroll(0, a + s), o.callback(e))
                }
                window.requestAnimationFrame(l)
              }
            }),
            (o.prototype.addEaseFunction = function (e, t) {
              this.easeFunctions[e] = t
            }),
            o
          )
        })()
        e.exports = t
      },
      6474: function (e) {
        var t
        ;(t = function () {
          return (function (e) {
            var t = {}
            function n(r) {
              if (t[r]) return t[r].exports
              var o = (t[r] = { exports: {}, id: r, loaded: !1 })
              return (
                e[r].call(o.exports, o, o.exports, n),
                (o.loaded = !0),
                o.exports
              )
            }
            return (n.m = e), (n.c = t), (n.p = ''), n(0)
          })([
            function (e, t) {
              'use strict'
              e.exports = (function () {
                if (
                  'undefined' == typeof document ||
                  'undefined' == typeof window
                )
                  return {
                    ask: function () {
                      return 'initial'
                    },
                    element: function () {
                      return null
                    },
                    ignoreKeys: function () {},
                    specificKeys: function () {},
                    registerOnChange: function () {},
                    unRegisterOnChange: function () {}
                  }
                var e = document.documentElement,
                  t = null,
                  n = 'initial',
                  r = n,
                  o = Date.now(),
                  i = 'false',
                  a = ['button', 'input', 'select', 'textarea'],
                  s = [],
                  d = [16, 17, 18, 91, 93],
                  l = [],
                  c = {
                    keydown: 'keyboard',
                    keyup: 'keyboard',
                    mousedown: 'mouse',
                    mousemove: 'mouse',
                    MSPointerDown: 'pointer',
                    MSPointerMove: 'pointer',
                    pointerdown: 'pointer',
                    pointermove: 'pointer',
                    touchstart: 'touch',
                    touchend: 'touch'
                  },
                  u = !1,
                  g = { x: null, y: null },
                  f = { 2: 'touch', 3: 'touch', 4: 'mouse' },
                  p = !1
                try {
                  var h = Object.defineProperty({}, 'passive', {
                    get: function () {
                      p = !0
                    }
                  })
                  window.addEventListener('test', null, h)
                } catch (e) {}
                var m = function () {
                    var e = !p || { passive: !0, capture: !0 }
                    document.addEventListener('DOMContentLoaded', v, !0),
                      window.PointerEvent
                        ? (window.addEventListener('pointerdown', w, !0),
                          window.addEventListener('pointermove', b, !0))
                        : window.MSPointerEvent
                        ? (window.addEventListener('MSPointerDown', w, !0),
                          window.addEventListener('MSPointerMove', b, !0))
                        : (window.addEventListener('mousedown', w, !0),
                          window.addEventListener('mousemove', b, !0),
                          'ontouchstart' in window &&
                            (window.addEventListener('touchstart', w, e),
                            window.addEventListener('touchend', w, !0))),
                      window.addEventListener(A(), b, e),
                      window.addEventListener('keydown', w, !0),
                      window.addEventListener('keyup', w, !0),
                      window.addEventListener('focusin', y, !0),
                      window.addEventListener('focusout', E, !0)
                  },
                  v = function () {
                    if (
                      (i = !(
                        e.getAttribute('data-whatpersist') ||
                        'false' ===
                          document.body.getAttribute('data-whatpersist')
                      ))
                    )
                      try {
                        window.sessionStorage.getItem('what-input') &&
                          (n = window.sessionStorage.getItem('what-input')),
                          window.sessionStorage.getItem('what-intent') &&
                            (r = window.sessionStorage.getItem('what-intent'))
                      } catch (e) {}
                    x('input'), x('intent')
                  },
                  w = function (e) {
                    var t = e.which,
                      o = c[e.type]
                    'pointer' === o && (o = _(e))
                    var i = !l.length && -1 === d.indexOf(t),
                      s = l.length && -1 !== l.indexOf(t),
                      u =
                        ('keyboard' === o && t && (i || s)) ||
                        'mouse' === o ||
                        'touch' === o
                    if (
                      (N(o) && (u = !1),
                      u && n !== o && (L('input', (n = o)), x('input')),
                      u && r !== o)
                    ) {
                      var g = document.activeElement
                      g &&
                        g.nodeName &&
                        (-1 === a.indexOf(g.nodeName.toLowerCase()) ||
                          ('button' === g.nodeName.toLowerCase() &&
                            !O(g, 'form'))) &&
                        (L('intent', (r = o)), x('intent'))
                    }
                  },
                  x = function (t) {
                    e.setAttribute('data-what' + t, 'input' === t ? n : r), k(t)
                  },
                  b = function (e) {
                    var t = c[e.type]
                    'pointer' === t && (t = _(e)),
                      C(e),
                      ((!u && !N(t)) ||
                        (u && 'wheel' === e.type) ||
                        'mousewheel' === e.type ||
                        'DOMMouseScroll' === e.type) &&
                        r !== t &&
                        (L('intent', (r = t)), x('intent'))
                  },
                  y = function (n) {
                    n.target.nodeName
                      ? ((t = n.target.nodeName.toLowerCase()),
                        e.setAttribute('data-whatelement', t),
                        n.target.classList &&
                          n.target.classList.length &&
                          e.setAttribute(
                            'data-whatclasses',
                            n.target.classList.toString().replace(' ', ',')
                          ))
                      : E()
                  },
                  E = function () {
                    ;(t = null),
                      e.removeAttribute('data-whatelement'),
                      e.removeAttribute('data-whatclasses')
                  },
                  L = function (e, t) {
                    if (i)
                      try {
                        window.sessionStorage.setItem('what-' + e, t)
                      } catch (e) {}
                  },
                  _ = function (e) {
                    return 'number' == typeof e.pointerType
                      ? f[e.pointerType]
                      : 'pen' === e.pointerType
                      ? 'touch'
                      : e.pointerType
                  },
                  N = function (e) {
                    var t = Date.now(),
                      r = 'mouse' === e && 'touch' === n && t - o < 200
                    return (o = t), r
                  },
                  A = function () {
                    return 'onwheel' in document.createElement('div')
                      ? 'wheel'
                      : void 0 !== document.onmousewheel
                      ? 'mousewheel'
                      : 'DOMMouseScroll'
                  },
                  k = function (e) {
                    for (var t = 0, o = s.length; t < o; t++)
                      s[t].type === e &&
                        s[t].fn.call(void 0, 'input' === e ? n : r)
                  },
                  C = function (e) {
                    g.x !== e.screenX || g.y !== e.screenY
                      ? ((u = !1), (g.x = e.screenX), (g.y = e.screenY))
                      : (u = !0)
                  },
                  O = function (e, t) {
                    var n = window.Element.prototype
                    if (
                      (n.matches ||
                        (n.matches =
                          n.msMatchesSelector || n.webkitMatchesSelector),
                      n.closest)
                    )
                      return e.closest(t)
                    do {
                      if (e.matches(t)) return e
                      e = e.parentElement || e.parentNode
                    } while (null !== e && 1 === e.nodeType)
                    return null
                  }
                return (
                  'addEventListener' in window &&
                    Array.prototype.indexOf &&
                    ((c[A()] = 'mouse'), m()),
                  {
                    ask: function (e) {
                      return 'intent' === e ? r : n
                    },
                    element: function () {
                      return t
                    },
                    ignoreKeys: function (e) {
                      d = e
                    },
                    specificKeys: function (e) {
                      l = e
                    },
                    registerOnChange: function (e, t) {
                      s.push({ fn: e, type: t || 'input' })
                    },
                    unRegisterOnChange: function (e) {
                      var t = (function (e) {
                        for (var t = 0, n = s.length; t < n; t++)
                          if (s[t].fn === e) return t
                      })(e)
                      ;(t || 0 === t) && s.splice(t, 1)
                    },
                    clearStorage: function () {
                      window.sessionStorage.clear()
                    }
                  }
                )
              })()
            }
          ])
        }),
          (e.exports = t())
      }
    },
    t = {}
  function n(r) {
    var o = t[r]
    if (void 0 !== o) return o.exports
    var i = (t[r] = { exports: {} })
    return e[r].call(i.exports, i, i.exports, n), i.exports
  }
  ;(n.n = e => {
    var t = e && e.__esModule ? () => e.default : () => e
    return n.d(t, { a: t }), t
  }),
    (n.d = (e, t) => {
      for (var r in t)
        n.o(t, r) &&
          !n.o(e, r) &&
          Object.defineProperty(e, r, { enumerable: !0, get: t[r] })
    }),
    (n.o = (e, t) => Object.prototype.hasOwnProperty.call(e, t)),
    (() => {
      'use strict'
      function e() {
        for (var e = 0, t = 0, n = arguments.length; t < n; t++)
          e += arguments[t].length
        var r = Array(e),
          o = 0
        for (t = 0; t < n; t++)
          for (var i = arguments[t], a = 0, s = i.length; a < s; a++, o++)
            r[o] = i[a]
        return r
      }
      const t = function (t, n) {
        return (
          void 0 === n && (n = 'js-reframe'),
          ('string' == typeof t
            ? e(document.querySelectorAll(t))
            : 'length' in t
            ? e(t)
            : [t]
          ).forEach(function (e) {
            var t, r
            if (
              !(
                -1 !== e.className.split(' ').indexOf(n) ||
                e.style.width.indexOf('%') > -1
              )
            ) {
              var o = e.getAttribute('height') || e.offsetHeight,
                i = e.getAttribute('width') || e.offsetWidth,
                a =
                  (('string' == typeof o ? parseInt(o) : o) /
                    ('string' == typeof i ? parseInt(i) : i)) *
                  100,
                s = document.createElement('div')
              s.className = n
              var d = s.style
              ;(d.position = 'relative'),
                (d.width = '100%'),
                (d.paddingTop = a + '%')
              var l = e.style
              ;(l.position = 'absolute'),
                (l.width = '100%'),
                (l.height = '100%'),
                (l.left = '0'),
                (l.top = '0'),
                null === (t = e.parentNode) ||
                  void 0 === t ||
                  t.insertBefore(s, e),
                null === (r = e.parentNode) || void 0 === r || r.removeChild(e),
                s.appendChild(e)
            }
          })
        )
      }
      function r(e, t) {
        ;(null == t || t > e.length) && (t = e.length)
        for (var n = 0, r = new Array(t); n < t; n++) r[n] = e[n]
        return r
      }
      function o(e) {
        return (
          (function (e) {
            if (Array.isArray(e)) return r(e)
          })(e) ||
          (function (e) {
            if (
              ('undefined' != typeof Symbol && null != e[Symbol.iterator]) ||
              null != e['@@iterator']
            )
              return Array.from(e)
          })(e) ||
          (function (e, t) {
            if (e) {
              if ('string' == typeof e) return r(e, t)
              var n = Object.prototype.toString.call(e).slice(8, -1)
              return (
                'Object' === n && e.constructor && (n = e.constructor.name),
                'Map' === n || 'Set' === n
                  ? Array.from(e)
                  : 'Arguments' === n ||
                    /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)
                  ? r(e, t)
                  : void 0
              )
            }
          })(e) ||
          (function () {
            throw new TypeError(
              'Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.'
            )
          })()
        )
      }
      function i(e) {
        return void 0 === window.Few_Crew_screenReaderText ||
          void 0 === window.Few_Crew_screenReaderText[e]
          ? (console.error('Missing translation for '.concat(e)), '')
          : window.Few_Crew_screenReaderText[e]
      }
      function a(e) {
        var t = o(e.children)
        if (0 === t.length) return ''
        var n = t.filter(function (e) {
          return 'img' === e.tagName.toLowerCase()
        })
        if (t.length !== n.length) return ''
        var r = n
          .filter(function (e) {
            return e.alt && '' !== e.alt
          })
          .map(function (e) {
            return e.alt
          })
        return r.length ? r.join(', ') : ''
      }
      function s() {
        var e = [window.location.host]
        void 0 !== window.Few_Crew_externalLinkDomains &&
          (e = e.concat(window.Few_Crew_externalLinkDomains))
        var t = o(document.querySelectorAll('a')).filter(function (t) {
          return (function (e, t) {
            if (!e.length) return !1
            var n
            if (
              ['#', 'tel:', 'mailto:', '/'].some(function (t) {
                return new RegExp('^'.concat(t), 'g').test(e)
              })
            )
              return !1
            try {
              n = new URL(e)
            } catch (t) {
              return console.log('Invalid URL: '.concat(e)), !1
            }
            return !t.some(function (e) {
              return n.host === e
            })
          })(t.href, e)
        })
        t.forEach(function (e) {
          var t = e.textContent.trim().length ? e.textContent.trim() : a(e),
            n =
              '_blank' === e.target
                ? ''
                    .concat(t, ': ')
                    .concat(i('external_link'), ', ')
                    .concat(i('target_blank'))
                : ''.concat(t, ': ').concat(i('external_link'))
          e.setAttribute('aria-label', n), e.classList.add('is-external-link')
        })
      }
      var d = n(4251),
        l = n.n(d)
      const c = function () {
        for (
          var e = new (l())(
              { ease: 'easeInQuad' },
              {
                easeInQuad: function (e, t, n, r) {
                  return n * (e /= r) * e + t
                },
                easeOutQuad: function (e, t, n, r) {
                  return -n * (e /= r) * (e - 2) + t
                }
              }
            ),
            t = document.getElementsByClassName('js-trigger'),
            n = 0;
          n < t.length;
          n++
        )
          e.registerTrigger(t[n])
      }
      const u = function () {
        var e = new (l())({ duration: 300, easing: 'easeOutQuart' }),
          t = document.getElementById('top'),
          n = document.querySelectorAll(
            'button, a, input, select, textarea, [tabindex]:not([tabindex="-1"])'
          )
        t &&
          t.addEventListener('click', function (t) {
            t.preventDefault(), e.move(n[0])
          }),
          window.addEventListener('scroll', function () {
            var e = window.pageYOffset,
              n = document.documentElement.clientHeight
            e > n && t.classList.add('is-visible'),
              e < n && t.classList.remove('is-visible')
          })
      }
      n(6474)
      !(function (e) {
        var t,
          n,
          r,
          i,
          a,
          s,
          d,
          l,
          c,
          u,
          g,
          f,
          p = 960,
          h = document.querySelectorAll('.menu-item')
        function m() {
          h.forEach(function (e) {
            var t = e.querySelectorAll('.sub-menu')
            t.forEach(function (e) {
              var n, r
              void 0 !== t &&
                (((n = e.getBoundingClientRect()),
                ((r = {}).top = n.top < 0),
                (r.left = n.left < 0),
                (r.bottom =
                  n.bottom >
                  (window.innerHeight ||
                    document.documentElement.clientHeight)),
                (r.right =
                  n.right >
                  (window.innerWidth || document.documentElement.clientWidth)),
                (r.any = r.top || r.left || r.bottom || r.right),
                r).right
                  ? (e.classList.add('is-out-of-viewport'),
                    e.parentElement.parentElement.classList.add(
                      'is-out-of-viewport'
                    ))
                  : (e.classList.remove('is-out-of-viewport'),
                    e.parentElement.parentElement.classList.remove(
                      'is-out-of-viewport'
                    )))
            })
          })
        }
        h.forEach(function (e) {
          e.addEventListener('mouseover', function () {
            this.classList.add('hover-intent'),
              this.parentNode.classList.add('hover-intent'),
              document.addEventListener('keydown', function (t) {
                'Escape' === t.key &&
                  (e.classList.remove('hover-intent'),
                  e.parentNode.classList.remove('hover-intent'),
                  e.parentNode.parentNode.classList.remove('hover-intent'))
              })
          }),
            e.addEventListener('mouseleave', function () {
              this.classList.remove('hover-intent'),
                this.parentNode.classList.remove('hover-intent'),
                document.addEventListener('keydown', function (t) {
                  'Escape' === t.key &&
                    (e.classList.remove('hover-intent'),
                    e.parentNode.classList.remove('hover-intent'),
                    e.parentNode.parentNode.classList.remove('hover-intent'))
                })
            })
        }),
          m(),
          window.addEventListener('resize', m)
        var v = e('.nav-container'),
          w = v.find('#nav-toggle'),
          x = v.find('#main-navigation-wrapper'),
          b = v.find('#nav')
        if (
          (e('.menu-item a, .dropdown button').on('keyup', function (t) {
            var n = e(this)
                .parent()
                .parent()
                .parent()
                .find('.sub-menu')
                .prev('.dropdown-toggle')
                .attr('aria-expanded'),
              r = e(this)
                .closest('.menu-item')
                .find('.dropdown-toggle')
                .attr('aria-expanded'),
              o = e(this).parent().parent().hasClass('sub-menu')
            if (
              ('true' === n || 'true' === r) &&
              0 !== e('.dropdown').find(':focus').length &&
              'Escape' === t.code
            ) {
              var i = e(this).parent().parent().parent(),
                a = i.find('.screen-reader-text'),
                s = i.find('.dropdown-toggle')
              i.find('.sub-menu').removeClass('toggled-on'),
                i.find('.dropdown-toggle').removeClass('toggled-on'),
                i.find('.dropdown').removeClass('toggled-on'),
                s.attr('aria-expanded', 'false'),
                a.text(Few_Crew_screenReaderText.expand),
                !0 === o && i.find('.dropdown-toggle:first').trigger('focus')
            }
            if (window.innerWidth > p) {
              var d = e(this).parent().prev(),
                l = d.find('.screen-reader-text'),
                c = d.find('.dropdown-toggle')
              d.find('.sub-menu').removeClass('toggled-on'),
                d.find('.dropdown-toggle').removeClass('toggled-on'),
                d.find('.dropdown').removeClass('toggled-on'),
                c.attr('aria-expanded', 'false'),
                l.text(Few_Crew_screenReaderText.expand)
              var u = e(this).parent().next(),
                g = u.find('.screen-reader-text'),
                f = u.find('.dropdown-toggle')
              u.find('.sub-menu').removeClass('toggled-on'),
                u.find('.dropdown-toggle').removeClass('toggled-on'),
                u.find('.dropdown').removeClass('toggled-on'),
                f.attr('aria-expanded', 'false'),
                g.text(Few_Crew_screenReaderText.expand)
            }
          }),
          x.find('.menu-item-has-children').attr('aria-haspopup', 'true'),
          e('.dropdown-toggle').each(function () {
            e(this).attr(
              'aria-label',
              ''
                .concat(Few_Crew_screenReaderText.expand_for, ' ')
                .concat(e(this).prev().text())
            )
          }),
          x.find('.dropdown-toggle').on('click', function (t) {
            var n = e(this).nextAll('.sub-menu')
            e(this).toggleClass('toggled-on'),
              n.toggleClass('toggled-on'),
              e(this).attr(
                'aria-expanded',
                'false' === e(this).attr('aria-expanded') ? 'true' : 'false'
              ),
              e(this).attr(
                'aria-label',
                e(this).attr('aria-label') ===
                  ''
                    .concat(Few_Crew_screenReaderText.collapse_for, ' ')
                    .concat(e(this).prev().text())
                  ? ''
                      .concat(Few_Crew_screenReaderText.expand_for, ' ')
                      .concat(e(this).prev().text())
                  : ''
                      .concat(Few_Crew_screenReaderText.collapse_for, ' ')
                      .concat(e(this).prev().text())
              )
          }),
          e('.sub-menu .menu-item-has-children')
            .parent('.sub-menu')
            .addClass('has-sub-menu'),
          e('.menu-item a, button.dropdown-toggle').on('keydown', function (t) {
            if (
              -1 !=
              ['ArrowUp', 'ArrowDown', 'ArrowLeft', 'ArrowRight'].indexOf(
                t.code
              )
            )
              switch (t.code) {
                case 'ArrowLeft':
                  t.stopPropagation(),
                    e(this).hasClass('dropdown-toggle')
                      ? e(this).prev('a').trigger('focus')
                      : e(this)
                          .parent()
                          .prev()
                          .children('button.dropdown-toggle').length
                      ? e(this)
                          .parent()
                          .prev()
                          .children('button.dropdown-toggle')
                          .trigger('focus')
                      : e(this).parent().prev().children('a').trigger('focus'),
                    e(this).is(
                      'ul ul ul.sub-menu.toggled-on li:first-child a'
                    ) &&
                      e(this)
                        .parents('ul.sub-menu.toggled-on li')
                        .children('button.dropdown-toggle')
                        .trigger('focus')
                  break
                case 'ArrowRight':
                  t.stopPropagation(),
                    e(this).next('button.dropdown-toggle').length
                      ? e(this).next('button.dropdown-toggle').trigger('focus')
                      : e(this).parent().next().find('input').length
                      ? e(this).parent().next().find('input').trigger('focus')
                      : e(this).parent().next().children('a').trigger('focus'),
                    e(this).is('ul.sub-menu .dropdown-toggle.toggled-on') &&
                      e(this)
                        .parent()
                        .find('ul.sub-menu li:first-child a')
                        .trigger('focus')
                  break
                case 'ArrowDown':
                  t.stopPropagation(),
                    e(this).next().length
                      ? e(this)
                          .next()
                          .find('li:first-child a')
                          .first()
                          .trigger('focus')
                      : e(this).parent().next().find('input').length
                      ? e(this).parent().next().find('input').trigger('focus')
                      : e(this).parent().next().children('a').trigger('focus'),
                    e(this).is('ul.sub-menu a') &&
                      e(this).next('button.dropdown-toggle').length &&
                      e(this).parent().next().children('a').trigger('focus'),
                    e(this).is('ul.sub-menu .dropdown-toggle') &&
                      e(this).parent().next().children('.dropdown-toggle')
                        .length &&
                      e(this)
                        .parent()
                        .next()
                        .children('.dropdown-toggle')
                        .trigger('focus')
                  break
                case 'ArrowUp':
                  t.stopPropagation(),
                    e(this).parent().prev().length
                      ? e(this).parent().prev().children('a').trigger('focus')
                      : e(this)
                          .parents('ul')
                          .first()
                          .prev('.dropdown-toggle.toggled-on')
                          .trigger('focus'),
                    e(this).is('ul.sub-menu .dropdown-toggle') &&
                      e(this).parent().prev().children('.dropdown-toggle')
                        .length &&
                      e(this)
                        .parent()
                        .prev()
                        .children('.dropdown-toggle')
                        .trigger('focus')
              }
          }),
          (r = document.getElementById('nav')) &&
            void 0 !== (i = document.getElementById('nav-toggle')))
        ) {
          for (
            t = document.getElementsByTagName('html')[0],
              n = document.getElementsByTagName('body')[0],
              a = r.getElementsByTagName('ul')[0],
              s = document.getElementById('main-navigation-wrapper'),
              window.innerWidth < p && y(),
              d = a.getElementsByTagName('a'),
              a.getElementsByTagName('ul'),
              l = 0,
              c = d.length;
            l < c;
            l++
          )
            d[l].addEventListener('focus', L, !0),
              d[l].addEventListener('blur', L, !0)
          e(window).on('resize', function () {
            window.innerWidth > p && -1 !== n.className.indexOf('js-nav-active')
              ? E()
              : window.innerWidth < p &&
                void 0 === window.mobileNavInstance &&
                y()
          })
        }
        function y() {
          if (w.length)
            if (
              (window.innerWidth < p && w.add(b).attr('aria-expanded', 'false'),
              w.on('click', function () {
                e(this).add(x).toggleClass('toggled-on'),
                  e(this).attr(
                    'aria-expanded',
                    'false' === e(this).attr('aria-expanded') ? 'true' : 'false'
                  ),
                  e('#nav-toggle-label').text(
                    e('#nav-toggle-label').text() ===
                      Few_Crew_screenReaderText.expand_toggle
                      ? Few_Crew_screenReaderText.collapse_toggle
                      : Few_Crew_screenReaderText.expand_toggle
                  ),
                  e(this).attr(
                    'aria-label',
                    e(this).attr('aria-label') ===
                      Few_Crew_screenReaderText.expand_toggle
                      ? Few_Crew_screenReaderText.collapse_toggle
                      : Few_Crew_screenReaderText.expand_toggle
                  ),
                  e(this)
                    .add(b)
                    .attr(
                      'aria-expanded',
                      'false' === e(this).add(b).attr('aria-expanded')
                        ? 'true'
                        : 'false'
                    ),
                  window.scrollTo(0, 0)
              }),
              void 0 !== a)
            ) {
              if (
                (window.innerWidth < p &&
                  a.setAttribute('aria-expanded', 'false'),
                -1 === a.className.indexOf('nav-menu') &&
                  (a.className += ' nav-menu'),
                window.innerWidth < p)
              ) {
                ;(g = null), (f = null)
                for (
                  var o = r.querySelectorAll([
                      '.nav-primary a[href]',
                      '.nav-primary button'
                    ]),
                    d = 0;
                  d < o.length;
                  d++
                )
                  o[d].addEventListener('keydown', _)
              }
              ;(i.onclick = function () {
                ;-1 !== r.className.indexOf('is-active')
                  ? E()
                  : ((t.className += ' disable-scroll'),
                    (n.className += ' js-nav-active'),
                    (r.className += ' is-active'),
                    (i.className += ' is-active'),
                    i.setAttribute('aria-expanded', 'true'),
                    a.setAttribute('aria-expanded', 'true'),
                    i.addEventListener('keydown', _, !1))
              }),
                document.addEventListener('keyup', function (e) {
                  ;('Escape' != e.code && 'Esc' != e.code) ||
                    (-1 !== r.className.indexOf('is-active') && E())
                }),
                (s.onclick = function (e) {
                  e.target == s &&
                    -1 !== r.className.indexOf('is-active') &&
                    E()
                })
            } else i.style.display = 'none'
        }
        function E() {
          i.removeEventListener('keydown', _, !1),
            (t.className = t.className.replace(' disable-scroll', '')),
            (n.className = n.className.replace(' js-nav-active', '')),
            (r.className = r.className.replace(' is-active', '')),
            (i.className = i.className.replace(' is-active', '')),
            i.setAttribute('aria-expanded', 'false'),
            a.setAttribute('aria-expanded', 'false'),
            e('#nav-toggle-label').text(
              Few_Crew_screenReaderText.expand_toggle
            ),
            i.focus()
        }
        function L() {
          for (var e = this; -1 === e.className.indexOf('nav-menu'); )
            'li' === e.tagName.toLowerCase() &&
              (-1 !== e.className.indexOf('focus')
                ? (e.className = e.className.replace(' focus', ''))
                : (e.className += ' focus')),
              (e = e.parentElement)
        }
        function _(e) {
          ;(u = o(
            r.querySelectorAll(
              'a, button, input, textarea, select, details, [tabindex]:not([tabindex="-1"])'
            )
          )
            .filter(function (e) {
              return !e.hasAttribute('disabled')
            })
            .filter(function (e) {
              return !!(
                e.offsetWidth ||
                e.offsetHeight ||
                e.getClientRects().length
              )
            })),
            (g = u[0]),
            (f = u[u.length - 1]) !== e.target ||
              'Tab' !== e.code ||
              e.shiftKey ||
              i.focus(),
            g === e.target && 'Tab' === e.code && e.shiftKey && i.focus(),
            i === e.target && 'Tab' === e.code && e.shiftKey && f.focus()
        }
      })(jQuery),
        document.body.classList.remove('no-js'),
        document.body.classList.add('js'),
        document.addEventListener('DOMContentLoaded', function () {
          c(),
            u(),
            s(),
            o(document.querySelectorAll('a')).forEach(function (e) {
              if ('' === e.textContent.trim() && !e.ariaLabel) {
                var t = a(e)
                '' !== t && (e.ariaLabel = t)
              }
            }),
            t('.wp-has-aspect-ratio iframe')
        })
    })()
})()
