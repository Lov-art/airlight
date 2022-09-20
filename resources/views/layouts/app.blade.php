<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('page-title')</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicon.ico')}}">
    @section('layout-assets')

{{--        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">--}}
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/media.css')}}">

    @show

    @yield('page-assets')
</head>

    @yield('this-page-style')

<body>
@include('templates.header')
@yield('content')
@yield('news-block')
@include('templates.footer')



<div class="news-modal d-none" id="shareNewsModal">
    <div class="modal-body">
        <button id="close_modal">
            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="16" cy="16" r="16" fill="white"/>
                <path d="M23.8749 8.13738C23.6414 7.90332 23.3243 7.77178 22.9937 7.77178C22.663 7.77178 22.3459 7.90332 22.1124 8.13738L15.9999 14.2374L9.8874 8.12488C9.65386 7.89082 9.3368 7.75928 9.00615 7.75928C8.67551 7.75928 8.35844 7.89082 8.1249 8.12488C7.6374 8.61238 7.6374 9.39988 8.1249 9.88738L14.2374 15.9999L8.1249 22.1124C7.6374 22.5999 7.6374 23.3874 8.1249 23.8749C8.6124 24.3624 9.3999 24.3624 9.8874 23.8749L15.9999 17.7624L22.1124 23.8749C22.5999 24.3624 23.3874 24.3624 23.8749 23.8749C24.3624 23.3874 24.3624 22.5999 23.8749 22.1124L17.7624 15.9999L23.8749 9.88738C24.3499 9.41238 24.3499 8.61238 23.8749 8.13738Z" fill="#00A8FF"/>
            </svg>
        </button>
        <p class="modal-title">Поділитися</p>

        <div class="a2a_kit a2a_kit_size_32 a2a_default_style" id="socialBox" data-a2a-url="" data-a2a-title="">
            <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
            <a class="a2a_button_facebook"></a>
            <a class="a2a_button_twitter"></a>
            <a class="a2a_button_whatsapp"></a>
            <a class="a2a_button_linkedin"></a>
            <a class="a2a_button_telegram"></a>
            <a class="a2a_button_facebook_messenger"></a>
            <a class="a2a_button_skype"></a>
            <a class="a2a_button_viber"></a>
        </div>
    </div>
</div>
<div class="questionnaire-box d-none" id="questionnaire">
    <div class="questionnaire row">
        <a href="javascript:void(0)" id="close-form">
            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="16" cy="16" r="16" fill="white"/>
                <path d="M23.8749 8.13738C23.6414 7.90332 23.3243 7.77178 22.9937 7.77178C22.663 7.77178 22.3459 7.90332 22.1124 8.13738L15.9999 14.2374L9.8874 8.12488C9.65386 7.89082 9.3368 7.75928 9.00615 7.75928C8.67551 7.75928 8.35844 7.89082 8.1249 8.12488C7.6374 8.61238 7.6374 9.39988 8.1249 9.88738L14.2374 15.9999L8.1249 22.1124C7.6374 22.5999 7.6374 23.3874 8.1249 23.8749C8.6124 24.3624 9.3999 24.3624 9.8874 23.8749L15.9999 17.7624L22.1124 23.8749C22.5999 24.3624 23.3874 24.3624 23.8749 23.8749C24.3624 23.3874 24.3624 22.5999 23.8749 22.1124L17.7624 15.9999L23.8749 9.88738C24.3499 9.41238 24.3499 8.61238 23.8749 8.13738Z" fill="#00A8FF"/>
            </svg>
        </a>
        <div class="col-md-4 fixed-box">
            <div class="container">
                <img src="img/AIRLIGHT.png" alt="">
                <p class="questionnaire-title">Дякуємо за вашу
                    готовність приєднатися
                    до допомоги нужденним
                    громадянам України.</p>
                <p class="questionnaire-text">Використовуючи цю форму, ви
                    можете вказати, який тип
                    підтримки ви хотіли б
                    запропонувати, якими
                    навичками володієте, якими
                    ресурсами ви могли б поділитися.</p>

            </div>
        </div>

        <form class="col-md-8 " id="mail-form" action="{{route('mail',['lang' => app()->getLocale()])}}" method="post">

            <input type="hidden" name="form_name" value="send_mail" >

            @if($errors->any())
                <div class="alert alert-error">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <p class="questionnaire-form-title">Пожалуйста, заполните этот документ и мы свяжемся с вами,
                как только узнаем, как можем использовать вашу помощь.</p>
            <div class="row mt-4 mb-md-4">
                <div class="col-md-6">
                    <div class="input-box">
                        <label for="fio">Ім'я та прізвище*</label>
                        <input type="text" id="fio" name="fio" placeholder="Вкажи своє і’мя та прізвище">
                        @error('fio')
                        <p>{{$errors->first('fio')}}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-box">
                        <label for="email">Email*</label>
                        <input type="text" id="email"  name="email" placeholder="Вкажи свій Email">
                    </div>
                </div>
            </div>
            <div class="row mb-md-4">
                <div class="col-md-6">
                    <div class="input-box">
                        <label for="tel">Номер телефона* </label>
                        <input type="text" id="tel" name="tel" placeholder="+38 (XХХ) ХХХ ХХ ХХ ">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-box">
                        <label for="city">Вкажіть область**</label>
                        <select name="district" id="district">
                            <option value="АР Крим">АР Крим</option>
                            <option value="Вінницька">Вінницька</option>
                            <option value="Волинська">Волинська</option>
                            <option value="Дніпропетровська">Дніпропетровська</option>
                            <option value="Донецька">Донецька</option>
                            <option value="Житомирська">Житомирська</option>
                            <option value="Закарпатська">Закарпатська</option>
                            <option value="Запорізька">Запорізька</option>
                            <option value="Івано-Франківська">Івано-Франківська</option>
                            <option value="Київська">Київська</option>
                            <option value="Кіровоградська">Кіровоградська</option>
                            <option value="Луганська">Луганська</option>
                            <option value="Львівська">Львівська</option>
                            <option value="Миколаївська">Миколаївська</option>
                            <option value="Одеська">Одеська</option>
                            <option value="Полтавська">Полтавська</option>
                            <option value="Рівненська">Рівненська</option>
                            <option value="Сумська">Сумська</option>
                            <option value="Тернопільська">Тернопільська</option>
                            <option value="Харківська">Харківська</option>
                            <option value="Херсонська">Херсонська</option>
                            <option value="Хмельницька">Хмельницька</option>
                            <option value="Черкаська">Черкаська</option>
                            <option value="Чернівецька">Чернівецька</option>
                            <option value="Чернігівська">Чернігівська</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row mb-md-4">

                <div class="input-box">
                    <label for="tel">Тобі вже виповнилося 18 років?* * </label>
                    <div class="form-radio-box">
                        <p>
                            <input class="modal-radio" type="radio" name="userAge[]" id="userAge1" value="yes" checked>
                            <label for="userAge1">Так</label>
                        </p>
                        <p>
                            <input class="modal-radio" type="radio" name="userAge[]" id="userAge2" value="no">
                            <label for="userAge2">Ні</label>
                        </p>
                    </div>
                </div>


            </div>
            <div class="row mb-md-4">
                <div class="input-box">
                    <label for="tel">Як ти можеш допомогти?*</label>
                    <div class="form-radio-box d-flex justify-content-between align-items-center flex-wrap gap-2">

                        <label class="container-box">
                            Я юрист
                            <input class='' type="checkbox" name="canHelp[]" id="canHelp1" value="Я юрист" checked>
                            <span class="checkmark"></span>
                        </label>
                        <label class="container-box">
                            Я лікар
                            <input class='' type="checkbox" name="canHelp[]" id="canHelp2" value="Я лікар">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container-box">
                            Я можу надати транспорт
                            <input class='' type="checkbox" name="canHelp[]" id="canHelp3" value="Я можу надати транспорт">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container-box">
                            Я можу допомогти з опікою над дітьми
                            <input class='' type="checkbox" name="canHelp[]" id="canHelp4" value="Я можу допомогти з опікою над дітьми">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container-box">
                            Я можу прийняти до себе у гості сім'ю на підселення
                            <input class='' type="checkbox" name="canHelp[]" id="canHelp5" value="Я можу прийняти до себе у гості сім'ю на підселення">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container-box">
                            Я можу надати чи зняти житло
                            <input class='' type="checkbox" name="canHelp[]" id="canHelp6" value="Я можу надати чи зняти житло">
                            <span class="checkmark"></span>
                        </label>
                    </div>

                </div>
            </div>


            <div class="row mb-md-4">
                <div class="input-box">
                    <label for="tel">У тебе є машина?*</label>
                    <div class="form-radio-box">
                        <p>
                            <input class="modal-radio" type="radio" name="haveCar[]" id="haveCar1" value="yes" checked>
                            <label for="haveCar1">Так</label>
                        </p>
                        <p>
                            <input class="modal-radio" type="radio" name="haveCar[]" id="haveCar2" value="no">
                            <label for="haveCar2">Ні</label>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mb-md-4">
                <div class="input-box">
                    <label>Якою мовою розмовляєш?*</label>
                    <div class="form-radio-box d-flex justify-content-between flex-wrap">

                        <label class="container-box">
                            Українська
                            <input class='' type="checkbox" name="lang[]" id="lang1" value="Українська" checked>
                            <span class="checkmark"></span>
                        </label>
                        <label class="container-box">
                            Російська
                            <input class='' type="checkbox" name="lang[]" id="lang2" value="Російська">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container-box">
                            Англійська
                            <input class='' type="checkbox" name="lang[]" id="lang3" value="Англійська">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="w-100">
                        <textarea name="lang[]" id="lang4" cols="30" rows="10" placeholder="Вкажіть інші варіанти"></textarea>
                    </div>

                </div>
            </div>
            <div class="row mb-md-4">
                <div class="input-box">
                    <label>В який час ти вільний/вільна?*</label>

                    <div class="w-100">
                        <textarea name="freeTime" id="freeTime" cols="30" rows="10" placeholder="Вкажіть інші варіанти"></textarea>
                    </div>

                </div>
            </div>
            <div class="row mb-md-4">
                <div class="input-box">
                    <label>Чому ти хочеш зайнятися волонтерством?</label>

                    <div class="w-100">
                        <textarea name="why" id="why" cols="30" rows="10" placeholder="Вкажіть інші варіанти"></textarea>
                    </div>

                </div>
            </div>
            <div class="row mb-md-4">
                <div class="input-box">
                    <label>Є ще щось, що хочеш нам написати?</label>

                    <div class="w-100">
                        <textarea name="another" id="another" cols="30" rows="10" placeholder="Вкажіть інші варіанти"></textarea>
                    </div>

                </div>
            </div>
            <div class="row mb-md-4">
                <div class="input-box">
                    <label class="container-box2">
                        <a href="" class="agreement-link">
                            Погоджуюсь з політикою конфіденційності
                        </a>
                        <input class='' type="checkbox" name="agreement" id="agreement" checked>
                        <span class="checkmark"></span>
                    </label>
                </div>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6">
                    <a href="javascript:void(0)" class="form-submit">Відправити заявку</a>
                </div>
                <div class="col-md-6">
                    <a href="javascript:void(0)" id="back"  class="back">Назад</a>
                </div>


            </div>

            <div class="row mt-3 container justify-content-between align-items-center alert-success" id="success-text"> </div>


        </form>
        <div id="success-form-box d-none" class="success-form-box d-flex justify-content-center align-items-center col-md-8">
                <p class="section-title">Дякуємо за звернення! <br>

                    Найближчим часом ми зв'яжемося з Вами</p>
        </div>
    </div>
</div>

@section('layout-scripts')
{{--    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>--}}
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/imask"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src='{{asset('js/main.js')}}'></script>
@show
<script>
    let mail_form = $('#mail-form');
    let success_box = document.getElementById('success-form-box')
    let success_block = document.getElementById('success-text')



    let phoneMask = IMask(
        document.getElementById('tel'), {
            mask: '+{38 }(000){ }000-00-00'
        });



    $('.form-submit').on('click', ()=>{
        $.ajax({
            type: mail_form.attr('method'),
            url: mail_form.attr('action'),
            data: mail_form.serialize(),
            headers: {
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            },
            success: (resp)=>{},
            dataType: 'json',
            statusCode: {
                422: function(resp) {
                   let obj =JSON.parse(resp.responseText);
                   let errors =obj.errors

                   for (let err in errors){
                       let inp = document.querySelectorAll(`[name = "${err}"]`);

                       inp.forEach(i=>{
                           i.style.borderColor='red'
                           i.scrollIntoView({block: "center", behavior: "smooth"});
                       })

                   }
                },
                200:function (resp){
                    mail_form.addClass('d-none')
                    success_box.removeClass('d-none')
                    success_block.innerHTML='SUCCESS!'
                }
            }
        });
    })
</script>
@yield('page-script')
</body>
</html>

