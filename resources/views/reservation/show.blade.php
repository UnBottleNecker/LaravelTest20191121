<!doctype html>
<html lang="ja">
  <head>
    <title>Laravel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body class="p-3">
    <h1>Delete Reservation</h1>
    <form method="post" action="/delete">
      {{ csrf_field() }}
      <input type="hidden" class="form-control" name="id" value="{{ $reservation->id }}">

      <div class="form-group">
        <label for="nameInput">Name</label>
        <input type="text" readonly class="form-control" id="nameInput" name="name"  value="{{ $reservation->name }}" required>
      </div>

      <div class="form-group">
        <label for="telInput">Tel</label>
        <input type="text" readonly class="form-control" id="telInput" name="tel" value="{{ $reservation->tel }}" required>
      </div>

      <div class="form-group">
        <label for="mailInput">Mail</label>
        <input type="email" readonly class="form-control" id="mailInput" name="mail" value="{{ $reservation->mail }}" required>
      </div>

      <div class="form-group">
        <label for="dateInput">Reservation Date</label>
        <input type="datetime-local" readonly class="form-control" id="dateInput" name="datetime" value="{{ $reservation->datetime }}"  required>
      </div>

      <div class="form-group">
        <label for="etcInput">etc</label>
        <textarea class="form-control" readonly id="etcInput" rows="3" name="etc">{{ $reservation->etc }}</textarea>
      </div>      
      <input type="hidden" name="family" value="0"></input>
      <input type="hidden" name="member_a" value="0"></input>
      <input type="hidden" name="member_b" value="0"></input>
      <input type="hidden" name="member_c" value="0"></input>
      <input type="hidden" name="member_d" value="0"></input>

      <button type="submit" class="btn btn-primary">delete</button>
    </form>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>
