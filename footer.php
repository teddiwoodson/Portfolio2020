<footer>

  <p>Created by: Teddi Woodson</p>

</footer>

<?php wp_footer(); ?>

<script type="text/javascript">
$(function() {
  var header = $(".progress-bar");

  $(window).scroll(function() {
      var scroll = $(window).scrollTop();
      if (scroll >= 700) {
          header.addClass("animate");
      } else {
          header.removeClass("animated");
      }
  });

});
</script>

<script type="text/javascript">
function handleFirstTab(e) {
    if (e.keyCode === 9) { // the "I am a keyboard user" key
        document.body.classList.add('user-is-tabbing');
        window.removeEventListener('keydown', handleFirstTab);
    }
}

window.addEventListener('keydown', handleFirstTab);
</script>

</body>

</html>
