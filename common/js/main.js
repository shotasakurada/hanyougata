jQuery(function($){
  $(function () {

    $('.toggl-trriger1').on('click', function() {
      $('.voice1').addClass("active1");//追加部分
      $(this).css('display','none');//追加部分
      return false;
    });

    $('.toggl-trriger2').on('click', function() {
      $('.voice2').addClass("active2");//追加部分
      $(this).css('display','none');//追加部分
      return false;
    });

    $('.toggl-trriger3').on('click', function() {
      $('.voice3').addClass("active3");//追加部分
      $(this).css('display','none');//追加部分
      return false;
    });

  });
});
