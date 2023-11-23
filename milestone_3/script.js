"use strict";

document.addEventListener('DOMContentLoaded', function () {
  const form = document.querySelector('.signup-form');
  form.addEventListener('submit', function (event) {
    event.preventDefault();

    const nameInput = document.getElementById('name');
    const usernameInput = document.getElementById('username');
    const emailInput = document.getElementById('email');
    const passwordInput = document.getElementById('password');
    const confirmPasswordInput = document.getElementById('confirm-password');

    const userTypeSelect = document.getElementById('user-type');
    const selectedUserType = userTypeSelect.options[userTypeSelect.selectedIndex].value;

    // Validation rules
    const nameRegex = /^[A-Za-z\s]+$/; // Letters and spaces only
    const usernameRegex = /^[A-Za-z0-9]+$/; // Letters and numbers only
    const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/; // Basic email regex

    // Reset previous error messages
    const errorElements = form.querySelectorAll('.error-message');
    errorElements.forEach((element) => element.remove());

    let isValid = true;

    if (!nameRegex.test(nameInput.value)) {
      displayErrorMessage(nameInput, 'Please enter a valid name.');
      isValid = false;
    }

    if (!usernameRegex.test(usernameInput.value)) {
      displayErrorMessage(usernameInput, 'Please enter a valid username (letters and numbers only).');
      isValid = false;
    }

    if (!emailRegex.test(emailInput.value)) {
      displayErrorMessage(emailInput, 'Please enter a valid email address.');
      isValid = false;
    }

    if (passwordInput.value.length < 8) {
      displayErrorMessage(passwordInput, 'Password must be at least 8 characters long.');
      isValid = false;
    }

    if (passwordInput.value !== confirmPasswordInput.value) {
      displayErrorMessage(confirmPasswordInput, 'Passwords do not match.');
      isValid = false;
    }

    if (selectedUserType === 'agent') {
      // Add additional validation for agent-specific fields if needed
    }

    if (isValid) {
        displaySuccessPopup('Application form submitted successfully!');

        // Delay the form submission and redirection
        setTimeout(function () {
          // After the delay, programmatically submit the form
          form.submit();
        }, 2000); // Redirect after 2 seconds (adjust as needed).
      }
  });

  function displayErrorMessage(inputElement, message) {
    const errorElement = document.createElement('div');
    errorElement.className = 'error-message';
    errorElement.textContent = message;
    inputElement.parentNode.appendChild(errorElement);
  }

  function displaySuccessMessage(message) {
    const successMessage = document.createElement('div');
    successMessage.className = 'success-message';
    successMessage.textContent = message;
    form.parentNode.appendChild(successMessage);
  }
  function displaySuccessPopup(message) {
    const successPopup = document.getElementById('success-popup');
    const successMessageText = document.getElementById('success-message-text');
    
    successMessageText.textContent = message;
    successPopup.style.display = 'block';
  }
  

});