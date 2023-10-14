<?php

if (isset($_SESSION['keterangan'])) {
} else {
    header('location:login.php');
}