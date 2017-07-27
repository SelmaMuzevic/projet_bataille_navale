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
        <tr>
            <td class="caseBataille">1</td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="A1 "></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="B1 "></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="C1 "></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="D1 "></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="E1 "></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="F1 "></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="G1 "></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="H1 "></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="I1 "></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="J1 "></td>

        </tr>
        <tr>
            <td class="caseBataille">2</td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="A2"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="B2"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="C2"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="D2"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="E2"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="F2"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="G2"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="H2"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="I2"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="J2"></td>

        </tr>
        <tr>
            <td class="caseBataille">3</td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="A3"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="B3"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="C3"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="D3"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="E3"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="F3"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="G3"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="H3"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="I3"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="J3"></td>

        </tr>
        <tr>
            <td class="caseBataille">4</td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="A4"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="B4"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="C4"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="D4"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="E4"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="F4"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="G4"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="H4"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="I4"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="J4"></td>

        </tr>
        <tr>
            <td class="caseBataille">5</td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="A5"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="B5"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="C5"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="D5"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="E5"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="F5"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="G5"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="H5"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="I5"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="J5"></td>

        </tr>
        <tr>
            <td class="caseBataille">6</td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="A6"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="B6"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="C6"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="D6"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="E6"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="F6"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="G6"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="H6"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="I6"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="J6"></td>

        </tr>
        <tr>
            <td class="caseBataille">7</td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="A7"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="B7"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="C7"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="D7"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="E7"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="F7"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="G7"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="H7"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="I7"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="J7"></td>

        </tr>
        <tr>
            <td class="caseBataille">8</td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="A8"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="B8"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="C8"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="D8"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="E8"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="F8"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="G8"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="H8"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="I8"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="J8"></td>
        </tr>
        <tr>
            <td class="caseBataille">9</td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="A9"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="B9"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="C9"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="D9"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="E9"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="F9"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="G9"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="H9"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="I9"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="J9"></td>
        </tr>
        <tr>
            <td class="caseBataille">10</td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="A10"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="B10"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="C10"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="D10"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="E10"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="F10"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="G10"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="H10"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="I10"></td>
            <td class="caseBataille" onclick="changeClasse(this, 'vert');" id="J10"></td>
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
        <tr>
            <td class="caseBataille2">1</td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="A1"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="B1"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="C1"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="D1"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="E1"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="F1"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="G1"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="H1"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="I1"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="J1"></td>

        </tr>
        <tr>
            <td class="caseBataille2">2</td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="A2"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="B2"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="C2"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="D2"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="E2"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="F2"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="G2"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="H2"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="I2"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="J2"></td>

        </tr>
        <tr>
            <td class="caseBataille2">3</td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="A3"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="B3"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="C3"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="D3"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="E3"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="F3"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="G3"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="H3"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="I3"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="J3"></td>

        </tr>
        <tr>
            <td class="caseBataille2">4</td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="A4"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="B4"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="C4"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="D4"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="E4"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="F4"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="G4"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="H4"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="I4"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="J4"></td>

        </tr>
        <tr>
            <td class="caseBataille2">5</td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="A5"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="B5"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="C5"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="D5"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="E5"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="F5"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="G5"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="H5"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="I5"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="J5"></td>

        </tr>
        <tr>
            <td class="caseBataille2">6</td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="A6"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="B6"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="C6"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="D6"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="E6"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="F6"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="G6"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="H6"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="I6"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="J6"></td>
        </tr>
        <tr>
            <td class="caseBataille2">7</td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="A7"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="B7"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="C7"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="D7"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="E7"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="F7"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="G7"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="H7"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="I7"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="J7"></td>
        </tr>
        <tr>
            <td class="caseBataille2">8</td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="A8"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="B8"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="C8"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="D8"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="E8"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="F8"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="G8"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="H8"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="I8"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="J8"></td>
        </tr>
        <tr>
            <td class="caseBataille2">9</td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="A9"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="B9"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="C9"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="D9"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="E9"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="F9"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="G9"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="H9"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="I9"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="J9"></td>
        </tr>
        <tr>
            <td class="caseBataille2">10</td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="A10"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="B10"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="C10"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="D10"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="E10"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="F10"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="G10"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="H10"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="I10"></td>
            <td class="caseBataille2" onclick="changeClasse(this, 'noir');" id="J10"></td>
        </tr>
    </table>
<script src="grid.js"></script>
</body>
<!--<input type="button" id="jouer" value="Valider" />-->

</html>