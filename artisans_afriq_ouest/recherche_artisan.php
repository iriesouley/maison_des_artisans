<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f4f4f4;
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #333;
            color: white;
        }
        header nav a {
            color: white;
            margin: 0 10px;
            text-decoration: none;
        }
        header nav a:hover {
            text-decoration: underline;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            font-family: 'Dancing Script', cursive;
            font-size: 2em;
            color: #D35400;
            text-align: center;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        form label {
            margin-bottom: 5px;
            font-weight: bold;
        }
        form input {
            margin-bottom: 15px;
            padding: 10px;
            font-size: 1em;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        form button {
            padding: 10px 15px;
            font-size: 1em;
            color: white;
            background-color: #D35400;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        form button:hover {
            background-color: #e67e22;
        }
        .results {
            margin-top: 20px;
        }
        .artisan-card {
            padding: 15px;
            border: 1px solid #ccc;
            margin-bottom: 10px;
        }
    </style>
    <title>Recherche Artisan</title>
</head>
<body>
    <header>
        <div class="logo">Logo</div>
        <nav>
            <a href="index.php">Accueil</a>
            <a href="inscription_artisans.php">Inscription Artisan</a>
            <a href="#">Rechercher un Artisan</a>
            <a href="#">À propos</a>
            <a href="#">Contact</a>
        </nav>
        <div>
            <a href="#">Connexion</a>
        </div>
    </header>

    <div class="container">
        <h2>Recherche Artisan</h2>
        <form>
            <label for="metier">Métier</label>
            <input type="text" id="metier" name="metier" required>

            <label for="localisation">Localisation</label>
            <input type="text" id="localisation" name="localisation" required>

            <label for="nom">Nom (optionnel)</label>
            <input type="text" id="nom" name="nom">

            <button type="submit">Rechercher</button>
        </form>

        <div class="results">
            <div class="artisan-card">
                <h3>Nom Prénom - Métier</h3>
                <p>Localisation</p>
                <p>Description de l'activité</p>
                <!-- Ajoutez plus de détails si nécessaire -->
            </div>
            <!-- Répéter pour chaque artisan trouvé -->
        </div>
    </div>
</body>
</html>