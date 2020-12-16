<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>hariuテスト2</title>
</head>
<body>
  <div>

  </div>

  <div>
    {{-- ここから資料投稿のテストFORM部分 --}}
    <h2>test1 資料投稿FORM</h2>
    <!-- form部分 -->
    <form class="js-saunaRegisterForm c-form" id='send_form' method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
        <h3>
          <span>資料投稿ページ</span>
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
                    <input type="text" id="name" name="name" value="" placeholder="例：Nouth Cafe">
                  </div>
                  <div class="c-form_placeSearch c-button c-button--black">
                    <button type="button" id="searchbtn">住所検索</button>
                  </div>
                </th>
              </tr>

              <tr>
                <th class="c-formTable_th">
                  都道府県
                </th>
                <th class="c-formTable_td">
                  <div class="c-formSelect">
                    <select id="prefecture" name="prefecture" id="prefecture">
                      <option value="NONE" selected="selected"></option>
                      <option value="北海道">北海道</option>
                      <option value="青森県">青森県</option>
                      <option value="岩手県">岩手県</option>
                      <option value="宮城県">宮城県</option>
                      <option value="秋田県">秋田県</option>
                      <option value="山形県">山形県</option>
                      <option value="福島県">福島県</option>
                      <option value="茨城県">茨城県</option>
                      <option value="栃木県">栃木県</option>
                      <option value="群馬県">群馬県</option>
                      <option value="埼玉県">埼玉県</option>
                      <option value="千葉県">千葉県</option>
                      <option value="東京都">東京都</option>
                    </select>
                  </div>
                </th>
              </tr>
              <!-- 郵便番号 -->
              <tr>
                <th class="c-formTable_th">
                  郵便番号
                </th>
                <th class="c-formTable_td">
                  <div class="c-formText c-formText--md">
                    <input id="postal_code" maxlength="8" placeholder="例：854-1123" type="text">
                  </div>
                </th>
              </tr>
              <!-- 住所２ -->
              <tr>
                <th class="c-formTable_th">
                  住所2
                </th>
                <th class="c-formTable_td">
                  <div class="c-formText">
                    <input type="text" placeholder="町村番地　例：笹塚1-58-" name="address2" value=""> 
                  </div>
                </th>
              </tr>
              <tr>
                <th class="c-formTable_th">
                  住所3
                </th>
                <th class="c-formTable_td">
                  <div class="c-formText">
                    <input type="text" placeholder="ビル名　例：NORTHビル10F" name="address3" value=""> 
                  </div>
                </th>
              </tr>
              <tr>
                <th class="c-formTable_th">
                  アクセス
                </th>
                <th class="c-formTable_td">
                  <div class="c-formTextarea">
                    <textarea type="text" name="access" id="access" cols="50" rows="10"></textarea>
                  </div>
                </th>
              </tr>
              <tr>
                <th class="c-formTable_th">
                  TEL
                </th>
                <th class="c-formTable_td">
                  <div class="c-formText">
                    <input type="text" id="telephone" placeholder="000-0000-0000" name="telephone" value=""> 
                  </div>
                </th>
              </tr>
              <tr>
                <th class="c-formTable_th">
                  HP
                </th>
                <th class="c-formTable_td">
                  <div class="c-formText">
                    <input type="text" id="web_page" placeholder="https://shisha-suitai.com/" name="web_page" value=""> 
                  </div>
                </th>
              </tr>
              <tr>
                <th class="c-formTable_th">
                  定休日
                </th>
                <th class="c-formTable_td">
                  <div class="c-formTextarea">
                    <textarea type="text" name="regular_holiday" id="regular_holiday" cols="50" rows="10"></textarea>
                  </div>
                </th>
              </tr>
              <tr>
                <th class="c-formTable_th">
                  営業時間
                </th>
                <th class="c-formTable_td">
                  <div class="c-formTextarea">
                    <textarea type="text" name="business_hours" id="business_hours" cols="50" rows="10"></textarea>
                  </div>
                </th>
              </tr>
              <tr>
                <th class="c-formTable_th">
                  最低料金
                </th>
                <th class="c-formTable_td">
                  <p class="c-form_helpText">シーシャが吸える最低料金を入力してください</p>
                  <div class="c-formText c-formText--sm c-formText--after">
                    <input type="number" name="min_fee" id="min_fee" value="" placeholder="1000"><span class="c-formText_after">円</span></div>
                  </th>
                </tr>
                <tr>
                  <th class="c-formTable_th">
                    料金
                  </th>
                  <th class="c-formTable_td">
                    <div class="c-formTextarea">
                      <textarea  name="fee" id="fee" cols="50" rows="10"></textarea>
                    </div>
                  </th>
                </tr>
                <!-- 画像ファイル -->
              <tr>
                <th class="c-formTable_th">
                店舗画像
                </th>
                <th class="c-formTable_td">
                  <div class="c-formText c-formText--md">
                    <input type="file" name="file1" id="file">
                  </div>
                </th>
              </tr>
              </tbody>
            </table>
        </div>

        <!-- シーシャ設備 -->
        <h3 class="c-headline c-headline--lv3">
          <span class="c-headline_string">シーシャ設備</span>
        </h3>

        <div class="l-content">
          <p class="c-form_advice">施設登録後は誰でも編集できるようになります。入力できる項目のみお願いします。</p>
          <div class="js-tab c-tab c-tab--3" data-current="saunaMen">
            <div class="c-tab_contents">
              <div class="c-tab_content js-tabContent" data-tab="saunaMen" style="">
                <div class="js-addForm">
                  <table class="c-formTable is-addForm js-formTable">
                    <!-- ここから途中 -->
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- ここから施設設備 -->
        <h3 class="c-headline c-headline--lv3">
          <span class="c-headline_string">設備</span>
        </h3>
        <div class="l-content">
          <p class="c-form_advice">施設登録後は誰でも編集できるようになります。入力できる項目のみお願いします。</p>
          <div class="c-form_allCheck">
            <div class="c-formCheckbox">
              <input type="checkbox" id="lb_allcheck_0" class="js-allCheckTrigger" data-target="facility">
              <label for="lb_allcheck_0">すべてを○にする</label>
            </div>
          </div>
          <div class="c-formSwitche js-allCheck" data-target="facility">
            <div class="c-formSwitches_content">
              <div class="c-formSwitcheItem js-formSwitch">
                <strong class="c-formSwitcheItem_key">２４時間営業</strong>
                <div class="c-formSwitcheItem_value">
                  <div class="c-formSwitch">
                    <input type="checkbox" name="" id="" value="1">
                    <label for="is_24hour"></label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- 施設補足 -->
        <h3 class="c-headline c-headline--lv3">
          <span class="c-headline_string">施設補足</span>
        </h3> 

        <div class="l-content">
          <table class="c-formTable">
            <tbody>
              <tr>
                <th class="c-formTable_th">フリーテキスト</th>
                <td class="c-formTable_td">
                  <p class="c-form_helpText">施設内のローカルルールや特徴のある設備などがあれば入力してください。</p>
                  <div class="c-formTextarea">
                    <textarea class="c-formTextarea" name="remarks" id="remarks" cols="50" rows="10"></textarea>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

          
        <!-- submit button -->
        <div class="c-form_button">
          <div class="c-button c-button--submit c-button--arrowRight">
            <a class="js_shishaRegister"id="rgs_btn">
              <span>画像登録に進む</span>
            </a>
          </div> 
          <p class="c-form_close">
            <a href="">閉店申請はこちら</a>
          </p>
        </div>   

      
      </form>
  </div>
  
</body>
</html>