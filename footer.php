<footer>

    <div class ="container">
      <div class="row">

        <!-- Widget Area: Middle Footer -->
        <div class="col-12 d-flex justify-content-center align-items-center">
          <?php dynamic_sidebar('footer-middle'); ?>
        </div>

      </div>
    </div>

</footer>

<?php wp_footer(); ?>

<script type="text/javascript">
$(function() {
  var header = $(".progress-bar");

  $(window).scroll(function() {
      var scroll = $(window).scrollTop();
      if (scroll >= 1250) {
          header.addClass("animate");
      } else {
          header.removeClass("animated");
      }
  });

});
</script>

</body>

</html>
