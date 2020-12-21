
//ドロップダウンメニュー
function icon() {

  var x = document.getElementById("menu_bar");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  };

};

//テキストエリア伸縮
function flexTextarea(el) {
  const dummy = el.querySelector('.FlexTextarea__dummy')
  el.querySelector('.FlexTextarea__textarea').addEventListener('input', e => {
    dummy.textContent = e.target.value + '\u200b'
  })
};

document.querySelectorAll('.FlexTextarea').forEach(flexTextarea);