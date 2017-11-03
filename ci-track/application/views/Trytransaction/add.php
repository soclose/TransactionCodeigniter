<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>

<form action="http://localhost:2016/ci-track/index.php/Trytransaction/add" method="post">
	<table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>alamat</td>
            <td>:</td>
            <td><textarea rows="8" cols="80" name="alamat"></textarea></td>
        </tr>
        <tr>
            <td>Telp</td>
            <td>:</td>
            <td><input type="text" name="telp"></td>
        </tr>   
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="text" name="email"></td>
        </tr>     
    </table>
    <br>
    <h1>Detail Riwayat Pendidikan</h1>
    <table border="1">
        <tr>
            <td>No</td>
            <td>Nama Sekolah</td>
            <td>Status Lulus</td>
            <td>Tahun Lulus</td>
        </tr>
        <tr>
            <td>1</td>
            <td><input type="text" name="namesekolah[]" value="MI Nurul Huda"></td>
            <td><select name="vstatus[]"><option value="Y">Ya</option><option value="N">No</option></select></td>
            <td><input type="text" name="tahunlulus[]" value="2000"></td>
        </tr>
        <tr>
            
            <td>2</td>
            <td><input type="text" name="namesekolah[]" value="Mts Nurul Huda"></td>
            <td><select name="vstatus[]"><option value="Y">Ya</option><option value="N">No</option></select></td>
            <td><input type="text" name="tahunlulus[]" value="2003"></td>
        </tr>   
        <tr>
            
            <td>3</td>
            <td><input type="text" name="namesekolah[]" value="SMK YP Karya 2"></td>
            <td><select name="vstatus[]"><option value="Y">Ya</option><option value="N">No</option></select></td>
            <td><input type="text" name="tahunlulus[]" value="2006"></td>
        </tr>     
    </table>

    <h1>Detail Riwayat Pengalaman Kerja</h1>
    <table border="1">
        <tr>
            <td>No</td>
            <td>Nama Perusahaan</td>
            <td>Lama Kerja</td>
        </tr>
        <tr>
            <td>1</td>
            <td><input type="text" name="nameperusahaan[]" value="SPBU KM 13,5"></td>
            <td><input type="text" name="lamakerja[]" value="3.5 tahun"></td>
        </tr>
        <tr>
            <td>2</td>
            <td><input type="text" name="nameperusahaan[]" value="MC Donalds ST Mark Square"></td>
            <td><input type="text" name="lamakerja[]" value="9 Bulan"></td>
        </tr>   
        <tr>
            <td>3</td>
            <td><input type="text" name="nameperusahaan[]" value="KMK Global Sport"></td>
            <td><input type="text" name="lamakerja[]" value="9 Bulan"></td>
        </tr>     
    </table>
    <br>
    <input type="submit" value="Submit Data">
</form>

</body>
</html>