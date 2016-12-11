<?php
$current = "boeken.php";
require_once("includes/header.php");
require_once("includes/nav.php");
}

if(isset($_GET["delete_id"])){

}
?>
    <div class="container">
        <h1>Hello, Welkom bij de Catbook!</h1>
        <p>boeken</p>

        <table class="table table-striped table-bordered">
            <tr>
                <th>Boek referentienummer</th>
                <th>Titel</th>
                <th>Auteur</th>
                <th>Uitgevrij</th>
                <th>Omslagfoto</th>
                <th>Acties</th>
            </tr>

            <?php
              $result =  array();
              foreach($result as $row){
                  echo "<tr>";
                    echo "<td>{$row['boek_id']}</td>";
                    echo "<td>{$row['titel']}</td>";
                    echo "<td>{$row['voornaam']} {$row['familienaam']}</td>";
                    echo "<td>{$row['bedrijfsnaam']}</td>";
                    echo "<td><img class='omslag'
                                src='omslag/{$row['boekomslag']}'
                                 alt='Alternatief profiel foto'>
                        </td>";
                    echo "<td>
                            <a href='boeken_insert.php?edit_id={$row['boek_id']}'>
                             <span class='glyphicon glyphicon-pencil'></span>
                            </a>
                             <a href='boeken.php?delete_id={$row['boek_id']}&boekomslag={$row['boekomslag']}'>
                             <span class='glyphicon glyphicon-trash'></span>
                            </a>
                        </td>";
                  echo "</tr>";
              }

            ?>
        </table>


        <?php
        if(!empty($message)){
            echo "<p class='bg-success' >{$message}</p>";
        }
        ?>
    </div>

<?php require_once("includes/footer.php"); ?>
