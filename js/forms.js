function submitform(form, from, callback){

    $.ajax({
        type: $(form).attr("method"),
        url: $(form).attr("action"),
        data:$(form).serialize(),

        success: function(data){
            console.log(from);
            if( from === 'settings'){
                $('#DivSuccesfully').removeClass('d-none');
            }
            else if( from === 'checkout'){
                if(callback)
                    callback(data);
            }
            else if( from === 'remove_cart'){
                location.reload();
            }
            else if( from === 'FormUpdateQty'){
                location.reload();
            }
            else if( from === 'FormRouletteCategory'){
                location.reload();
            }
        },
        error: function(data){

            if( from === 'settings'){
                $('#DivError').removeClass('d-none');
            }
            else if( from === 'checkout'){
                alert('Error on SQL consult');
                location.reload();
            }
            else if( from === 'remove_cart'){
                alert('Error on SQL consult');
                location.reload();
            }
            else if( from === 'FormUpdateQty'){
                alert('Error on SQL consult');
                location.reload();
            }
            else if( from === 'FormRouletteCategory'){
                alert('Error on SQL consult');
                location.reload();
            }
        }
    });

    return false;
};