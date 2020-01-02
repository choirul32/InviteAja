<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
	@foreach($data as $d)
    	{{ $d->template()->name }}
    @endforeach
</body>
</html>
