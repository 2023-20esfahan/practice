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
<br>

{{$user->email}} 
<br>
{{$user->permission}}
<br>
{{$user->role}}

</div>
@endforeach

</body>
</html>
