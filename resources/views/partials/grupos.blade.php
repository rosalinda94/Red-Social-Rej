

   <h4>Categoria</h4>
        <ul>
        @forelse($groups as $group)
          <li><i class="{{$group->icon }}"></i>{{$group->name }}</li>
           @empty
           <li>no hay grupos</li>
   @endforelse
        </ul>