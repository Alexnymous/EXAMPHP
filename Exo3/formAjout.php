<form action="#" method="post">
    <div>
        <label for="titre">Titre: </label>
        <input type="text" name="titre">
    </div>
    <div>
        <label for="realisateur">Réalisateur : </label>
        <input type="text" name="realisateur">
    </div>
    <div>
        <label for="acteurs">Acteurs : </label>
        <input type="text" name="acteurs">
    </div>
    <div>
        <label for="producteur">Producteur : </label>
        <input type="text" name="titre">
    </div>
    <div>
        <select name="annee" id="annee">
            <option value="2010">2010</option>
            <option value="2000">2000</option>
            <option value="1990">1990</option>
            <option value="1980">1980</option>
            <option value="1970">1970</option>
        </select>
    </div>
    <div>
        <select name="langue" id="langue">
            <option value="FR">FR</option>
            <option value="US">US</option>
            <option value="IT">IT</option>
            <option value="SP">SP</option>
            <option value="CH">CH</option>
            <option value="ALL">ALL</option>
        </select>
    </div>
    <select name="category" id="categrory">
        <option value="action">Action</option>
        <option value="thriller">Thriller</option>
        <option value="documentaire">Documentaire</option>
        <option value="SF">Science-fiction</option>
    </select><br>
    <label for="Synopsis">Synopsis : </label>
    <textarea name="storyline" id="storyline" cols="30" rows="10"></textarea><br>
    <label for="video">Bande annonce :</label>
    <input type="url" name="url_video">
    <br><br>
    <input type="submit" value="valider" name="validation">
</form>

