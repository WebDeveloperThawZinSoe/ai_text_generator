<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ask Your Self</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Ask Anything What You Want To Know !!!</h2>
  <form action="{{url('ask')}}" method="get">
    @csrf
    <div class="form-group">
      <textarea require rows="8" class="form-control" id="ask" placeholder="Enter Any Thing What You Want To Know" name="ask"></textarea>
    </div>
    <button type="submit" class="btn btn-default">Ask Now</button>
  </form>
  @if(isset($data))

        <br>
        <p> <b style="color:green">AI Answer : </b> {!!$data!!}</p>        
    @endif
</div>

</body>
</html>
