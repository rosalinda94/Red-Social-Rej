<h1>{{$title}}</h1>
<ul>
@forelse($groups as $group)
<li> {{$group ->name}}</li>
@empty
<li>no hay grupos</li>
@endforelse
</ul>
