@extends('layouts.hp')
@section('content')

<section class="first_view">

    <h1></h1>

</section>

<section class="recommend">

    <div class="rcmd_title">
        <h2>ー あなたにオススメの教材 ー</h2>
    </div>

    <div class="card_top_wrapper">

        <div class="card_top">

            <div class="card_top_img">
                <img src="{{ asset('assets/img/bg1.jpg') }}" />
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
                <img src="{{ asset('assets/img/test1.jpg') }}" />
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

</section>


<section class="hot">

    <div class="hot_title">

        <h2>ー 人気の教材 ー</h2>

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

    <div class="hot_next">

    <button id="hot_btn">他の記事を見る</button>

    </div>

</section>


<section class="new">

    <div class="new_title">

        <h2>ー 新規の教材 ー</h2>

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

@endsection