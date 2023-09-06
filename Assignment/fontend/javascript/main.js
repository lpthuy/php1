document.addEventListener("DOMContentLoaded", function () {
  const slider = document.querySelector(".sale-product");
  const prevButton = document.querySelector(".prev");
  const nextButton = document.querySelector(".next");
  const slideWidth = slider.offsetWidth / 5;
  const slideCount = slider.children.length;
  let currentSlide = 0;
  const item = document.querySelector('.item').offsetWidth ;
  console.log(item) ;

  function showSlide(n) {
    slider.style.transform = `translateX(-${n * slideWidth}px)`;
    currentSlide = n;
    // Kiểm tra nếu là slide cuối cùng, vô hiệu hóa nút next
    if (currentSlide === slideCount - 5) {
      nextButton.disabled = true;
    } else {
      nextButton.disabled = false;
    }
  }

  function nextSlide() {
    currentSlide++;
    if (currentSlide >= slideCount - 4) {
      currentSlide = slideCount - 5;
      nextButton.disabled = true;
    }
    showSlide(currentSlide);
  }

  function prevSlide() {
    currentSlide--;
    if (currentSlide < 0) {
      currentSlide = 0;
    }
    showSlide(currentSlide);

    // Kích hoạt lại nút next khi chuyển về slide trước đó
    nextButton.disabled = false;
  }

  showSlide(currentSlide);
  prevButton.addEventListener("click", prevSlide);
  nextButton.addEventListener("click", nextSlide);
});

// Click form
const toggle_form = document.getElementById('toggle-form') ;
const wrapper_form = document.querySelector('.wrapper') ;

toggle_form.addEventListener('click' , () => {
  wrapper_form.classList.toggle('active') ;
  toggle_form.style.transition = 'transform 0.3s ease' ;
  document.body.classList.toggle('no-scroll') ;
})

 // Log in or sign up 
const form = document.querySelectorAll('.form') ;
const login = document.querySelectorAll('#log-in') ;
const signup = document.querySelectorAll('#sign-up') ;
const forgot = document.querySelectorAll('#forgot-pass') ;

console.log(forgot) ;
signup[0].addEventListener('click' , () => {
    form[2].style.transform = 'translateX(-400px)' ;
    form[2].style.transition = 'transform 0.5s ease' ;
    form[1].style.transform = 'translateX(-400px)' ;
    form[1].style.transition = 'transform 0.5s ease' ;
    form[0].style.transform = 'translateX(-400px)' ;
    form[0].style.transition = 'transform 0.5s ease' ;
}) ;
signup[1].addEventListener('click' , () => {
    form[2].style.transform = 'translateX(-400px)' ;
    form[1].style.transform = 'translateX(-400px)' ;
    form[0].style.transform = 'translateX(-400px)' ;

}) ;

forgot[0].addEventListener('click' , () => {
    form[2].style.transform = 'translateX(-800px)' ;
    form[1].style.transform = 'translateX(-800px)' ;
    form[0].style.transform = 'translateX(-800px)' ;
    form[0].style.transition = 'transform 0.5s ease' ;
    form[1].style.transition = 'transform 0.5s ease' ;
    form[2].style.transition = 'transform 0.5s ease' ;  
})
forgot[1].addEventListener('click' , () => {
    form[2].style.transform = 'translateX(-800px)' ;
    form[1].style.transform = 'translateX(-800px)' ;
    form[0].style.transform = 'translateX(-800px)' ;
})
login[0].addEventListener('click' , () => {
    form[2].style.transform = 'translateX(0px)' ;
    form[1].style.transform = 'translateX(0px)' ;
    form[0].style.transform = 'translateX(0px)' ;
})
login[1].addEventListener('click' , () => {
    form[2].style.transform = 'translateX(0px)' ;
    form[1].style.transform = 'translateX(0px)' ;
    form[0].style.transform = 'translateX(0px)' ;
})
// Regax form 

// Log in
const username_login = document.getElementById('username_login') ;
const username_err_login = document.getElementById('username_err_login') ;
const password_login = document.getElementById('password_login') ;
const password_err_login = document.getElementById('password_err_login') ;

function validate_login () {
    let check = true ;
    let regaxUsername = /^[a-zA-Z0-9_]{6,20}$/ ;
    if(regaxUsername.test(username_login.value) == false) {
        username_err_login.innerText = "Username không đúng định dạng" ;
        check = false ;
    }else {
        username_err_login.innerText = "" ;
    }

    let regaxPass = /^[a-zA-Z0-9_]{6,20}$/ ;
    if(regaxPass.test(password_login.value) == false) {
        password_err_login.innerText = "Mật khẩu không đúng định dạng" ;
        check = false ;
    }else {
        password_err_login.innerText = "" ;
    }
    return check ;
}
// Sign up 
const username_signup = document.getElementById('username_signup') ;
const username_err_signup = document.getElementById('username_err_signup') ;
const email_signup = document.getElementById('email_signup') ;
const email_err_signup = document.getElementById('email_err_signup') ;
const password_signup = document.getElementById('password_signup') ;
const password_err_signup = document.getElementById('password_err_signup') ;
const confirm_pass_signup = document.getElementById('confirm_pass_signup') ;
const confirmpass_err_signup = document.getElementById('confirmpass_err_signup') ;
function validate_signup() {
    let check = true ;
    let regaxUsername = /^[a-zA-Z0-9_]{6,20}$/ ;
    if(regaxUsername.test(username_signup.value) == false) {
        username_err_signup.innerText = "Username không đúng định dạng" ;
        check = false ;
    }else {
        username_err_signup.innerText = "" ;
    }
    let regaxEmail = /^\w+@[a-zA-Z0-9]{3,6}\.com$/ ;
    if(regaxEmail.test(email_signup.value) == false) {
        email_err_signup.innerText = "Email không đúng định dạng" ;
        check = false ;
    }else {
        email_err_signup.innerText = "" ;
    }
    let regaxPass = /^[a-zA-Z0-9_]{6,20}$/ ;
    if(regaxPass.test(password_signup.value) == false) {
        password_err_signup.innerText = "Mật khẩu không đúng định dạng" ;
        check = false ;
    }else {
        password_err_signup.innerText = "" ;
    }
    if(confirm_pass_signup.value !== password_signup.value) {
        confirmpass_err_signup.innerText = "Mật khẩu không khớp" ;
        check = false ;
    }else {
        confirmpass_err_signup.innerText = "" ;
    }
    return check ;
}

// Forgot

const email_forgot = document.getElementById('email_forgot') ;
const email_err_forgot = document.getElementById('email_err_forgot') ;

function validate_forgot() {
    let check = true ;
    let regaxEmail = /^\w+@[a-zA-Z0-9]{3,6}\.com$/ ;
    if(regaxEmail.test(email_forgot.value) == false) {
        email_err_forgot.innerText = "Email không đúng định dạng" ;
        check = false ;
    }else {
        email_err_forgot.innerText = "" ;
    }
    return check ;
}

// Cuộn lên đầu trang

const btnToTop = document.getElementById('scroll-to-top') ;
btnToTop.addEventListener('click' , () => {
    window.scrollTo({
        top : 0 ,
        behavior : 'smooth'
    }) ;
})
window.addEventListener('scroll' , () => {
    const btnToTop = document.getElementById('scroll-to-top') ;
    if(window.scrollY > 500) {
        btnToTop.style.display = "block" ;
    }
    else {
        btnToTop.style.display = "none" ;
    }
})