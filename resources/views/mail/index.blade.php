


<p>Ім'я та прізвище*:{{$fio}}</p>

<p>Email*:{{$email}}</p>

<p>Номер телефона* :{{$tel}}</p>

<p>Вкажіть область**:{{$district}}</p>

<p>Тобі вже виповнилося 18 років?:</p>
@foreach($userAge as $l)
    <p>{{$l}}</p>
@endforeach

<p>Якою мовою розмовляєш?*:}</p>
@foreach($lang as $l)
    <p>{{$l}}</p>
@endforeach

<p>Як ти можеш допомогти?*:</p>
@foreach($canHelp as $l)
    <p>{{$l}}</p>
@endforeach

<p>У тебе є машина?:</p>
@foreach($haveCar as $l)
    <p>{{$l}}</p>
@endforeach

<p>В який час ти вільний/вільна?*:{{$freeTime}}</p>
<p>Чому ти хочеш зайнятися волонтерством?:{{$why}}</p>
<p>Є ще щось, що хочеш нам написати?:{{$another}}</p>

