  <form action="thanks.php" method="post">


      <div>
          <label for="nom">Nom :</label>
          <input type="text" id="nom" name="user_nom">
          <label for="prénom">Prénom :</label>
          <input type="text" id="prénom" name="user_prénom">

      </div>
      <div>
          <label for="courriel">Courriel :</label>
          <input type="email" id="courriel" name="user_email">

          <label for="sélection de motifs">Sélectionnez un motif:</label>

          <select name="motif" id="sélection de motifs">
              <option value="">--choisissez un motif--</option>
              <option value="commande">commande</option>
              <option value="retour">retour</option>
              <option value="remboursement">remboursement</option>
              <option value="autre">autre</option>

          </select>

      </div>
      <div>
          <label for="phone">Téléphone :</label>
          <input type="phone number" id="phone" name="phone">
      </div>

      <label for="message">Message :</label>
      <textarea id="message" name="user_message"></textarea>
      </div>
      <div class="button">
          <button type="submit">Envoyer votre message</button>

      </div>
  </form>