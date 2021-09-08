  /* ========================
  ゆっくりページ内遷移 
  =========================*/
// // #から始まるURLがクリックされた時
$('a[href^="#"]').click(function() {
  // .headerクラスがついた要素の高さを取得
  let header = $(".header").innerHeight();
  let speed = 1000;
  let id = $(this).attr("href");
  let target = $("#" == id ? "html" : id);
  // トップからの距離からヘッダー分の高さを引く
  let position = $(target).offset().top - 100;
  // その分だけ移動すればヘッダーと被りません
  $("html, body").animate(
    {
      scrollTop: position
    },
    speed
  );
  return false;
});



     /* ========================
  トップに戻る 
  =========================*/

$(window).on('scroll', function(){
    if (100 < jQuery(this).scrollTop()) {
     $('.to-top').addClass('is-show');
    } else {
      $('.to-top').removeClass('is-show');
    }
 });
 
 $(function(){
  $('#js-toTop').click(function(){
    $('body,html').animate({
      scrollTop: 0
    }, 500);
  });
 });


   /* ===========================
   アコーディオンをクリックした時の動作
   ============================*/

$('.title').on('click', function() {//タイトル要素をクリックしたら
  $('.box').slideUp(500);//クラス名.boxがついたすべてのアコーディオンを閉じる
    
  var findElm = $(this).next(".box");//タイトル直後のアコーディオンを行うエリアを取得
    
  if($(this).hasClass('close')){//タイトル要素にクラス名closeがあれば
    $(this).removeClass('close');//クラス名を除去    
  }else{//それ以外は
    $('.close').removeClass('close'); //クラス名closeを全て除去した後
    $(this).addClass('close');//クリックしたタイトルにクラス名closeを付与し
    $(findElm).slideDown(500);//アコーディオンを開く
  }
});


   /* ===========================
   ドロワーメニュー
   ============================*/
$('.drawer-icon').on('click',function(e){
  e.preventDefault();

  $('.drawer-icon').toggleClass('is-active');
  $('.drawer-nav').toggleClass('is-active');
  $('.drawer-bg').toggleClass('is-active');
  $('.drawer-content-items').toggleClass('is-active');
  $('.drawer-sns').toggleClass('is-active');

  return false;
});


   /* ===========================
   オプション モーダル
   ============================*/
  
$('.price-option').on('click',function(){
      $('.price-modal').fadeIn();
      return false;
  });
  $('.price-modal').on('click',function(){
      $('.price-modal').fadeOut();
      return false;
  });


   /* ===========================
   スクロールでロゴ差し替え
   ============================*/
window.onscroll = function(){  
  var scrollTop = window.pageYOffset ;  //スクロール量を代入する
  
  if (scrollTop == 0 ) {   //最上部に戻ってきた時
  $(".logo1").css('opacity', '1')
    $('.logo1').css('transition', '0.5s')
  
    $(".logo2").css('opacity', '0')
    $('.logo2').css('transition', '0.5s')
  }
  if (scrollTop > 20 ) {   //１０pxスクロールした時
    $(".logo1").css('opacity', '0')
    $('.logo1').css('transition', '0.5s')
  
    $(".logo2").css('opacity', '1')
    $('.logo2').css('transition', '0.5s')
  }
  }