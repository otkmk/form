<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <p class="header__logo">FashionablyLate</p>
            <a class="header__login" href="/login">login</a>
        </div>
    </header>

    <main>
        <div class="content-form__content">
            <div class="content-form__heading">
                <h2>Register</h2>
            </div>
            <form class="form">
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お名前</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="name" placeholder="例:山田 太郎">
                        </div>
                        <div class="form__error">
                            <!--後で-->
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group--item">
                        <span class="form__label--item">メールアドレス</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="email" name="email" placeholder="例:test@example.com">
                        </div>
                        <div class="form__error">
                            <!--後で-->
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group--item">
                        <span class="form__label--input">パスワード</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__inout--text">
                            <input type="text" name="password" placeholder="例:coachtechno6">
                        </div>
                        <div class="form__error">
                            <!--後で-->
                        </div>
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">登録</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>