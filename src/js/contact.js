const isContactPage = window.location.pathname.match(/mengenai-kami/g);
if (isContactPage) {
  class ContactForm {
    name = document.getElementById('hcc-contact-nama');
    email = document.getElementById('hcc-contact-email');
    message = document.getElementById('hcc-contact-mesej');
  
    nameBlankError = document.getElementById('hcc-contact-nama-error');
    emailBlankError = document.getElementById('hcc-contact-email-blank-error');
    emailFormatError = document.getElementById('hcc-contact-email-format-error');
    messageBlankError = document.getElementById('hcc-contact-message-blank-error');
  
    red = '#FF0006';
  
    cssBorderColorRed(prop) {
      prop.style.borderColor = this.red;
    }
  
    cssDisplayBlock(prop) {
      prop.style.display = 'block';
    }
  
    nameValidate() {
      if (this.name.val() == '') {
        this.cssBorderColorRed(this.name);
        this.cssDisplayBlock(this.nameBlankError);
        return false;
      }
      return true;
    }
  
    emailValidate() {
      const regex = /^[a-z0-9-_]+\@[a-z]+\.[a-z]{2,3}(\.[a-z]{2})?/;
  
      if (this.email.val() == '' || this.email.val().match(regex) == null) {
        this.cssBorderColorRed(this.email);
        if (this.email.val() == '') {
          this.cssDisplayBlock(this.emailBlankError);
        } else {
          this.cssDisplayBlock(this.emailFormatError);
        }
        return false;
      }
      return true;
    }
  
    messageValidate() {
      if (this.message.val() == '') {
        this.cssBorderColorRed(this.message);
        this.cssDisplayBlock(this.messageBlankError);
        return false;
      }
      return true;
    }
  
    removeAttrStyle(prop) {
      prop.removeAttribute('style');
    }
  
    keyPressEvent(arr) {
      arr[0].keypress(() => {
        arr.map(prop => {
          this.removeAttrStyle(prop);
        });
      });
    }
  
    nameKeyPress() {
      const arr = [this.name, this.nameBlankError];
      this.keyPressEvent(arr);
    }
  
    emailKeyPress() {
      const arr = [this.email, this.emailBlankError, this.emailFormatError];
      this.keyPressEvent(arr);
    }
  
    messageKeyPress() {
      const arr = [this.message, this.messageBlankError];
      this.keyPressEvent(arr);
    }
  
    fieldsKeyPress() {
      this.nameKeyPress();
      this.emailKeyPress();
      this.messageKeyPress();
    }
  }
  
  document.getElementById('hcc-contact-submit-button')
    .addEventListener('click', function(e) {
      e.preventDefault();
  
      const contactForm = new ContactForm();
      
      contactForm.nameValidate();
      contactForm.emailValidate();
      contactForm.messageValidate();
  
      contactForm.fieldsKeyPress();
    });
}