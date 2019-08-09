
<div class="list-group">
    <button id='botonCategorias' type="button" class="list-group-item list-group-item-action active">
      Categorias
    </button>
    @forelse($groups as $group)
    <!-- <form class="" action="/filtrarCategoria" method="post"> -->
      @csrf
      <!-- <input type="hidden" name="id" value="{{$group->id}}"> -->
      <a type="submit" href="filtrarCategoria?id={{$group->id}}" class="list-group-item list-group-item-action"><i class="{{$group->icon }}"></i>{{$group->name }}</a>
      <!-- <button type="submit" class="list-group-item list-group-item-action"><i class="{{$group->icon }}"></i>{{$group->name }}</button> -->
    <!-- </form> -->
    @empty
      <li>no hay grupos</li>
    @endforelse
</div>
