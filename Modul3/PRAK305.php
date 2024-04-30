<!DOCTYPE html>
<html>
<head>
    <title>Program Cetak Karakter</title>
</head>
<body>   
    <form method="post">
        <label for="input_string">Masukkan String:</label>
        <input type="text" id="input_string" name="input_string" required>
        <button type="submit" name="submit">submit</button>
    </form>
    
    <?php
    function cetakKarakter($string) {
        $string = strtoupper($string); 
        $panjang = strlen($string);
        
        for ($i = 0; $i < $panjang; $i++) {
            $karakter = $string[$i];
            echo strtoupper($karakter); 
            for ($j = 1; $j < $panjang; $j++) {
                echo strtolower($karakter); 
            }
        }
    }
    
    if (isset($_POST['submit'])) {
        $input_string = $_POST['input_string'];
        cetakKarakter($input_string);
    }
    ?>
</body>
</html>