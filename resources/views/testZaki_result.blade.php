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
  <div>
    <img src="{{asset('/storage/'.$file_name)}}" alt="" style="width:200px">
  </div>
  <div class="boxs">
    <div class="box">
      <h2>検索結果</h2>
      <ul>
        @isset($searchFiles)
          @foreach($searchFiles as $searchFile)
          <li class="searchList">
            <div>
            {{ $searchFile->title}}
            </div>
            <div>
            {{ $searchFile->created_at}}
            </div>
          </li>
          @endforeach
        @endisset
      </ul>
    </div>
    <div class="box">
      <h2>ソート結果</h2>
      <ul>
        @isset($sortFiles)
          @foreach($sortFiles as $sortFile)
          <li class="searchList">
            <div>
              {{ $sortFile->title}}
            </div>
            <div>
              {{ $sortFile->created_at}}
            </div>
          </li>
          @endforeach
        @endisset
      </ul>
    </div>
  </div>
</body>
</html>