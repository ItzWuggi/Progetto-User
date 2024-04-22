<x-layout>

  <x-display-errors/>
  <x-display-message/>
    
    <div class="container">
      <div class="row justify-content-center ">
        <div class="col-12 col-md-6 ">
          <form 
          class="rounded-4 shadow bg-light-subtle p-4 my-5" 
          method="POST" 
          action="{{route('article.store')}}"
          enctype="multipart/form-data"
          >
          @csrf
          <div class="mb-3">
            <label for="title" class="form-label">Inserisci il titolo dell'articolo</label>
            <input name="title" type="text" class="form-control" id="title" >
          </div>
          
          <div class="mb-3">
            <label for="subtitle" class="form-label">Inserisci il sottotitolo dell'articolo</label>
            <input name="subtitle" type="text" class="form-control" id="subtitle">
          </div>
          
          <div class="mb-3">
            <label for="body" class="form-label">Inserisci il corpo dell'articolo</label>
              <input type="text" name="body" class="form-control me-3" id="body" value=""> 
          </div>
                  
        <div class="mb-3">
          <label for="img" class="form-label">Aggiungi un'immagine</label>
          
          <input type="file" name="img" class="form-control me-3" id="img">
          
        </div>
           
          
          <button type="submit" class="btn btn-success">Crea un articolo</button>
        </form>
        
        
      </div>
    </div>
  </div>
  
  </x-layout>