jQuery( document ).ready(function() {
    var closed = true;

    jQuery( ".hamburger" ).click(function() {
        if(closed)
        {
            jQuery(".page-header nav ul" ).fadeIn('fast','linear');
            jQuery("#hamburger-icon").removeClass('fa-bars');
            jQuery("#hamburger-icon").addClass('fa-times');
            closed = false;
        }
        else
        {
            jQuery( ".page-header nav ul" ).fadeOut('fast','linear');
            jQuery("#hamburger-icon").removeClass('fa-times');
            jQuery("#hamburger-icon").addClass('fa-bars');
            closed = true;
        }
      });
    
      jQuery(".category_button").click(function(){
        jQuery(".category ul").slideToggle();
      });

      jQuery(".filter_button").click(function(){
        jQuery(".filter-container").slideToggle();

      });
    
      jQuery(".single-color").click(function() {
        var x = jQuery(".single-color").length;
        for (var i = 0; i <=x ; i++) { 
            jQuery( '#_'+ i).removeClass( 'select'); 
            jQuery( '#_'+ i).removeClass( 'fas fa-check'); 
        }
        jQuery(this).addClass('select');
        jQuery(this).addClass('fas fa-check');               

    });
});



