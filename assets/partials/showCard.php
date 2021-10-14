<?php
$file = fopen('assets/data/data.json','r');
$data = fread($file, filesize('assets/data/data.json'));
fclose($file);
$data = json_decode($data);
$predictCard = $data->card;
$link = "https://deckofcardsapi.com/static/img/$predictCard.png";
?>
<div class="container">
    <h1 class='text-center text-light m-3 p-2'>Your Card is :</h1>
    <img src="<?php echo $link; ?>" alt="Predict Card" class="img-thumbnail rounded mx-auto d-block img-fluid">
    <div class="form-group text-center m-4">
        <a href="index.php">
            <button class='btn btn-primary'>Go Back</button>
        </a>
    </div>
</div>