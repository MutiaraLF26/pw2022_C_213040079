<?php 
require 'functions.php';
$id = $_GET["id"];

if( hapus($id) > 0) {
        echo "
        <script>
            alert('data berhasil dihapus!');
            document.locationhref = 'Admin.php';
        </script>
        ";
} else {
        echo "
        <script>
            alert('data berhasil ditambahkan!');
            document.locationhref = 'Admin.php';
        </script>
        ";
}
?>