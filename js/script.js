function validateDate_MMDDYYYY(input_date) {
    var parts = input_date.split(/[\/\-\.]/);

    if (parts.length < 3) {
        return false;
    }
    var dt = new Date(parts[2], parts[0] - 1, parts[1]);
    return (dt && dt.getMonth() === parseInt(parts[0], 10) - 1)

}
function validMail(mail)
{
    return /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()\.,;\s@\"]+\.{0,1})+([^<>()\.,;:\s@\"]{2,}|[\d\.]+))$/.test(mail);
}
$('.modal-close').on('click', function () {
    $('.modal').css('display', 'none');
    $('.modal_error').css('display', 'none');
});
$('.otpravka').on('click', function() {
    let name = $('#input_name').val();
    let last_name = $('#input_last').val();if(name === undefined || name === null || name === '') {
        alert('Заполните имя');
        return false;
    }
    if(last_name === undefined || last_name === null || last_name === '') {
        alert('Заполните фамилию');
        return false;
    }

    if(email === undefined || email === null || email === '') {
        alert('Заполните почту');
        return false;
    }
    let mail = validMail(email);
    if(mail == false) {
        alert('Почта заполнена неккоректно');
        return false;
    }


    if(data_r === undefined || data_r === null || data_r === '') {
        alert('Заполните дату рождения');
        return false;
    }
    let date = validateDate_MMDDYYYY(data_r);
    if(date == false) {
        alert('Дата рождения заполнена некорректно');
        return false;
    }

    if(tel === undefined || tel === null || tel === '') {
        alert('Заполните телефон');
        return false;
    }

    if(city === undefined || city === null || city === '') {
        alert('Заполните город');
        return false;
    }
    let email = $('#input_email').val();
    let data_r = $('#input_data_r').val();
    let tel = $('#input_tel').val();
    let city = $('#input_city').val();



    let arr = {
        name: name,
        last_name: last_name,
        email: email,
        data_r: data_r,
        tel: tel,
        city: city
    };

    $.ajax({
        type: "POST",
        url: "../ajax.php",
        data: arr,
        success: function(data)
        {
            if(data === '"ERROR"') {
                $('.modal_error').css('display', 'block');
            } else {
                $('.modal').css('display', 'block');
            }
        }
    });

});

