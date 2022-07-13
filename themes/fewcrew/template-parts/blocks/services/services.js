(function ($) {
  var initializeBlock = function ($block) {
    $block.find("img").doSomething();
  };

  // Initialize each block on page load (front end).
  $(document).ready(function () {
    $(".services").each(function () {
      initializeBlock($(this));
    });
  });

  // Initialize dynamic block preview (editor).
  if (window.acf) {
    window.acf.addAction("render_block_preview/type=services", initializeBlock);
  }
})(jQuery);
