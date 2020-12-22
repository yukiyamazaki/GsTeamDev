@extends('layouts.hp')
@section('content')


<!-- Upload block starts -->
<div class="block block-upload drag-drop-outline">
          <div class="drop-overlay" style="display:none;"><p>Drop here to upload</p></div>

          

<section>
  <div id="UploadFileList" class="upload-file-list">
    <ul class="fileList launch-tracker">
      <li class="fileItem radius clear">
        <div class="clearfix">
          <div class="upload">
            <form method="post" action="{{ url('/upload_act')}}" class="fileListForm-x clear" enctype="multipart/form-data">
            {{ csrf_field() }}
              <div class="controls-container j-controls-container">
                <div class="header-container row">
                  <div class="fileItem header-container"><strong>upload</strong></div>
                  <div class="upload-delete">
                    <a href="" class="delete_upload right has-tip">✖︎</a>
                  </div>
                </div>

                <div class="row bottom-container">
                  <div class="column large-5 embed-container">
                    <div class="iframe-wrapper" id="iframe">
                      <div class="overlay">
                        <div class="iframe-msg text-center">
                        <input type="file" name="file" id="file">
                          <span class="message"></span>
                        </div>
                        
                          
                      </div>
                    </div>

                  </div>

                  <div class="column large-7 details-container">
                    <div class="row">
                      <div class="large-12 column">
                        <label class="required" for="">タイトル</label>
                        <input type="text" name="title" class="u_text">
                      </div>
                    </div>
                    <div class="row">
                      <div class="large-12 column">
                        <label class="required" for="">詳細説明</label>
                        <textarea class="u_text" name="description"></textarea>
                      </div>
                    </div>
                    <div class="up_row">
                      <div class="large-6 column">
                        <label class="required" for="">教科</label>
                        <select name="subject" class="radius top_categories">
                          <option value>担当教科を選択してください</option>
                          <option value="国語" >国語</option>
                          <option value="古文" >古文</option>
                          <option value="英語" >英語</option>
                          <option value="算数" >算数</option>
                          <option value="理科" >理科</option>
                          <option value="社会" >社会</option>
                          <option value="音楽" >音楽</option>
                          <option value="美術" >美術</option>
                          <option value="保険体育" >保健体育</option>
                          <option value="技術・家庭" >技術・家庭</option>
                        </select>
                      </div>
                    </div>
                    <div class="up_row">
                      <div class="large-6 column">
                        <label class="required" for="">学年</label>
                          <select class="grade" name="grade">
                            <option value="">担当学年を選択してください</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="1">7</option>
                          </select>
                      </div>
                    </div>
                    <div class="up_row">
                      <div class="large-6 column">
                        <label class="required" for="">小中高大</label>
                          <select name="category">
                            <option value="">学校種別を選択してください</option>
                            <option value="小学校">小学校</option>
                            <option value="中学校">中学校</option>
                            <option value="高等学校">高等学校</option>
                            <option value="大学">大学</option>
                            <option value="インターナショナルスクール">インターナショナルスクール</option>
                            <option value="特別学級">特別学級</option>
                          </select>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>

          

              <!-- <div class="make_btn_wrapper">
                <div class="make_introduce">
                  <span>aaaaaaaa</span>
                </div> -->
                

              <div class="make_file_btn">
                  <button type="submit" class="toukou">投稿</button>
                  <!-- <button type="submit" class="toukou">投稿中..</button> -->
                </div>
                  <div class="up_logo">
                <img src="{{asset('assets/img/fv_logo.png')}}" alt="">
                </div>
              </div>
            </form>

          </div>
        </div>
      </li>
    </ul>
  </div>
</section>


<!-- アップロードテンプレート -->

 <div style="display:none;">
 <div id="file_place_temp">

 </div>
<!-- 初期化 -->
 <div id="file_initi_temp">
   <div class="up_message">
     アップロードの初期化
   </div>
 </div>

 <!-- ファイルアップロード メッセ-->
<div id="file_prog_temp">
  <div class="prog_container">
    <div class="progress bar">
      <span class="pr_meter" style="width: 0%;">
    </span>
    </div>
    <div class="prog-ind text-center"></div>
  </div>
</div>
<!-- 基本テンプレ -->
<div id="file_prep_temp">
  <div class="up_massage">
    アップロード用のファイルを準備しています
</div>

<div id="file_conv_finshs">
  <div class="up_massage">
 </div>
</div>

<div id="file_load_temp">
<div class="up_massage">
 </div>
</div>

<div id="preview_up_temp">
<div class="up_massage">
 </div>
</div>

<!-- アップロード失敗 -->
<div id="preview_up_error_temp">
<div class="up_massage-error">
  ファイルのアップロードに失敗しました。
 </div>
</div>
<!-- アップロード成功 -->
<div id="file_up_reje_temp">
  <div class="up_prog_upfile">
    <div class="up_error">
    <p>ファイルのアップロードに失敗しました。{msg}</p>
    </div>
  </div>
</div>

<!-- 消去成功 -->
<div id="file_delet_temp">
<div class="up_s">ファイルを消去しました。</div>
</div>
<!-- 消去失敗 -->
<div id="file_delet_fail_temp">
<div class="up_error">ファイルの消去に失敗しました。</div>
</div>

<!--データ消去テンプレ -->
<div id="file_del_temp">
  <div class="up_massage">
    消去中..
  </div>
</div>

<!-- フレーム -->
<script id="file_conv_temp" type="text/html">
<iframe  id="upload_preview" frameborder="0" width="100%" height="100%" style="background-color: rgb(245, 245, 245);" src="{preview_url}?hostedIn=slideshare&uploadpreview=1&autoplay=0"></iframe>
</script>

<!-- ファイル対応 -->
<div id="inva_ex_temp">
    <div class="message-inv">
      このファイルは対応しておりません。
    </div>
  </div>

  <!--サイズ最大  -->
  <div id="inva_size_temp" class="up_prog">
    <div class="message-inv-size">
    ファイルが対応サイズを超えています。
    </div>
</div>

<div id="please_support">
  <div class="up_massage">
  利用規約に違反している可能性があるため、ファイルをアップロードできませんでした。サポートにお問い合わせください。
  </div>
</div>

<!-- 投稿ページの詳細 -->
<script type="text/html" id="file_publish_temp">
  <div class="thumbnail-container column large-2">
    <!-- スライド挿入部 -->
    <img class="thumbnail j-file-thumb" src="">
  </div>
  <!-- タイトル、説明な詳細 -->
  <div class="slideshow-details column large-10">
    <div class="slideshow-title row">
      <a href="{redirectUrl}" target="_blank">
        {title}
      </a>
    </div>
    <div class="slideshow-description row">
      {description}
    </div>
  </div>
</script>

<script src="{{ asset('assets/js/jquery-2.1.3.min.js') }}"></script>

<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->

@endsection