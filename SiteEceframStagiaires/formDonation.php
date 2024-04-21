<?php
$id=$_GET["id"];
?>
<form method="POST" action="Donation.php" >
<input type="hidden" name="id" value="<?php echo $id ?>">
        <fieldset>
          <legend>Ajouter une donation</legend>
          <table>
            <tr>
              <td><label> Date </label></td>
              <td> <input type="date" name="date"></td>
            </tr>
            <tr>
              <td><label> Montant </label></td>
              <td> <input type="number" name="montant"></td>
            </tr>           
            <tr>
              <td> <input type="submit" value="OK"></td>
              <td> <a href="pageAccAdmin.php"><button type="button" class="btn btn-primary">Revenir à l'accueil</button></a></td>
            </tr>
          </table>
        </fieldset>
      </form>
