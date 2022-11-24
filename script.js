const menuLinks = document.querySelectorAll('.menu-link');
const artOptions = document.querySelectorAll('.option');
const navToggle = document.getElementById('menu-open');
const modal = document.getElementById('email-modal');
const openBtn = document.querySelector('.contact-btn');
const closeBtn = document.querySelector('.modal-close-btn');
const form = document.getElementById('contact-form');

const constraints = {
    name: {
        presence: { allowEmpty: false }
    },
    email: {
        presence: { allowEmpty: false },
        email: true
    },
    message: {
        presence: { allowEmpty: false }
    }
};

form.addEventListener('submit', (event) => {
    const formValues = {
        name: form.elements.name.value,
        email: form.elements.message.value,
        message: form.elements.message.value
    };

    const errors = validate(formValues, constraints);

    if (errors) {
        event.preventDefault();
        const errorMessage = Object.values(errors).map((fieldValues) => { return fieldValues.join(',') }).join("\n");

        alert(errorMessage);
    }
}, false);

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



   
