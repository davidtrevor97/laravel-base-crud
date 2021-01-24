@extends("layouts.main")

<!-- MAIN CONTENT -->
@section("content")
    <h1>Le nostre papere</h1>

    @foreach($ducks as $duck)
        <ul>
            <li>Nomenclatura Binomia: <div class="card">{{ $duck->name }}</div></li>
            <li>Livrea: <div class="card">{{ $duck->color }}</div></li>
        </ul>
    @endforeach

     <!-- <div>
        - Ripercorrere quanto fatto questa mattina insieme per la prima parte di CRUD: <br>
       -  Creazione di un nuovo database <br>
        - impostare credenziali mysql con .env  <br>
        - Creazione di un model e una migration per la creazione e interazione di una tabella nel database creato sopra <br>
        - Creazione di un controller resource <br>
        - Creazione di una rotta resource nel web.php <br>
        - Ispezionate le rotte resource create con artisan route:list dove poter vedere nomi delle rotte, metodi associati del controller per ogni rotta, ecc... <br>
        - Implementate la parte index, show, create e store <br>
    </div> -->
    
@endsection