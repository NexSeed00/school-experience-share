@extends('layouts.main')

@section('scriptldjson')
<script src="assets/js/document.js" defer></script>
@endsection

@section('content')
    <div class="c-main-media--lower">
    <div class="c-main-media__movie__wrapper c-media__bg--top">
    </div>
    <h1 class="c-main-media__heading--lower">eBook Download</h1>
    <p class="c-main-media__sub--lower">各種資料は、こちらからダウンロードしていただけます。</p>
    </div>
    <section>
    <div class="t-top__story">
        <div class="t-top__story__inner">
        <div class="l-container">
            <div class="p-section-head">
            <div class="p-section-head__sub-title"><img src="assets/images/home/document.svg" width="100"> / シードテックスクールの資料</div>
            <h2 class="p-section-head__title">IT留学の資料ダウンロード</h2>
            </div>
            <div class="p-section-content">
            <p>Seed Tech SchoolのIT留学について各種資料のダウンロードが可能です。<br>気になる資料にチェックをし、お客様情報を入力してください。</p>
            </div>
        </div>
        </div>
    </div>
    <div class="u-bg--white u-pb--xl">
        <div class="l-container">
        <div class="l-grid">
            <div class="l-grid__item--lg4 l-grid__item--md6">
            <input class="c-dialog-box--checkbox__check" type="checkbox" id="check01" value="SeedTechSchool 説明資料">
            <label class="c-dialog-box--checkbox" for="check01">
                <div class="c-dialog-box--checkbox__img"><img src="assets/images/dummy/dummy-document-thumbnail.jpg" alt=""></div>
                <h3 class="c-dialog-box--checkbox__title">SeedTechSchool 説明資料</h3>
                <p class="c-dialog-box--checkbox__text">世界で活躍できるエンジニアになるための濃密なカリキュラム、STSの強みやコンセプト実績についてまとめています。</p>
            </label>
            </div>
        </div>
        <div class="c-form" id="form">
            <header class="c-form__head">
            <h2 class="c-form__head__title">お客様情報の入力</h2>
            <p class="c-form__head__text is-show">ダウンロードしたい資料にチェックを入れてください。</p>
            </header>
            <dl class="c-form__body">
            <dt class="c-form__body__title">お名前<span class="c-form__required">必須</span></dt>
            <dd class="c-form__body__control--2">
                <input type="text" placeholder="山田">
                <input type="text" placeholder="太郎">
                <p class="c-form__alert"><small>必須項目に入力をしてください。</small></p>
            </dd>
            <dt class="c-form__body__title">メールアドレス<span class="c-form__required">必須</span></dt>
            <dd class="c-form__body__control">
                <input type="email" placeholder="test＠gmail.com">
            </dd>
            <dt class="c-form__body__title">メールアドレス(確認用) <span class="c-form__required">必須</span></dt>
            <dd class="c-form__body__control">
                <input type="email" placeholder="test＠gmail.com">
            </dd>
            <dt class="c-form__body__title">電話 <span class="c-form__required">必須</span></dt>
            <dd class="c-form__body__control">
                <input type="tell" placeholder="09012345678">
            </dd>
            <dt class="c-form__body__title">その他ご質問など</dt>
            <dd class="c-form__body__control">
                <textarea placeholder="ここにお問い合わせ内容をお書きください。"></textarea>
            </dd>
            </dl>
            <button class="c-form__submit-btn">ダウンロード</button>
            </p>
        </div>
        </div>
    </div>
    </section>
    <ol class="c-breadcrumb" style="margin:0;">
      <li><a href="">TOP</a></li>
      <li>資料請求</li>
    </ol>
@endsection
