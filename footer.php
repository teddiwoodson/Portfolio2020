<footer>

    <div class ="container">
      <div class="row">

        <!-- Widget Area: Left Footer -->
        <div class="col-lg-4 d-flex align-items-center">
          <?php dynamic_sidebar('footer-left'); ?>
        </div>

        <!-- Widget Area: Middle Footer -->
        <div class="col-lg-4 d-flex align-items-center">
          <?php dynamic_sidebar('footer-middle'); ?>
        </div>

        <!-- Widget Area: Right Footer -->
        <div class="col-lg-4 d-flex align-items-center">
          <?php dynamic_sidebar('footer-right'); ?>
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
      if (scroll >= 1100) {
          header.addClass("animate");
      } else {
          header.removeClass("animated");
      }
  });

});
</script>

</body>

</html>
