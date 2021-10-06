$(document).ready(function(){

    // like and unlike click
    $(".follow, .unfollow").click(function(){
       

        // AJAX Request
        $.ajax({
            url: 'post.php',
            type: 'post',
            data: {postid:12,type:12},
            dataType: 'json',
            success: function(data){
               

              
                content.html(response);

            }
        });

    });

});