<?php get_header(); ?>
    <div class="container content-wrap">

      <div class="row">
        <div class="span8">

           <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="/collegedemocrats/wp-content/uploads/2013/09/DSC_0530.jpg" alt="">
          <div class="container">
            <div class="carousel-caption hidden-phone">
              <h1>Dukakis: October 10<sup>th</sup></h1>
              <p class="lead">Former Massachusetts Governor Michael Dukakis will be speaking to our chapter.</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="<?php bloginfo('template_url'); ?>/img/slide-02.jpg" alt="">
        </div>
        <div class="item">
          <img src="<?php bloginfo('template_url'); ?>/img/slide-03.jpg" alt="">
        </div>
      </div>
      <a class="left carousel-control" href="index.php#myCarousel" data-slide="prev">‹</a>
      <a class="right carousel-control" href="index.php#myCarousel" data-slide="next">›</a>
    </div><!-- /.carousel -->

        </div>

        <div class="span4">
          <!-- Begin MailChimp Signup Form -->
          <div id="mc_embed_signup">
          <form action="http://facebook.us2.list-manage1.com/subscribe/post?u=f59eb78109570db88d95585ad&amp;id=184ecc677b" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <h2>Subscribe to our Mailing List</h2>
          <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
          <div class="mc-field-group">
            <label for="mce-EMAIL">Email Address <span class="asterisk">*</span>
          </label>
            <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
          </div>
          <div class="mc-field-group">
            <label for="mce-FNAME">First Name</label>
            <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
          </div>
          <div class="mc-field-group">
            <label for="mce-LNAME">Last Name</label>
            <input type="text" value="" name="LNAME" class="" id="mce-LNAME">
          </div>
          <div class="mc-field-group input-group">
            <input type="checkbox" value="2" name="group[14549][2]" id="mce-group[14549]-14549-0"><label for="mce-group[14549]-14549-0">Forward me job listings</label>
          </div>
            <div id="mce-responses" class="clear">
              <div class="response" id="mce-error-response" style="display:none"></div>
              <div class="response" id="mce-success-response" style="display:none"></div>
            </div>  <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
          </form>
          </div>

          <!--End mc_embed_signup-->

        </div>

      </div>

      <div class="row tri-schpeal">
 
             <?php dynamic_sidebar('frontpg'); ?> 

    </div> 
    </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
