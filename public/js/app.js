$( function() {
    //Newsletter form event
    $('#newletterBtn').click(function(event)
     {
       //  Act on the event
            event.preventDefault();
            var dataUrl = $('form.NL').attr('data-url');
            var subscriber = $('input[name=subscriber]').val();
            console.log(subscriber);
            $.post(dataUrl, {email: subscriber}).done(function(d){
              alert(d.message);
            });
    });


    jeoquery.defaultData.userName = 'routes';
    $("#location").jeoCityAutoComplete({callback: function(city) { if (console) console.log(city);}});


    $('#phone').on("keyup", function(event){
        event.preventDefault();
        var a = $(this).val();
        var filter = /^\d{11}$/;
        if (filter.test(a))
            $(this).css({'border': '1px solid green'});
        else
            $(this).css({'border': '1px solid red'});

    }
    );

}
);
