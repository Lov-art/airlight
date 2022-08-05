
<!doctype html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/media.css')}}">
    <title>Document</title>
</head>
<body>

<div class="container create-container">
    <h1 class="text-center create-title">Додати новину </h1>
    <form class="create-form" method="post" action="php/forms.php" enctype="multipart/form-data">

        <input type="hidden" name="type" value="put">
        <input type="hidden" name="form_name" value="api">
        <input type="hidden" name="method" value="news">
        <div class="input-box">
            <label for="title">Заголовок</label>
            <input type="text" name="title">
        </div>

        <div class="input-box">
            <label for="img">Баннер</label>
            <input type="file" name="img">
        </div>

        <label for="content">Новость</label>
        <textarea id="text" name="content" cols="30" rows="10"></textarea>
        <div class="btn-box">
            <button class="form-submit" type="submit">ОПУБЛИКОВАТЬ</button>
        </div>


    </form>
</div>










<script src='node_modules/bootstrap/dist/js/bootstrap.bundle.js'></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );

    let text = document.getElementById('text')
    text.addEventListener('text',()=>{
        console.log(text.value)
    })


</script>
</body>
