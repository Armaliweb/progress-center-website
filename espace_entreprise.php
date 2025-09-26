<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Espace Entreprise</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      height: 100vh;
      background: linear-gradient(145deg, #d1e4ff, #e8ecf5);
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      padding: 20px;
    }

    .form-box {
      background: #ffffff;
      border-radius: 20px;
      padding: 40px 30px;
      width: 100%;
      max-width: 480px;
      box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15),
                  0 10px 20px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    .form-box h2 {
      font-size: 28px;
      font-weight: 700;
      margin-bottom: 30px;
      color: #2c3e50;
    }

    .input-group {
      text-align: left;
      margin-bottom: 20px;
    }

    .input-group label {
      font-weight: 600;
      margin-bottom: 8px;
      display: block;
      color: #333;
    }

    .input-group input,
    .input-group select {
      width: 100%;
      padding: 14px 16px;
      border: 1px solid #ccc;
      border-radius: 12px;
      font-size: 15px;
      transition: all 0.3s ease;
      background: #f9f9f9;
      box-shadow: inset 0 2px 5px rgba(0, 0, 0, 0.05);
    }

    .input-group input:focus,
    .input-group select:focus {
      border-color: #4a90e2;
      box-shadow: 0 0 0 3px rgba(74, 144, 226, 0.2);
      background: #fff;
      outline: none;
    }

    button {
      width: 100%;
      padding: 14px;
      background: linear-gradient(135deg, #4a90e2, #357bd8);
      color: white;
      font-size: 16px;
      font-weight: bold;
      border: none;
      border-radius: 12px;
      cursor: pointer;
      transition: background 0.3s, box-shadow 0.3s;
      box-shadow: 0 6px 14px rgba(74, 144, 226, 0.4);
    }

    button:hover {
      background: linear-gradient(135deg, #357bd8, #2d68c4);
      box-shadow: 0 8px 18px rgba(74, 144, 226, 0.5);
    }

    @media (max-width: 500px) {
      .form-box {
        padding: 30px 20px;
      }
    }
  </style>
</head>
<body>

  <div class="form-box">
    <h2>Espace Entreprise</h2>
    <form method="post" action="submit_entreprise.php" onsubmit="return validerFormulaire()">
      <div class="input-group">
        <label>Nom de l’entreprise*</label>
        <input type="text" name="nom_entreprise" id="nom_entreprise" required>
      </div>

      <div class="input-group">
        <label>Localisation de l’entreprise*</label>
        <input type="text" name="localisation" id="localisation" required>
      </div>

      <div class="input-group">
        <label>Formation souhaitée*</label>
        <input type="text" name="formation_souhaitee" id="formation_souhaitee" required>
      </div>

      <div class="input-group">
        <label>Type de formation*</label>
        <select name="type_formation" id="type_formation" required>
          <option value="">Sélectionner</option>
          <option value="continue">Continue</option>
          <option value="accélérée">Accélérée</option>
        </select>
      </div>

      <div class="input-group">
        <label>Email ou numéro de contact*</label>
        <input type="text" name="contact" id="contact" required>
      </div>

      <button type="submit">Envoyer</button>
    </form>
  </div>

  <script>
    function validerFormulaire() {
      const champs = ['nom_entreprise', 'localisation', 'formation_souhaitee', 'type_formation', 'contact'];
      for (let champ of champs) {
        if (document.getElementById(champ).value.trim() === "") {
          alert("Veuillez remplir tous les champs obligatoires.");
          return false;
        }
      }
      return true;
    }
  </script>

</body>
</html>
