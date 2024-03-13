<?php
        if(isset($_POST['submit'])){

         $cst = $_POST['custname'];
         $prd = $_POST['produk'];
         $jml = $_POST['jumlah'];
         $btn = $_POST['submit'];

         switch ($prd){
            case "Tv";
            $total = $jml * 4200000;
            break;
            case "Kulkas";
            $total = $jml * 3100000;
            break;
            case "Mesin Cuci";
            $total = $jml * 2800000;
            break;
         }
         $total_format = number_format($total, 0, ',', '.');
        }  
    ?>


<?php 
        if(isset($_POST['submit'])){
            
            echo 'Nama Pembeli ' . $cst;
            echo '<br> Barang yang dibeli ' . $prd;
            echo '<br> Jumlah Produk ' . $jml;
            echo '<br> Harga barang ' . $total_format;
        }
        ?>