$(document).ready(function($) {
 $("#newsletter-form").submit(function(e){
    e.preventDefault();
    // We'll pass this variable to the PHP function example_ajax_request
    var fruit = 'Banana';
     
    // This does the ajax request
    $.ajax({
        url: ajaxurl, // or example_ajax_obj.ajaxurl if using on frontend
        data: {
            'action': 'ajax_enqueue',
            'fruit' : fruit
        },
        success:function(data) {
            // This outputs the result of the ajax request
            alert(data);
        },
        error: function(errorThrown){
            console.log(errorThrown);
        }
    });  

});
              
});