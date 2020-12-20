@extends('layouts.hp')
@section('content')

  <form class="form-horizontal">

    <!-- お名前 -->
    <div class="form-group">
      <p>お名前</p>
      <input type="text" name="user_name" class="form-control" placeholder="例）教育太郎" required>
    </div>

    <!-- メールアドレス -->
    <div class="form-group">
      <p>メールアドレス</p>
      <input type="email" name="user_mail" class="form-control" placeholder="例）kyoiku.taro@example.jp" required>
    </div>

    <!-- お問い合わせの種類 -->
    <div class="form-group">
      <p>お問い合わせの種類</p>
      <select class="form-control" name="contact_category" required>
        <option value="選択してください">選択してください</option>
        <option value="サービス内容">サービス内容について</option>
        <option value="連携">連携について</option>
        <option value="報道関係">報道関係</option>
        <option value="ボランティア">ボランティア・協力</option>
        <option value="その他">その他</option>
      </select>
    </div>

    <!-- お問い合わせ内容 -->
    <div class="form-group">
      <p>お問い合わせ内容</p>
      <textarea name="contact_content" class="form-control" cols="50" rows="8" required></textarea>
    </div>

    <!-- 送信ボタン -->
    <div class="form-btn">
      <button type="submit" class="contact_btn">
        送信する
      </button>
    </div>
  </form>



@endsection