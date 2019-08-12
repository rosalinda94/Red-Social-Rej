
<div class="list-group">
    <a id='botonCategorias' type="button" href="/index" class="catTitulo" style="text-align: center">
      Categorias
    </a>
    @forelse($groups as $group)
      @csrf
      <a type="submit" href="filtrarCategoria?id={{$group->id}}" class="cat"><i class="{{$group->icon }}"></i>{{$group->name }}</a>
    @empty
      <li>no hay grupos</li>
    @endforelse
</div>
