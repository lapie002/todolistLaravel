<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="index.html" method="post">
      {{ csrf_field() }}
      <input type="hidden" name="id" value="{{$task->id}}" id="id">
    </form>
  </body>
</html>
