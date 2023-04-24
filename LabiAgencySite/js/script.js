
$(document).ready(function () {
  $("#formNumber").mask("+7 (999) 999-99-99")
})

document.querySelector('.header-menu_button').onclick = function () {
  document.querySelector('.header-menu_wrapper').style.width = '100vw';
  document.querySelector('.header-menu').style.transform = 'translateX(0)';
}
document.querySelector('.header-menu_cross').onclick = function () {
  document.querySelector('.header-menu_wrapper').style.width = '0';
  document.querySelector('.header-menu').style.transform = 'translateX(100%)';
}
document.querySelector('.header-menu_wrapper').onclick = function (e) {
  let menu = document.querySelector('.header-menu');
  let menuHave = e.composedPath().includes(menu);
  if (!menuHave) {
    document.querySelector('.header-menu_wrapper').style.width = '0';
    document.querySelector('.header-menu').style.transform = 'translateX(100%)';
  }
}

document.querySelector('.header-call').onclick = function () {
  document.querySelector('.application-wrapper').classList.toggle('fade');
}

document.querySelector('.services-content__button').onclick = function () {
  document.querySelector('.application-wrapper').classList.toggle('fade');
}

document.querySelector('.preview-button_call').onclick = function () {
  document.querySelector('.application-wrapper').classList.toggle('fade');
}

document.querySelector('.application-cross').onclick = function () {
  document.querySelector('.application-wrapper').classList.toggle('fade');
}
document.querySelector('.application-wrapper').onclick = function (e) {
  let menu = document.querySelector('.application');
  let menuHave = e.composedPath().includes(menu);
  if (!menuHave) {
    document.querySelector('.application-wrapper').classList.toggle('fade');
  }
}

//slider

document.addEventListener("DOMContentLoaded", () => {
  const width = window.innerWidth;
  if (width < 768) {
    const menuSlider = new Swiper(".partner-mobile__slider", {

      loop: true,

    });
  }

})

function formSuccess() {
  document.querySelector('.application-sidebar').style.display = 'none';
  document.querySelector('.application-form__succes').style.display = 'flex';
}

new Swiper('.slider-wrapper', {
  slidesPerView: 5,
  spaceBetween: 20,
  loop: true,
  autoplay: {
    delay: 2000,
  },
  centeredSlides: true,
  breakpoints: {
    320: {
      slidesPerView: 1,
    },
    540: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 2,
    },
    948: {
      slidesPerView: 3,
    },
    1280: {
      slidesPerView: 4,
    },
    1564: {
      slidesPerView: 5,
    }
  }
});


let examinationMail = false;
function ValidMail() {
  var re = /^[\w-\.]+@[\w-]+\.[a-z]{2,4}$/i;
  var myMail = document.getElementById('formMail').value;
  var valid = re.test(myMail);
  if (valid) output = 'true';
  else output = 'false';
  examinationMail = output;
  return valid;
}

let examinationName = false;
function ValidName() {
  var re = /^[а-яa-z]+$/i;
  var myName = document.getElementById('formName').value;
  var valid = re.test(myName);
  if (valid && myName.length >= 2) output = 'true';
  else output = 'false';
  examinationName = output;
  return valid;
}

let examinationNumber = false;
function ValidPhone() {
  var re = /^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/;
  var myPhone = document.getElementById('formNumber').value;
  var valid = re.test(myPhone);
  if (valid) output = 'true';
  else output = 'false';
  examinationNumber = output;
  return valid;
}

document.querySelector('#formButton').onclick = function (event) {

  event.preventDefault();

  ValidPhone()

  ValidMail()

  ValidName()
  console.log(ValidMail())

  console.log(ValidPhone())

  if (examinationNumber == 'true' && examinationMail == 'true' && examinationName == 'true') {
    let name = document.querySelector('#formName').value
    let phone = document.querySelector('#formNumber').value;
    let email = document.querySelector('#formMail').value;
    document.querySelector('#formError').style.display = 'none';

    function ajax(url, method, functionName, dataArray) {
      let xhttp = new XMLHttpRequest();

      xhttp.open(method, url, true);
      xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhttp.send(requestData(dataArray));

      xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          functionName(this.response);
        }
      }
    }

    function requestData(dataArr) {
      let out = ''
      for (let key in dataArr) {
        out += `${key}=${dataArr[key]}&`;
      }
      return out;
    }
    let data = {
      'user_name': name,
      'user_phone': phone,
      'user_email': email,
    };
    ajax('../telegram.php', 'post', formSuccess(), data)
  }
  else {
    document.querySelector('#formError').style.display = 'block';

  }
}