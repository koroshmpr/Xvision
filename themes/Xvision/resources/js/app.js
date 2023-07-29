import $ from "jquery";

require('./bootstrap');
import Swiper from 'swiper/bundle';
import 'swiper/css';
import 'swiper/css/bundle';
import AOS from 'aos';
import 'aos/dist/aos.css';


document.addEventListener('DOMContentLoaded', function () {

    document.getElementById('product-modal-1').addEventListener('hide.bs.modal', function () {
        document.querySelectorAll('video').forEach(function (video) {
            video.pause();
        });
    });
    document.getElementById('product-modal-2').addEventListener('hide.bs.modal', function () {
        document.querySelectorAll('video').forEach(function (video) {
            video.pause();
        });
    });
    document.getElementById('product-modal-3').addEventListener('hide.bs.modal', function () {
        document.querySelectorAll('video').forEach(function (video) {
            video.pause();
        });
    });
    //toggle header on time
    AOS.init();
    const toggleScrollClass = function () {
        if (window.scrollY > 24) {
            document.body.classList.add('scrolled');
        } else {
            document.body.classList.remove('scrolled');
        }
    }

    toggleScrollClass();

    //check scroll to take actions on it
    window.addEventListener('scroll', function () {
        toggleScrollClass();
    });

// Initialize Swiper
    let swiper1 = new Swiper('.hero-swiper', {
        direction: 'horizontal',
        loop: false,
        effect: 'slide',
        speed: 1000,
        slidesPerView: 1,
        spaceBetween: 0,
    });
    var demo = document.getElementById('header_title');
    var messages = [
        'تنها 3 سوال تا سفر ترکـیه فاصله دارید!' ,

    ]
    var currentText = 0;
// function type
    function type() {
        if(!messages[currentText]){
            currentText = 0;
        }
        var text = '';
        var currentLetter = 0;
        var set1 = setInterval(function(){
            if(messages[currentText][currentLetter]){
                text += messages[currentText][currentLetter++];
                demo.innerHTML = text;
            }else{
                setTimeout(function(){
                    deleteMsg(text);
                } , 2000);
                clearInterval(set1);
                currentText++;
            }
        } , 70);
    }


// deleteMsg
    function deleteMsg(str) {
        var set2 = setInterval(function(){
            if(str.length === 0){
                type();
                clearInterval(set2);
            }else{
                str = str.split('');
                str.pop();
                // str.shift();
                str = str.join('');
                demo.innerHTML = str;
            }
        } , 20);
    }
    type();
})