<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
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
               <a>Contact
               </a>
            </div>
            <form class="form" action="/contacts/confirm" method="post">
            @csrf
                <div class="form__group">
                    <div class="form__group-title">
                        <apan class="form__label--item">お名前</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--name">
                                <input type="text" name="first_name" placeholder="例:山田" value="{{ old('first_name')}}" required />
                                <input type="text" name="last_name" placeholder="例:太郎" value="{{ old('last_name')}}"  required />
                                <input type="hidden" name="name">
                        </div>
                        <div class="form__error">   @error('name')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <apan class="form__label--item">性別</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--gender">
                                <input type="radio" name="gender" value="1" required />男性
                                <input type="radio" name="gender" value="2" required />女性
                                <input type="radio" name="gender" value="3" required />その他
                        </div>
                        <div class="form__error">   <!--エラーメッセージ　-->
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">メールアドレス</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="email" name="email" placeholder="test@example.com" value="{{ old('email')}}"  required />
                         </div>
                        <div class="form__error">
                        <!--バリデーション機能を実装したら記述します。-->
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">電話番号</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--tel">
                            <input type="tel" name="one" placeholder="080" required />-
                            <input type="tel" name="two" placeholder="1234" required />-
                            <input type="tel" name="three" placeholder="5678" required />
                        </div>
                        <div class="form__error">
                            <!--バリデーション機能を実装したら記述します。-->
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">住所</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address')}}" required />
                        </div>
                        <div class="form__error">
                            <!--バリデーション機能を実装したら記述します。-->
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">建物名</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="building" placeholder="例:千駄ヶ谷マンション101" value="{{ old('building')}}" />
                        </div>
                        <div class="form__error">
                            <!--バリデーション機能を実装したら記述します。-->
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <apan class="form__label--item">お問い合わせの種類</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--select">
                            <select name="selct" required>
                                <option value="" disabled selected>選択してください</option>
                                <option value="1">商品のお届けについて</option>
                                <option value="2">商品の交換について</option>
                                <option value="3">商品トラブル</option>
                                <option value="4">ショップへのお問い合わせ</option>
                                <option value="5">その他</option>
                            </select>
                        </div>
                        <div class="form__error">   <!--エラーメッセージ　-->
                        </div>
                    </div>
                </div>                
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お問い合わせ内容</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--textarea">
                            <textarea name="detail" maxlength="120" placeholder="お問い合わせ内容をご記載ください" value="{{ old('detail')}}" required></textarea>
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