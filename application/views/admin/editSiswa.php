<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit spp</title>
</head>
<body>
<form action="overview.php" method="POST">
        <fieldset>
        <legend>Edit data SPP</legend>
        <p>
            <label>Nisn:</label>
            <input type="text" name="Nisn" placeholder="Nisn" />
        </p>
        <p>
            <label>Nis:</label>
            <input type="number" name="Nis" placeholder="Nis" />
        </p>
        <p>
            <label>Nama:</label>
            <input type="text" name="nama" placeholder="Nama Lengkap" />
        </p>
        <p>
            <label>Password:</label>
            <input type="password" name="password" placeholder="Passowrd..." />
        </p>
        <p>
            <label>Jenis kelamin:</label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki" /> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan" /> Perempuan</label>
        </p>
        <p>
            <label>Agama:</label>
            <select name="agama">
                <option value="islam">Islam</option>
                <option value="kristen">Kristen</option>
                <option value="hindu">Hindu</option>
                <option value="budha">Budha</option>
            </select>
        </p>
        <p>
        <label>Biografi:</label>
            <textarea name="biografi"></textarea>
        </p>
        <p>
            <input type="submit" name="submit" value="Daftar" />
        </p>
        </fieldset>
    </form>

<div class="form">

<td>

</td>
</div>
</body>
</html>