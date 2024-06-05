document.addEventListener('DOMContentLoaded', function () {
    const toggler = document.querySelector('.navbar-toggler');
    const icon = toggler.querySelector('.fas');

    toggler.addEventListener('click', function () {
        if (icon.classList.contains('fa-bars')) {
            icon.classList.remove('fa-bars');
            icon.classList.add('fa-times', 'rotate-90');
        } else {
            icon.classList.remove('fa-times', 'rotate-90');
            icon.classList.add('fa-bars');
        }
    });
});
