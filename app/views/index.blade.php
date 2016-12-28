<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<h1>这是视图文件</h1>
@forerch($title as $key)
<h3>{{ $key->name }}</h3>
<h3>{{ $key->pwd }}</h3>
<h3>{{ $key->sex }}</h3>
@endforeach
</body>
</html>