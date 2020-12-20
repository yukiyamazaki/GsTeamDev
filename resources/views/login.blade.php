<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
  
  <title>login</title>
</head>
<body>
  <div class="l-page">
    <div class="title_box">
      <h1 class="title">スクハブ</h1>
    </div>
    <div class="l-containers js-containers" >
      <!-- ロゴ部分 -->
      <div class="up-login">
        <div class="up-login_content">
          
          <!-- ログイン、新規登録部分 -->
          <div class="j-tab c-tab c-tab--2" >
            <nav class="c-tab_action">
              <ul class="c-tab_buttons">
                <li class="c-tab_button">
                  <button href=""  type="button" class="js-tabTrigger is-active" id="login">ログイン</button>
                </li>

                <li class="c-tab_button">
                  <button href="" class="js-tabTrigger" data-target="register" id="register">新規登録</button>
                </li>
              </ul>
            </nav>

            <!-- ログイン方法の選択部分 -->
            <div class="c-tab_contents">
              <div class="c-tab_content js-tabContent" id="display_login">
                <!-- ソーシャル部分 -->
                {{-- 
                <div class="uq-login_type is-sns">
                  <h2 class="c-headline c-headline--lv4">
                    <span class="c-headline_string">SNSアカウントでログイン</span>
                  </h2>
                  <div class="uq-loginSns">
                    <div>
                      <div class="c-button c-button--full is-google">
                        <a href="">
                          <span>Google</span>
                        </a>
                      </div>
                      <div class="c-button c-button--full is-facebook">
                        <a href="">
                          <span>facebook</span>
                        </a>
                      </div>
                    </div>
                  </div>
                  <p class="uq-loginSns_description">
                    SNSアカウントが連携していない状態で、各外部サービスでログインを行うと新規登録扱いになります。アカウントを新規作成する場合は、
                  </p>
                </div>
                <!-- メールログインのFORM部分 -->
                <div class="uq-login_type is-mail">
                  <h2 class="c-headline c-headline--lv4">
                    <span class="c-headline_string">メールアドレスでログイン</span>
                  </h2>
                  <div class="uq-loginForm">
                  --}}
                    <form action="{{ url('login_act') }}" method="POST" class="c-form">
                    {{ csrf_field() }}
                    

                      <input type="hidden">
                      <dl class="uq-loginForm_set">
                          <dt class="uq-loginForm_key">メールアドレス</dt>
                          <dd class="uq-loginForm_value">
                            <div class="c-formText">
                              <input type="email" placeholder="例：shisha@suitai.com" name="login_mail">
                            </div>
                          </dd>
                          <dt class="uq-loginForm_key">パスワード</dt>
                          <dd class="uq-loginForm_value">
                            <div class="c-formText">
                              <input type="password" name="login_password">
                            </div>
                          </dd>
                        </dl>
                        <div class="c-form_button">
                          <div class="c-button c-button--submit">
                            <button type="submit" name="button">
                              <span>ログインする</span>
                            </button>
                          </div>
    
                        </div>
                        <div class="uq-loginForm_reset">
                          <a href="">パスワードを忘れた場合はこちら</a>
                        </div>
                    </form>
                  </div>
                </div>
                
                
              </div>
                
                <!-- 新規登録ボタンを選択時に表示されるようにJSで調整 -->
                <div class="c-tab_content js-tabContent" style="display:none" id="display_register">
                  {{--
                  <!-- ソーシャルログイン新規登録表示エリア -->
                  <div class="uq-login_type is-sns is-register">
                  <h2 class="c-headline c-headline--lv4">
                    <span class="c-headline_string">SNSアカウントで登録</span>
                  </h2>
                  <div class="uq-loginSns">
                    <div class="c-button c-button--full is-twitter">
                      <a href="">
                        <span>twetter</span>
                      </a>
                    </div>
                    <div class="uq-loginSns_sub">
                      <div class="c-button c-button--full is-line">
                        <a href="">
                          <span>
                            LINE
                          </span>
                        </a>
                      </div>
                      <div class="c-button c-button--full is-facebook">
                        <a href="">
                          <span>
                            facebook
                          </span>
                        </a>
                      </div>
                    </div>
                  </div>
                  --}}
                  <!-- メールログインの表示エリア -->
                <div class="uq-login_type is-mail">
                  <h2 class="c-headline c-headline--lv4">
                    {{--
                    <span class="c-headline_string">メールアドレスで新規登録</span>--}}
                  </h2>
                  <div class="uq-loginForm">

                  <!-- 新規登録form -->
                    <form action="{{ url('register_act') }}" method="POST" class="c-form">
                    {{ csrf_field() }}
                      <input type="hidden">
                      <dl class="uq-loginForm_set">
                        <dt class="uq-loginForm_key">メールアドレス</dt>
                     
                        <dd class="uq-loginForm_value">
                          <div class="c-formText">
                            <input type="email" placeholder="例：shisha@suitai.com" name="register_mail">
                          </div>
                        </dd>
                        <dt class="uq-loginForm_key">パスワード</dt>
                    
                        <dd class="uq-loginForm_value">
                          <div class="c-formText">
                            <input type="password" name="register_password">
                          </div>
                        </dd>
                      </dl>
                      <div class="c-form_button">
                        <div class="c-button c-button--submit">
                          <button type="submit" name="button">
                            <span>メールアドレスで新規登録</span>
                          </button>
                        </div>
                        
                      </div>
                    </form>
                  </div>
                </div>
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="{{ asset('assets/js/jquery-2.1.3.min.js') }}"></script>
  <script src="{{ asset('assets/js/login.js') }}"></script>  
  
</body>
</html>