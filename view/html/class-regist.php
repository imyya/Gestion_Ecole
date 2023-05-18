<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Inscription d'un élève</title>
    <style>
        .form-container {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-wrapper {
            padding: 2rem;
            background-color: rgb(212, 209, 156);
            box-shadow: 0 14px 16px rgba(0, 0, 0, 0.1), 0 2px 4px rgba(0, 0, 0, 0.06);
            border-radius: 0.5rem;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <form class="form-wrapper">
            <h2 class="text-center mb-4">Enregistrement Classe</h2>
            <div class="mb-3">
                <label for="prenom" class="form-label">Nom de la classe</label>
                <input type="text" class="form-control" id="className" required placeholder="Exemple: Seconde A">
            </div>
        
            <div class="mb-3">
                <label for="sexe" class="form-label">Nombre d'eleves</label>
                <input type="text" class="form-control" id="effectif" required placeholder="Exemple: 35">
            </div>
            <select class="form-select" id="niveauScolaire">
                <option selected disabled>Choisir...</option>
                    <option value="primaire">Primaire</option>
                    <option value="secondaire-inferieur">Secondaire Inférieur</option>
                    <option value="secondaire-superieur">Secondaire Supérieur</option>
                
            </select>
       
            <div class="mb-3">
                <label for="professeurPrincipal" class="form-label">Professeur principal</label>
                <input type="text" class="form-control" id="professeurPrincipal" placeholder="Exemple : M. Dupont">
            </div>
            <button type="submit" class="btn btn-primary" style="background-color: #9b4e5f;" >Ajouter la classe</button>
        </form>
    </div>
</body>
