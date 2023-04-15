"use strict";
const heroEl = document.getElementById('hero');

// Mobile nav toggle
const mobileNavShowEl = document.querySelector('.mobile-nav-show');
const mobileNavHideEl = document.querySelector('.mobile-nav-hide');
// console.log(document.querySelectorAll('.mobile-nav-toggle'));
const mobileNavBtnEl = document.querySelectorAll('.mobile-nav-toggle');
// console.log(mobileNavBtnEl);
mobileNavBtnEl.forEach(element => {
    // console.log(element);
    element.addEventListener('click', function () {
        mobileNavToggle();

    })
});
function mobileNavToggle() {
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
    // 5. if you find it add a click event listener to it. when clicked check if mobile-nav-active is on and do the same you do when you change page. toggle the nav hide show button and remove the mobile-nav-active screen
    if (!navbarlink.hash) return;
    let section = document.querySelector(navbarlink.hash);
    if (!section) return;
    navbarlink.addEventListener('click', () => {
        if (document.querySelector('.mobile-nav-active')) {
            mobileNavToggle();
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

//parallax function
window.addEventListener("scroll", function () {
    let offset = window.pageYOffset;
    if (heroEl) {
        heroEl.style.backgroundPositionY = offset * 0.5 + "px";
    }
    // console.log('offset: ' + offset);
    // console.log('position: ' + offset * 0.5);
})

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
 * Countdown 1
 **/
// const countdownEl = document.getElementById('countdown');
// const daysEl = document.getElementById('days');
// const hoursEl = document.getElementById('hours');
// const minutesEl = document.getElementById('minutes');
// const secondsEl = document.getElementById('seconds');
// //Set end Date
// const countDownDate = new Date("April 14, 2023 7:59:59").getTime();
// let x = setInterval(function () {
//     //Get today's date
//     let now = new Date().getTime();
//     //Find distance between now and the countdown date in seconds
//     const distance = Math.floor(countDownDate - now) / 1000;
//     if (distance > 0) {
//         //Convert the duration into days, hours, minutes and seconds
//         const days = Math.floor(distance / (60 * 60 * 24));
//         const hours = Math.floor(distance % (60 * 60 * 24) / (60 * 60));
//         const minutes = Math.floor((distance % (60 * 60)) / (60));
//         const seconds = Math.floor((distance % (60)));
//         //Display Result
//         if (daysEl && hoursEl && minutesEl && secondsEl) {
//             daysEl.textContent = days;
//             hoursEl.textContent = ('0' + hours).slice(-2);
//             minutesEl.textContent = ('0' + minutes).slice(-2);
//             secondsEl.textContent = ('0' + seconds).slice(-2);
//         }


//     } else countdownEl.remove();
// }, 1000);

// countDown2
// Create Countdown
$(document).ready(function () {

    var Countdown = {

        // Backbone-like structure
        $countdownEl: $('.countdown'),

        // Params
        countdown_interval: null,
        total_seconds: 0,

        // Initialize the countdown  
        init: function () {
            var Today = new Date();
            // commented out once 
            // var Todayday = Today.getDate(); // getDay() is an integer corresponding to the day of the week: 0 for Sunday, 1 for Monday, 2 for Tuesday, and so on.
            // var Todayhours = Today.getHours();
            // var Todayminutes = Today.getMinutes();
            // var Todayseconds = Today.getSeconds();

            var DeadLine = new Date('Apr 14, 2023 7:59:59');
            //commented out
            // var DeadLineday = DeadLine.getDate();
            // var DeadLinehours = DeadLine.getUTCHours(); // I'm not sure why getHours() here is "loaded jangá"
            // var DeadLineminutes = DeadLine.getMinutes();
            // var DeadLineseconds = DeadLine.getSeconds();
            // My code 
            const $applyEl = $('.btn-apply');
            const $applyNavEl = $('[href="applyphp"]');
            const distance = Math.floor(DeadLine - Today) / 1000;

            // DOM
            if (distance >= 0) {
                this.$ = {
                    days: this.$countdownEl.find('.bloc-time.days .figure'),
                    hours: this.$countdownEl.find('.bloc-time.hours .figure'),
                    minutes: this.$countdownEl.find('.bloc-time.min .figure'),
                    seconds: this.$countdownEl.find('.bloc-time.sec .figure')
                };

                // Init countdown values
                this.values = {
                    // days: DeadLineday - Todayday,
                    // hours: DeadLinehours - Todayhours,
                    // minutes: DeadLineminutes - Todayminutes,
                    // seconds: DeadLineseconds - Todayseconds
                    days: Math.floor(distance / (60 * 60 * 24)),
                    hours: Math.floor(distance % (60 * 60 * 24) / (60 * 60)),
                    minutes: Math.floor((distance % (60 * 60)) / (60)),
                    seconds: Math.floor((distance % (60)))
                };

                // Initialize total seconds
                // this.total_seconds = ((this.values.days * 24) + (this.values.hours * 60 * 60 + (this.values.minutes * 60))) + this.values.seconds;
                // comment out 
                // this.total_seconds = this.values.seconds + (this.values.minutes * 60) + (this.values.hours * 60 * 60) + (this.values.days * 24 * 60 * 60);
                // My code 
                this.total_seconds = distance;

                // Animate countdown to the end 
                this.count();
            } else {
                this.$countdownEl.remove();
                $applyEl.remove();
                $applyNavEl.remove();
            }
        },

        count: function () {

            var that = this,
                $day_1 = this.$.days.eq(0),
                $day_2 = this.$.days.eq(1),
                $hour_1 = this.$.hours.eq(0),
                $hour_2 = this.$.hours.eq(1),
                $min_1 = this.$.minutes.eq(0),
                $min_2 = this.$.minutes.eq(1),
                $sec_1 = this.$.seconds.eq(0),
                $sec_2 = this.$.seconds.eq(1);

            this.countdown_interval = setInterval(function () {
                // review those 
                if (that.total_seconds > 0) {

                    --that.values.seconds;

                    if (that.values.minutes >= 0 && that.values.seconds < 0) {

                        that.values.seconds = 59;
                        --that.values.minutes;
                    } // end if

                    if (that.values.hours >= 0 && that.values.minutes < 0) {

                        that.values.minutes = 59;
                        --that.values.hours;
                    } // end if

                    if (that.values.days >= 0 && that.values.hours < 0) {

                        that.values.hours = 23;
                        --that.values.days;
                    } // end if

                    // Update DOM values
                    // Days
                    that.checkDay(that.values.days, $day_1, $day_2);

                    // Hours
                    that.checkDay(that.values.hours, $hour_1, $hour_2);

                    // Minutes
                    that.checkDay(that.values.minutes, $min_1, $min_2);

                    // Seconds
                    that.checkDay(that.values.seconds, $sec_1, $sec_2);

                    --that.total_seconds;
                } // end if(that.total_seconds > 0)
                else {
                    clearInterval(that.countdown_interval);
                }
            }, 1000);
        },

        animateFigure: function ($countdownEl, value) {

            var that = this,
                $top = $countdownEl.find('.top'),
                $bottom = $countdownEl.find('.bottom'),
                $back_top = $countdownEl.find('.top-back'),
                $back_bottom = $countdownEl.find('.bottom-back');

            // Before we begin, change the back value
            $back_top.find('span')php(value);

            // Also change the back bottom value
            $back_bottom.find('span')php(value);

            // Then animate
            if (document.getElementById('hero')) {
                TweenMax.to($top, 0.8, {
                    rotationX: '-180deg',
                    transformPerspective: 300,
                    ease: Quart.easeOut,
                    onComplete: function () {

                        $topphp(value);

                        $bottomphp(value);

                        TweenMax.set($top, {
                            rotationX: 0
                        });
                    }
                });

                TweenMax.to($back_top, 0.8, {
                    rotationX: 0,
                    transformPerspective: 300,
                    ease: Quart.easeOut,
                    clearProps: 'all'
                });
            }

        },

        checkDay: function (value, $countdownEl_1, $countdownEl_2) {

            var val_1 = value.toString().charAt(0),
                val_2 = value.toString().charAt(1),
                fig_1_value = $countdownEl_1.find('.top')php(),
                fig_2_value = $countdownEl_2.find('.top')php();

            if (value >= 10) {

                // Animate only if the figure has changed
                if (fig_1_value !== val_1) this.animateFigure($countdownEl_1, val_1);
                if (fig_2_value !== val_2) this.animateFigure($countdownEl_2, val_2);
            } else {

                // If we are under 10, replace first figure with 0
                if (fig_1_value !== '0') this.animateFigure($countdownEl_1, 0);
                if (fig_2_value !== val_1) this.animateFigure($countdownEl_2, val_1);
            }
        }
    };
    // Let's go !
    Countdown.init();
});


