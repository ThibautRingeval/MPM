<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ajouter des tâches</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <h1 class="my-4">Ajouter des tâches</h1>
      <form>
        <div id="taches-container">
          <!-- Tâche 1 -->
          <div class="col-md-3">
            <div class="form-group d-flex flex-column">
              <label for="nom1">Nom de la tâche 1</label>
              <input type="text" class="form-control" id="nom1" name="nom1" required>
              <label for="duree1">Durée de la tâche 1 (en jours)</label>
              <input type="number" class="form-control" id="duree1" name="duree1" required>
              <label for="debut1">Date de début de la tâche 1</label>
              <input type="date" class="form-control" id="debut1" name="debut1" required>
              <label for="fin1">Date de fin de la tâche 1</label>
              <input type="date" class="form-control" id="fin1" name="fin1" required>
            </div>
          </div>
        </div>
        <button type="button" class="btn btn-primary mt-3" id="ajouter-tache">Ajouter une tâche</button>
        <button type="submit" class="btn btn-success mt-3">Afficher le mpm</button>
      </form>
    </div>
    <script src="script.js"></script>
  </body>
</html>
