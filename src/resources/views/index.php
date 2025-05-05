<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <p class="header__logo">FashionablyLate</p>
            <a class="header__login" href="/login"></a>
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
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="name" placeholder="例:山田">
                            <input type="text" name="name" placeholder="例:太郎">
                        </div>
                        <div class="form__error">
                            <!--後で-->
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">性別</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="checkbox" name="gender" value="man">男
                            <input type="checkbox" name="women" value="women">女
                            <input type="checkbox" name="another" value="another">その他
                        </div>
                        <div class="form__error">
                            <!--後で-->
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group--item">
                        <span class="form__label--item">メールアドレス</span>
                        <span class="form__label--required">※</span>
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
                        <span class="form__label--input">電話番号</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__inout--text">
                            <input type="text" name="tel" placeholder="080">-
                            <input type="text" name="tel" placeholder="1234">-
                            <input type="text" name="tel" placeholder="5678">
                        </div>
                        <div class="form__error">
                            <!--後で-->
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group--item">
                        <span class="form__label--input">住所</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__inout--text">
                            <input type="text" name="password" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3">
                        </div>
                        <div class="form__error">
                            <!--後で-->
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group--item">
                        <span class="form__label--input">お問い合わせの種類</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__inout--text">
                            <select name="form-content" id="form-content">
                                <option value="1">1.商品のお届けについて</option>
                                <option value="2">2.商品の交換について</option>
                                <option value="3">3.商品トラブル</option>
                                <option value="4">4.ショップへのお問い合わせ</option>
                                <option value="5">5.その他</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お問い合わせ内容</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="text" placeholder="お問い合わせ内容をご記入ください">
                        </div>
                        <div class="form__error">
                            <!--後で-->
                        </div>
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">確認画面</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>