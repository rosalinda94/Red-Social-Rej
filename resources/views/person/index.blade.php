<ul>
	@foreach ($persons as $person)
	<li>
		<a href="">{{ $person->name}}</a>
	</li>
	@endforeach
</ul>