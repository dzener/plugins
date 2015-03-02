// SABIAS QUE - SLIDER

var sliderTimer = 5000;
var totalSlides = document.getElementsByClassName('rotate-placeholder1')[0].innerHTML.split("</p>").length-1;//23;
var current = 1;

var varRotateInterval = setInterval(slider, sliderTimer);
//alert(totalSlides);
//alert($('.rotate-placeholder1').innerHTML);

function slider() {
            $('.rotate-placeholder1').animate({ "left": (-100 * current) + "%"},500, "swing");
    current = (current + 1) % totalSlides;
    //alert($('.rotate-placeholder1').innerHTML);
    //var Temp=document.getElementsByClassName('rotate-placeholder1')[0].innerHTML.split("</p>").length;

    //alert(total);
}

// CONSEJOS - SLIDER

var slider2Timer = 6000;
var totalSlides2 = document.getElementsByClassName('rotate-placeholder2')[0].innerHTML.split("</p>").length-1;//26;
var current2 = 1;
//alert(totalSlides2);
var varRotateInterval2 = setInterval(slider2, slider2Timer);

function slider2() {
            $('.rotate-placeholder2').animate({ "left": (-100 * current2) + "%"},500, "swing");
    current2 = (current2 + 1) % totalSlides2;
}
