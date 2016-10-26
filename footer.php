<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package elastiqdesign
 */

?>
</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
  <div class="site-info">
    <section class="page-section page-section--small page-section--light">
      <div class="container">
        <!-- How do I get the right link for this? -->
        <!-- <img class="profile-image" src="img/headshot.jpeg" alt=""> -->
        <div class="site-footer__about">
          <h4 class="page-section__title">About</h4>
          <img class="headshot" src="<?php bloginfo('stylesheet_directory'); ?>/img/headshot.jpg" />
          <div class="site-footer__content">
            <p>Hey, I'm Peter Liu, a user experience designer and web developer. Formerly the lead designer and front-end developer at a boutique design agency, I've had the privilege of working with start-ups, small businesses, and large companies to build better digital experiences.</p>
          </div>
        </div>

        <div class="site-footer__contact">
          <h4 class="page-section__title">Get In Touch</h4>
          <ul class="contact-items">
            <li><strong>Email: </strong><a href="mailto:hello@elastiqdesign.com">hello@elastiqdesign.com</a></li>
            <li><strong>Telephone: </strong><a href="tel:+13474913082">+1.347.491.3082</a></li>
          </ul>

          <h4 class="page-section__title">Get Connected</h4>
          <ul class="social-links">
            <li class="social-link"><a href="https://www.facebook.com/elastiqdesign/"><span class="screen-reader-text">Facebook</span><i class="fa fa-facebook"></i></a></li>
            <li class="social-link"><a href="https://twitter.com/ElastiqDesign"><span class="screen-reader-text">Twitter</span><i class="fa fa-twitter"></i></a></li>
            <li class="social-link"><a href="https://www.instagram.com/elastiqdesign/"><span class="screen-reader-text">Instagram</span><i class="fa fa-instagram"></i></a></li>
          </ul>
        </div>
      </section>

      <div class="copyright">
        <div class="container">
          <p>Copyright © 2016 Elastiq Design. All rights reserved.</p>
        </div> 
      </div>
    </div><!-- .site-info -->
  </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script>(function(){var qs,js,q,s,d=document,gi=d.getElementById,ce=d.createElement,gt=d.getElementsByTagName,id='typef_orm',b='https://s3-eu-west-1.amazonaws.com/share.typeform.com/';if(!gi.call(d,id)){js=ce.call(d,'script');js.id=id;js.src=b+'share.js';q=gt.call(d,'script')[0];q.parentNode.insertBefore(js,q)}})()</script>

</body>
</html>
