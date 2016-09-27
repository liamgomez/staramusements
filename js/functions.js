// window.addEventListener('scroll', function(e) {
//   var el = document.getElementById('bar-content')
//   var pageEl = document.getElementById('key-block')
//   el.className = window.scrollY < pageEl.offsetHeight ? 'bar-content' : 'bar-content scroll'
// });

function gameKey() {
    var nav = document.getElementById("game-switch");
    if (nav.className == "insert-coin game-collapsed") {
      nav.className = "insert-coin game-expand";
    } else {
      nav.className = "insert-coin game-collapsed";
    }

    var body = document.getElementById("star-body");
    if (body.className == "scroll-locked") {
      body.className = "scroll";
    } else {
      body.className = "scroll-locked";
    }

    var game = document.getElementById("game-container");
    if (game.className == "game-container game-hidden") {
      game.className = "game-container game-visible";
    } else {
      game.className = "game-container game-hidden";
    }
}
