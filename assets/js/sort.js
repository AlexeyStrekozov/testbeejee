window.addEventListener("DOMContentLoaded", function() {
  (function(f) {
      function g(c) {
          return function(b, a) {
              b = b.cells[c].textContent;
              a = a.cells[c].textContent;
              b = +b || b;
              a = +a || a;
              return b > a ? 1 : b < a ? -1 : 0
          }
      }
      var d = document.querySelector(f),
          e = [].slice.call(d.rows, 1);
      [].slice.call(d.rows[0].cells).forEach(function(c, b) {
          var a = 0;
          c.addEventListener("click", function() {
              e.sort(g(b));
              a && e.reverse();
              e.forEach(function(a) {
                  d.appendChild(a)
              });
              a ^= 1
          })
      })
  })(".sort")
});
