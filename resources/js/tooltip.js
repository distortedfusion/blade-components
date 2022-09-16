import $ from 'jquery'

document.addEventListener('DOMContentLoaded', () => {
    $('[data-toggle="tooltip"]').tooltip({
        container: 'body',
    });
});
