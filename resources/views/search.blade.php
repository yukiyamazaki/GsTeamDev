@extends('layouts.hp')
@section('content')

<section class="search_view">

    <h1></h1>

</section>



<section class="hot">

    <div class="hot_title">

        <h2>ー 検索結果 ー</h2>

    </div>

{{-- ここから投稿内容が表示される部分（新着）--}}
    <div class="search_wrapper">
    @isset($search_contents)
        @foreach($search_contents as $search_content)
            <div class="search_card">
            <h3 class="card_top_title">
              {{ $search_content->title}}
            <h4>{{ $search_content->subject }}</h4>
                <div class="card_top_img">
                    <img src="{{ asset('assets/img/test.jpg') }}" />
                </div>
                <div class="card_top_contents">
                    
                    </h3>
                    
                    <span class="card_top_day">
                    {{ $search_content->updated_at}}
                    </span>
                </div>
            </div>
        @endforeach
    @endisset

    </div>

    <div class="hot_next">

    <button id="hot_btn">もっと見る</button>

    </div>

</section>

@endsection