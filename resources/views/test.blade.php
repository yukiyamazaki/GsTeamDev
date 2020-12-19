<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/test.css') }}">
  <title>こちらテストページ</title>
</head>
<body>
  <div>
    <h1>こちら山崎テストページ</h1>
  </div>

  <div>
    {{-- ここから資料投稿のテストFORM部分 --}}
    <h2>test1 資料投稿FORM</h2>
    <form method="POST" action="{{ url('/testDocReg')}}" enctype="multipart/form-data">
      {{ csrf_field() }}
        <h3 >
          <span>資料情報</span>
        </h3>
        <div>
          <p></p>
          <div>
            <input type="file" name="file" id="file">
          </div>
          <p></p>
          <table>
            <tbody>
              <tr>
                <th>タイトル</th>
                <th>
                  <div>
                    <input type="text" name="title">
                  </div>
                </th>
              </tr>

              <tr>
                <th>
                  説明
                </th>
                <th>
                  <div>
                    <input name="discription"></input>
                  </div>
                </th>
              </tr>
              <tr>
                <th>
                  学年カテゴリ
                </th>
                <th>
                  <div>
                    <input type="text" name="school_categroy" value=""> 
                  </div>
                </th>
              </tr>
              <tr>
                <th>
                  教科
                </th>
                <th >
                  <div>
                    <select type="text" name="subject"> 
                      <option value="科学">科学</option>
                      <option value="国語">国語</option>
                    </select>
                  </div>
                </th>
              </tr>
              <tr>
                <th>
                  年次
                </th>
                <th>
                  <div>
                    <input type="text" name="grade" id="grade" ></input>
                  </div>
                </th>
              </tr>
              <tr>
                <th>
                PDF資料の投稿
                </th>
                <th >
                  
                </th>
              </tr>
              </tbody>
            </table>
        </div>


          
        <!-- submit button -->
        <div>
        <div>
          <div>
            <button type="submit">
              <span>登録</span>
            </button>
          </div>
        </div>
          <p>
            <a href="">閉店申請はこちら</a>
          </p>
        </div>   

      
      </form>
  </div>

  <div class="content_box">
    <div class="box">
      <h2>新着順で受けから降順に全データを表示</h2>
      <ul>
        @isset($documents)
          @foreach($documents as $document)
          <li class="new_box">
            <div>
              <h3>{{ $document->title}}</h3>
              <a href="{{ url('/like')}}">♡</a>
              <a href="{{ url('/unlike')}}">✕</a>
            </div>
          </li>
            @endforeach
          @endisset
      </ul>
    </div>
    <div class="box">
      <h2>キーワード検索</h2>
      <form method="get" action="{{ url('/testSearch')}}" enctype="multipart/form-data">
      {{ csrf_field() }}
        <div>
          <input type="text" name="search">
        </div>
        <!-- submit button -->
        <div>
            <div>
              <div>
                <button type="submit">
                  <span>検索開始</span>
                </button>
              </div>
            </div>
          </div>   
        </form>
    </div>
      
    <div class="box">
      <h2>ソート検索</h2>
      <form action="{{url('/sortSearch')}}" method="get">
      {{ csrf_field() }}
        <p>
          <h2>科目選択</h2>
          <input type="checkbox" name="sort_keyword[]" value='科学'>科学
          <input type="checkbox" name="sort_keyword[]" value='国語'>国語
        </p>
        <div>
              <button type="submit">
                <span>検索開始</span>
              </button>
            </div>
      </form>
    </div>
    <div class="box">
      <h2>いいね機能多い順表示</h2>
        
    </div>
      
    </div>
  </div>
</body>
</html>