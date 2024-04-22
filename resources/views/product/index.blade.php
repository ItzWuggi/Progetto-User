<x-layout>
    <div class="container p-3">
        <div class="row">
            @foreach ($products as $product)
          <div class="col-12 col-md-4">

                <x-card
                :product="$product"/>
              
                
            </div>
            @endforeach
        </div>
    </div>
</x-layout>