<section class="wide-contents gray-bg">
  <!-- ここからメインビジュアル -->
  <?php if( has_post_thumbnail() ): ?>
  <div class="mainvisual" style="background: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>) no-repeat center;">
    <h1 class="seminar-name">
      <time>
        <?php if( get_field('date')) { ?>
          <?php the_field('date') ?>
        <?php } ?>
      </time>
      <?php the_title(); ?>
    </h1>
  </div>
  <div class="inner-contents discription-contents">
    <div class="info-wrap flex-wrap">
      <?php if( get_field('status')) { ?>
        <div class="info-item status-on radius"><?php the_field('status') ?></div>
      <?php } else{ ?>
        <div class="info-item status-off radius black">受付終了</div>
      <?php } ?>
      <div class="info-item place radius">
        <?php if( get_field('place')) { ?>
          <?php the_field('place') ?>
        <?php } ?>
      </div>
    </div>
    <div class="box radius">
      <span class="discription">
        イベントの詳細
      </span>
      <p>
        <?php if( get_field('description')) { ?>
          <?php the_field('description') ?>
        <?php } ?>
      </p>
    </div>
  </div>
  <?php endif; ?>
  <!-- ここまでメインビジュアル -->
</section>
