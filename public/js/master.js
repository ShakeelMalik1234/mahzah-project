$(document).ready(function(){
  // menu toggle
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
    $("#menu-toggle-2").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled-2");
      $('#menu ul').hide();
    });
    
    function initMenu() {
        $('#menu ul').hide();
        $('#menu ul').children('.current').parent().show();
        //$('#menu ul:first').show();
        $('#menu li a').click(
          function() {
              var checkElement = $(this).next();
              if ((checkElement.is('ul')) && (checkElement.is(':visible'))) {
                return false;
              }
              if ((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
                $('#menu ul:visible').slideUp('normal');
                checkElement.slideDown('normal');
                return false;
              }
          }
        );
    }
        initMenu();
        // users toggle
        $(".dashboard").click(function() {
          if($(".dashboard-1").hasClass('show-dashboard-1')){
            $('.dashboard-1').removeClass('show-dashboard-1');
            $('.dashboard-1').addClass('hide-dashboard-1');
            $('#sidebar-wrapper').css('box-shadow','4px 4px 17px #0000006e');
            $("#page-content-wrapper").css({'margin-left':'0px'});
          }
          if($("#wrapper").hasClass("toggled-2")){
            $('.hide-dashboard-1').css({'margin-left':'-200px'});
          }else{
            $('.hide-dashboard-1').css({'margin-left':'-0px'});
          }
        });

        $('.dashboard-hide').click(function(){
          if($(".dashboard-1").hasClass('hide-dashboard-1')){
            $('.dashboard-1').removeClass('hide-dashboard-1');
            $('.dashboard-1').addClass('show-dashboard-1');
            $('#sidebar-wrapper').css('box-shadow','none');
            $("#page-content-wrapper").css({'margin-left':'-200px'});
          }
          
        });

        // sites
        $(".sites-show").click(function() {
          if($(".dashboard-1").hasClass('user-site-show')){
            $('.dashboard-1').removeClass('user-site-show');
            $('.dashboard-1').addClass('user-site-hide');
            $('#sidebar-wrapper').css('box-shadow','4px 4px 17px #0000006e');
            $("#page-content-wrapper").css({'margin-left':'0px'});
          }
          if($("#wrapper").hasClass("toggled-2")){
            $('.user-site-hide').css({'margin-left':'-200px'});
          }else{
            $('.user-site-hide').css({'margin-left':'-0px'});
          }
        });

        $('.site-hide').click(function(){
          if($(".dashboard-1").hasClass('user-site-hide')){
            $('.dashboard-1').removeClass('user-site-hide');
            $('.dashboard-1').addClass('user-site-show');
            $('#sidebar-wrapper').css('box-shadow','none');
            $("#page-content-wrapper").css({'margin-left':'-200px'});
          }
          
        });

      // menu toggle wrappers settings
        $("#menu-toggle-2").click(function() {
          if(!$("#wrapper").hasClass("toggled-2")){
            $('.hide-dashboard-1').css({'margin-left':'0px'});
          }else{
            $('.hide-dashboard-1').css({'margin-left':'-200px'});
          }
        });

      // nav menu
        $("#menu-toggle-2").click(function() {
            if($('#wrapper').hasClass('active')){
              $('sidebar-wrapper-1').css({'margin-left': '-200px'});
            }else if(!$('#wrapper').hasClass('active')){
              $('sidebar-wrapper-1').css({'margin-left': '0px'});
            }
        });
  
});