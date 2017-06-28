
var carou   = document.querySelector('.carousel');
var licarou = document.querySelectorAll('.li-carousel img');
var next    = document.querySelector('.next');
var prev    = document.querySelector('.prev');
var ul      = document.querySelector('.ul-carousel');
var index   = 0;
var dots    = document.querySelectorAll('.dots li');


next.addEventListener('click', function(){
index++;
ul.style.left = -100 * index + 'vw';
if(index > 2){
index = 0;
ul.style.left = 0;
}

for (var i = 0; i < dots.length; i++) {
dots[i].classList.remove('active');
}
dots[index].classList.add('active');

});


prev.addEventListener('click', function(){
index--;
if(index < 0){
index = 2;
ul.style.right = -'200vw';
}

ul.style.left = -100 * index + 'vw';

for (var i = 0; i < dots.length; i++) {
dots[i].classList.remove('active');
}

dots[index].classList.add('active');

});

dots[0].addEventListener('click', function() {
ul.style.left = 0 + 'vw';
this.classList.add('active');
dots[1].classList.remove('active');
dots[2].classList.remove('active');
});

dots[1].addEventListener('click', function() {
ul.style.left = -100 + 'vw';
this.classList.add('active');
dots[0].classList.remove('active');
dots[2].classList.remove('active');
});

dots[2].addEventListener('click', function() {
ul.style.left = -200 + 'vw';
this.classList.add('active');
dots[0].classList.remove('active');
dots[1].classList.remove('active');
});

for (var i = 0; i < licarou.length; i++) {
licarou[i].style.height = carou.style.height;
}