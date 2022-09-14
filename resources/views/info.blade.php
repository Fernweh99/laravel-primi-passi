<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <ul>
    <li>
      <p><strong>Job:</strong>{{$job}}</p>
    </li>
    <li><strong>Interests:</strong>
      <ul>
        @foreach($interests as $interest)
        <li>{{$interest}}</li>
        @endforeach
      </ul>
    </li>
  </ul>
  <a href="{{url('')}}">Turn back on my HOME</a>
</body>
</html>