$( document ).ready(function() {
    var closed = true;

    $( ".hamburger" ).click(function() {
        if(closed)
        {
            $(".page-header nav ul" ).fadeIn('fast','linear');
            $("#hamburger-icon").removeClass('fa-bars');
            $("#hamburger-icon").addClass('fa-times');
            closed = false;
        }
        else
        {
            $( ".page-header nav ul" ).fadeOut('fast','linear');
            $("#hamburger-icon").removeClass('fa-times');
            $("#hamburger-icon").addClass('fa-bars');
            closed = true;
        }
      });
    
      $(".widget_product_categories ").click(function(){
        $(".widget_product_categories ul").slideToggle();
      });

      $(".widget_price_filter h2").click(function(){
        $(".widget_price_filter form").slideToggle();

      });
    
      $(".single-color").click(function() {
        var x = $(".single-color").length;
        for (var i = 0; i <=x ; i++) { 
            $( '#_'+ i).removeClass( 'select'); 
            $( '#_'+ i).removeClass( 'fas fa-check'); 
        }
            $(this).addClass('select');
            $(this).addClass('fas fa-check');               

    });
});



