@extends('layouts.hp')
@section('content')

<section>
  <div id="UploadFileList" class="upload-file-list">
    <ul class="fileList launch-tracker">
      <li class="fileItem radius clear">
        <div class="clearfix">
          <div class="upload">
            <form method="get" action="" class="fileListForm-x clear" enctype="multipart/form-data">
            {{ csrf_field() }}
              <div class="controls-container j-controls-container">
                <div class="header-container row">
                  <div class="fileItem header-container">upload</div>
                  <div class="upload-delete">
                    <a href="" class="delete_upload right has-tip">Cancel</a>
                  </div>
                </div>

                <div class="row bottom-container">
                  <div class="column large-5 embed-container">
                    <div class="iframe-wrapper">
                      <div class="overlay">
                        <div class="iframe-msg text-center">
                          <input type="file" name="file">
                          <span class="message">ファイル選択</span>
                        </div>
                      </div>
                    </div>

                  </div>

                  <div class="column large-7 details-container">
                    <div class="row">
                      <div class="large-12 column">
                        <label class="required" for="">タイトル</label>
                        <input type="text" name="title" class="title">
                      </div>
                    </div>
                    <div class="row">
                      <div class="large-12 column">
                        <label class="required" for="">詳細説明</label>
                        <textarea class="description radius" name="description"></textarea>
                      </div>
                    </div>
                    <div class="row">
                      <div class="large-6 column">
                        <label class="required" for="">教科</label>
                        <select name="subject" class="radius top_categories">
                          <option value>担当教科を選んでください</option>
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
                    <div class="row">
                      <div class="large-6 column">
                        <label class="required" for="">学年</label>
                          <select>
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
                    <div class="row">
                      <div class="large-6 column">
                        <label class="required" for="">小中高大</label>
                          <select>
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

              <div class="make_btn_wrapper">
                <div class="make_introduce">
                  <span>aaaaaaaa</span>
                </div>
                <div class="make_file_btn">
                  <button type="submit">投稿</button>
                </div>
              </div>
            </form>

          </div>
        </div>
      </li>
    </ul>
  </div>
</section>


@endsection