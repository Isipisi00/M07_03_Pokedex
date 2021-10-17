<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex</title>
</head>
<body>
    <form action="php_libraries/pokemons_info.php" method="post">
        <input type="text" name="pokemon_name">
        <input type="text" name="pokemon_region">
        <input type="text" name="pokemon_type">
        <input type="number" name="pokemon_height">
        <input type="number" step="0.01" name="pokemon_weight">
        <input type="text" name="pokemon_evolution">
    </form>
</body>
</html>