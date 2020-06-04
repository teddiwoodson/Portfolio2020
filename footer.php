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
// number count for stats, using jQuery animate

$('.counting').each(function() {
  var $this = $(this),
      countTo = $this.attr('data-count');

  $({ countNum: $this.text()}).animate({
    countNum: countTo
  },

  {

    duration: 5000,
    easing:'linear',
    step: function() {
      $this.text(Math.floor(this.countNum));
    },
    complete: function() {
      $this.text(this.countNum);
      //alert('finished');
    }

  });


});

</script>

</body>

</html>
