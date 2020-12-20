@extends('layouts.hp')
@section('content')

<section class="contents_page">

    <main class="contents_main">

        <p>center</p>

        <div id="pdf_wrapper">
            <iframe id="pdf_file" width="600px" height="730px" src="{{ asset('assets/pdf/lab10git.pdf') }}"></iframe>
            <p>コンテンツ題名コンテンツ題名</p>
            <input type="button" value="shere" id="shere_btn">
            <input type="button" value="like" id="like_btn">
        </div>

    </main>

    <aside class="contents_aside">

        <p>right</p>

        <div class="card-3">

            <div class="content-img">
                <img src="{{ asset('assets/img/bg1.jpg') }}" />
            </div>

            <div class="content">
                <h3 class="title">
                デザイン探しをスマートに。HTML/CSSスニペットまとめ。
                </h3>
                <span class="post-day">
                2020年06月27日
                </span>
            </div>

        </div>

        <div class="card-3">

            <div class="content-img">
                <img src="{{ asset('assets/img/test.jpg') }}" />
            </div>

            <div class="content">
                <h3 class="title">
                デザイン探しをスマートに。HTML/CSSスニペットまとめ。
                </h3>
                <span class="post-day">
                2020年06月27日
                </span>
            </div>

        </div>

        <div class="card-3">

            <div class="content-img">
                <img src="{{ asset('assets/img/test1.jpg') }}" />
            </div>

            <div class="content">
                <h3 class="title">
                デザイン探しをスマートに。HTML/CSSスニペットまとめ。
                </h3>
                <span class="post-day">
                2020年06月27日
                </span>
            </div>

        </div>

        <div class="card-3">

            <div class="content-img">
                <img src="{{ asset('assets/img/test.jpg') }}" />
            </div>

            <div class="content">
                <h3 class="title">
                デザイン探しをスマートに。HTML/CSSスニペットまとめ。
                </h3>
                <span class="post-day">
                2020年06月27日
                </span>
            </div>

        </div>

        <div class="card-3">

            <div class="content-img">
                <img src="{{ asset('assets/img/test.jpg') }}" />
            </div>

            <div class="content">
                <h3 class="title">
                デザイン探しをスマートに。HTML/CSSスニペットまとめ。
                </h3>
                <span class="post-day">
                2020年06月27日
                </span>
            </div>

        </div>

    </aside>

    <div class="contents_comment">

        <form action="" method="get">
            <p>comments</p>
            <textarea name="" id="comment_area" cols="60" rows="10"></textarea>
            <input type="submit" value="送信">
        </form>

    </div>

</section>

@endsection