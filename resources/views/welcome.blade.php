@extends('layouts.app')

@section('content')
    {{--    <h1>@lang('app.main:title')</h1>--}}
    <main data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
        <section class="banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <p class="banner-title">Підтримайте людей,
                            які постраждали та
                            змушені покинути
                            свої домівки.</p>
                    </div>
                    <div class="col-lg-5">
                        <form method="get" action="https://easypay.ua/ua/partners/hromadska-orhanizatsiya-erlayt" class="donate-form" id="donate-form">
                            <p class="form-title">Своїми пожертвуваннями ви
                                допомагаєте цивільним, які постраждали
                                від обстрілів та втратили оселі</p>
                            <div class="form_input-box">
                                <label for="sum">Вкажіть суму внеску, грн</label>
                                <input id="sum" type="text" name="amount" onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="Сума">
                            </div>
                            <p class="form-title">Або виберіть розміру внеску з варіантів нижче:</p>
                            <div class="row d-flex justify-content-between align-items-center mb-4">
                                <div class="radio-box">
                                    <label for="rad1">
                                        <input type="radio" name="rad" id="rad1" value="100">
                                        <span class="checkmark"></span>
                                        <p class="rad-text">100</p>
                                    </label>
                                </div>
                                <div class="radio-box">
                                    <label for="rad2">
                                        <input type="radio" name="rad" id="rad2" value="500">
                                        <span class="checkmark"></span>
                                        <p class="rad-text">500</p>
                                    </label>
                                </div>
                                <div class="radio-box">
                                    <label for="rad3">
                                        <input type="radio" name="rad" id="rad3" value="1000">
                                        <span class="checkmark"></span>
                                        <p class="rad-text">1000</p>
                                    </label>
                                </div>
                                <div class="radio-box">
                                    <label for="rad4">
                                        <input type="radio" name="rad" id="rad4" value="5000">
                                        <span class="checkmark"></span>
                                        <p class="rad-text">5000</p>
                                    </label>
                                </div>

                            </div>
                            <!--                    <div class="row">-->
                            <!--                        <div class="radio-box">-->
                            <!--                            <input type="radio" name="donate-radio" id="once" value="100">-->
                            <!--                            <label for="once">Одноразове-->
                            <!--                                пожертвування</label>-->
                            <!--                        </div>-->
                            <!--                        <div class="radio-box">-->
                            <!--                            <input type="radio" name="donate-radio" id="everyMonth" value="500">-->
                            <!--                            <label for="everyMonth">Щомісяцне-->
                            <!--                                пожертвування</label>-->
                            <!--                        </div>-->
                            <!--                        -->
                            <!--                    </div>-->
                            <button type="submit">Перейти до оплати</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section id="about-us" class="about-us">
            <div class="container">
                <p class="section-title">Про нас</p>
                <p class="section-text mb-5">Громадська організація «Ерлайт» була створена у грудні 2015 р. шляхом самоорганізації громадян, які постраждали в ході збройного конфлікту на Сході України.
                    Встановивши відсутність правових норм щодо захисту мирних громадян та надання гуманітарної допомоги із захисту найбільш чутливих категорій цивільних осіб, організація встановила широкі контакти з правозахисними організаціями та урядовими структурами, для проведення консультацій та просування робіт із вироблення законодавчих норм відповідно до зобов'язань з міжнародного гуманітарного права.
                    <br><br>
                    Починаючи з 2017 р., ГО Ерлайт забезпечено стабільною підтримкою з боку Моніторингової місії ООН у форматі цільових проектів згідно тематики «Допомога громадянським жертвам збройного конфлікту на сході України в 2014-2019 рр.».
                </p>
                <video
                    id="my-video"
                    class="video-js"
                    controls
                    preload="auto"
                    width="100%"
                    height="400px"
                    poster="/img/poster.png"
                    data-setup="{}"
                >
                    <source src="/video/oon.mp4" type="video/mp4" />

                    <p class="vjs-no-js">
                        To view this video please enable JavaScript, and consider upgrading to a
                        web browser that
                        <a href="https://videojs.com/html5-video-support/" target="_blank"
                        >supports HTML5 video</a
                        >
                    </p>
                </video>
            </div>
        </section>
        <section id="what-we-do" class="what-we-do">
            <div class="container">
                <p class="section-title">Що ми робимо</p>
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">

                    <div class="cards-box carousel-inner">

                        <div class="flipcard h blue">
                            <div class="front d-flex flex-column justify-content-between align-items-center ">
                                <p class="card-text">Гуманітарна допомога </p>
                                <img src="img/svg/card1.svg" alt="" class="card-img">
                            </div>
                            <div class="back d-flex align-items-center">
                                <p class="card-text text-center">Надання індивідуальної гуманітарної підтримки найбільш уразливим громадянським жертвам воєнних дій, таким як діти та особи з інвалідністю, громадяни всіх статево-вікових груп, які отримали травми внаслідок воєнного конфлікту
                                    в Україні.</p>
                            </div>
                        </div>
                        <div class="flipcard h green">
                            <div class="front d-flex flex-column justify-content-between align-items-center ">
                                <p class="card-text">Правова підтримка </p>
                                <img src="img/svg/card2.svg" alt="" class="card-img">
                            </div>
                            <div class="back d-flex align-items-center">
                                <p class="card-text text-center"> Правова та консультативна допомога надається з питань про порядок, умови та критерії призначення інвалідності для постраждалих цивільних осіб, надаються рекомендації щодо звернення до правоохоронних органів, лікувальних закладів, підрозділів пенсійного збору документів для реалізації своїх прав на одержання відповідного статусу.</p>
                            </div>
                        </div>
                        <div class="flipcard h yellow">
                            <div class="front d-flex flex-column justify-content-between align-items-center ">
                                <p class="card-text">Соціальна підтримка </p>
                                <img src="img/svg/card3.svg" alt="" class="card-img">
                            </div>
                            <div class="back d-flex align-items-center">
                                <p class="card-text text-center">Організаційний супровід поранених громадян при оформленні спеціального статусу осіб з інвалідністю внаслідок війни, допомога в оформленні статусу внутрішньо переміщеної особи, надання сертифікатів продовольчої та гігієнічної підтримки, а також інші форми соціальної консультаційної підтримки на місцях.</p>

                            </div>
                        </div>


                        <div class="flipcard h yellow">
                            <div class="front d-flex flex-column justify-content-between align-items-center ">
                                <p class="card-text">Реабілітація від отриманих поранень  </p>
                                <img src="img/svg/card1.svg" alt="" class="card-img">
                            </div>
                            <div class="back d-flex align-items-center">
                                <p class="card-text text-center"> <span class="bold">ГО Ерлайт</span> реалізує
                                    программи з реабилитаційної допомоги для громадян, які стали жертвами воєнних дій в результаті отримали травми від
                                    мінно-вибухових предметів.
                                    Також одним із заходів є психологічно-реабілітаційна робота постраждалих громадян.
                                </p>
                            </div>
                        </div>
                        <div class="flipcard h blue">
                            <div class="front d-flex flex-column justify-content-between align-items-center ">
                                <p class="card-text">Пряма допомога
                                    дітям  </p>
                                <img src="img/svg/card2.svg" alt="" class="card-img">
                            </div>
                            <div class="back d-flex align-items-center">
                                <p class="card-text text-center"><span class="bold">ГО Ерлайт</span> визначено надавати пріоритетну допомогу дітям що зазнали шкоди внаслідок воєнних дій, та потребують невідкладної допомоги у наданні продовольчої, гуманітарної, медичної допомоги
                                    (медично-хірургічна допомога, протезування, реабілітація).</p>
                            </div>
                        </div>
                        <div class="flipcard h green">
                            <div class="front d-flex flex-column justify-content-between align-items-center ">
                                <p class="card-text">Адвокаційний супровід </p>
                                <img src="img/svg/card3.svg" alt="" class="card-img">
                            </div>
                            <div class="back d-flex align-items-center">
                                <p class="card-text text-center">Підготовка матеріалів при зверненні до судових інстанцій з позовами щодо відшкодування моральної та матеріальної шкоди.</p>

                            </div>
                        </div>



                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>
        </section>
        <section class="bg-sec bg-sec1 d-flex flex-column justify-content-center align-items-center">
            <div class="container">
                <p class="section-title">Допомагаємо  постраждалим
                    громадянам з 2015 року</p>
                <a href="https://easypay.ua/ua/partners/hromadska-orhanizatsiya-erlayt" class="donate">
                    Пожертвувати
                    <svg width="26" height="22" viewBox="0 0 26 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.8332 0.25C16.3832 0.25 14.2248 1.475 12.9998 3.4C11.7748 1.475 9.6165 0.25 7.1665 0.25C3.3165 0.25 0.166504 3.4 0.166504 7.25C0.166504 14.1917 12.9998 21.25 12.9998 21.25C12.9998 21.25 25.8332 14.25 25.8332 7.25C25.8332 3.4 22.6832 0.25 18.8332 0.25Z" fill="#E74C3C"/>
                    </svg>
                </a>
            </div>

        </section>
        <section class="achievements">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <p class="section-title">Здобутки
                            ГО Ерлайт у цифрах</p>
                    </div>
                    <div class="col-lg-6">
                        <div class="row borBot mb-3">
                            <div class="col-4 d-flex align-items-end">
                                <p class="section-text"> <span>730</span> осіб </p>
                            </div>
                            <div class="col-8 d-flex align-items-end justify-content-end">
                                <p class="section-text text-end">Гуманітарна допомога</p>
                            </div>
                        </div>
                        <div class="row borBot mb-3">
                            <div class="col-4 d-flex align-items-end">
                                <p class="section-text"> <span>356</span> осіб </p>
                            </div>
                            <div class="col-8 d-flex align-items-end justify-content-end">
                                <p class="section-text text-end">Правова допомога</p>
                            </div>
                        </div>
                        <div class="row borBot mb-3">
                            <div class="col-4 d-flex align-items-end">
                                <p class="section-text"> <span>4270</span> осіб </p>
                            </div>
                            <div class="col-8 d-flex align-items-end justify-content-end">
                                <p class="section-text text-end">Соціальна підтримка</p>
                            </div>
                        </div>
                        <div class="row borBot mb-3">
                            <div class="col-4 d-flex align-items-end">
                                <p class="section-text"> <span>79</span> осіб </p>
                            </div>
                            <div class="col-8 d-flex align-items-end justify-content-end">
                                <p class="section-text text-end">Реабілітація від отриманих поранень</p>
                            </div>
                        </div>
                        <div class="row borBot mb-3">
                            <div class="col-4 d-flex align-items-end">
                                <p class="section-text"> <span>240</span> осіб </p>
                            </div>
                            <div class="col-8 d-flex align-items-end justify-content-end">
                                <p class="section-text text-end">Отримали соціальний статус – групу
                                    інвалідності внаслідок війни</p>
                            </div>
                        </div>
                        <div class="row borBot mb-3">
                            <div class="col-4 d-flex align-items-end">
                                <p class="section-text"> <span>372</span> осіб </p>
                            </div>
                            <div class="col-8 d-flex align-items-end justify-content-end">
                                <p class="section-text text-end">Пряма допомога дітям</p>
                            </div>
                        </div>
                        <div class="row borBot mb-3">
                            <div class="col-4 d-flex align-items-end">
                                <p class="section-text"> <span>96</span> осіб </p>
                            </div>
                            <div class="col-8 d-flex align-items-end justify-content-end">
                                <p class="section-text text-end">Підготовлено звернень до судових інстанцій</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section class="our-help">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 d-flex flex-column justify-content-between">
                        <p class="section-title">Ми вже допомогли</p>
                        <div class="row">
                            <div class="col-6">
                                <p class="help-count">47</p>
                                <p class="help-text">Населкних пунктів</p>
                            </div>
                            <div class="col-6">
                                <p class="help-count">22</p>
                                <p class="help-text">Міст України</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p class="help-count">32</p>
                                <p class="help-text">ОТГ вздовж лінії
                                    розмежування</p>
                            </div>
                            <div class="col-6">
                                <p class="help-count">11</p>
                                <p class="help-text">Областей України</p>
                            </div>
                        </div>
                        <a href="https://easypay.ua/ua/partners/hromadska-orhanizatsiya-erlayt" class="donate">
                            Пожертвувати
                            <svg width="26" height="22" viewBox="0 0 26 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.8332 0.25C16.3832 0.25 14.2248 1.475 12.9998 3.4C11.7748 1.475 9.6165 0.25 7.1665 0.25C3.3165 0.25 0.166504 3.4 0.166504 7.25C0.166504 14.1917 12.9998 21.25 12.9998 21.25C12.9998 21.25 25.8332 14.25 25.8332 7.25C25.8332 3.4 22.6832 0.25 18.8332 0.25Z" fill="#E74C3C"/>
                            </svg>
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <img src="img/image%2015.png" alt="" class="help-img">
                    </div>
                </div>
            </div>
        </section>
        <section class="points">
            <div class="container">
                <p class="section-title text-center">Глобальні цілі сталого розвитку,
                    які ми підтримуємо через нашу ініціативу</p>
                <div class="row points-row flex-wrap mb-5">
                    <img src="img/image1.png" alt="">
                    <img src="img/image2.png" alt="">
                    <img src="img/image3.png" alt="">
                    <img src="img/image4.png" alt="">
                    <img src="img/image5.png" alt="">
                    <img src="img/image6.png" alt="">
                    <img src="img/image7.png" alt="">
                    <img src="img/image8.png" alt="">
                </div>
            </div>
        </section>
        <section id="news" class="news">
            <div class="container">
                <p class="section-title">Наші новини</p>

                <div id="carouselNews" class="carousel slide" data-bs-ride="carousel">
                    <div class="news-box carousel-inner" data-type="news-box">
{{--                        @foreach($news as $oneNews)--}}
{{--                            <img src="{{$oneNews->img}}" alt="" class="news-card-img">--}}
{{--                            <div class="card-body">--}}
{{--                                <p class="news-card-title">{{$oneNews->title}}</p>--}}
{{--                                <p class="news-card-date">{{$oneNews->date}}</p>--}}
{{--                                <div class="row justify-content-between align-items-center">--}}
{{--                                    <a href="{{route('news',['id'=>$oneNews->id])}}" class="news-link">--}}
{{--                                        Читати більше--}}
{{--                                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                            <path d="M10 1L17 8L10 15M1 8H17H1Z" stroke="#3498DB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                        </svg>--}}
{{--                                    </a>--}}
{{--                                    <button  class="news-share" data-link="${this.link}">--}}
{{--                                        <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                            <path d="M0 9C0 10.654 1.346 12 3 12C3.794 12 4.512 11.685 5.049 11.18L11.04 14.604C11.022 14.734 11 14.864 11 15C11 16.654 12.346 18 14 18C15.654 18 17 16.654 17 15C17 13.346 15.654 12 14 12C13.206 12 12.488 12.315 11.951 12.82L5.96 9.397C5.978 9.266 6 9.136 6 9C6 8.864 5.978 8.734 5.96 8.603L11.951 5.18C12.488 5.685 13.206 6 14 6C15.654 6 17 4.654 17 3C17 1.346 15.654 0 14 0C12.346 0 11 1.346 11 3C11 3.136 11.022 3.266 11.04 3.397L5.049 6.82C4.496 6.29468 3.76273 6.00123 3 6C1.346 6 0 7.346 0 9Z" fill="#3498DB"/>--}}
{{--                                        </svg>--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
                    </div>
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
        <section class="partners">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-4">
                        <p class="section-title">Партнери </p>
                    </div>
                    <div class="col-md-8">
                        <div class="row justify-content-between flex-wrap gap-3 mb-3">
                            <a href="" class="partners-link">
                                <img src="img/part1.png" alt="">
                            </a>
                            <a href="" class="partners-link">
                                <img src="img/part2.png" alt="">
                            </a>
                            <a href="" class="partners-link">
                                <img src="img/part3.png" alt="">
                            </a>

                            <a href="" class="partners-link">
                                <img src="img/part4.png" alt="">
                            </a>
                            <a href="" class="partners-link">
                                <img src="img/part5.png" alt="">
                            </a>
                            <a href="" class="partners-link">
                                <img src="img/part6.png" alt="">
                            </a>
                        </div>


                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p class="section-title">Кластери</p>
                    </div>
                    <div class="col-md-8">
                        <div class="row justify-content-between flex-wrap gap-3 mb-3">
                            <a href="" class="partners-link">
                                <img src="img/class1.png" alt="">
                            </a>
                            <a href="" class="partners-link">
                                <img src="img/class2.png" alt="">
                            </a>
                            <a href="" class="partners-link">
                                <img src="img/class3.png" alt="">
                            </a>
                            <a href="" class="partners-link">
                                <img src="img/class4.png" alt="">
                            </a>

                        </div>


                    </div>
                </div>
            </div>
        </section>
        <section class="volunteer m-0">
            <div class="container d-flex flex-column justify-content-around align-items-center">
                <p class="section-title">Стати волонтером</p>
                <p class="section-text">У вас є можливість реально змінити ситуацію в Україні, своїй територіальній громаді та підтримати тих, хто найбільше потребує допомоги. Вступивши до волонтерської мережі
                    організації Ерлайт, ви зможете рятувати життя та допомагати людям.</p>
                <a href="javascript:void(0)" class="donate" id="openFormModal"> Приєднуйтесь сьогодні!</a>
            </div>


        </section>
    </main>
@stop


@section('page-script')
    @include('templates.news-script')
{{--    <script src={{asset('js/news.js')}}></script>--}}
    <script>

        let newsArr = document.querySelector('[data-type="news-box"]').children
        console.log(newsArr.length)

        let mail_form = $('#mail-form')
        console.log(mail_form.serialize())

        $('.form-submit').on('click', ()=>{
            $.ajax({
                type: mail_form.attr('method'),
                url: mail_form.attr('action'),
                data: mail_form.serialize(),
                headers: {
                    'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                },
                success: (resp)=>{
                    console.log(resp)
                },
                dataType: 'json'
            });
        })
    </script>
@stop
