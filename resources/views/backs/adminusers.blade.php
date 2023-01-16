<!DOCTYPE html>

<!doctype html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <title>admin</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    
@foreach($users as $user)
</div>
{{$user->id}} , 
{{$user->email}} 
<br>
</div>
@endforeach

</body>
</html>
