<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/css/reservation.css') }}" rel="stylesheet" type="text/css">
    <title>NAZ49</title>
</head>
<body>
<div class="main--content">
    <div class="menu">
        <ul class="menu--wrapper">
            <li class="menu--content center">Index</li>
            <li class="menu--content center">Point</li>
            <li class="menu--content center">Reservation</li>
        </ul>
    </div>
    <div class="card">
        <h1 class="center">
            <span class="enphasize--text">Your Reservation</span>
        </h1>
        <div class="reservation--detail">
            <img src="{{asset('img/idol3.png')}}" alt="idol3" class="idol--image box"/>
            <div class="button--list">
                <h1>Nov 11, Mon with IDOL C</h1>
                <button class="input--button center reservation--detail--button">
                    <a href="{{asset('/reservation/change')}}" class="button--href">Change reservation</a>
                </button>
                <button class="input--button center reservation--detail--button">Cancel reservation</button>
            </div>
        </div>
        <h1 class="center">
            <a href="{{asset('/reservation')}}" class="main--href">If you want to add new reservation other day, click this link</a>
        </h1>
    </div>
</div>
</body>
</html>
