
// getを取得で新規or既存の判断
var params = (new URL(document.location)).searchParams;
var register_log = params.get('page');

if(register_log){
  $('#login').removeClass('is-active');
  $('#register').addClass('is-active');

  // content部分を追加・削除
  $('#display_login').css('display','none');
  $('#display_register').css('display','');

};




// 選択するとis-active
// ログインエリアを押した処理
$('.c-tab_button').on('click','#login',function () {
  
$('#login').addClass('is-active');
$('#register').removeClass('is-active');

// content部分を追加・削除
$('#display_login').css('display','');
$('#display_register').css('display','none');


})

// 新規登録エリアを押した処理
$('.c-tab_button').on('click','#register',function () {

$('#login').removeClass('is-active');
$('#register').addClass('is-active');


// content部分を追加・削除
$('#display_login').css('display','none');
$('#display_register').css('display','');

})

// 新規登録エリアを押した処理(下部タブ)
$('.c-tab_button').on('click','#login_register',function () {

$('#login').removeClass('is-active');
$('#register').addClass('is-active');


// content部分を追加・削除
$('#display_login').css('display','none');
$('#display_register').css('display','');

})



