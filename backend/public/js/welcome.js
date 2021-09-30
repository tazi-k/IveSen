// ヘッダーの色をスクロールに応じて変える処理
function changeColor(){
  var timing = 70;
  var scrollY = window.pageYOffset;
  var body = document.body;

  var trigger1 = document.getElementById('secound');
  var trigger2 = document.getElementById('third');

  var trigger1Y = trigger1.getBoundingClientRect().top;
  var trigger2Y = trigger2.getBoundingClientRect().top;

  if(0 >= trigger1Y - timing){
      body.classList.add('bg-is-pink');
  }else{
      body.classList.remove('bg-is-pink');
  }
}
window.addEventListener('scroll', changeColor);

// 猫の足跡
function changeCat(){
  var timing = 70;
  var scrollY = window.pageYOffset;
  var body = document.body;

  var trigger1 = document.getElementById('first');
  var trigger2 = document.getElementById('secound');

  var trigger1Y = trigger1.getBoundingClientRect().top;
  var trigger2Y = trigger2.getBoundingClientRect().top;

  if(trigger2Y - timing < 150){
      body.classList.add('in-cat');
  }else if(trigger2Y - timing < 300){
      body.classList.add('in-cat2');
  }else{
      body.classList.remove('in-cat');
      body.classList.remove('in-cat2');
  }
}
window.addEventListener('scroll', changeCat);

// 猫の顔
function bCat(){
  var timing = 70;
  var scrollY = window.pageYOffset;
  var body = document.body;

  var trigger1 = document.getElementById('four');
  var trigger2 = document.getElementById('last');

  var trigger1Y = trigger1.getBoundingClientRect().top;
  var trigger2Y = trigger2.getBoundingClientRect().top;

  if(trigger2Y - timing < 700){
      body.classList.add('out-cat');
  }else{
      body.classList.remove('out-cat');
  }
}
window.addEventListener('scroll', bCat);

document.querySelector('.menu-btn').addEventListener('click', function(){
    document.querySelector('.menu').classList.toggle('is-active');
    document.querySelector('.menu-btn').classList.toggle('active');
 });