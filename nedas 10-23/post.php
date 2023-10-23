<form method="get">
    <h2>Iveskite savo duomenis</h2>
    Vardas: <input type="text" name="username"></br>
    Pavarde: <input type="text" name="surname"></br>
    Komentaras: <textarea name="comment" form=""></textarea></br>
    <button type="submit">Siusti</button>
</form>


<form method="post">
    <h2>Prisijunkite</h2>
    El.Pastas: <input type="email" name="username"></br>
    Slaptazodis: <input type="password" name="password"></br>
    <button type="submit">Prisijungti</button>
</form>

<?php

    if (isset($_POST['username']) && isset($_POST['password'])) {
        
        if ($_POST['username'] == 'kavnedas@gmail.com' && $_POST['password'] == 'nedkav') {
            echo 'Prisijungta sekmingai';
        } else {
            echo 'Blogi prisijungimo duomenyts';
        }
    }

?>