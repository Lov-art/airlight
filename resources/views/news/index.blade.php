@extends('layouts.app')

@section('this-page-style')
    <style>
        .this-news-banner{
            width: 100%;
            height: 40vh;
            margin-bottom: 2rem;
        }
    </style>
@endsection


@section('content')
    <img src="" alt="" class="this-news-banner">
    <div class="container">
        <div class="content-box" id="contentBox"></div>
    </div>

@endsection

@section('news-block')

    <section id="news" class="news">
        <div class="container">
            <p class="section-title">Наші новини</p>






            <div id="carouselNews" class="carousel slide" data-bs-ride="carousel">
                <div class="news-box carousel-inner" data-type="news-box"></div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselNews" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselNews" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>



            <a href="javascript:void(0)" class="collapse-btn" id="news-collapse"> open</a>
        </div>
    </section>
@endsection



@section('page-script')
    <script src={{asset('js/news.js')}}></script>
    <script>
        let PageLocation = (new URL(document.location)).searchParams;
        let getParam = PageLocation.get("id");
        let contentBox = document.getElementById('contentBox')

        let thisNews = {}
        fetch(REQUEST)
            .then((response) => {
                return response.json();
            })
            .then((data) => {
                if (Boolean(getParam))data.forEach(obj => obj.id === +getParam ? thisNews=obj:null)
                else thisNews=data[0]
            })
            .then(()=> contentBox.innerHTML=thisNews.content)
    </script>
@endsection
