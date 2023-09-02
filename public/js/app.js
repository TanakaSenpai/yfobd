

const hamIcon = $('#hamIcon')
const mobileNav = $('.mobileNav')

hamIcon.on('click', () => {
    hamIcon.toggleClass('fa-bars');
    hamIcon.toggleClass('fa-xmark');
    mobileNav.toggleClass('d-none');
    mobileNav.toggleClass('d-block');
});

