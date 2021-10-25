<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="" method="post">
        <label for="name">Nombre</label><input id="name" type="text" name="pokemon_name">
        <label for="name">Región</label><input type="text" name="pokemon_region">
        <fieldset>
            <!-- Bicho, Dragón, Eléctrico, Hada, Lucha, Fuego, Volador, Fantasma, Planta,
            Tierra, Hielo, Normal, Veneno, Psíquico, Roca, Acero y Agua -->
            <label for="bicho">Bicho</label><input id="bicho" type="checkbox" name="pokemon_type[]">
            <label for="dragon">Dragón</label><input id="dragon" type="checkbox" name="pokemon_type[]">
            <label for="electrico">Eléctrico</label><input id="electrico" type="checkbox" name="pokemon_type[]">
            <label for="hada">Hada</label><input id="hada" type="checkbox" name="pokemon_type[]">
            <label for="lucha">Lucha</label><input id="lucha" type="checkbox" name="pokemon_type[]">
            <label for="fuego">Fuego</label><input id="fuego" type="checkbox" name="pokemon_type[]">
            <label for="volador">Volador</label><input id="volador" type="checkbox" name="pokemon_type[]">
            <label for="fantasma">Fantasma</label><input id="fantasma" type="checkbox" name="pokemon_type[]">
            <label for="palnta">Planta</label><input id="palnta" type="checkbox" name="pokemon_type[]">
            <label for="tierra">Tierra</label><input id="tierra" type="checkbox" name="pokemon_type[]">
            <label for="hielo">Hielo</label><input id="hielo" type="checkbox" name="pokemon_type[]">
            <label for="normal">Normal</label><input id="normal" type="checkbox" name="pokemon_type[]">
            <label for="veneno">Veneno</label><input id="veneno" type="checkbox" name="pokemon_type[]">
            <label for="psíquico">Psíquico</label><input id="psíquico" type="checkbox" name="pokemon_type[]">
            <label for="roca">Roca</label><input id="roca" type="checkbox" name="pokemon_type[]">
            <label for="acero">Acero</label><input id="acero" type="checkbox" name="pokemon_type[]">
            <label for="agua">Agua</label><input id="agua" type="checkbox" name="pokemon_type[]">
        </fieldset>
        <label for="name">Altura</label><input type="number" name="pokemon_height">
        <label for="name">Peso</label><input type="number" step="0.01" name="pokemon_weight">
        <label for="name">Evolución</label><input type="text" name="pokemon_evolution">
        <input type="submit">      
    </form>
</body>
</html>