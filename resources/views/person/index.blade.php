<ul>
	@forelse ($persons as $person)
	<li>
		<a href="">{{ $person->name}}</a>
	</li>
				@empty
			<li>no hay posts</li>
			@endforelse
</ul>