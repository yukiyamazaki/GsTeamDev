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
    <form method="get" action="{{ url('/testDocReg')}}" enctype="multipart/form-data">
      {{ csrf_field() }}
        <h3 >
          <span>資料情報</span>
        </h3>
        <div>
          <p></p>
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
                    <input type="text" name="subject" value=""> 
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
                投稿資料
                </th>
                <th >
                  <div>
                    <input type="file" name="file1" id="file">
                  </div>
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
    <div class="box1">
      <h2>新着順で受けから降順に全データを表示</h2>
      <ul>

        @foreach($documents as $document)
        <li>{{ $document->title}}<li>
          @endforeach
      </ul>
    </div>
    <div class="box2">
      <h2>条件でソート機能</h2>
      <div>aa</div>
    </div>

    <div class="box3">
      <h2>条件で検索した機能を、created_atが早いものから降順表示</h2>
      <div>aa</div>
    </div>
  
  </div>
</body>
</html>