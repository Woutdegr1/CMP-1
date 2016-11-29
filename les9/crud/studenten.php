<?php 
$current = "studenten.php";
require_once("includes/header.php"); 
require_once("includes/nav.php"); 

if(isset($_GET["delete_id"]) && !empty($_GET["delete_id"])){
    //Geklikt op vuilbakje 
    require("connectie.php");

    $id = $_GET["delete_id"];
    try{
        $stmt = $db->prepare("DELETE 
                                FROM students 
                                WHERE id=:id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        //Melding voor deleten
        $message = "Student is gewist!";
        //Stop connectie db
        $db = null;                        

    }catch(PDOExeption $e){
        $message = $e;
    }
}

function getAllStudents(){
    require("connectie.php");
    
    $stmt = $db->prepare("SELECT * FROM students");
    $stmt->execute();

    $result = $stmt->fetchAll();
    return $result;
    //connectie sluiten met db
    $db = null;
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
        $result = getAllStudents();
        foreach($result as $row){
            echo "<tr>";
                echo "<td>{$row['id']}</td>";
                echo "<td>{$row['naam']}</td>";
                echo "<td>{$row['familienaam']}</td>";
                echo "<td>{$row['email']}</td>";
                echo "<td>
                    <a href='edit_student.php?edit_id={$row['id']}'>
                        <span class='glyphicon glyphicon-pencil'> </span>
                    </a>
                    <a href='studenten.php?delete_id={$row['id']}'>
                        <span class='glyphicon glyphicon-trash'> </span>
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