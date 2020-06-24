 <?php get_header(); ?>
  <div class="thanks-visual">
    <h1><?php the_title(); ?></h1>
  </div>
  <article class="container">

      <section class="inner-contents">
         <?php if(have_posts()): ?>
           <?php while(have_posts()): the_post(); ?>
             <?php the_content(); ?>
             <p>メールまたはお電話にてご返信させて頂きます。できるだけ早いご返信対応を心掛けておりますが、場合によってはご返信までにお時間をいただくことがございます。</p>
             <p>尚、5営業日以上経っても返信がない場合は、システムエラー等によりメールが届いていない可能性がございます。</p>
             <p>その場合は、大変お手数をお掛けいたしますが、再度お問合せいただくかお電話にて確認いただけますようお願い申し上げます。</p>
           <?php endwhile ; ?>
         <?php endif ; ?>
       </section>

  </article>
 <?php get_footer(); ?>
