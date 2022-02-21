import $ from 'jquery'

window.addEventListener('load', function () {
    $('#sidebarDismiss, #sidebarBackdrop').on('click', function () {
        $('#sidebar').removeClass('show');
        $('#sidebarBackdrop').removeClass('show');
        $('#sidebarCollapse').removeClass('in');
    });

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').addClass('show');
        $('#sidebarBackdrop').addClass('show');
        $('#sidebarCollapse').addClass('in');
    });
});
