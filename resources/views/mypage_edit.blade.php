@extends('layouts.hp')
@section('content')

<body class="use">
  <div class="us_wrapper">
      <!-- ② 検索エリア-->
      <div class="l-containers js-containers">
        <form method="get" action="{{  url('mypage_edit_act') }}" class="c-form" enctype="multipart/form-data">
        {{ csrf_field() }}
          <div class="l-content">
            <div class="p-mypageHeader">
              <div class="p-mypageHeader_header">
                <!-- <p class="p-mypageHeader_date">2020.11.01</p> -->
                <p class="p-mypageHeader_rt">
                  <a href="{{url('/mypage')}}">戻る</a>
                </p>
              </div>
              <div class="p-mypageForm">
                <div class="p-mypageForm_contents">
                  <div class="p-mypageForm_image">
                    <div class="c-formImageItem js-imageItem ">
                      <div class="c-formImageItem_preview js-preview">
                        <img src="img" alt="">
                      </div>
                      <input type="file" accept="image/jpeg,image/png" class="js-fileInput" name="image">
                      <div class="c-formImageItem_button">
                        <div class="c-button c-button--black c-button--select">
                          <a class="js-fileSelect">
                            <span>アイコン変更</span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="p-mypageForm_content">
                    <div class="p-mypageHeader_body">
                      <table class="c-formTable">
                        <tbody>
                          <!--  名前 -->
                          <tr>
                            <th class="c-formTable_th">
                              ユーザーネーム
                              <span class="c-formTable_thLabel c-formTable_thLabel--blue">:</span>
                            </th>
                            <td class="c-formTable_td c-formTable_td--name">
                              <div class="c-formText">
                                <input type="text" placeholder="ユーザー名" name="user_name" value="" maxlength="20">
                              </div>
                            </td>
                          </tr>
                          <!-- 性別 -->
                            
                          <tr>
                            <th class="c-formTable_th">性別<span class="c-formTable_thLabel c-formTable_thLabel--gray">非公開</span></th>
                            <td class="c-formTable_td">
                              <!-- <div class="c-formRadio">
                                <input class="js-addFormItem" id="gender_male" name="gender" type="radio" value="male">
                                <label for="gender_male" class="js-addFormItem">男性</label>
                              </div>
                              <div class="c-formRadio">
                                <input class="js-addFormItem" id="gender_famale" name="gender" type="radio" value="female">
                                <label for="gender_famale" class="js-addFormItem">女性</label>
                              </div> -->
                            </td>
                          </tr>
                        </tr> 
                            <!-- 生年月日 -->
                              <tr>
                                <th class="c-formTable_th">
                                  生年月日
                                  <span class="c-formTable_thLabel .c-formTable_thLabel--bluec-formTable_thLabel c-formTable_thLabel--gray">:</span>
                                </th>
                                <td class="c-formTable_td">
                                  <div class="c-formSelect c-formSelect--year">
                                    <select name="birth_year">
                                      <option value="" selected="selected">年</option>
                                        <option value="1930">1930年</option>
                                        <option value="1931">1931年</option>
                                        <option value="1932">1932年</option>
                                        <option value="1933">1933年</option>
                                        <option value="1934">1934年</option>
                                        <option value="1935">1935年</option>
                                        <option value="1936">1936年</option>
                                        <option value="1937">1937年</option>
                                        <option value="1938">1938年</option>
                                        <option value="1939">1939年</option>
                                        <option value="1940">1940年</option>
                                        <option value="1941">1941年</option>
                                        <option value="1942">1942年</option>
                                        <option value="1943">1943年</option>
                                        <option value="1944">1944年</option>
                                        <option value="1945">1945年</option>
                                        <option value="1946">1946年</option>
                                        <option value="1947">1947年</option>
                                        <option value="1948">1948年</option>
                                        <option value="1949">1949年</option>
                                        <option value="1950">1950年</option>
                                        <option value="1951">1951年</option>
                                        <option value="1952">1952年</option>
                                        <option value="1953">1953年</option>
                                        <option value="1954">1954年</option>
                                        <option value="1955">1955年</option>
                                        <option value="1956">1956年</option>
                                        <option value="1957">1957年</option>
                                        <option value="1958">1958年</option>
                                        <option value="1959">1959年</option>
                                        <option value="1960">1960年</option>
                                        <option value="1961">1961年</option>
                                        <option value="1962">1962年</option>
                                        <option value="1963">1963年</option>
                                        <option value="1964">1964年</option>
                                        <option value="1965">1965年</option>
                                        <option value="1966">1966年</option>
                                        <option value="1967">1967年</option>
                                        <option value="1968">1968年</option>
                                        <option value="1969">1969年</option>
                                        <option value="1970">1970年</option>
                                        <option value="1971">1971年</option>
                                        <option value="1972">1972年</option>
                                        <option value="1973">1973年</option>
                                        <option value="1974">1974年</option>
                                        <option value="1975">1975年</option>
                                        <option value="1976">1976年</option>
                                        <option value="1977">1977年</option>
                                        <option value="1978">1978年</option>
                                        <option value="1979">1979年</option>
                                        <option value="1980">1980年</option>
                                        <option value="1981">1981年</option>
                                        <option value="1982">1982年</option>
                                        <option value="1983">1983年</option>
                                        <option value="1984">1984年</option>
                                        <option value="1985">1985年</option>
                                        <option value="1986">1986年</option>
                                        <option value="1987">1987年</option>
                                        <option value="1988">1988年</option>
                                        <option value="1989">1989年</option>
                                        <option value="1990">1990年</option>
                                        <option value="1991">1991年</option>
                                        <option value="1992">1992年</option>
                                        <option value="1993">1993年</option>
                                        <option value="1994">1994年</option>
                                        <option value="1995">1995年</option>
                                        <option value="1996">1996年</option>
                                        <option value="1997">1997年</option>
                                        <option value="1998">1998年</option>
                                        <option value="1999">1999年</option>
                                        <option value="2000">2000年</option>
                                        <option value="2001">2001年</option>
                                        <option value="2002">2002年</option>
                                        <option value="2003">2003年</option>
                                        <option value="2004">2004年</option>
                                        <option value="2005">2005年</option>
                                        <option value="2006">2006年</option>
                                        <option value="2007">2007年</option>
                                        <option value="2008">2008年</option>
                                        <option value="2009">2009年</option>
                                        <option value="2010">2010年</option>
                                        <option value="2011">2011年</option>
                                        <option value="2012">2012年</option>
                                        <option value="2013">2013年</option>
                                        <option value="2014">2014年</option>
                                        <option value="2015">2015年</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option> 
                                    </select>
                                      
                                  </div>
                                  <div class="c-formSelect c-formSelect--month">
                                    <select name="birth_month">
                                      <option value="" selected="selected">月</option>
                                      <option value="1">1月</option>
                                      <option value="2">2月</option>
                                      <option value="3">3月</option>
                                      <option value="4">4月</option>
                                      <option value="5">5月</option>
                                      <option value="6">6月</option>
                                      <option value="7">7月</option>
                                      <option value="8">8月</option>
                                      <option value="9">9月</option>
                                      <option value="10">10月</option>
                                      <option value="11">11月</option>
                                      <option value="12">12月</option>
                                    </select>
                                      
                                  </div>
                                  <div class="c-formSelect c-formSelect--day">
                                    <select name="birth_day">
                                      <option value="" selected="selected">日</option>
                                      <option value="1">1日</option>
                                      <option value="2">2日</option>
                                      <option value="3">3日</option>
                                      <option value="4">4日</option>
                                      <option value="5">5日</option>
                                      <option value="6">6日</option>
                                      <option value="7">7日</option>
                                      <option value="8">8日</option>
                                      <option value="9">9日</option>
                                      <option value="10">10日</option>
                                      <option value="11">11日</option>
                                      <option value="12">12日</option>
                                      <option value="13">13日</option>
                                      <option value="14">14日</option>
                                      <option value="15">15日</option>
                                      <option value="16">16日</option>
                                      <option value="17">17日</option>
                                      <option value="18">18日</option>
                                      <option value="19">19日</option>
                                      <option value="20">20日</option>
                                      <option value="21">21日</option>
                                      <option value="22">22日</option>
                                      <option value="23">23日</option>
                                      <option value="24">24日</option>
                                      <option value="25">25日</option>
                                      <option value="26">26日</option>
                                      <option value="27">27日</option>
                                      <option value="28">28日</option>
                                      <option value="29">29日</option>
                                      <option value="30">30日</option>
                                      <option value="31">31日</option>
                                    </select>
                                      
                                  </div>
                                </td>
                              </tr>

                              <!-- 学校種別 -->
                              <tr>
                                <th class="c-formTable_th">
                                  学校種別
                                  <span class="c-formTable_thLabel .c-formTable_thLabel--bluec-formTable_thLabel c-formTable_thLabel--gray">:</span>
                                </th>
                                <td class="c-formTable_th">                              
                                  <div class="c-formSelect c-formSelect--sc">
                                    <select name="school_category">
                                      <option value="" selected="selected">選択してください</option>
                                      <option value="小学校">小学校</option>
                                      <option value="中学校">中学校</option>
                                      <option value="高校">高校</option>
                                      <option value="特別支援学校">特別支援学校</option>                                     
                                    </select>
                                     </div>
                              </tr>
                              <!-- 担当学年 -->
                              <tr>
                                <th class="c-formTable_th">
                                  担当学年
                                  <span class="c-formTable_thLabel .c-formTable_thLabel--bluec-formTable_thLabel c-formTable_thLabel--gray">:</span>
                                </th>
                                <td class="c-formTable_th">                              
                                  <div class="c-formSelect c-formSelect--scg">
                                    <select name="grade">
                                      <option value="" selected="selected">選択してください</option>
                                      <option value="小1">1年</option>
                                      <option value="2">2年</option>
                                      <option value="3">3年</option>
                                      <option value="4">4年</option>
                                      <option value="5">5年</option>
                                      <option value="6">6年</option>
                                      <option value="全">全学年</option>                                  
                                     </select>
                                     </div>
                              </tr>
                              <!-- 担当教科 -->
                              <tr>
                                <th class="c-formTable_th">
                                  担当教科
                                  <span class="c-formTable_thLabel .c-formTable_thLabel--bluec-formTable_thLabel c-formTable_thLabel--gray">:</span>
                                </th>
                                <td class="c-formTable_th">                              
                                  <div class="c-formSelect c-formSelect--scg">
                                    <div class="form-group">
                                      <select name="sbject">
                                        <option value="" selected="selected">選択してください</option>
                                        <option value="国語">国語</option>
                                        <option value="算数">算数/数学</option>
                                        <option value="外国語">外国語</option>
                                        <option value="理科">理科</option>
                                        <option value="社会">社会</option>
                                        </select>
                                      </div>
                                  </div> 
                    
                                     </div>
                              </tr>
                              <!-- 自己紹介 -->
                                <tr>
                                  <th class="c-formTable_th">
                                    自己紹介
                                    <span class="c-formTable_thLabel c-formTable_thLabel--blue">/</span>
                                  </th>
                                  <td class="c-formTable_td c-formTable_td--name">
                                    <div class="c-formTextarea">
                                      <textarea type="text" placeholder="ユーザー名" name="profile" cols="50" rows="10" value=""></textarea>
                                    </div>
                                  </td>
                                </tr>
                                <!-- メールアドレス -->
                                  <tr>
                                    <th class="c-formTable_th">
                                    </th>
                                    <td class="c-formTable_td">
                                      <p>
                                        メールアドレスの変更はこちら
                                        <a href="">こちらへ</a>
                                      </p>
                                    </td>
                                  </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="c-form_button">
                      <div class="c-button c-button--submit c-button--arrowRight">
                        <button type="submit">
                          <span>登録</span>
                        </button>
                      </div>
                    </div>
                    <div class="p-mypageForm_resign">
                      <a href="">退会はこちら</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


        </form>

      </div>
      <!-- 2-1 -->
      







  
    <!-- footer_coner -->     
 
      <small>@school hub</small>
    </div>
  


 <!-- ここからJavaScript -->
 <!-- <scrip src="{{ asset('js/jquery-2.1.3.min.js') }}"></scrip>
  <scrip src="{{ asset('js/topNav_action.js') }}"></scrip>   -->
</body> 

@endsection