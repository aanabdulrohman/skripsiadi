<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "stockbarang");

// Menambah Barang Baru

if (isset($_POST['addnewbarang'])) {
    $namabarang = $_POST['namabarang'];
    $deskripsi = $_POST['deskripsi'];
    $stock = $_POST['stock'];

    $addtotable = mysqli_query($conn, "INSERT INTO stock (namabarang, deskripsi, stock) VALUES ('$namabarang','$deskripsi','$stock')");
    if ($addtotable) {
        header('location:index.php');
    } else {
        echo 'gagal';
        header('location:index.php');
    }
}

// Simpan Barang1
if (isset($_POST['smpnbarang1'])) {
    $bulan_pembeli = $_POST['bulan_pembeli'];
    $jumlah_pupuk = $_POST['jumlah_pupuk'];

    $smpnbarang = mysqli_query($conn, "INSERT INTO mediatanam (bulan_pembeli, jumlah_pupuk) VALUES ('$bulan_pembeli','$jumlah_pupuk')");
    if ($smpnbarang) {
        header('location:index.php');
    } else {
        echo 'gagal';
        header('location:404.html');
    }
}
// Simpan Barang2
if (isset($_POST['smpnbarang2'])) {
    $bulan_pembeli = $_POST['bulan_pembeli'];
    $jumlah_pupuk = $_POST['jumlah_pupuk'];

    $smpnbarang = mysqli_query($conn, "INSERT INTO kompos (bulan_pembeli, jumlah_pupuk) VALUES ('$bulan_pembeli','$jumlah_pupuk')");
    if ($smpnbarang) {
        header('location:index.php');
    } else {
        echo 'gagal';
        header('location:404.html');
    }
}
// Simpan Barang3
if (isset($_POST['smpnbarang3'])) {
    $bulan_pembeli = $_POST['bulan_pembeli'];
    $jumlah_pupuk = $_POST['jumlah_pupuk'];

    $smpnbarang = mysqli_query($conn, "INSERT INTO kandang (bulan_pembeli, jumlah_pupuk) VALUES ('$bulan_pembeli','$jumlah_pupuk')");
    if ($smpnbarang) {
        header('location:index.php');
    } else {
        echo 'gagal';
        header('location:404.html');
    }
}

//Menambah barang masuk 

if (isset($_POST['barangudhmasuk'])) {
    $barangnya = $_POST['barangnya'];
    $penerima = $_POST['penerima'];
    $qty = $_POST['qty'];

    $cekstocksekarang  = mysqli_query($conn, "select * from stock where idbarang='$barangnya'");
    $ambildatanya = mysqli_fetch_array($cekstocksekarang);

    $stocksekarang = $ambildatanya['stock'];
    $tambahkanstockdenganqty = $stocksekarang + $qty;


    $addtotabel2 = mysqli_query($conn, "INSERT INTO masuk1 (idbarang, keterangan,qty) VALUES  ('$barangnya','$penerima','$qty')");
    $updatestockmasuk = mysqli_query($conn, "update stock set stock ='$tambahkanstockdenganqty' where idbarang ='$barangnya'");
    if ($addtotabel2 && $updatestockmasuk) {
        header('location:masuk.php');
    } else {
        echo 'gagal ';
        header('location:404.html');
    }
}

//menambah barang keluar ke tabel keluar
if (isset($_POST['barangkeluar'])) {
    $barangnya = $_POST['barangnya'];
    $penerima = $_POST['penerima'];
    $qty = $_POST['qty'];

    $cekstocksekarang  = mysqli_query($conn, "select * from barangkeluar where idbarang='$barangnya'");
    $ambildatanya = mysqli_fetch_array($cekstocksekarang);

    $stocksekarang = $ambildatanya['stock'];
    $tambahkanstockdenganqty = $stocksekarang + $qty;


    $addkeluar = mysqli_query($conn, "INSERT INTO keluar (idbarang, penerima,qty) VALUES  ('$barangnya','$penerima','$qty')");
    $updatestockkeluar = mysqli_query($conn, "update barangkeluar set stock ='$tambahkanstockdenganqty' where idbarang ='$barangnya'");
    if ($addkeluar && $updatestockkeluar) {
        header('location:keluar.php');
    } else {
        echo 'gagal ';
        header('location:404.html');
    }
}


//Menambah barang keluar 

if (isset($_POST['addbarangout'])) {
    $barangnya = $_POST['barangnya'];
    $penerima = $_POST['penerima'];
    $qty = $_POST['qty'];

    $cekstocksekarang1  = mysqli_query($conn, "select * from stock where idbarang='$barangnya'");
    $cekstocksekarang  = mysqli_query($conn, "select * from barangkeluar where idbarang='$barangnya'");

    $ambildatanya1 = mysqli_fetch_array($cekstocksekarang1);
    $ambildatanya = mysqli_fetch_array($cekstocksekarang);
    $stocksekarang = $ambildatanya['stock'];

    if ($stocksekarang >= $qty) {
        // kalau barang cukup
        $tambahkanstockdenganqty1 = $stocksekarang - $qty;
        $tambahkanstockdenganqty = $stocksekarang + $qty;

        $addkeluar = mysqli_query($conn, "INSERT INTO keluar (idbarang, penerima,qty) VALUES  ('$barangnya','$penerima','$qty')");
        $updatestockmasuk = mysqli_query($conn, "update stock set stock ='$tambahkanstockdenganqty1' where idbarang ='$barangnya'");
        $updatestockkeluar = mysqli_query($conn, "update barangkeluar set stock ='$tambahkanstockdenganqty' where idbarang ='$barangnya'");
        if ($addkeluar && $updatestockmasuk && $updatestockkeluar) {
            header('location:keluar.php');
        } else {
            echo 'gagal ';
            header('location:404.html');
        }
    } else {
        // barang tidak cuukp
        echo '
        <script>
        alert ("Stock saat ini tidak mencukupi ");
                window.location.href="keluar.php"
        </script>
        ';
    }
}


// edit barang nya nih kakak
if (isset($_POST['updatebarang'])) {
    $idb = $_POST['idb'];
    $stock = $_POST['stock'];
    $namabarang = $_POST['namabarang'];
    $deskripsi = $_POST['deskripsi'];

    $update = mysqli_query($conn, "update stock set namabarang='$namabarang', deskripsi ='$deskripsi', stock ='$stock' WHERE idbarang ='$idb'");
    if ($update) {
        header('location:index.php');
    } else {
        echo 'gagal ';
        header('location:404.html');
    }
}

// hapus barang  kakak
if (isset($_POST['hapusbarang'])) {
    $idb = $_POST['idb'];
    $delete = mysqli_query($conn, "delete from stock where idbarang='$idb'");
    if ($delete) {
        header('location:index.php');
    } else {
        echo 'gagal ';
        header('location:404.html');
    }
};

// hapus barang keluar
if (isset($_POST['hapusbarangkeluar'])) {
    $idk = $_POST['idk'];
    $delete = mysqli_query($conn, "delete from keluar where idkeluar='$idk'");
    if ($delete) {
        header('location:keluar.php');
    } else {
        echo 'gagal ';
        header('location:404.html');
    }
};

// hapus seluruh barang masuk
if (isset($_POST['hapusbrngkeluar'])) {
    $idm = $_POST['idm'];
    $delete = mysqli_query($conn, "delete from masuk1 where idmasuk='$idm'");
    if ($delete) {
        header('location:masuk.php');
    } else {
        echo 'gagal ';
        header('location:404.html');
    }
};




// // edit barang masuk nih kakak
// if (isset($_POST['updatebaranggmasuk'])) {
//     $idbm = $_POST['idbm'];
//     $idm = $_POST['idm'];
//     $deskripsi = $_POST['keterangan'];
//     $qty = $_POST['qty'];

//     $lihatstock = mysqli_query($conn, "select * from stock where idbarang ='$idbm'");
//     $stocknya = mysqli_fetch_array($lihatstock);
//     $stockskrg = $stocknya['stock'];

//     $qtyskrg = mysqli_query($conn, "select * from masuk1 where idmasuk ='$idm'");
//     $qtynya  = mysqli_fetch_array($qtyskrg);
//     $qtyskrg = $qtynya['qty'];

//     if ($qty > $qtyskrng) {
//         $selisih = $qty - $qtyskrg;
//         $kurangin = $stockskrg + $selisih;
//         $kurangistocknya = mysqli_query($conn, "update stock set stock ='$kurangin' where idbarang='$idbm'");
//         $updatenya = mysqli_query($conn, "update masuk1 set qty =$qty' , keterangan ='$deskripsi' where idmasuk ='$idm'");
//         if ($kurangistocknya && $updatenya) {
//             header('location:masuk.php');
//         } else {
//             echo 'gagal';
//             header('location:keluar.php');
//         }
//     } else {
//         $selisih =  $qtyskrg - $qty;
//         $kurangin = $stockskrg - $selisih;
//         $kurangistocknya = mysqli_query($conn, "update stock set stock ='$kurangin' where idbarang='$idbm'");
//         $updatenya = mysqli_query($conn, "update masuk1 set qty =$qty' , keterangan ='$deskripsi' where idmasuk ='$idm'");
//         if ($kurangistocknya && $updatenya) {
//             header('location:masuk.php');
//         } else {
//             echo 'gagal';
//             header('location:keluar.php');
//         }
//     }
// }