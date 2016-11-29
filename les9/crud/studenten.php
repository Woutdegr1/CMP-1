<?php 
$current = "studenten.php";
require_once("includes/header.php"); 
require_once("includes/nav.php");

function getAllStudents(){
    //DB CONNECTIE MAKEN
    require("connectie.php");
    try{
        $stmt = $db->prepare("SELECT * FROM students");
        $stmt->execute();

        $result = $stmt->fetchAll();
        return $result;
        //CONNECTIE SLUITEN
        $db = null;

    }catch(PDOExeption $e){
        $message = $e;
    }
}

if(isset($_GET["delete_id"])){
    //KNOP DELETE GEKLIKT
    require("connectie.php");
    $id = $_GET["delete_id"];
    //VERWIJDER RECORD MET DAT ID
    try{
        $stmt = $db->prepare("DELETE FROM students WHERE id=:id");
        $stmt->bindParam(":id",$id);
        $stmt->execute();

        $message = "Gebruiker is gewist, ai!";

        //CONNECTIE SLUITEN
        $db = null;


    }catch(PDOExeption $e){
      $message = $e;
    }
}

?>
    <div class="container">
        <h1>Hello, Bootstrappers!</h1>
        <p>Studenten</p>

        <table class="table table-striped table-bordered">
            <tr>
                <th>ID</th>
                <th>Naam</th>
                <th>Familienaam</th>
                <th>Email</th>
                <th>Acties</th>
            </tr>

            <?php
              $result =  getAllStudents();
              foreach($result as $row){
                  echo "<tr>";
                    echo "<td>{$row['id']}</td>";
                    echo "<td>{$row['naam']}</td>";
                    echo "<td>{$row['familienaam']}</td>";
                    echo "<td>{$row['email']}</td>";
                    echo "<td> 
                            <a href='edit_student.php?edit_id={$row['id']}'>
                             <span class='glyphicon glyphicon-pencil'></span>
                            </a> 
                             <a href='studenten.php?delete_id={$row['id']}'>
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