  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <h6 class="footer-section-title">
			 <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-left-widget') ) ?>
         </h6> 
        </div>
        <div class="col-sm-3">
          <h6 class="footer-section-title">
			<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-center-widget') ) ?>
		  </h6>
          
        </div>
        <div class="col-sm-3">
          <h6 class="footer-section-title">
			  <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-right-widget') ) ?>
			  </h6>
         <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-right-widget3') ) ?>
        </div>
        <div class="col-sm-3">
          <h6 class="footer-section-title">
			  <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-right-widget2') ) ?>
			</h6>
        </div>
      </div>
      <div class="col-md-12">
        <div class="copyright">
          <p>Copyright  2017 Immidart Technologies LLP</p>
        </div>
      </div>
    </div>
  </div>

		</div>
		<!-- /wrapper -->

		<?php //wp_footer(); ?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
  <script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/jquery-1.11.3.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="<?php bloginfo("template_url"); ?>/js/bootstrap.js"></script> 
<script src="<?php bloginfo("template_url"); ?>/js/aos.js"></script> 
<script>
      AOS.init({
        easing: 'ease-in-out-sine'
      });

      setInterval(addItem, 300);

      var itemsCounter = 1;
      var container = document.getElementById('aos-demo');

      function addItem () {
        if (itemsCounter > 42) return;
        var item = document.createElement('div');
        item.classList.add('aos-item');
        item.setAttribute('data-aos', 'fade-up');
        item.innerHTML = '<div class="aos-item__inner"><h3>' + itemsCounter + '</h3></div>';
        //container.appendChild(item);
        itemsCounter++;
      }

	
	$(document).ready(function() {
    $('.navbar a.dropdown-toggle').on('click', function(e) {
        var $el = $(this);
        var $parent = $(this).offsetParent(".dropdown-menu");
        $(this).parent("li").toggleClass('open');

        if(!$parent.parent().hasClass('nav')) {
            $el.next().css({"top": $el[0].offsetTop, "left": $parent.outerWidth() - 4});
        }

        $('.nav li.open').not($(this).parents("li")).removeClass("open");

        return false;
    });
});
	</script>
	</body>
</html>
