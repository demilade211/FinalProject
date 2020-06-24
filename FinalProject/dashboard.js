btn = document.getElementById("sidebar");
let ul = document.querySelector('ul');
let li = document.querySelectorAll('li');
let v = document.querySelector('#vattendance');
let m = document.querySelector('#mattendance');
let h = document.querySelector('#home');
let con = document.querySelector('.container');
let mcon = document.querySelector('.markattendance-con');

function toggleSidebar(){
    btn.classList.toggle('active');
}
li.forEach(el => {
    el.addEventListener('click', function(){
        ul.querySelector('.active').classList.remove('active');
        el.classList.add('active');
    })
})

//onclick take you to the right place
ul.addEventListener('click', function(evt) {
    var target = evt.target;
    if (target.id === 'home') {
        con.classList.add('hidden');
        mcon.classList.add('hidden');
    } else if (target.id === 'mattendance') {
        con.classList.add('hidden');
        mcon.classList.remove('hidden');
    } else if (target.id === 'vattendance') {
        con.classList.remove('hidden');
        mcon.classList.add('hidden');
    }
  });