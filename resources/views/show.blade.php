<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>show</title>
</head>

<body>
  <h1>{{$tasks->title}}</h1>
  <p>{{$tasks->description}}</p>
  <p>{{$tasks->created_at}}</p>
  <p>{{$tasks->updated_at}}</p>
</body>

</html>