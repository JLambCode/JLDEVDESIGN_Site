const menuLinks = document.querySelectorAll('.menu-link');
const artOptions = document.querySelectorAll('.option');
const navToggle = document.getElementById('menu-open');
const modal = document.getElementById('email-modal');
const openBtn = document.querySelector('.contact-btn');
const closeBtn = document.querySelector('.modal-close-btn');
const form = document.getElementById('form');
const name = document.getElementById('name');
const email = document.getElementById('email');
const emailBody = document.getElementById('email-body');

function showError(input, message) {
    const formValidation = input.parentElement;
    formValidation.className = 'form-validation error';

    const errorMessage = formValidation.querySelector('p');
    errorMessage.innerText = message;
}

function showValid(input) {
    const formValidation = input.parentElement;
    formValidation.className = 'form-validation valid';
}

function checkRequired(inputArray) {
    inputArray.forEach((input) => {
        if (input.value.trim() === '') {
            showError(input, `${getFieldName(input)} is required`);
        } else {
            showValid(input);
        }
    })
}

function checkLength(input, min, max) {
    if (input.value.length < min) {
        showError(input, `${getFieldName(input)} must be at least ${min} characters`);
    } else if (input.value.length > max) {
        showError(input, `${getFieldName(input)} must be less than ${max} characters`)
    } else {
        showValid(input);
    }
}

function getFieldName(input) {
    return input.name.charAt(0).toUpperCase() + input.name.slice(1);
}

form.addEventListener('submit', (e) => {
    e.preventDefault();

    checkRequired([name, email, emailBody]);
    checkLength(name, 3, 30);
    checkLength(email, 1, 30);
    checkLength(emailBody, 1, 500);
})

openBtn.addEventListener('click', () => {
    modal.style.display = 'block';
});

closeBtn.addEventListener('click', () => {
    modal.style.display = 'none';
});

window.addEventListener('click', (e) => {
    if (e.target === modal) {
        modal.style.display = 'none';
    }
});

menuLinks.forEach(link => {
    link.addEventListener('click', () => {
        navToggle.checked = !navToggle.checked;
    })
});

artOptions.forEach(option => {
    option.addEventListener('click', () => {
        artOptions.forEach(option => {
            option.classList.remove("active");
        })
        option.classList.add("active");
    })
});



   
