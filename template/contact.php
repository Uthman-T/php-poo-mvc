<h1><?= $title ?> </h1>

<form action="" method="post" novalidate>

    <div>
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" placeholder="Saisir e-mail">
    </div>

    <div>
        <label for="subject">Subject</label>

        <select name="subject" id="subject">
            <option value="refund">Rembourcement</option>
            <option value="help">Aide</option>
            <option value="problem">Problème</option>
        </select>
    </div>

    <div>
        <label for="message">Message</label>
        <textarea name="message" id="message" cols="30" rows="10"></textarea>
    </div>

    <button type="submit">Soumettre</button>
</form>
