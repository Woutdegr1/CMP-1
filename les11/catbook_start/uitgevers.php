<?php
$current = "boeken.php";
require_once("includes/header.php");
require_once("includes/nav.php");
require_once("functies/uitgeverij.php");


if(isset($_GET["delete_id"])){

}

?>
<div class="container">
    <h1>Hello, Welkom bij de Catbook!</h1>
    <p>Uitgevers</p>
    <table class="table table-striped table-bordered">
        <tr>
            <th>Referentienummer</th>
            <th>Uitgeverij</th>
            <th>Stad</th>
            <th>Acties</th>
        </tr>
        <?php
              $result =  selectAllUitgevers();
              foreach($result as $row){
                  echo "<tr>";
                    echo "<td>{$row['uitgeverij_id']}</td>";
                    echo "<td>{$row['bedrijfsnaam']}</td>";
                    echo "<td>{$row['stad']}</td>";
                    echo "<td>
                            <a href='uitgevers.php?edit_id={$row['uitgeverij_id']}'>
                             <span class='glyphicon glyphicon-pencil'></span>
                            </a>
                             <a href='uitgevers.php?delete_id={$row['uitgeverij_id']}'>
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
