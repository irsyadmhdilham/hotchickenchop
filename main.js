"use strict";

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

var isContactPage = window.location.pathname.match(/hubungi-kami/g);

if (isContactPage) {
  var ContactForm = /*#__PURE__*/function () {
    function ContactForm() {
      _classCallCheck(this, ContactForm);

      _defineProperty(this, "name", document.getElementById('hcc-contact-nama'));

      _defineProperty(this, "email", document.getElementById('hcc-contact-email'));

      _defineProperty(this, "message", document.getElementById('hcc-contact-mesej'));

      _defineProperty(this, "nameBlankError", document.getElementById('hcc-contact-nama-error'));

      _defineProperty(this, "emailBlankError", document.getElementById('hcc-contact-email-blank-error'));

      _defineProperty(this, "emailFormatError", document.getElementById('hcc-contact-email-format-error'));

      _defineProperty(this, "messageBlankError", document.getElementById('hcc-contact-message-blank-error'));

      _defineProperty(this, "red", '#FF0006');
    }

    _createClass(ContactForm, [{
      key: "cssBorderColorRed",
      value: function cssBorderColorRed(prop) {
        prop.style.borderColor = this.red;
      }
    }, {
      key: "cssDisplayBlock",
      value: function cssDisplayBlock(prop) {
        prop.style.display = 'block';
      }
    }, {
      key: "nameValidate",
      value: function nameValidate() {
        if (this.name.value == '') {
          this.cssBorderColorRed(this.name);
          this.cssDisplayBlock(this.nameBlankError);
          return false;
        }

        return true;
      }
    }, {
      key: "emailValidate",
      value: function emailValidate() {
        var regex = /^[a-z0-9-_]+\@[a-z]+\.[a-z]{2,3}(\.[a-z]{2})?/;

        if (this.email.value == '' || this.email.value.match(regex) == null) {
          this.cssBorderColorRed(this.email);

          if (this.email.value == '') {
            this.cssDisplayBlock(this.emailBlankError);
          } else {
            this.cssDisplayBlock(this.emailFormatError);
          }

          return false;
        }

        return true;
      }
    }, {
      key: "messageValidate",
      value: function messageValidate() {
        if (this.message.value == '') {
          this.cssBorderColorRed(this.message);
          this.cssDisplayBlock(this.messageBlankError);
          return false;
        }

        return true;
      }
    }, {
      key: "removeAttrStyle",
      value: function removeAttrStyle(prop) {
        prop.removeAttribute('style');
      }
    }, {
      key: "keyPressEvent",
      value: function keyPressEvent(arr) {
        var _this = this;

        arr[0].addEventListener('keypress', function () {
          arr.map(function (prop) {
            _this.removeAttrStyle(prop);
          });
        });
      }
    }, {
      key: "nameKeyPress",
      value: function nameKeyPress() {
        var arr = [this.name, this.nameBlankError];
        this.keyPressEvent(arr);
      }
    }, {
      key: "emailKeyPress",
      value: function emailKeyPress() {
        var arr = [this.email, this.emailBlankError, this.emailFormatError];
        this.keyPressEvent(arr);
      }
    }, {
      key: "messageKeyPress",
      value: function messageKeyPress() {
        var arr = [this.message, this.messageBlankError];
        this.keyPressEvent(arr);
      }
    }, {
      key: "fieldsKeyPress",
      value: function fieldsKeyPress() {
        this.nameKeyPress();
        this.emailKeyPress();
        this.messageKeyPress();
      }
    }]);

    return ContactForm;
  }();

  document.getElementById('hcc-contact-submit-button').addEventListener('click', function (e) {
    e.preventDefault();
    var contactForm = new ContactForm();
    contactForm.nameValidate();
    contactForm.emailValidate();
    contactForm.messageValidate();
    contactForm.fieldsKeyPress();
  });
}

window.initMap = function initMap() {
  var coordinate = {
    lat: 2.2576055092316714,
    lng: 102.2331881675083
  };
  var map = new google.maps.Map(document.getElementById('hcc-map'), {
    zoom: 15,
    center: coordinate
  });
  var marker = new google.maps.Marker({
    position: coordinate,
    map: map
  });
};

var DropdownAnimate = /*#__PURE__*/function () {
  function DropdownAnimate(dropdown, mobileMenuButton, closeMenuButton) {
    _classCallCheck(this, DropdownAnimate);

    _defineProperty(this, "mobileMenuButton", void 0);

    _defineProperty(this, "dropdown", void 0);

    _defineProperty(this, "closeMenuButton", void 0);

    this.dropdown = dropdown;
    this.mobileMenuButton = mobileMenuButton;
    this.closeMenuButton = closeMenuButton;
    this.dropdown.style.transform = 'translateY(-100%)';
    this.show();
    this.hide();
  }

  _createClass(DropdownAnimate, [{
    key: "show",
    value: function show() {
      var _this2 = this;

      this.mobileMenuButton.addEventListener('click', function () {
        document.body.style.overflowY = 'hidden';
        _this2.dropdown.style.display = 'flex';

        _this2.dropdown.classList.add('dropdown-show');
      });
    }
  }, {
    key: "hide",
    value: function hide() {
      var _this3 = this;

      this.closeMenuButton.addEventListener('click', function () {
        _this3.dropdown.classList.remove('dropdown-show');

        _this3.dropdown.classList.add('dropdown-hide');

        setTimeout(function () {
          _this3.dropdown.removeAttribute('class');

          var args = [_this3.dropdown, document.body];
          args.map(function (el) {
            el.removeAttribute('style');
          });
        }, 200);
      });
    }
  }]);

  return DropdownAnimate;
}();

var dropdown = document.getElementById('hcc-mobile-dropdown-menu-container');
var mobileMenuButton = document.getElementById('hcc-menu-hamburger');
var closeMenuButton = document.getElementById('hcc-close-menu-button');
new DropdownAnimate(dropdown, mobileMenuButton, closeMenuButton);
var swiperSocialProof = new Swiper('.swiper-social-proof', {
  pagination: {
    el: '.swiper-pagination'
  },
  pauseOnMouseEnter: true,
  autoplay: {
    delay: 4000
  },
  loop: true,
  breakpoints: {
    480: {
      slidesPerView: 1,
      spaceBetween: 50
    },
    800: {
      slidesPerView: 2,
      spaceBetween: 70
    },
    1200: {
      slidesPerView: 3,
      spaceBetween: 100
    }
  }
});

function socialProofNextButton() {
  swiperSocialProof.slideNext();
}

function socialProofPrevButton() {
  swiperSocialProof.slidePrev();
}

var swiperCustomerImage = new Swiper('.swiper-customer-image', {
  autoplay: {
    delay: 4000,
    loop: true
  }
});