"use strict";

// Mobile nav toggle
const mobileNavShowEl = document.querySelector('.mobile-nav-show');
const mobileNavHideEl = document.querySelector('.mobile-nav-hide');
console.log(document.querySelectorAll('.mobile-nav-toggle'));
const mobileNavBtnEl = document.querySelectorAll('.mobile-nav-toggle');
console.log(mobileNavBtnEl);
mobileNavBtnEl.forEach(element => {
    console.log(element);
    element.addEventListener('click', function () {
        mobileNavToogle();

    })
});
function mobileNavToogle() {
    mobileNavShowEl.classList.toggle('d-none');
    mobileNavHideEl.classList.toggle('d-none');
    // apply a screen that prevent scrolling and clicking on the body
    document.querySelector('body').classList.toggle('mobile-nav-active');
}
// hide mobile nav on same-page/hash links
document.querySelectorAll('.navbar a').forEach(navbarlink => {
    // 1.iterate through all navbar links
    //2. if a link doesn't have a hash exit the function and check the next one.
    // 3. if you find a hash check if there is an element that has that hash 
    // 4. if you don't find it break 
    // 5. if you find it add a click event listner to it. when clicked check if mobile-nav-active is on and do the same you do when you change page. toggle the nav hide show button and remove the mobile-nav-active screen
    if (!navbarlink.hash) return;
    let section = document.querySelector(navbarlink.hash);
    if (!section) return;
    navbarlink.addEventListener('click', () => {
        if (document.querySelector('.mobile-nav-active')) {
            mobileNavToogle();
        }
    })

})
/**
   * Toggle mobile nav dropdowns
   */
const navDropdowns = document.querySelectorAll('.navbar .dropdown > a');

navDropdowns.forEach(el => {
    el.addEventListener('click', function (event) {
        if (document.querySelector('.mobile-nav-active')) {
            event.preventDefault();
            this.classList.toggle('active');
            this.nextElementSibling.classList.toggle('dropdown-active');

            let dropDownIndicator = this.querySelector('.dropdown-indicator');
            dropDownIndicator.classList.toggle('bi-chevron-up');
            dropDownIndicator.classList.toggle('bi-chevron-down');
        }
    })
});

/**
 * Scroll top button
 */
const scrollTop = document.querySelector('.scroll-top');
if (scrollTop) {
    const togglescrollTop = function () {
        window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
    }
    window.addEventListener('load', togglescrollTop);
    document.addEventListener('scroll', togglescrollTop);
    scrollTop.addEventListener('click', window.scrollTo({
        top: 0,
        behavior: 'smooth'
    }));
}

/**
 * Countdown
 **/
const daysEl = document.getElementById('days');
const hoursEl = document.getElementById('hours');
const minutesEl = document.getElementById('minutes');
const secondsEl = document.getElementById('seconds');
//Set end Date
const countDownDate = new Date("April 13, 2023 23:59:59").getTime();
let x = setInterval(function () {
    //Get today's date
    let now = new Date().getTime();
    //Find distance between now and the countdown date in seconds
    const distance = Math.floor(countDownDate - now) / 1000;
    //Convert the duration into days, hours, minutes and seconds
    const days = Math.floor(distance / (60 * 60 * 24));
    const hours = Math.floor(distance % (60 * 60 * 24) / (60 * 60));
    const minutes = Math.floor((distance % (60 * 60)) / (60));
    const seconds = Math.floor((distance % (60)));
    //Display Result
    daysEl.textContent = days;
    hoursEl.textContent = ('0' + hours).slice(-2);
    minutesEl.textContent = ('0' + minutes).slice(-2);
    secondsEl.textContent = ('0' + seconds).slice(-2);



}, 1000);

