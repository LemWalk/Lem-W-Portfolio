
// This function toggles the 'active' class for the 'burger-menu' and 'off-screen-menu' elements
function toggleMenu() {
    // Get the elements by their class names
    let burgerMenu = document.querySelector('.burger-menu');
    let offScreenMenu = document.querySelector('.off-screen-menu');
    // Add or remove the 'active' class depending on the current state
    burgerMenu.classList.toggle('active');
    offScreenMenu.classList.toggle('active');
  }
  
  // This function removes the 'active' class for the 'burger-menu' and 'off-screen-menu' elements
  function closeMenu() {
    // Get the elements by their class names
    let burgerMenu = document.querySelector('.burger-menu');
    let offScreenMenu = document.querySelector('.off-screen-menu');
    // Remove the 'active' class if it exists
    if (burgerMenu.classList.contains('active')) {
      burgerMenu.classList.remove('active');
      offScreenMenu.classList.remove('active');
    }
  }
  
  // Add an event listener to the 'burger-menu' element to call the toggleMenu function when clicked
  document.querySelector('.burger-menu').addEventListener('click', toggleMenu);
  
  // Get all the elements with the 'nav-link' class and loop through them
  let navLinks = document.querySelectorAll('.nav-link-off-screen');
  for (let navLink of navLinks) {
    // Add an event listener to each element to call the closeMenu function when clicked
    navLink.addEventListener('click', closeMenu);
  }

// ===== Success and Error Message Close =====


const btn_success_close = document.querySelector('.submit_message_close');
const btn_error_close = document.querySelector('.submit_message_close_error');
const successMessage = document.querySelector('.submit_message_box');
const errorMessage = document.querySelector('.submit-failed');


if(btn_success_close){
    btn_success_close.addEventListener('click', (closeSuccessMessage));
}

if( btn_error_close){
    btn_error_close.addEventListener('click', (closeSuccessMessage));  
}

function closeSuccessMessage() {
    successMessage.style.display = 'none';
}

function closeErrorMessage() {
    errorMessage.style.display = 'none';
}