$( document ).ready(function() {
    $( ".hamburger" ).click(function() {
        $( ".page-header nav ul" ).toggle();
      });
      
});



var filter = document.querySelector(".filter_button");
filter.addEventListener("click", function () {
    document.querySelector(".slide-bar").classList.toggle("filter-open");
}, false);

var category = document.querySelector(".category_button");
category.addEventListener("click", function () {
    document.querySelector(".slide-bar").classList.toggle("category-open");
}, false);