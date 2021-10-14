<?php
$getCode = true;
$existError = false;
if(isset($_GET['reset'])) {
    if(file_exists('assets/data/data.json')) {
        unlink('assets/data/data.json');
        die('file reset!');
    }
}
if(isset($_POST['btn']) && $_SERVER['REQUEST_METHOD'] === 'POST') {

    $getCode = false;
    $code = filter_var($_POST['code'], FILTER_SANITIZE_NUMBER_INT);

    if(!file_exists('assets/data/data.json')) {
        $array = str_split($code, 1); 

        // start checking code
        if(strlen($code) == 6) {

            $type_number = (isset($array[0]) ? $array[0] : NULL);
            $shape_number = (isset($array[1]) ? $array[1] : NULL);
            $card_number = (isset($array[2]) ? $array[2] : NULL);

        }

        

        // end checking code

        switch($type_number) {
            case '1':
                $type = 'S';
                break;
            case '2':
                $type = 'D';
                break;
            case '3':
                $type = 'H';
                break;
            case '4':
                $type = 'C';
                break;
        }

        if($shape_number == '0') {
            $cnumber = ((10 - $card_number) == 10) ? 0 : 10-$card_number;
        }else{
            switch($card_number) {
                case '1':
                    $cnumber = 'J';
                    break;
                case '2':
                    $cnumber = 'Q';
                    break;
                case '3':
                    $cnumber = 'K';
                    break;
                default:
                    $cnumber = 'A';
            }
        }

        if(isset($type) && isset($cnumber)) {   
            $dataObj = new stdClass();
            $dataObj->code = $code;
            $dataObj->card = $cnumber.$type;
            $myJson = json_encode($dataObj);
            $file = fopen('assets/data/data.json','w+');
            fwrite($file, $myJson);
            fclose($file);
        }else{
            $existError = true;
            $getCode = true;
        }



    }else{
        $file = fopen("assets/data/data.json",'r');
        $data = fread($file, filesize('assets/data/data.json'));
        fclose($file);

        $data = json_decode($data);
        if($data->code != $code){
            $getCode = true;
            $existError = true;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

    <!-- Header of Document - START -->
<?php include_once 'assets/partials/header.php'; ?>
    <!-- Header of Document - END -->

<body>
    
    <!-- main section  -->
    <?php 
        if($getCode) {
            include_once 'assets/partials/getCode.php'; 
        }else{
            include_once 'assets/partials/showCard.php';
        }
    ?>


    <!-- Footer of Document - START -->
<?php include_once 'assets/partials/footer.php'; ?>
    <!-- Footer of Document - END -->
</body>
</html>