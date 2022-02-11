import $ from 'jquery'

// This places the dropdown menu in the body to resolve overflow issues.
// @see https://stackoverflow.com/a/32528085
window.addEventListener('load', function (event) {
    let dropdownMenu;

    $(window).on('show.bs.dropdown', function (e) {
        let $button = $(e.relatedTarget);

        if ($button.data('placement') === 'keep') {
            return;
        }

        dropdownMenu = $(e.target).find('.dropdown-menu');

        $('body').append(dropdownMenu.detach());

        var eOffset = $(e.target).offset();

        dropdownMenu.css({
            'display': 'block',
                'top': eOffset.top + $(e.target).outerHeight(),
                'left': eOffset.left
        });
    });

    $(window).on('hide.bs.dropdown', function (e) {
        let $button = $(e.relatedTarget);

        if ($button.data('placement') === 'keep') {
            return;
        }

        $(e.target).append(dropdownMenu.detach());
        dropdownMenu.hide();
    });
});
