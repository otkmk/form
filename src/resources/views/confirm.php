<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
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
                <h2>Confirm</h2>
            </div>
            <form class="form">
                <div class=confirm-table>
                    <table class="confirm-table__inner">
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">お名前</th>
                            <td class="confirm-table__text">
                                <input type="text" name="name" value="サンプル">
                            </td>
                        </tr>
                        <tr class="confirm-table__row">

                        
                        </tr>
                    </table>
                </div>
            </form>
        </div>
    </main>
</body>
</html>