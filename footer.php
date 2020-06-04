<footer>

  <p>Created by: Teddi Woodson</p>

</footer>

<?php wp_footer(); ?>

<script type="text/javascript">
$(function() {
  var header = $(".progress-bar");

  $(window).scroll(function() {
      var scroll = $(window).scrollTop();
      if (scroll >= 750) {
          header.addClass("animate");
      } else {
          header.removeClass("animate");
      }
  });

});
</script>

</body>

</html>
