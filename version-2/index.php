<?php require_once './templates/layouts/header.php'; ?>
    <form enctype='multipart/form-data' method='POST' action="./csvtojson.php">
        <input type="file" name='file'>
        <input type='submit' name='submit' value='envoyer'>
    </form>
<?php require_once './templates/layouts/footer.php';