<?php
if (isset($_GET['nama'])) {
    $nama = htmlspecialchars($_GET['nama']); // Mencegah XSS
    echo "Halo, $nama!";
} else {
    echo "Halo, siapa namamu?";
}
?>