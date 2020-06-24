<?php
  // Template Name:汎用LPテンプレート
 ?>
 <?php get_header(); ?>
 <!-- メインビジュアル追加   -->
 <?php get_template_part('content/content-mainvisual') ?>
 <article class="container">
   <!-- セミナー -->
   <section class="wide-contents mosaic1">
     <div class="inner-contents">
       <h2>セミナーのポイント</h2>
       <div class="point">
         <h3>Point1</h3>
         <p><?php if( get_field('point1')) { ?>
           <?php the_field('point1') ?>
         <?php } ?></p>
       </div>
       <div class="point">
         <h3>Point2</h3>
         <p><?php if( get_field('point2')) { ?>
           <?php the_field('point2') ?>
         <?php } ?></p>
       </div>
       <div class="point">
         <h3>Point3</h3>
         <p><?php if( get_field('point3')) { ?>
           <?php the_field('point3') ?>
         <?php } ?></p>
       </div>
       <div class="box-skellton">
         <div class="flex-wrap chrge-wrap">
           <?php if( get_field('planer-img')) { ?>
             <img src="<?php the_field('planer-img') ?>" alt="">
           <?php } ?>
           <h4><?php if( get_field('planer')) { ?>
             <?php the_field('planer') ?>
           <?php } ?></h4>
         </div>
         <p><?php if( get_field('planer-comment')) { ?>
           <?php the_field('planer-comment') ?>
         <?php } ?></p>
       </div>
     </div>
   </section>
   <!-- ここまでセミナー -->
   <!-- 企画について -->
   <section class="wide-contents gray-bg">
     <div class="inner-contents">
       <div class="white-bg radius text-contents">
         <h2>企画について<span class="sub">About</span></h2>
         <p><?php if( get_field('about')) { ?>
           <?php the_field('about') ?>
         <?php } ?></p>
       </div>
     </div>
   </section>
   <!-- ここまで企画について -->
   <!-- 身につけらること -->
   <section class="wide-contents left-diagonal">
     <div class="inner-contents">
       <div class="white-bg radius shadow-contents">
         <h2>身につけられること<span class="sub">What</span></h2>
         <?php if( get_field('what')) { ?>
           <p><?php the_field('what') ?></p>
         <?php } ?>
       </div>
     </div>
   </section>
   <!-- ここまで身につけらること -->
   <!-- ゲスト -->
   <section class="wide-contents mosaic2">
     <div class="inner-contents">
       <h2 class="white-color">登壇者<span class="sub white-color">Guest</span></h2>
       <!-- ゲスト名前出力 -->
       <?php if( get_field('guest1-img')) { ?>
       <div class="normal-box radius">
         <div class="flex-wrap guest-wrap">
             <img src="<?php the_field('guest1-img') ?>" alt="">
           <div class="guest-info">
             <h4 class="name"><?php if( get_field('guest1-name')) { ?><?php the_field('guest1-name') ?><?php } ?></h4>
             <div class="positon">
               <?php if( get_field('guest1-company')) { ?>
                 <?php the_field('guest1-company') ?>
               <?php } ?>
             </div>
           </div>
         </div>
         <p><?php if( get_field('guest1-text')) { ?>
           <?php the_field('guest1-text') ?>
         <?php } ?></p>
       </div>
       <?php } ?>
       <!-- ここまでゲスト名前出力 -->

       <!-- ゲスト名前出力 -->
       <?php if( get_field('guest2-img')) { ?>
       <div class="normal-box radius">
         <div class="flex-wrap guest-wrap">
             <img src="<?php the_field('guest2-img') ?>" alt="">
           <div class="guest-info">
             <h4 class="name"><?php if( get_field('guest2-name')) { ?><?php the_field('guest2-name') ?><?php } ?></h4>
             <div class="positon">
               <?php if( get_field('guest2-company')) { ?>
                 <?php the_field('guest2-company') ?>
               <?php } ?>
             </div>
           </div>
         </div>
         <p><?php if( get_field('guest2-text')) { ?>
           <?php the_field('guest2-text') ?>
         <?php } ?></p>
       </div>
       <?php } ?>
       <!-- ここまでゲスト名前出力 -->

       <!-- ゲスト名前出力 -->
       <?php if( get_field('guest3-img')) { ?>
       <div class="normal-box radius">
         <div class="flex-wrap guest-wrap">
             <img src="<?php the_field('guest3-img') ?>" alt="">
           <div class="guest-info">
             <h4 class="name"><?php if( get_field('guest3-name')) { ?><?php the_field('guest3-name') ?><?php } ?></h4>
             <div class="positon">
               <?php if( get_field('guest3-company')) { ?>
                 <?php the_field('guest3-company') ?>
               <?php } ?>
             </div>
           </div>
         </div>
         <p><?php if( get_field('guest3-text')) { ?>
           <?php the_field('guest3-text') ?>
         <?php } ?></p>
       </div>
       <?php } ?>
       <!-- ここまでゲスト名前出力 -->

     </div>
   </section>
   <!-- ここからゲスト -->
   <!-- 当日の流れ -->
   <section class="wide-contents gray-bg">
     <div class="inner-contents">
       <h2 >当日の流れ<span class="sub">Time Table</span></h2>
       <ul class="time-table">
         <?php if( get_field('time-table1')) { ?>
         <li><time class="schedule">
           <?php the_field('time-table1') ?>min
         </time><span><?php if( get_field('time-table1-text')) { ?><?php the_field('time-table1-text') ?><?php } ?></span>
         </li>
       <?php } ?>
       <?php if( get_field('time-table2')) { ?>
       <li><time class="schedule">
         <?php the_field('time-table2') ?>min
       </time><span><?php if( get_field('time-table2-text')) { ?><?php the_field('time-table2-text') ?><?php } ?></span>
       </li>
     <?php } ?>
       <?php if( get_field('time-table3')) { ?>
       <li><time class="schedule">
         <?php the_field('time-table3') ?>min
       </time><span><?php if( get_field('time-table3-text')) { ?><?php the_field('time-table3-text') ?><?php } ?></span>
       </li>
     <?php } ?>
       </ul>
     </div>
   </section>
   <!-- ここまで当日の流れ -->
   <!-- 参加者の声 -->
   <section class="wide-contents">
     <div class="inner-contents">
       <h2>参加者の声<span class="sub">Voice</span></h2>
       <?php if( get_field('voice1-user')) { ?>
         <div class="white-box radius voice1">
           <span class="toggl-trriger1">続きを読む</span>
           <h4 class="voice-info"><?php the_field('voice1-user') ?></h4>
           <p><?php if( get_field('voice1-text')) { ?>
             <?php the_field('voice1-text') ?>
           <?php } ?></p>
         </div>
       <?php } ?>

       <?php if( get_field('voice2-user')) { ?>
         <div class="white-box radius voice2">
           <span class="toggl-trriger2">続きを読む</span>
           <h4 class="voice-info"><?php the_field('voice2-user') ?></h4>
           <p><?php if( get_field('voice2-text')) { ?>
             <?php the_field('voice2-text') ?>
           <?php } ?></p>
         </div>
       <?php } ?>

       <?php if( get_field('voice3-user')) { ?>
         <div class="white-box radius voice3">
           <span class="toggl-trriger3">続きを読む</span>
           <h4 class="voice-info"><?php the_field('voice3-user') ?></h4>
           <p><?php if( get_field('voice3-text')) { ?>
             <?php the_field('voice3-text') ?>
           <?php } ?></p>
         </div>
       <?php } ?>


     </div>
   </section>
   <!-- ここまで参加者の声 -->
   <!-- イベント概要 -->
   <section class="wide-contents green-bg">
     <div class="inner-contents">
       <h2>イベント概要<span class="sub">Outline</span></h2>
       <table class="event-table">
         <tr>
           <th>会場</th>
           <td><?php if( get_field('table1')) { ?>
             <?php the_field('table1') ?>
           <?php } ?></td>
         </tr>
         <tr>
           <th>住所</th>
           <td><?php if( get_field('table1')) { ?>
             <?php the_field('table2') ?>
           <?php } ?></td>
         </tr>
         <tr>
           <th>地図</th>
           <td><?php if( get_field('table1')) { ?>
             <div class="map-wrap">
               <?php the_field('table3') ?>
             </div>
           <?php } ?></td>
         </tr>
         <tr>
           <th>アクセス</th>
           <td><?php if( get_field('table1')) { ?>
             <?php the_field('table4') ?>
           <?php } ?></td>
         </tr>
         <tr>
           <th>当日連絡先</th>
           <td><?php if( get_field('table1')) { ?>
             <?php the_field('table5') ?>
           <?php } ?></td>
         </tr>
         <tr>
           <th>参加資格</th>
           <td><?php if( get_field('table1')) { ?>
             <?php the_field('table6') ?>
           <?php } ?></td>
         </tr>
         <tr>
           <th>定員</th>
           <td><?php if( get_field('table1')) { ?>
             <?php the_field('table7') ?>
           <?php } ?></td>
         </tr>
         <tr>
           <th>参加費用</th>
           <td><?php if( get_field('table1')) { ?>
             <?php the_field('table8') ?>
           <?php } ?></td>
         </tr>
         <tr>
           <th>持ち物</th>
           <td><?php if( get_field('table1')) { ?>
             <?php the_field('table9') ?>
           <?php } ?></td>
         </tr>
         <tr>
           <th>服装</th>
           <td><?php if( get_field('table1')) { ?>
             <?php the_field('table10') ?>
           <?php } ?></td>
         </tr>
       </table>
     </div>
   </section>
   <!-- ここまでイベント概要 -->
   <!-- 注意事項 -->
   <section class="wide-contents red-bg">
     <div class="inner-contents">
       <h2>注意事項<span class="sub white-color">Caution</span></h2>
       <div class="cauption-box">
         <img src="<?php bloginfo('template_url'); ?>/common/img/cauption.png" alt="" class="mark">
         <p>ご参加席を確実にご用意するため、予約後に当日の個別指定席を確定します。</p>
       </div>
       <div class="cauption-box">
         <img src="<?php bloginfo('template_url'); ?>/common/img/cauption.png" alt="" class="mark">
         <p>キャンセルは2日前まで有効です。それ以降のキャンセルは不可・ご遠慮頂いております。</p>
       </div>
       <div class="cauption-box">
         <img src="<?php bloginfo('template_url'); ?>/common/img/cauption.png" alt="" class="mark">
         <p>開催イベントに関して急なキャンセル（開催2日前）・無断欠席となりますと、システム登録の関係にて今後の各種特典のご案内ができなくなります。ご注意ください。</p>
       </div>
     </div>
   </section>
   <!-- ここまで注意事項 -->
   <?php get_template_part('content/content-contact'); ?>
 </article>
 <?php get_footer(); ?>
