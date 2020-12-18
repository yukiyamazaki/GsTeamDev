<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/testZaki_result.css') }}">
  <title>Document</title>
</head>
<body>
  <div>
    <h1>山崎テスト、結果表示ページ</h1>
    <a href="{{ url('/test')}}">testページへ戻る</a>
  </div>
  <div class="boxs">
    <div class="box">
      <h2>検索結果</h2>
    </div>
    <div class="box">
      <h2>ソート結果</h2>
    </div>
  </div>
</body>
</html>