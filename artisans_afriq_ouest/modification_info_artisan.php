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
            max-width: 800px;
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
        .artisan-list {
            margin-bottom: 20px;
        }
        .artisan-item {
            padding: 15px;
            border: 1px solid #ccc;
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .artisan-item button {
            padding: 5px 10px;
            font-size: 1em;
            color: white;
            background-color: #D35400;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .artisan-item button:hover {
            background-color: #e67e22;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        form label {
            margin-bottom: 5px;
            font-weight: bold;
        }
        form input, form textarea {
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
    </style>
    <title>Modification Artisan</title>
</head>
<body>
    <header>
        <div class="logo">Logo</div>
        <nav>
            <a href="index.php">Accueil</a>
            <a href="inscription_artisans.php">Inscription Artisan</a>
            <a href="recherche_artisan.php">Rechercher un Artisan</a>
            <a href="#">À propos</a>
            <a href="#">Contact</a>
        </nav>
        <div>
            <a href="#">Connexion</a>
        </div>
    </header>

    <div class="container">
        <h2>Modification des informations de l'artisan</h2>
        
        <div class="artisan-list">
            <div class="artisan-item">
                <span>Nom Prénom - Métier</span>
                <div>
                    <button>Modifier</button>
                    <button>Supprimer</button>
                </div>
            </div>
            <!-- Répéter pour chaque artisan -->
        </div>

        <form>
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom" required>

            <label for="prenom">Prénom</label>
            <input type="text" id="prenom" name="prenom" required>

            <label for="metier">Métier</label>
            <input type="text" id="metier" name="metier" required>

            <label for="localisation">Localisation</label>
            <input type="text" id="localisation" name="localisation" required>

            <label for="telephone">Numéro de téléphone</label>
            <input type="text" id="telephone" name="telephone" required>

            <label for="email">Adresse e-mail</label>
            <input type="email" id="email" name="email" required>

            <label for="description">Description de l'activité</label>
            <textarea id="description" name="description" rows="4" required></textarea>

            <label for="photos">Téléchargement de photos</label>
            <input type="file" id="photos" name="photos" accept="image/*" multiple required>

            <button type="submit">Soumettre</button>
            <button type="reset">Annuler</button>
        </form>
    </div>
</body>
</html>