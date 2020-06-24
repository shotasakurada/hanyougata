<?php if(is_page_template('index.php')): ?>
  <?php
    $share_url   = get_permalink();
    $share_title = get_the_title();
  ?>
<footer class="footer flex-wrap">
  <a href="http://twitter.com/share?text=<?php the_title() ?>&url=<?php the_permalink() ?>" target="_blank" class="twitter" rel="nofollow" onclick="window.open(this.href, 'window', 'width=600, height=400, menubar=no, toolbar=no, scrollbars=yes'); return false;"><img src="<?php bloginfo('template_url'); ?>/common/img/twitter.png" alt="twitter"></a>
  <a href="http://line.me/R/msg/text/<?php the_permalink() ?>" target="_blank" class="line"><img src="<?php bloginfo('template_url'); ?>/common/img/line.png" alt="LINE"></a>
  <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>&t=<?php the_title() ?>" target="_blank" class="facebook" rel="nofollow" onclick="window.open(this.href, 'window', 'width=600, height=400, menubar=no, toolbar=no, scrollbars=yes'); return false;"><img src="<?php bloginfo('template_url'); ?>/common/img/facebook.png" alt="facebook"></a>
  <a href="tel:03-5797-7104" class="tel"><img src="<?php bloginfo('template_url'); ?>/common/img/tel.png" alt="tel"></a>
  <a href="#contact" class="green button footer-button">参加申込</a>
</footer>
<?php endif; ?>
<div class="copyright">
  Copyright © Realive Co., Ltd. All rights reserved.
</div>
<?php wp_footer(); ?>
</body>
</html>
