@extends('layouts.hp')
@section('content')

<section class="contents_page">
@isset($document)
    <main class="contents_main">

        <div id="pdf_wrapper">
            <div class="pdf_naiyou">
                <p class="contents_name">タイトル：<span>{{ $document->title }}</span></p>
            </div>
            <iframe id="pdf_file" src="{{asset('/storage/'.$file_name)}}"></iframe>
        </div>

        <div id="btn_wrapper">    
            <input type="button" value="shere" id="shere_btn">
            <input type="button" value="like" id="like_btn">
            <p class="contents_like">200 likes</p>
        </div>

    </main>

    <aside class="contents_aside">
        <p class="recomend_category">ー”<span class="rela_cate">{{ $document->subject }}</span>”科の新着教材ー</p>
        @isset($relaiton_subjects)
        @foreach($relaiton_subjects as $relaiton_subject)
        <div class="card-3">
            <a href="{{ route('contents',['id' => $relaiton_subject->id]) }}">
                <div class="content-img">
                    <img src="{{ asset('assets/img/bg1.jpg') }}" />
                </div>

                <div class="content">
                    
                    <h3 class="title">
                    {{ $relaiton_subject->title }}
                    </h3>
                    <div class="fav_box_contents">
                        <img class="fav_img_contents" src="{{asset('assets/img/fav_heart.svg')}}" alt="">
                        <span class="fab_img_contents">245</span>
                    </div>
                    <span class="post-day">
                    {{ $relaiton_subject->created_at }}
                    </span>
                </div>
            </a>
        </div>
        @endforeach
        @endisset
        

    </aside>

    <div class="contents_comment">

        <!-- <div class="comment_wrapper">

            <form action="" method="get">
                <p class="comment_name">投稿する</p>
                <textarea name="" id="comment_area" cols="60" rows="2"></textarea>
                <input type="submit" value="送信" id="comment_send">
            </form>

        </div> -->

        <div class="comment_wrapper">
            
            <p class="toukou_name">投稿する</p>
            <form action="" method="get">
                <div class="FlexTextarea">
                    <div class="FlexTextarea__dummy" aria-hidden="true"></div>
                    <textarea id="FlexTextarea" class="FlexTextarea__textarea" placeholder="コメントを入力"></textarea>
                </div>
                <input type="submit" value="送信" id="comment_send">
            </form>

        </div>

    </div>

@endisset
</section>

@endsection