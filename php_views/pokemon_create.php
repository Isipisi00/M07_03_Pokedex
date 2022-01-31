<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title></title>
</head>
<body>
    <?php include_once('layouts/header.php'); ?>

    <form action="../php_controllers/pokemons_info.php" method="post" class="container">
    <div class="row">
        <label class="form-label" for="name">Nombre</label><input id="name" class="mb-2" type="text" name="pokemon_name">
        <label class="form-label" for="region">Región</label><input id="region" class="mb-2" type="text" name="pokemon_region">
            <!-- Bicho, Dragón, Eléctrico, Hada, Lucha, Fuego, Volador, Fantasma, Planta,
            Tierra, Hielo, Normal, Veneno, Psíquico, Roca, Acero y Agua -->
            <div class="col-sm-3 p-2">
                <label class="form-check-label" for="bicho">Bicho</label><input class="form-check-input" id="bicho" type="checkbox" name="pokemon_type[]">
                <label class="form-check-label" for="dragon">Dragón</label><input class="form-check-input" id="dragon" type="checkbox" name="pokemon_type[]">
                <label class="form-check-label" for="electrico">Eléctrico</label><inputv class="form-check-input" id="electrico" type="checkbox" name="pokemon_type[]">
                <label class="form-check-label" for="hada">Hada</label><input class="form-check-input" id="hada" type="checkbox" name="pokemon_type[]">
            </div>
            <div class="col-sm-3 p-2">
                <label class="form-check-label" for="lucha">Lucha</label><input class="form-check-input" id="lucha" type="checkbox" name="pokemon_type[]">
                <label class="form-check-label" for="fuego">Fuego</label><input class="form-check-input" id="fuego" type="checkbox" name="pokemon_type[]">
                <label class="form-check-label" for="volador">Volador</label><input class="form-check-input" id="volador" type="checkbox" name="pokemon_type[]">
                <label class="form-check-label" for="fantasma">Fantasma</label><input class="form-check-input" id="fantasma" type="checkbox" name="pokemon_type[]">
                <label class="form-check-label" for="palnta">Planta</label><input class="form-check-input" id="palnta" type="checkbox" name="pokemon_type[]">

            </div>
            <div class="col-sm-3 p-2">
                <label class="form-check-label" for="tierra">Tierra</label><input class="form-check-input" id="tierra" type="checkbox" name="pokemon_type[]">
                <label class="form-check-label" for="hielo">Hielo</label><input class="form-check-input" id="hielo" type="checkbox" name="pokemon_type[]">
                <label class="form-check-label" for="normal">Normal</label><input class="form-check-input" id="normal" type="checkbox" name="pokemon_type[]">
                <label class="form-check-label" for="veneno">Veneno</label><input class="form-check-input" id="veneno" type="checkbox" name="pokemon_type[]">
            </div>
            <div class="col-sm-3 p-2">
                <label class="form-check-label" for="psíquico">Psíquico</label><input class="form-check-input" id="psíquico" type="checkbox" name="pokemon_type[]">
                <label class="form-check-label" for="roca">Roca</label><input class="form-check-input" id="roca" type="checkbox" name="pokemon_type[]">
                <label class="form-check-label" for="acero">Acero</label><input class="form-check-input" id="acero" type="checkbox" name="pokemon_type[]">
                <label class="form-check-label" for="agua">Agua</label><input class="form-check-input" id="agua" type="checkbox" name="pokemon_type[]">
            </div>
        <label class="form-label" for="height">Altura</label><input id="height" type="number" name="pokemon_height">
        <label class="form-label" for="width">Peso</label><input id="width" type="number" step="0.01" name="pokemon_weight">
        <label class="form-label" for="evo">Evolución</label><input id="evo" type="text" name="pokemon_evolution">
        <input type="submit">      
    </form>
    </div>

    <?php include_once('layouts/footer.php'); ?>
        
</body>
</html>