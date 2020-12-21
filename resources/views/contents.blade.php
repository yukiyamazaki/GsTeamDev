@extends('layouts.hp')
@section('content')

<section class="contents_page">
@isset($document)
    <main class="contents_main">

        <div id="pdf_wrapper">
            <div class="pdf_naiyou">
                <p class="contents_name">{{ $document->title}}</p>
            </div>
                <iframe id="pdf_file" width="600px" height="730px"
                 src="{{asset('/storage/'.$file_name)}}" ></iframe>
        </div>

        <div id="btn_wrapper">
            <input type="button" value="shere" id="shere_btn">
            <input type="button" value="like" id="like_btn">
            <p class="contents_like">200 likes</p>
        </div>

    </main>

    <aside class="contents_aside">

        <div class="card-3">
            <a href="{{ url('/contents') }}">aaaa</a>
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

        <div class="comment_wrapper">

            <form action="" method="get">
                <p class="comment_name">投稿する</p>
                <textarea name="" id="comment_area" cols="60" rows="2"></textarea>
                <input type="submit" value="送信" id="comment_send">
            </form>

        </div>

    </div>
@endisset
</section>

@endsection