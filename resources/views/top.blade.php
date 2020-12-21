@extends('layouts.hp')
@section('content')

<section class="first_view">

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
            <a href="{{ route('contents',['id' => $fav_1->id]) }}">
                <div class="card_top_img">
                    <img src="{{asset('assets/img/test.jpg')}}" />
                </div>
                <div class="card_top_contents">
                    <h3 class="card_top_title">
                    {{ $fav_1->title}}
                    </h3>
                    <h3>{{ $fav_1->likeid_sum}}<</h3>
                    <span class="card_top_day">
                     {{ $fav_1->created_at}}
                    </span>
                </div>
            </a>
        </div>

        <div class="card_top">
            <a href="{{ url('/contents')}}">
                <div class="card_top_img">
                    <img src="{{asset('assets/img/test.jpg')}}" />
                </div>
                <div class="card_top_contents">
                    <h3 class="card_top_title">
                    {{ $fav_1->title}}
                    </h3>
                    <h3>{{ $fav_1->likeid_sum}}<</h3>
                    <span class="card_top_day">
                     {{ $fav_1->created_at}}
                    </span>
                </div>
            </a>
        </div>

        <div class="card_top">
            <a href="{{ url('/contents')}}">
                <div class="card_top_img">
                    <img src="{{asset('assets/img/test.jpg')}}" />
                </div>
                <div class="card_top_contents">
                    <h3 class="card_top_title">
                    {{ $fav_1->title}}
                    </h3>
                    <h3>{{ $fav_1->likeid_sum}}<</h3>
                    <span class="card_top_day">
                     {{ $fav_1->created_at}}
                    </span>
                </div>
            </a>
        </div>
    @endisset
    </div>

</section>


<section class="hot">

    <div class="hot_title">

        <h2>ー 新着 ー</h2>

    </div>

{{-- ここから投稿内容が表示される部分（新着）--}}
    <div class="card_top_wrapper">
    @isset($documents)
        @foreach($documents as $document)
            <div class="card_top">
                <a href="{{ url('/contents')}}">
                    <div class="card_top_img">
                        <img src="{{ asset('assets/img/test.jpg') }}" />
                    </div>
                    <div class="card_top_contents">
                        <h3 class="card_top_title">
                        {{ $document->title}}
                        </h3>
                        <h4>{{ $document->subject }}</h4>
                        <span class="card_top_day">
                        {{ $document->updated_at}}
                        </span>
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