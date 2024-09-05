@extends('layout.app')
@section('title', 'Pokedex')
@section('content')
    <div>
        <!-- Banner -->
        <div class="banner bg-body text-white">

        </div>
        <!-- Pokemons -->
        <div class="row">
            <div class="col-md-3 col-sm-6 product-card">
                <div class="card">
                    <img src="img/bulbasaur.png" class="card-img-top" alt="bulbasaur">
                    <div class="card-body">
                        <h5 class="card-title">Bulbasaur</h5>
                        <p class="card-text fw-bold">Nº 0001</p>
                        <p class="card-text text-justify-custom">Por algum tempo após o nascimento, ele usa os nutrientes contidos na semente em suas costas para crescer.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 product-card">
                <div class="card">
                    <img src="img\ivysaur.png" class="card-img-top" alt="Produto XYZ">
                    <div class="card-body">
                        <h5 class="card-title">Ivysaur</h5>
                        <p class="card-text fw-bold">Nº 0002</p>
                        <p class="card-text text-justify-custom">Quanto mais luz solar Ivysaur recebe, mais força brota dentro dele, permitindo que o broto em suas costas cresça mais.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 product-card">
                <div class="card">
                    <img src="img/Venusaur.png" class="card-img-top" alt="Produto XYZ">
                    <div class="card-body">
                        <h5 class="card-title">Venusaur</h5>
                        <p class="card-text fw-bold">Nº 0003</p>
                        <p class="card-text text-justify-custom">Enquanto se aquece no sol, ele pode converter a luz em energia. Como resultado, ele é mais potente no verão.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 product-card">
                <div class="card">
                    <img src="img/Charmander.png" class="card-img-top" alt="Produto XYZ">
                    <div class="card-body">
                        <h5 class="card-title">Charmander</h5>
                        <p class="card-text fw-bold">Nº 0004</p>
                        <p class="card-text text-justify-custom">A chama em sua cauda mostra a força de sua força vital. Se Charmander for fraco, a chama também queima fracamente.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 product-card">
                <div class="card">
                    <img src="img/Charmeleon.png" class="card-img-top" alt="Produto XYZ">
                    <div class="card-body">
                        <h5 class="card-title">Charmeleon</h5>
                        <p class="card-text fw-bold">Nº 0005</p>
                        <p class="card-text text-justify-custom">Quando ele balança sua cauda em chamas, a temperatura ao redor dele sobe cada vez mais, atormentando seus oponentes.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 product-card">
                <div class="card">
                    <img src="img/Charizard.png" class="card-img-top" alt="Produto XYZ">
                    <div class="card-body">
                        <h5 class="card-title">Charizard</h5>
                        <p class="card-text fw-bold">Nº 0006</p>
                        <p class="card-text text-justify-custom">Se Charizard ficar realmente irritado, a chama na ponta de sua cauda queima em um tom azul claro.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 product-card">
                <div class="card">
                    <img src="img/Squirtle.png" class="card-img-top" alt="Produto XYZ">
                    <div class="card-body">
                        <h5 class="card-title">Squirtle</h5>
                        <p class="card-text fw-bold">Nº 0007</p>
                        <p class="card-text text-justify-custom">Após o nascimento, suas costas incham e endurecem em uma concha. Ele borrifa uma espuma potente de sua boca.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 product-card">
                <div class="card">
                    <img src="img/Wartortle.png" class="card-img-top" alt="Produto XYZ">
                    <div class="card-body">
                        <h5 class="card-title">Wartortle</h5>
                        <p class="card-text fw-bold">Nº 0008</p>
                        <p class="card-text text-justify-custom">A cauda longa e peluda de Wartortle é um símbolo de longevidade, por isso esse Pokémon é bastante popular entre pessoas mais velhas.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 product-card">
                <div class="card">
                    <img src="img/Blastoise.png" class="card-img-top" alt="Produto XYZ">
                    <div class="card-body">
                        <h5 class="card-title">Blastoise</h5>
                        <p class="card-text fw-bold">Nº 0009</p>
                        <p class="card-text text-justify-custom">Ele aumenta deliberadamente o peso do seu corpo para poder suportar o recuo dos jatos de água que dispara.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 product-card">
                <div class="card">
                    <img src="img/Caterpie.png" class="card-img-top" alt="Produto XYZ">
                    <div class="card-body">
                        <h5 class="card-title">Caterpie</h5>
                        <p class="card-text fw-bold">Nº 0010</p>
                        <p class="card-text text-justify-custom">Para proteção, ele libera um fedor horrível da antena em sua cabeça para afastar os inimigos.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 product-card">
                <div class="card">
                    <img src="img/Metapod.png" class="card-img-top" alt="Produto XYZ">
                    <div class="card-body">
                        <h5 class="card-title">Metapod</h5>
                        <p class="card-text fw-bold">Nº 0011</p>
                        <p class="card-text text-justify-custom">Ele está esperando o momento de evoluir. Nesse estágio, ele só pode endurecer, então ele permanece imóvel para evitar ataques.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 product-card">
                <div class="card">
                    <img src="img/Butterfree.png" class="card-img-top" alt="Produto XYZ">
                    <div class="card-body">
                        <h5 class="card-title">Butterfree</h5>
                        <p class="card-text fw-bold">Nº 0012</p>
                        <p class="card-text text-justify-custom">Ela adora o néctar das flores e consegue localizar manchas de flores que tenham até mesmo pequenas quantidades de pólen.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 product-card">
                <div class="card">
                    <img src="img/Weedle.png" class="card-img-top" alt="Produto XYZ">
                    <div class="card-body">
                        <h5 class="card-title">Weedle</h5>
                        <p class="card-text fw-bold">Nº 0013</p>
                        <p class="card-text text-justify-custom">Cuidado com o ferrão afiado em sua cabeça. Ele se esconde na grama e arbustos onde come folhas.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 product-card">
                <div class="card">
                    <img src="img/Kakuna.png" class="card-img-top" alt="Produto XYZ">
                    <div class="card-body">
                        <h5 class="card-title">Kakuna</h5>
                        <p class="card-text fw-bold">Nº 0014</p>
                        <p class="card-text text-justify-custom">Capaz de se mover apenas ligeiramente. Quando ameaçado, pode esticar seu ferrão e envenenar seu inimigo.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 product-card">
                <div class="card">
                    <img src="img/Beedrill.png" class="card-img-top" alt="Produto XYZ">
                    <div class="card-body">
                        <h5 class="card-title">Beedrill</h5>
                        <p class="card-text fw-bold">Nº 0015</p>
                        <p class="card-text text-justify-custom">Ele tem três ferrões venenosos nas patas dianteiras e na cauda. Eles são usados ​​para espetar o inimigo repetidamente.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 product-card">
                <div class="card">
                    <img src="img/Pidgey.png" class="card-img-top" alt="Produto XYZ">
                    <div class="card-body">
                        <h5 class="card-title">Pidgey</h5>
                        <p class="card-text fw-bold">Nº 0016</p>
                        <p class="card-text text-justify-custom">Muito dócil. Se atacado, ele frequentemente levanta areia para se proteger em vez de revidar.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 product-card">
                <div class="card">
                    <img src="img/Pidgeotto.png" class="card-img-top" alt="Produto XYZ">
                    <div class="card-body">
                        <h5 class="card-title">Pidgeotto</h5>
                        <p class="card-text fw-bold">Nº 0017</p>
                        <p class="card-text text-justify-custom">Este Pokémon é cheio de vitalidade. Ele voa constantemente ao redor de seu grande território em busca de presas.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 product-card">
                <div class="card">
                    <img src="img/Pidgeot.png" class="card-img-top" alt="Produto XYZ">
                    <div class="card-body">
                        <h5 class="card-title">Pidgeot</h5>
                        <p class="card-text fw-bold">Nº 0018</p>
                        <p class="card-text text-justify-custom">Este Pokémon voa a uma velocidade de Mach 2, buscando presas. Suas grandes garras são temidas como armas perversas.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 product-card">
                <div class="card">
                    <img src="img/Rattata.png" class="card-img-top" alt="Produto XYZ">
                    <div class="card-body">
                        <h5 class="card-title">Rattata</h5>
                        <p class="card-text fw-bold">Nº 0019</p>
                        <p class="card-text text-justify-custom">Mastigará qualquer coisa com suas presas. Se você vir um, pode ter certeza de que mais 40 vivem na área.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 product-card">
                <div class="card">
                    <img src="img/Raticate.png" class="card-img-top" alt="Produto XYZ">
                    <div class="card-body">
                        <h5 class="card-title">Raticate</h5>
                        <p class="card-text fw-bold">Nº 0020</p>
                        <p class="card-text text-justify-custom">Seus pés traseiros são palmados. Eles agem como nadadeiras, então ele pode nadar em rios e caçar presas.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
