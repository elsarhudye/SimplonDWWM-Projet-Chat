<!-- Créer ici un formulaire avec les champs pseudo et message -->

<form action="index.php">
    <fieldset>
        <div class="row">
            <div class="form-group col-4">
                <label for="pseudo_fe" class="form-label mt-4" hidden>Pseudo</label>
                <input type="text" class="form-control" name="pseudo" id="pseudo_fe" aria-describedby="pseudo" placeholder="Entrez votre pseudo">
            </div>

            <div class="form-group col-8">
                <label for="message_fe" class="form-label mt-4" hidden>message</label>
                <textarea class="form-control" name="content" id="message_fe" rows="3" placeholder="Entrez votre message"></textarea>
            </div>
        </div>

        <input type="submit" class="btn btn-primary mb-5" value="Envoyer" >

    </fieldset>
</form>

<!--<p>
    Cette page ne contient que du HTML.<br />
    Veuillez taper votre prénom : Elsa Rhudye
</p> -->


