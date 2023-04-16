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




