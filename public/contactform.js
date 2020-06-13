jQuery(document).ready(function($) {

    $(".ajax-contact-form").submit(function() {
        var str = $(this).serialize();

        $.ajax({
            type: "POST",
            url: "http://agronadrzeka.pl/contact.php",
            data: str,
            success: function(msg) {
                if(msg == 'OK') {
                    result = '<p>Dziękujemy za wysłanie wiadomości. Skontaktujemy się wkrótce z Państwem.</p>';
                    $(".fields").hide();
                } else {
                    result = msg;
                }
                $('.note').html(result);
            }
        });
        return false;
    });
});