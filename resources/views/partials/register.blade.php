  @forelse($additionals as $additional)
   
      @if (auth()->id()==$additional->user_id && $additional->status!='')
  <li>Situación sentimental: {{$additional->status}} </li>

       <li>Ciudad: {{$additional->city}}</li>
  @endif

    
      @empty 

      <form action="profile/create" method="POST">

    {{ csrf_field() }}
     <div class="form-group">
    <label for="exampleFormControlSelect1">Ciudad
</label>
    <select class="form-control"  name="city"  id="exampleFormControlSelect1">
      <option name="city" required value="Buenos Aires">Buenos Aires</option>
      <option name="city" required value="Mar del Plata">Mar del Plata</option>
      <option name="city" required value="Mendoza">Mendoza</option>
      <option name="city" required value="Bariloche">Bariloche</option>

    </select>
  </div>
      <div class="form-group">
    <label for="exampleFormControlSelect1">Situación sentimental
</label>
    <select class="form-control"  name="status"  id="exampleFormControlSelect1">
      <option name="status" required value="Soltera">Soltera</option>
      <option name="status" required value="Casada">Casada</option>
      <option name="status" required value="Viuda">Viuda</option>
      <option name="status" required value="Divorciada">Divorciada</option>

    </select>
    <div class="col-md-6">
       <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"  autocomple>
    </div>
     <div class="col-md-6">
       <input id="date" type="date" class="form-control" name="date" value="{{ old('date') }}"  autocomple>
    </div>
  </div>
      <button type="submit">Enviar</button>
  </form>     
      @endforelse