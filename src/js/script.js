/* Navigation menu */

const hamburger = document.querySelector('.hamburger');
const navMenu = document.querySelector('.nav-menu');

hamburger.addEventListener('click', mobileMenu);

function mobileMenu() {
  hamburger.classList.toggle('active');
  navMenu.classList.toggle('active');
  console.log('clicked');
}

const navLink = document.querySelectorAll('.nav-link');

navLink.forEach(n => n.addEventListener('click', closeMenu));

function closeMenu() {
  hamburger.classList.remove('active');
  navMenu.classList.remove('active');
}

const copyBtn = document.getElementById('copy-btn');

copyBtn.onclick = function() {copyFunc();};

function copyFunc() {
  const copyText = document.getElementById('group-code');
  navigator.clipboard.writeText(copyText.innerHTML).then(copyBtn.innerHTML = 'Copied code to clipboard!');
}

const handleClickDelete = e => {
  const confirm = window.confirm('Are you sure you want to leave the group?');
  if (!confirm) {
    e.preventDefault();
  }
};

const init = () => {
  const links = document.querySelector('leave-group');
  links.forEach($link => $link.addEventListener(`click`, handleClickDelete));

};

init();
