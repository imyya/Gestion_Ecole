<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier les informations de l'élève</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <h2 class="text-center mb-4">Modifier les informations de l'élève</h2>
        <form>
            <div class="mb-3">
                <label for="studentName" class="form-label">Nom</label>
                <input type="text" class="form-control" id="studentName" value="Nom actuel">
            </div>
            <div class="mb-3">
                <label for="studentSurname" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="studentSurname" value="Prénom actuel">
            </div>
            <div class="mb-3">
                <label for="studentBirthDate" class="form-label">Date de naissance</label>
                <input type="date" class="form-control" id="studentBirthDate" value="Date actuelle">
            </div>
            <div class="mb-3">
                <label for="studentBirthPlace" class="form-label">Lieu de naissance</label>
                <input type="text" class="form-control" id="studentBirthPlace" value="Lieu actuel">
            </div>
            <div class="mb-3">
                <label for="studentGender" class="form-label">Sexe</label>
                <select class="form-control" id="studentGender">
                    <option selected>Choisir...</option>
                    <option value="M">Masculin</option>
                    <option value="F">Féminin</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="studentType" class="form-label">Type</label>
                <select class="form-control" id="studentType">
                    <option selected>Choisir...</option>
                    <option value="externe">Externe</option>
                    <option value="interne">Interne</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="studentLevel" class="form-label">Niveau</label>
                <select class="form-control" id="studentLevel">
                    <option selected>Choisir...</option>
                    <option value="primaire">Primaire</option>
                    <option value="secondaire_inferieur">Secondaire Inférieur</option>
                    <option value="secondaire_superieur">Secondaire Supérieur</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" style="background-color: #9b4e5f;">Mettre à jour</button>
        </form>
    </div>
</body>
</html>
