@foreach ($profiles as $profile)
<span>{{$profile->employee['name']}}</span>
<span>{{$profile->age}}</span>
<span>{{$profile->height}}</span>
<span>{{$profile->father_name}}</span>
<span>{{$profile->employee['positon_id']}}</span>
<span>{{$profile->employee['email']}}</span>
<span>{{$profile->employee['salary']}}</span>
@endforeach