<!doctype html>
<html lang="ja">

<head>
  <title>Laravel Tutorial</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>

<body class="p-3">
  <h1>Add Schedule</h1>
  <form method="post" action="/create">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="nameInput">Name</label>
      <input type="text" class="form-control" id="nameInput" name="name" required>
    </div>

    <div class="form-group">
      <label for="telInput">Tel</label>
      <input type="text" class="form-control" id="telInput" name="tel" required>
    </div>

    <div class="form-group">
      <label for="mailInput">Mail</label>
      <input type="email" class="form-control" id="mailInput" name="mail" required>
    </div>

    <div class="form-group">
      <label for="dateInput">Reservation Date</label>
      <input type="datetime-local" class="form-control" id="dateInput" name="datetime" required>
    </div>

    <div class="form-group">
      <label for="etcInput">etc</label>
      <textarea class="form-control" id="etcInput" rows="3" name="etc"></textarea>
    </div>

    <div class="form-group">
      <p class="control-label"><b>Settings</b></p>
      <div class="form-inline">
        <label class="checkbox-inline">
          <input type="checkbox" id="familyCheck" name="family" value="1"> Family </label>
        <label class="checkbox-inline">
          <input type="checkbox" id="a_Check" name="member_a" value="1"> member_a </label>
        <label class="checkbox-inline">
          <input type="checkbox" id="b_Check" name="member_b" value="1"> member_b </label>
        <label class="checkbox-inline">
          <input type="checkbox" id="c_Check" name="member_c" value="1"> member_c </label>
        <label class="checkbox-inline">
          <input type="checkbox" id="d_Check" name="member_d" value="1"> member_d </label>
      </div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>

</html>