@foreach($users as $user)
    <p>User: {{$user->name}} - ({{$user->id}})</p>
@endforeach
