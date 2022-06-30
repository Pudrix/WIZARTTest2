<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма обратной связи</title>
    <link rel="stylesheet" href="css\style.css?<?php echo date('YmdHis',filemtime('style.css'));?>" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>

<body>

<div id="myModal" class="modal">
    <div class="modal-content">
        <div class="modal-img">
            <img src="img/check__.png" alt="">

        </div>
        <div class="modal-text">
            <div class="modal-title">Успешно!</div>
            <div class="modal-subtitle">Ваша заявка успешно принята!</div>
            <div class="modal-close">Ок</div>
        </div>

    </div>

</div>

<div id="myModal" class="modal_error">
    <div class="modal-content">
        <div class="modal-img error">
            <img src="img/error__.png" alt="">

        </div>
        <div class="modal-text">
            <div class="modal-title">Произошла ошибка!</div>
            <div class="modal-subtitle">Ваши данные не были отправлены по причине неккоректных данных!</div>
            <div class="modal-close">Ок</div>
        </div>

    </div>

</div>

<div class="form">
    <div class="form__wrapper">
        <h1 class="form__title">Форма обратной связи</h1>
        <div class="form__input-wrapper">
            <div class="form__input">
                <div class="form__input-title">Имя: </div>
                <input type="text" class="form__inp" name="first_name" id="input_name">

            </div>

            <div class="form__input">
                <div class="form__input-title">Фамилия: </div>
                <input type="text" class="form__inp" name="last_name" id="input_last">

            </div>

            <div class="form__input">
                <div class="form__input-title">Email: </div>
                <input type="email" class="form__inp" name="email" id="input_email">

            </div>

            <div class="form__input">
                <div class="form__input-title">Дата рождения: </div>
                <input type="text" class="form__inp" name="datar" id="input_data_r">

            </div>

            <div class="form__input">
                <div class="form__input-title">Телефон: </div>
                <input type="text" class="form__inp tel" id="input_tel" placeholder="+7(__)__-__-__" name="tel">

            </div>

            <div class="form__input">
                <div class="form__input-title">Город: </div>
                <input type="text" class="form__inp" placeholder="Белгород" id="input_city" name="siti">

            </div>

            <div class="form__input">
                <div class="otpravka">Отправить заявку</button>
                </div>
            </div>

        </div>
    </div>


</div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js" type="text/javascript"></script>
    <script src="js\script.js?<?php echo date('YmdHis',filemtime('script.js'));?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.min.js" type="text/javascript"></script>
    <script>
        $(".tel").mask("+7(999) 999-9999");
    </script>

</body>

</html>

