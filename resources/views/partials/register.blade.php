
  @forelse($additionals as $additional)
   

      @if(auth()->id()==$additional->user_id && $additional->mobileNumber!='')
       <li>Situación sentimental: {{$additional->status}} </li>
       <li>Ciudad: {{$additional->city}}</li>
       <li>Telefono: {{$additional->mobileNumber}} </li>
       <li>Fecha de Nacimiento: {{$additional->date}}</li>
     

        
     @endif

      <form action="profile/create" method="POST">

    
     <div class="form-group">
    <label for="exampleFormControlSelect1">Ciudad</label>
    <select class="form-control"  name="city"  id="exampleFormControlSelect1">
      <option  style="background-color: black" disabled selected>Selecciona donde vivis</option>
      <option name="city" required value="Buenos Aires">Buenos Aires</option>
      <option name="city" required value="Mar del Plata">Mar del Plata</option>
      <option name="city" required value="Mendoza">Mendoza</option>
      <option name="city" required value="Bariloche">Bariloche</option>
    </select>
    </div>

      <div class="form-group">
    <label for="exampleFormControlSelect1">Situación sentimental</label>
    <select class="form-control"  name="status"  id="exampleFormControlSelect1">
      <option  style="background-color: black" disabled selected>Selecciona tu situación sentimental</option>
      <option name="status" required value="Soltera">Soltera</option>
      <option name="status" required value="Casada">Casada</option>
      <option name="status" required value="Viuda">Viuda</option>
      <option name="status" required value="Divorciada">Divorciada</option>
    </select>
    </div>

    <div class="form-group">
    <label for="exampleFormControlSelect1">Numero de Telefono</label>
       <input id="mobileNumber" required type="text" class="form-control" name="mobileNumber" value="{{ old('mobileNumber') }}"  placeholder=" 011 - 11111111">
    </div>
     <div class="form-group">
    <label for="exampleFormControlSelect1">Fecha de Nacimiento</label>
       <input id="date" type="date" required class="form-control" name="date" value="{{ old('date') }}"  autocomple>
    </div>
      <button  id='submit' type="submit" class="botonPublicar" style="width: 100%" >Enviar</button>
  </form> 
      @empty
      @endforelse