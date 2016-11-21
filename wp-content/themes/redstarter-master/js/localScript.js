jQuery(document).ready(function ($) {

    console.log(red_vars);
    event.preventDefault();

    $.ajax({
        url: 'http://localhost/wordpress/index.php/wp-json/wp/v2/posts/',
    data: {

    },

    dataType: 'json',
    type: 'GET',
    success: function(data) {
       console.log(data);
    },
    error: function() {

        // error code

    }

    });
     });

