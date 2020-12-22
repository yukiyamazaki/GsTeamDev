@extends('layouts.hp')
@section('content')

<section class="first_view">

<!-- <img class="fv_svg" src="{{ asset('assets/img/fv_logo_trace4.png') }}" alt=""> -->

    <div class="effect_contents"></div>

    <div class="fv_logo"> 
        <img class="fv_img" src="{{ asset('assets/img/fv_logo.png') }}" alt="">
    </div>

</section>

<section class="recommend">

    <div class="rcmd_title">
        <h2>ー 人気教材 ー</h2>
    </div>
{{-- ここから投稿内容が表示される部分（人気）--}}
    <div class="card_top_wrapper">
    @isset($fav_1)

        <div class="card_top">
            <a href="{{ route('contents',['id' => $fav_1->post_id]) }}">
                <div class="card_top_img">
                    <img src="{{ asset('assets/img/test.jpg') }}" />
                </div>
               <div class="card_top_contents">
                    <h3 class="card_top_title">
                    {{ $fav1_doc->title}}
                    </h3>
                    <div class="fav_box">
                        <img class="fav_img" src="{{asset('assets/img/fav_heart.svg')}}" alt="">
                        <span>{{ $fav_2->likeid_sum}}</span>
                    </div>
                    <span class="card_top_day">
                     {{ $fav_1->created_at}}
                    </span>
                </div>
            </a>    
        </div>

        <div class="card_top">
            <a href="{{ route('contents',['id' => $fav_2->post_id]) }}">
                <div class="card_top_img">
                    <img src="{{ asset('assets/img/test.jpg') }}" />
                </div>
                <div class="card_top_contents">
                    <h3 class="card_top_title">

                    {{ $fav2_doc->title}}
                    </h3>
                    <div class="fav_box">
                        <img class="fav_img" src="{{asset('assets/img/fav_heart.svg')}}" alt="">
                        <span>{{ $fav_2->likeid_sum}}</span>
                    </div>
                    <span class="card_top_day">
                     {{ $fav_2->created_at}}
                    </span>
                </div>
            </a>    
        </div>

        <div class="card_top">
            <a href="{{ route('contents',['id' => $fav_3->post_id]) }}">
                <div class="card_top_img">
                    <img src="{{ asset('assets/img/test.jpg') }}" />
                </div>
                <div class="card_top_contents">
                    <h3 class="card_top_title">              
                    {{ $fav3_doc->title}}
                    </h3>
                    <div class="fav_box">
                        <img class="fav_img" src="{{asset('assets/img/fav_heart.svg')}}" alt="">
                        <span>{{ $fav_3->likeid_sum}}</span>
                    </div>
                    <span class="card_top_day">
                     {{ $fav_3->created_at}}
                    </span>
                </div>
            </a>    
        </div>
    @endisset
    </div>

</section>


<section class="hot">

    <div class="hot_title">

        <h2 class="h2_top">ー 新着 ー</h2>

    </div>

{{-- ここから投稿内容が表示される部分（新着）--}}
    <div class="card_top_wrapper">
    @isset($documents)
        @foreach($documents as $document)
            <div class="card_top">
                <a href="{{ route('contents',['id' => $document->id]) }}">

                    <!-- <div class="card_top_img">
                        <img src="{{ asset('assets/img/test.jpg') }}" />
                    </div> -->

                   

                    <iframe class="samune" src="../pdfjs/web/viewer.html?file={{asset('/storage/'.$file_name)}}#page=1&scrollbar=0&view=Fit&viewrect=0,0,570,0" 
                        marginwidth="0" marginheight="0" frameborder="no" style="pointer-events:none;" style="border:none;"></iframe>

                    <div class="card_top_contents">
                        <h3 class="card_top_title">
                        {{ $document->title}}
                        </h3>
                        <div class="category_wrapper">
                            <h4>{{ $document->school_category }}</h4>
                            <h4>{{ $document->grade }}</h4>
                            <h4>{{ $document->subject }}</h4>
                        </div>
                        <div class="middle_wrapper">
                          <img class="icon1" src="{{asset('assets/img/like.svg')}}" alt="お気に入り">
                          <p>{{ $document->like_count}}</p>
                          <img class="icon2" src="{{asset('assets/img/good.svg')}}" alt="いいね！">
                          <p>{{ $document->good_count}}</p>
                        </div>
                        
                       <div class="card_top_day">{{ $document->updated_at }}</div>
                    </div>

                </a>    
            </div>
        @endforeach
    @endisset

    </div>

    <div class="hot_next">

    <button id="hot_btn">他の記事を見る</button>

    </div>

</section>

{{-- レコメンド記事は未実装のため非表示
<section class="new">

    <div class="new_title">

        <h2>ー レコメンド？笑の教材 ー</h2>

    </div>

    <div class="card_top_wrapper">

        <div class="card_top">

            <div class="card_top_img">
                <img src="{{ asset('assets/img/test.jpg') }}" />
            </div>

            <div class="card_top_contents">
                <h3 class="card_top_title">
                デザイン探しをスマートに。HTML/CSSスニペットまとめ。
                </h3>
                <span class="card_top_day">
                2020年06月27日
                </span>
            </div>

        </div>

        <div class="card_top">

            <div class="card_top_img">
                <img src="{{ asset('assets/img/test.jpg') }}" />
            </div>

            <div class="card_top_contents">
                <h3 class="card_top_title">
                デザイン探しをスマートに。HTML/CSSスニペットまとめ。
                </h3>
                <span class="card_top_day">
                2020年06月27日
                </span>
            </div>

        </div>

        <div class="card_top">

            <div class="card_top_img">
                <img src="{{ asset('assets/img/test.jpg') }}" />
            </div>

            <div class="card_top_contents">
                <h3 class="card_top_title">
                デザイン探しをスマートに。HTML/CSSスニペットまとめ。
                </h3>
                <span class="card_top_day">
                2020年06月27日
                </span>
            </div>

        </div>

    </div>

    <div class="new_next">

    <button id="new_btn">他の記事を見る</button>

    </div>

</section>
--}}

@endsection