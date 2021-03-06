<section id="Resume">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center" id=resume_block>
                <h2 class="section-heading" id="resume-title">Résumé</h2>
                <div class="content hideContent-plot" id="plot"><span id="text_plot"> <?php echo $plot ?> </span></div>

            </div>
        </div>
    </div>
</section>

<section id="Acteurs" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center" id="actors">
                <h2 class="section-heading" id="actor-title">Acteurs</h2>
                <?php
                echo "<table border=1 frame=void rules=rows id = \"actors_table\">";

                while ($actors_row = mysqli_fetch_array($roles)) {
                    $fn = utf8_encode($actors_row['Prenom']);
                    $ln = utf8_encode($actors_row['Nom']);
                    $num = utf8_encode($actors_row['Numero']);
                    $role = utf8_encode($actors_row['Role']);
                    $nom = sprintf('%s %s', $fn, $ln);
                    echo "<tr class = 'row_t'>";
                    echo "<td >";
                    echo '<a href="personne.php?id=' . urlencode($fn . ';' . $ln . ';' . $num) . '">' . $nom . '</a>';
                    echo "</td>";
                    echo "<td >" . $role . "</td>";
                    echo "<td class ='hidden'>$fn;$ln;$num</td>";
                    echo "</tr>";
                    //echo '<a href="film.php?id='.urlencode($actors_row['Prenom']).'">'.$actors_row['ID'].'</a>';
                }
                echo "</table>";
                ?>
            </div>
        </div>
    </div>
</section>


<section id="Directeurs">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading" id="director-title">Directeurs</h2>
            </div>
        </div>

        <?php
        echo "<table id = \"directors_table\" class='directorsAndWriters' border=1 frame=void rules=rows>";

        while ($directors_row = mysqli_fetch_array($directors)) {
            $fn = utf8_encode($directors_row['Prenom']);
            $ln = utf8_encode($directors_row['Nom']);
            $num = utf8_encode($directors_row['Numero']);
            $nom = sprintf('%s %s', $fn, $ln); //prenom + nom
            echo "<tr class = 'row_t'>";
            echo "<td >";
            echo '<a href="personne.php?id=' . urlencode($fn . ';' . $ln . ';' . $num) . '">' . $nom . '</a>';
            echo "</td>";
            echo "<td class ='hidden'>$fn;$ln;$num</td>";
            echo "</tr>";
            //echo '<a href="film.php?id='.urlencode($actors_row['Prenom']).'">'.$actors_row['ID'].'</a>';
        }
        echo "</table>";
        ?>
    </div>
</section>

<section id="Auteurs" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading" id="writer-title">Auteurs</h2>
            </div>
        </div>

        <?php
        echo "<table id = \"writers_table\" class='directorsAndWriters' >";

        while ($writers_row = mysqli_fetch_array($writers)) {
            $fn = utf8_encode($writers_row['Prenom']);
            $ln = utf8_encode($writers_row['Nom']);
            $num = utf8_encode($writers_row['Numero']);
            $nom = sprintf('%s %s', $fn, $ln); //prenom + nom
            echo "<tr class = 'row_t'>";
            echo "<td >";
            echo '<a href="personne.php?id=' . urlencode($fn . ';' . $ln . ';' . $num) . '">' . $nom . '</a>';
            echo "</td>";
            echo "<td class ='hidden'>$fn;$ln;$num</td>";
            echo "</tr>";
        }
        echo "</table>";
        ?>
    </div>
</section>

<section id="Details">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading" id="detail-title">Détails</h2>
            </div>
        </div>
        <div id="div_1">
            <div class="details-member">
                <h3><?php echo "Pays"; ?></h3>
                <h4><?php extractCoutries($pays) ?></h4>
            </div>
        </div>

        <div id="div_2">
            <div class="details-member">
                <h3><?php echo "Langues"; ?></h3>
                <h4><?php extractLanguages($languages) ?></h4>
            </div>
        </div>

    </div>
</section>

<?php
include "popUpForm.php";
?>

