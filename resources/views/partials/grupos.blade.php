
<div class="list-group">
  <button id='botonCategorias' type="button" class="list-group-item list-group-item-action active">
    Categorias
  </button>
  @forelse($groups as $group)
    <button id='botonTiposCategorias' type="button" class="list-group-item list-group-item-action"><i class="{{$group->icon }}"></i>{{$group->name }}</button>
  @empty
    <li>no hay grupos</li>
  @endforelse
</div>
