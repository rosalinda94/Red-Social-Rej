
<div class="list-group">
  <form class="" action="/filtrarCategoria" method="post">
    @csrf
    <button id='botonCategorias' type="button" class="list-group-item list-group-item-action active">
      Categorias
    </button>
    @forelse($groups as $group)
      <input type="hidden" name="id" value="{{$group->id}}">
      <button id='botonTiposCategorias' type="submit" class="list-group-item list-group-item-action"><i class="{{$group->icon }}"></i>{{$group->name }}</button>
    @empty
      <li>no hay grupos</li>
    @endforelse
  </form>
</div>
