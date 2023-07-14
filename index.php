<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Тестове завдання</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body class="bg-light">

<div class="container">
    <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://t3.ftcdn.net/jpg/05/17/79/88/360_F_517798849_WuXhHTpg2djTbfNf0FQAjzFEoluHpnct.jpg" alt="" width="72" height="72">
        <h2>Форма реєстрації</h2>
        <p class="lead">Заповніть дані форми для реєстрації на сайті</p>
    </div>

    <div class="row">

        <div class="col-md-6  order-md-1" style="margin: 0 auto;">
            <h4 class="mb-3">Реєстрація</h4>
            <div class="alert alert-primary" id="form-message" role="alert" style="display: none;">

            </div>
            <form class="needs-validation" action="form.php" novalidate="" method="post" id="registration-form">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">Ім’я<span class="text-muted">*</span></label>
                        <input type="text" class="form-control" name="firstName" id="firstName" placeholder="" value="" required="required">

                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName">Прізвище<span class="text-muted">*</span></label>
                        <input type="text" class="form-control" name="lastName" id="lastName" placeholder="" value="" required="required">

                    </div>
                </div>

                <div class="mb-3">
                    <label for="email">Email <span class="text-muted">*</span></label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com">
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">Пароль<span class="text-muted">*</span></label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="" value="" required="required">

                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName">Повторіть пароль<span class="text-muted">*</span></label>
                        <input type="password" class="form-control" name="password_repeat" id="password_repeat" placeholder="" value="" required="required">

                    </div>
                </div>

                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Зареєструватись</button>
            </form>
        </div>

    </div>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© 2023 Тестове завдання</p>
    </footer>
</div>

<script
        src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
        crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

<script src="/js/form.js"></script>

</body>
</html>