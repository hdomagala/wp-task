import $ from 'jquery';

const toggleButton = $('[data-toggle-nav]');
const menuID = toggleButton.attr('data-toggle-nav');
const menu = $(`#${menuID}`);

export const initMobileNav = () => {
    toggleButton.click(function(e) {
        menu.toggleClass('active');
        $(this).toggleClass('active');
        $('body').toggleClass('disable-scroll');
    });

    menu.find('a').click(function(e) {
        menu.toggleClass('active');
        toggleButton.toggleClass('active');
        $('body').toggleClass('disable-scroll');
    });

    $(window).scroll(function(e) {
        $(window).scrollTop() > 200 ? toggleButton.addClass('scrolled') : toggleButton.removeClass('scrolled');
    });
};
