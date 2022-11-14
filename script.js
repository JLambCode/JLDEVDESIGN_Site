const menuLinks = document.querySelectorAll('.menu-link');
const artOptions = document.querySelectorAll('.option');
const navToggle = document.getElementById('menu-open');
var modal = $('#modalDialog');
var btn = $('#mbtn');
var span = $('.close');

$(document).ready(function () {
    btn.on('click', () => {
        modal.show();
    })

    span.on('click', () => {
        modal.hide();
    })

    $('#contactForm').submit((e) => {
        e.preventDefault();
        $('modal-body').css('opacity', '0.5');
        $('.btn').prop('disabled', true);

        $form = $(this);
        $.ajax({
            type: 'POST',
            url: 'ajax_submit.php',
            data: 'contact_submit=1&' + $form.serialize(),
            dataType: 'json',
            success: (response) => {
                if (response.status == 1) {
                    $('#contactForm')[0].reset();
                    $('.response').html('<div class="alert alert-success">' + response.message + '</div>');
                } else {
                    $('.response').html('<div class="alert alert-danger">' + response.message + '</div>');
                }
                $('.modal-body').css('opacity', '');
                $('.btn').prop('disabled', false);
            }
        });
    });
});

$('body').bind('click', (e) => {
    if ($(e.target).hasClass("modal")) {
        modal.hide();
    }
});

menuLinks.forEach(link => {
    link.addEventListener('click', () => {
        navToggle.checked = !navToggle.checked;
    })
})

artOptions.forEach(option => {
    option.addEventListener('click', () => {
        artOptions.forEach(option => {
            option.classList.remove("active");
        })
        option.classList.add("active");
    })    
 })

   
