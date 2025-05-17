<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
</head>
<body>
    <header class="header">
        <div class="header__logo">
            <a href="/">
                FashionablyLate
            </a>
        </div>
    </header>
    <main>
        <p></p>
        <div class="contact-form__content">
            <div class="contact-form__heading">
               <a>Confirm</a>
            </div>
            <form class="form" action="/contacts" method="POST">
            @csrf
                <div class="confirm-table">
                    <table class="confirm-table__inner">
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">お名前</th>
                            <td class="confirm-table__text">
                                <ul class="confirm-tabel__name">
                                    <li class=confirm-table__first><input type="text" name="name" value="{{ $contact['first_name']}}" readonly /></li>
                                    <li class="confirm-table__last"><input type="text" name="name" value="{{ $contact['last_name']}}" readonly /></li>
                                </ul>
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">性別</th>
                            <td class="confirm-table__text">
                            <input type="text" name="gender" value="{{ $contact['email']}}" readonly />
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">メールアドレス</th>
                            <td class="confirm-table__text">
                                <input type="email" name="email" value="{{ $contact['email']}}" readonly />
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">電話番号</th>
                            <td class="confirm-table__text">
                            <ul class="confirm-tabel__tel">
                                <li class="confirm-tabele__one"><input type="tel" name="tel" value="{{ $contact['one']}}" readonly /></li>
                                <li class="confirm-tabele__one"><input type="tel" name="tel" value="{{ $contact['two']}}" readonly /></li>
                                <li class="confirm-tabele__one"><input type="tel" name="tel" value="{{ $contact['three']}}" readonly /></li>
                            </ul>
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">住所</th>
                            <td class="confirm-table__text">
                                <input type="text" name="address" value="{{ $contact['address']}}" readonly />
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">建物名</th>
                            <td class="confirm-table__text">
                                <input type="text" name="building" value="{{ $contact['building']}}" readonly />
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">お問い合わせの種類</th>
                            <td class="confirm-table__text">
                            
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">お問い合わせ内容</th>
                            <td class="confirm-table__text">
                                <input type="text" name="detail" value="{{ $contact['detail']}}" readonly />
                            </td>
                        </tr>
                    </table>
                </div>
                <ul class="form__button">
                    <li class="form__button-item"><button class=form__button-submit type="submit">送信</button></li>
                    <li class="form__button-item">
                        <a href="/" class="form__button-home">修正</a></li>
                </ul> 
            </form>
        </div>
    </main>    
</body>

</html>