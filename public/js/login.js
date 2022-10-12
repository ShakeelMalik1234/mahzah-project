$(document).ready(function() {
    $('#hide_eye').click(function() {
        $('#password').attr('type', 'text');
        $('#show_eye').show();
        $('#hide_eye').hide();
    });
    $('#show_eye').click(function() {
        $('#password').attr('type', 'password');
        $('#hide_eye').show();
        $('#show_eye').hide();
    });
});