@extends('layouts.hp')
@section('content')


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mypage</title>
</head>
<body class="mypage">
  <div class="mypage_wrapper">

    <!-- header_coner -->
      
      <!-- ② 検索エリア-->
      <div class="s-containers js-containers">
        <!-- 2-1 -->
        <div class="s-content is-noPaddingBottom">
          <div class="p-mypage">
              <div class="p-mypageHeader_header">
                <!-- <p class="p-mypageHeader_date">2020.11.01</p> -->
                <p class="p-mypageHeader_edit">
                  <a href="{{url('/mypage_edit')}}">プロフィール編集</a>
                </p>
              </div>
              <div class="p-mypageHeader_content">
                <div class="p-mypageHeaderUser">
                  <div class="p-mypageHeaderUser_icon">
                    <a href="">
                      <img class=mypage src="" alt="">
                    </a>
                  </div>
                  <div class="p-mypageHeaderUser_content">
                    <h1 class="p-mypageHeaderUser_name">
                      <a href="">テスト</a>
                    </h1>
                  </div>
                </div>
                <div class="p-mypagePrimaryNav"></div>
                <div class="p-mypageHeader_report"></div>
              </div>
              <div class="p-mypageProfile">
                <ul class="p-mypageProfile_lists">
                  <li class="p-mypageProfile_list">
                    <span class="p-mypageProfile_key">担当学年</span>
                    <span class="p-mypageProfile_value">小学1年</span>
                  </li>
                  <li class="p-mypageProfile_list">
                    <span class="p-mypageProfile_key">担当教科</span>
                    <span class="p-mypageProfile_value">国語</span>
                  </li>
                  <li class="p-mypageProfile_list">
                    <span class="p-mypageProfile_key"></span>
                    <span class="p-mypageProfile_value"></span>
                  </li>
                </ul>
              </div>
           
            <!-- 2-2 -->
            <div class="p-mypage_content">
              <nav class="p-localNav p-localNav--4 js-swipeScroll">
                <div class="p-localNav_content js-swipeScrollContent">
                  <ul class="p-localNav_links js-swipeScrollInner is-noborder">
                    
                    <li class="p-localNav_link is- is-active">
                      <a href="">
                        <span>お気に入り
                          <span class="p-localNav_count">0</span>
                        </span>
                      </a>
                    </li>
                    <li class="p-localNav_link is-ikitai">
                      <a href="">
                        <span>自分の投稿</span>
                      </a>
                    </li>
                    <li class="p-localNav_link is-ikitai">
                      <a href="">
                        <span>/</span>
                      </a>
                    </li>

                
                  </ul>
                </div>
              </nav>

            </div>

          </div>
        </div>

        <!-- 2-2 -->
        <div class="s-containers_container">
        </div>
      </div>
</body>
</html>


@endsection