<?php
include_once 'header.php';
?>

<body>
    <div class="row text-center ">
        <h1>
            TUAH SYSTEM QUESTION BANK
        </h1>
    </div>
    <div class="row justify-content-left align-items-left text-left offset-1">
        <form action="questionbank.inc.php" method="POST">
            <h3>Soalan</h3>
            <input type="text" name="Soalan" placeholder="Soalan"> <br>
            <h3>Pilihan 1</h3>
            <input type="text" name="Pilihan1" placeholder="Pilihan 1"> <br>
            <h3>Pilihan 2</h3>
            <input type="text" name="Pilihan2" placeholder="Pilihan 2"> <br>
            <h3>Pilihan 3</h3>
            <input type="text" name="Pilihan3" placeholder="Pilihan 3"> <br>
            <h3>Pilihan 4</h3>
            <input type="text" name="Pilihan4" placeholder="Pilihan 4"> <br>
            <h3>Jawapan Betul</h3>
            <input type="text" name="JawapanBetul" placeholder="Jawapan Betul"> <br>
            <h3>Kategori (1 - Sejarah Melaka, 2 - UTeM, 3 - Tempat Menarik di Melaka 4 - Jalan-jalan Cari Makan)</h3>
            <input type="text" name="Kategori" placeholder="Kategori"> <br>
            <h3>Kategori Umur (1 - < 12 tahun, 2 - 12 tahun - 17 tahun, 3 -> 17 tahun) </h3>
            <input type="text" name="Umur" placeholder="Umur"> <br>
            <!-- <h3>User_ID</h3>
            <input type="text" type="text" name="UserID"> --> <br>
            <br>
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
</body>

<?php
include_once 'footer.php';
?>