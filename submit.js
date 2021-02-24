$(document).ready(function () {
    
    $("#submit").on('click', function (e) {
        e.preventDefault();
        console.log("submit button clicked");
        
        var guess = $('#guess');
        guess = parseInt(guess, 10); 
        
        $.ajax("guess.php", {
            data: {
                guess: $('#guess').val().trim(),
            },
            method: "POST",
            success: function (response) {
                if (response == "correct") {
                    $("#feedback").addClass("correct"); 
                } else {
                    $("#feedback").removeClass("correct"); 
                }
                $("#feedback").html(response);
            },
            
        });
    
    });   
    
});