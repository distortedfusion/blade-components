import $ from 'jquery'

document.addEventListener('DOMContentLoaded', () => {
    $('#sidebarDismiss, #sidebarBackdrop').on('click', function () {
        $('#sidebar').removeClass('show');
        $('#sidebarBackdrop').removeClass('show');
        $('#sidebarCollapse').removeClass('in');
        $('body').removeClass('sidebar-open');
    });

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').addClass('show');
        $('#sidebarBackdrop').addClass('show');
        $('#sidebarCollapse').addClass('in');
        $('body').addClass('sidebar-open');
    });
});
