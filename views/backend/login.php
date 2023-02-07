
<?php
include '../../header.php';




//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

/*$numMemb = $_GET['numMemb'];

$prenomMemb = sql_select("MEMBRE", "prenomMemb", "numMemb = $numMemb")[0]['prenomMemb'];
$nomMemb = sql_select("MEMBRE", "nomMemb", "numMemb = $numMemb")[0]['nomMemb'];
$pseudoMemb = sql_select("MEMBRE", "pseudoMemb", "numMemb = $numMemb")[0]['pseudoMemb'];
$passMemb = sql_select("MEMBRE", "passMemb", "numMemb = $numMemb")[0]['passMemb'];
$eMailMemb = sql_select("MEMBRE", "eMailMemb", "numMemb = $numMemb")[0]['eMailMemb'];
$numStat = sql_select("MEMBRE", "numStat", "numMemb = $numMemb")[0]['numStat'];

*/

?>

<!--Bootstrap form to deletew status-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Se Connecter</h1>
        </div>
        <div class="col-md-12">
            <!--Form to delete status-->
            <form action="<?php echo ROOT_URL . '/api/login.php' ?>" method="post">
                <div class="form-group">

                    <label for="pseudoMemb">Pseudo</label>
                    <input id="pseudoMemb" class="form-control" type="text" name="pseudoMemb">

                    <label for="passMemb">Password</label>
                    <input id="passMemb" class="form-control" type="text" name="passMemb">

                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </form>
        </div>
    </div>
</div>