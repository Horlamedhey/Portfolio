//nav
var g = document.getElementById('navlist').style;
var k = document.getElementById('navlist');

function toggle() {
    g.outline='hidden';
    if (g.display === 'block') {
        g.display = 'none';
    } else {
        g.display = 'block';
        k.classList.add('fadeInDown');
    }
}

//locations
var x = document.getElementById('locs').style;
var y = document.getElementById('countries').style;
var z = document.getElementById('countries1').style;
var r = document.getElementById('countries2').style;
var s = document.getElementById('countries3').style;
var t = document.getElementById('countries4').style;
var a = document.getElementById('arrow');
var b = document.getElementById('arrow1');
var c = document.getElementById('arrow2');
var l = document.getElementById('arrow3');
var m = document.getElementById('arrow4');
var n = document.getElementById('arrow5');
//countries
function countries() {
    document.getElementById('arrow');
    a.classList.toggle('fa-chevron-down');
    if (x.display === 'block') {
        x.display = 'none';
        y.display = 'none';
        z.display = 'none';
        r.display = 'none';
        s.display = 'none';
        t.display = 'none';
        document.getElementById('arrow1');
        b.classList.remove('fa-chevron-down');
        b.classList.add('fa-chevron-right');
        document.getElementById('arrow2');
        c.classList.remove('fa-chevron-down');
        c.classList.add('fa-chevron-right');
        document.getElementById('arrow3');
        l.classList.remove('fa-chevron-down');
        l.classList.add('fa-chevron-right');
        document.getElementById('arrow4');
        m.classList.remove('fa-chevron-down');
        m.classList.add('fa-chevron-right');
        document.getElementById('arrow5');
        n.classList.remove('fa-chevron-down');
        n.classList.add('fa-chevron-right');
    } else {
        x.display = 'block';
    }
}
//nigeria
function locations() {
    if (y.display === 'block') {
        y.display = 'none';
        document.getElementById('arrow1');
        b.classList.remove('fa-chevron-down');
        b.classList.add('fa-chevron-right');
    } else {
        y.display = 'block';
        document.getElementById('arrow1');
        b.classList.remove('fa-chevron-right');
        b.classList.add('fa-chevron-down');
    }
}
//usa
function locations1() {
    if (z.display === 'block') {
        z.display = 'none';
        document.getElementById('arrow2');
        c.classList.remove('fa-chevron-down');
        c.classList.add('fa-chevron-right');
    } else {
        z.display = 'block';
        document.getElementById('arrow2');
        c.classList.remove('fa-chevron-right');
        c.classList.add('fa-chevron-down');
    }
}
//uk
function locations2() {
    if (r.display === 'block') {
        r.display = 'none';
        document.getElementById('arrow3');
        l.classList.remove('fa-chevron-down');
        l.classList.add('fa-chevron-right');
    } else {
        r.display = 'block';
        document.getElementById('arrow3');
        l.classList.remove('fa-chevron-right');
        l.classList.add('fa-chevron-down');
    }
}
//south-africa
function locations3() {
    if (s.display === 'block') {
        s.display = 'none';
        document.getElementById('arrow4');
        m.classList.remove('fa-chevron-down');
        m.classList.add('fa-chevron-right');
    } else {
        s.display = 'block';
        document.getElementById('arrow4');
        m.classList.remove('fa-chevron-right');
        m.classList.add('fa-chevron-down');
    }
}
//turkey
function locations4() {
    if (t.display === 'block') {
        t.display = 'none';
        document.getElementById('arrow5');
        n.classList.remove('fa-chevron-down');
        n.classList.add('fa-chevron-right');
    } else {
        t.display = 'block';
        document.getElementById('arrow5');
        n.classList.remove('fa-chevron-right');
        n.classList.add('fa-chevron-down');
    }
}

//body aid location
function locaid() {
    x.display = 'none';
    y.display = 'none';
    z.display = 'none';
    r.display = 'none';
    s.display = 'none';
    t.display = 'none';
}

// slider
var images = [
    'js/1.jpg', 
    'js/2.jpg', 
    'js/3.jpg', 
    'js/4.jpg', 
    'js/5.jpg', 
    'js/6.jpg', 
    'js/7.jpg', 
    'js/8.jpg', 
    'js/9.jpg', 
    'js/10.jpg', 
    'js/11.jpg', 
    'js/12.jpg', 
    'js/13.jpg'
];
var j = setInterval(slide,3000);
var i = 0

function slide() {
    var slider = document.getElementById('slider');
    i++
    if (i >= images.length) {
       i=0;
    }
     slider.src = images[i];
}