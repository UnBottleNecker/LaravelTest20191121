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
        <h1 class="center">Shall you be <span class="enphasize--text">IDOL</span> in Nishi-aizu?</h1>
        <div class="image--part">
            <img src="{{asset('/img/idol1.png')}}" alt="idol1" class="idol--image"/>
            <img src="{{asset('/img/idol3.png')}}" alt="idol3" class="idol--image"/>
        </div>
        <h1 class="center">1. <span class="enphasize--text">Choose IDOL</span> you want to do activity together.</h1>
        <div class="image--part">
            <img src="{{asset('/img/idol1.png')}}" alt="idol1" class="idol--image box"/>
            <img src="{{asset('/img/idol2.png')}}" alt="idol2" class="idol--image box"/>
            <img src="{{asset('/img/idol3.png')}}" alt="idol3" class="idol--image box"/>
            <img src="{{asset('/img/idol4.png')}}" alt="idol4" class="idol--image box"/>
        </div>
        <h1 class="center">2. <span class="enphasize--text">Select date</span> you want to come Nishi-aizu.</h1>
        <img src="{{asset('/img/cal.png')}}" alt="cal" class="cal--image"/>
        <h1 class="main--text center">3. <In></In>put<span class="enphasize--text">your info</span>.</h1>
        <input type="text" class="input--text" name="name" value="name"/>
        <input type="text" class="input--text" name="email" value="email"/>
        <input type="text" class="input--text" name="TEL" value="TEL"/>
        <button class="input--button center">
            <a href="{{url('/reservation/confirm')}}" class="button--href">Reservation!</a>
        </button>
    </div>
</div>
</body>
</html>
