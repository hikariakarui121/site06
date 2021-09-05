
// アコーディオン
$(function(){
  $('.js-accordion').on('click',function(){
      $(this).next().toggleClass('active');
      $(this).children().toggleClass('active');
  })
});


// ナビゲーション
$(function(){
  $('#nav-btn').on('click',function(){
    $(this).toggleClass('-active');
    $('#navi').toggleClass('-active');
    $('.button').toggleClass('-active');
    $('#mask').toggleClass('-active');
  })
});

//マスクを押しても解除されるように！
$(function(){
  $('#mask').on('click',function(){
    $(this).toggleClass('-active');
    $('#navi').toggleClass('-active');
    $('.button').toggleClass('-active');
    $('#nav-btn').toggleClass('-active');
  })
});



// スクロールヒント

  new ScrollHint('.js-scrollable');


