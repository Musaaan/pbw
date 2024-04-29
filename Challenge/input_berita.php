<html>
<body>
    <div class="container">
        <h1>Input Berita</h1>
        <form action="proses_berita.php" method="POST">
            Judul : <br/>
            <input type="text" name="judul" size="70" /> <br/>
            <br/>
            Isi Berita : <br/>
            <textarea name="isian" cols="70" rows="10"></textarea>
            <br/>
            Kategori : <br/>
            <select name="kategori" id="kategori">
                <option value="1">Olahraga</option>
                <option value="2">Politik</option>
            </select>
            <br/>
            <input type="submit" value="Simpan">
        </form>
    </div>
</body>
</html>