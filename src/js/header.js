class DropdownAnimate {

  mobileMenuButton;
  dropdown;
  closeMenuButton;

  constructor(dropdown, mobileMenuButton, closeMenuButton) {
    this.dropdown = dropdown;
    this.mobileMenuButton = mobileMenuButton;
    this.closeMenuButton = closeMenuButton;

    this.dropdown.style.transform = 'translateY(-100%)';

    this.show();
    this.hide();
  }

  show() {
    this.mobileMenuButton.addEventListener('click', () => {
      document.body.style.overflowY = 'hidden';
      this.dropdown.style.display = 'flex';
      this.dropdown.classList.add('dropdown-show');
    });
  }

  hide() {
    this.closeMenuButton.addEventListener('click', () => {

      this.dropdown.classList.remove('dropdown-show');
      this.dropdown.classList.add('dropdown-hide');
      setTimeout(() => {
        this.dropdown.removeAttribute('class');
        const args = [this.dropdown, document.body];
        args.map(el => {
          el.removeAttribute('style');
        });
      }, 200);
    
    });
  }
}

const dropdown = document.getElementById('hcc-mobile-dropdown-menu-container');
const mobileMenuButton = document.getElementById('hcc-menu-hamburger');
const closeMenuButton = document.getElementById('hcc-close-menu-button');

new DropdownAnimate(dropdown, mobileMenuButton, closeMenuButton);