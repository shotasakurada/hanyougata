<section class="wide-contents">
  <div class="inner-contents">
    <h2 id="contact">お問い合わせ<span class="sub">Contact</span></h2>
    <?php //echo do_shortcode('[mwform_formkey key="314"]'); ?>
    <?php if(have_posts()): ?>
    <?php while(have_posts()): the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile ; ?>
    <?php endif ; ?>
    <!-- media@realive.co.jp -->
  </div>
</section>
