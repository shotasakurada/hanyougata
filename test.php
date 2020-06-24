<?php
/*
Template Name: テストテンプレート
Template Post Type: thanks,
*/
?>
 <?php get_header(); ?>
  <div class="thanks-visual">
    <h1><?php the_title(); ?></h1>
  </div>
  <article class="container">

      <section class="inner-contents thanks-contents">
         <?php if(have_posts()): ?>
           <?php while(have_posts()): the_post(); ?>
             <h2 class="center-htitle">【重要】ご登録メールアドレスに「エントリー完了通知」をお送りしております。</h2>
             <p>また、ご参加前に下記を必ずご確認ください。</p>
             <h2>オンラインイベント専用リンクに関して</h2>
             <p>イベント開催2日前、1日前、それぞれ20時頃にご登録メールアドレスへお送り致します。</p>
             <p>エントリー者限定の指定リンクですので、紛失されませんよう、お願い致します。</p>
             <h2>ご注意</h2>
             <ul class="normal-ul">
               <li>キャンセルは2日前まで有効です。希望者は当メールにご返信ください。</li>
               <li>直前のキャンセル、無断欠席となりますと、システム登録の関係にて今後の各種特典のご案内ができなくなります。ご注意ください。</li>
             </ul>
             <h2>お問い合わせ先</h2>
             <p>ジョブトラアカデミーサポート</p>
             <p>03-5797-7104（平日10時〜17時）</p>
             <p>naito@realive.co.jp</p>
           <?php endwhile ; ?>
         <?php endif ; ?>
       </section>

  </article>
 <?php get_footer(); ?>
