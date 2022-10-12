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
        // confirm password
        $('#hide_eye1').click(function() {
            $('#cpassword').attr('type', 'text');
            $('#show_eye1').show();
            $('#hide_eye1').hide();
        });
        $('#show_eye1').click(function() {
            $('#cpassword').attr('type', 'password');
            $('#hide_eye1').show();
            $('#show_eye1').hide();
        });
});