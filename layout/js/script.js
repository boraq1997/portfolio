// Start Progress on scroll
$(window).scroll(function() {
    var scroll = $(window).scrollTop(),
        dh = $(document).height(),
        wh = $(window).height();
        scrollPer = (scroll / (dh-wh)) * 100;
        $('#scroll-progress').css('width', scrollPer + "%");
})


// LocalStorage
let localFontSize = localStorage.getItem("fontSize"),
    localColor = localStorage.getItem("colorSet"),
    localBg = localStorage.getItem("Bg");

// Navbar
const navMenu = document.getElementById("nav-menu"),
      navToggle = document.getElementById("nav-toggle"),
      navClose = document.getElementById("nav-close");

// Show Nav Menu
if (navToggle) {
    navToggle.addEventListener('click', () => {
        navMenu.classList.add("show-menu")
    })
}

// Hide Nav Menu
if (navClose) {
    navClose.addEventListener('click', () => {
        navMenu.classList.remove("show-menu")
    })
}

// Remove Menu Mobile
const navLinks = document.querySelectorAll(".nav-link")

function linkAction() {
    const navMenu = document.getElementById("nav-menu")
    // When Click link
    navMenu.classList.remove("show-menu")
}
navLinks.forEach(n => n.addEventListener('click', linkAction))

// Change Background Header
function scrollHeader() {
    const header = document.getElementById("header")
    if (this.scrollY >= 80) header.classList.add("scroll-header"); else header.classList.remove("scroll-header")
}
window.addEventListener("scroll", scrollHeader)

// Start Number Count Up
const counters = document.querySelectorAll('.counter');

counters.forEach((counter) => {
    counter.innerText = '0';
    const updateCounter = ()=> {
        const target = +counter.getAttribute('data-target');
        const c = +counter.innerText;
        const increment = target / 500;
        if (c < target) {
            counter.innerText = `${Math.ceil(c + increment)}`;
            setTimeout(updateCounter, 1);
        } else {
            counter.innerText = target;
        }
    };
    updateCounter();
})
// End

// Start Progress bar Animation
const progress = $('div.progress');
progress.each(function() {
    const value = $(this).attr('data-target');
    if (value !== 0) {
        var color = '';
        if (value > 0 && value <= 25) {color = '#F00'}
        else if (value > 25 && value <= 50) {color = '#ff9900'}
        else if (value > 50 && value <= 75) {color = '#d8ff00'}
        else if (value > 75 && value < 100) {color = '#00ff14'}
        else if (value == 100) {color = '#00ff4e'}
    }
    $(this).children().first().animate({
        width: value + '%'
    }, 1000).css('background', color);
    $(this).children().last().text(value + '%');
})

// Start Testimonial
var swiper = new Swiper(".testimonial-wrapper", {
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    }
})

// SCROLL SECTIONS ACTIVE LINK
const sections = document.querySelectorAll("section[id");

window.addEventListener("scroll", navHighlighter);
function navHighlighter() {
    let scrollY = window.pageYOffset;
    sections.forEach(current => {
        const sectionHeight = current.offsetHeight;
        const sectionTop = current.offsetTop - 50,
        sectionId = current.getAttribute("id");

        if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
            document.querySelector('.nav-menu a[href*=' + sectionId + ']').classList.add("active-link");
        } else {
            document.querySelector('.nav-menu a[href*=' + sectionId + ']').classList.remove("active-link");
        }
    })
}

// Theme Display
const theme = document.querySelector("#theme-button");
const themeModal = document.querySelector(".customize-theme");
const fontSizes = document.querySelectorAll(".choose-size span");
const colorPalette = document.querySelectorAll(".choose-color span");
var root = document.querySelector(":root");
const Bg1 = document.querySelector(".bg-1");
const Bg2 = document.querySelector(".bg-2");
const Bg3 = document.querySelector(".bg-3");

    // Open Modal
const openThemeModal = () => {
    themeModal.style.display = 'grid';
}

    // Close Modal
    const closeThemeModal = (e) => {
        if (e.target.classList.contains('customize-theme')) {
            themeModal.style.display = 'none';
        }
    }
theme.addEventListener("click", openThemeModal);
themeModal.addEventListener("click", closeThemeModal);

// Fonts
const removeSizeSelector = () => {
    fontSizes.forEach(size => {
        size.classList.remove("active");
    })
}

if (localFontSize !== null) {
    document.querySelector('html').style.fontSize = localFontSize;
    removeSizeSelector();
    if (localFontSize == '12px') {document.querySelector(".font-size-1").classList.add("active")}
    if (localFontSize == '14px') {document.querySelector(".font-size-2").classList.add("active")}
    if (localFontSize == '16px') {document.querySelector(".font-size-3").classList.add("active")}
    if (localFontSize == '18px') {document.querySelector(".font-size-4").classList.add("active")}
}

fontSizes.forEach(size => {
    size.addEventListener('click', () => {
        removeSizeSelector();
        let fontSize;
        size.classList.toggle('active');
        if (size.classList.contains('font-size-1')) {
            fontSize = '12px';
        } else if (size.classList.contains('font-size-2')) {
            fontSize = '14px';
        } else if (size.classList.contains('font-size-3')) {
            fontSize = '16px';
        } else if (size.classList.contains('font-size-4')) {
            fontSize = '18px';
        } 
        localStorage.setItem("fontSize", fontSize)
        
        // Change Font Size
        document.querySelector('html').style.fontSize = fontSize;
    });
});

// PRIMARY COLORS
const changeActiveClass = () => {
    colorPalette.forEach(colorPicker => {
        colorPicker.classList.remove('active');
    })
}

if (localColor !== null) {
    root.style.setProperty('--primary-color-hue', localColor);
    changeActiveClass();
    if (localColor == 252) {document.querySelector(".color-1").classList.add('active')}
    if (localColor == 52) {document.querySelector(".color-2").classList.add('active')}
    if (localColor == 352) {document.querySelector(".color-3").classList.add('active')}
    if (localColor == 152) {document.querySelector(".color-4").classList.add('active')}
    if (localColor == 202) {document.querySelector(".color-5").classList.add('active')}
}

colorPalette.forEach(color => {
    color.addEventListener('click', () => {
        let primaryHue;
        changeActiveClass();
        if (color.classList.contains('color-1')) {
            primaryHue = 252;
        } else if (color.classList.contains('color-2')) {
            primaryHue = 52;
        } else if (color.classList.contains('color-3')) {
            primaryHue = 352;
        } else if (color.classList.contains('color-4')) {
            primaryHue = 152;
        } else if (color.classList.contains('color-5')) {
            primaryHue = 202;
        }
        color.classList.add("active");
        localStorage.setItem("colorSet", primaryHue);
        root.style.setProperty('--primary-color-hue', primaryHue)
    })
})

// THEME BACKGROUND
let lightColorLightness;
let whiteColorLightness;
let darkColorLightness;

const changeBG = () => {
    root.style.setProperty('--light-color-lightness', lightColorLightness);
    root.style.setProperty('--white-color-lightness', whiteColorLightness);
    root.style.setProperty('--dark-color-lightness', darkColorLightness);
}
if (localBg !== null) {
    if (localBg == 'Bg1') {
        darkColorLightness = '17%';
        whiteColorLightness = '92%';
        lightColorLightness = '100%';

        Bg1.classList.add('active');
        Bg2.classList.remove('active');
        Bg3.classList.remove('active');
        changeBG();
    }
    else if (localBg == 'Bg2') {
        darkColorLightness = '95%';
        whiteColorLightness = '20%';
        lightColorLightness = '15%';

        Bg2.classList.add('active');
        Bg1.classList.remove('active');
        Bg3.classList.remove('active');
        changeBG();
    }
    else if (localBg == 'Bg3') {
        darkColorLightness = '95%';
        whiteColorLightness = '10%';
        lightColorLightness = '0%';

        Bg3.classList.add('active');
        Bg1.classList.remove('active');
        Bg2.classList.remove('active');
        changeBG();
    }
}

Bg1.addEventListener('click', () => {
    darkColorLightness = '17%';
    whiteColorLightness = '100%';
    lightColorLightness = '92%';

    // Add Active Class
    Bg1.classList.add('active');
    // Remove Active Class
    Bg2.classList.remove('active');
    Bg3.classList.remove('active');
    changeBG();
    localStorage.setItem("Bg", "Bg1");
})

Bg2.addEventListener('click', () => {
    darkColorLightness = '95%';
    whiteColorLightness = '20%';
    lightColorLightness = '15%';

    // Add Active Class
    Bg2.classList.add('active');
    // Remove Active Class
    Bg1.classList.remove('active');
    Bg3.classList.remove('active');
    changeBG();
    localStorage.setItem("Bg", "Bg2");
})

Bg3.addEventListener('click', () => {
    darkColorLightness = '95%';
    whiteColorLightness = '10%';
    lightColorLightness = '0%';

    // Add Active Class
    Bg3.classList.add('active');
    // Remove Active Class
    Bg1.classList.remove('active');
    Bg2.classList.remove('active');
    changeBG();
    localStorage.setItem("Bg", "Bg3");
})

// Portfolio Item Filter
const filterContainer = document.querySelector(".portfolio-filter-inner"),
      filterBtns = filterContainer.children,
      totalFilterBtn = filterBtns.length,
      portfolioItems = document.querySelectorAll(".portfolio-item"),
      totalPortfolioItem = portfolioItems.length;

    for(let i=0; i<totalFilterBtn; i++) {
        filterBtns[i].addEventListener("click", function() {
            filterContainer.querySelector(".active").classList.remove("active");
            this.classList.add("active");

            const filterValue = this.getAttribute("data-filter");
            for (let k=0; k<totalPortfolioItem; k++) {
                if (filterValue === portfolioItems[k].getAttribute("data-category")) {
                    portfolioItems[k].classList.remove("hide");
                    portfolioItems[k].classList.add("show");
                } else {
                    portfolioItems[k].classList.remove("show");
                    portfolioItems[k].classList.add("hide");
                }
                if (filterValue === "all") {
                    portfolioItems[k].classList.remove("hide");
                    portfolioItems[k].classList.add("show");
                }
            }
        })
    }

// Send Message
$('button#sendMessage').click(function(e) {
    e.preventDefault();
    var mail = $('form#contactForm input#email').val(),
        sub = $('form#contactForm input#subject').val(),
        msg = $('form#contactForm textarea#message').val();

    $('form#contactForm svg.fa-redo').css('display', 'block').addClass('fa-spin')

    var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    if (mail.length !== 0 && sub.length !== 0 && msg.length !== 0) {
        if (testEmail.test(mail)) {
            // Ajax
            $.ajax({
                url: 'requests/sendMessage.req.php',
                method: 'POST',
                data: {mail: mail, sub: sub, msg: msg},
                beforeSend: function() {},
                success: function(result) {
                    if (result == 'EMAIL_ERROR') {$('form#contactForm .alertBox').append('<div class="alert alert-warning"><i class="fas fa-exclamation-triangle"></i> Email Can\'t be empty</div>')}
                    else if (result == 'SUB_ERROR') {$('form#contactForm .alertBox').append('<div class="alert alert-warning"><i class="fas fa-exclamation-triangle"></i> Subject Can\'t be empty</div>')}
                    else if (result == 'MESSAGE_ERROR') {$('form#contactForm .alertBox').append('<div class="alert alert-warning"><i class="fas fa-exclamation-triangle"></i> Message Can\'t be empty</div>')}
                    else if (result == 'SUCCESS') {$('form#contactForm .alertBox').append('<div class="alert alert-success"><i class="fas fa-check"></i> Message has been sent</div>')}
                    else {$('form#contactForm .alertBox').append('<div class="alert alert-error"><i class="fas fa-times-circle"></i> Something went wrong</div>')}
                    
                }
            })
        } else {
            alert("NOT")
        }
    } else {
        $('form#contactForm .alertBox').append('<div class="alert alert-warning"><i class="fas fa-exclamation-triangle"></i> Email Can\'t be empty</div>');
        $('form#contactForm .alertBox').append('<div class="alert alert-warning"><i class="fas fa-exclamation-triangle"></i> Subject Can\'t be empty</div>');
        $('form#contactForm .alertBox').append('<div class="alert alert-warning"><i class="fas fa-exclamation-triangle"></i> Message Can\'t be empty</div>');
    }
    setTimeout(function() {
        $('div.alert').remove();
    }, 5000)
    mail = $('form#contactForm input#email').val('');
    sub = $('form#contactForm input#subject').val('');
    msg = $('form#contactForm textarea#message').val('');
})