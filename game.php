<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Bataille Navale</title>
    <script>
        function changeClasse(td, couleur) {
        td.className = couleur;
  }
  </script>
    
</head>
<body>
    <!--La table contient des éléments tr qui représentent les lignes
    l'élément tr contient des éléments td qui représentent les différentes cases de la ligne-->
    <h1>Player 1</h1>
    <table id="player" border="1">
        <tr>
            <td></td>
            <td class="caseBataille">A</td>
            <td class="caseBataille">B</td>
            <td class="caseBataille">C</td>
            <td class="caseBataille">D</td>
            <td class="caseBataille">E</td>
            <td class="caseBataille">F</td>
            <td class="caseBataille">G</td>
            <td class="caseBataille">H</td>
            <td class="caseBataille">I</td>
            <td class="caseBataille">J</td>
        </tr>
    </table>

    <h1>Player 2</h1>
    <table id="adversaire" border="2">
        <tr>
            <td></td>
            <td class="caseBataille2">A</td>
            <td class="caseBataille2">B</td>
            <td class="caseBataille2">C</td>
            <td class="caseBataille2">D</td>
            <td class="caseBataille2">E</td>
            <td class="caseBataille2">F</td>
            <td class="caseBataille2">G</td>
            <td class="caseBataille2">H</td>
            <td class="caseBataille2">I</td>
            <td class="caseBataille2">J</td>
        </tr>
    </table>
<script src="grid.js"></script>
</body>
<!--<input type="button" id="jouer" value="Valider" />-->

</html>