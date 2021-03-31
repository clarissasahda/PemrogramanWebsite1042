<!-- Penulisan Variabel -->
<?php
echo "Hello World"
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <title>Dasar PHP</title>
</head>
<body>
   <?php
   for ($i=0; $i<5; $i++){
       echo '<h1>Hello World</h1>';
   }
   ?>

<?php
   for ($i=0; $i<5; $i++):?>
   <h1>Hello World</h1>
   <?php endfor;?>
</body>
</html>

<!-- Perulangan  -->
<?php
    $student = [
        'nama' => 'Icha',
        'nim' => '192410101042',
        'usia' => '20',
    ];
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <title>Dasar PHP</title>
</head>
<body>
   <h1>Data Mahasiswa</h1>
   <table>
   <thead>
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Usia</th>
        </tr>
   </thead>
   <tbody>
        <tr>
            <td><?= $student[0]; ?></td>
            <td><?= $student[1]; ?></td>
            <td><?= $student[2]; ?></td>
        </tr>
   </tbody>
   </table>
</body>
</html> -->

<!-- array asosiatif = array yang punya nama -->
<?php
    $student = [
        'nama' => 'Icha',
        'nim' => '192410101042',
        'usia' => '20',
    ];
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <title>Dasar PHP</title>
</head>
<body>
   <h1>Data Mahasiswa</h1>
   <table>
   <thead>
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Usia</th>
        </tr>
   </thead>
   <tbody>
        <tr>
            <td><?= $student['nama']; ?></td>
            <td><?= $student['nim']; ?></td>
            <td><?= $student['usia']; ?></td>
        </tr>
   </tbody>
   </table>
</body>
</html>

<!-- apabila datanya banyak buat dua array jadi di dalam array index ada array asosiatif -->
<?php
    $mahasiswa = [
        [
        'nama' => 'Icha',
        'nim' => '192410101042',
        'usia' => '20',
        ],
        [
        'nama' => 'Dinda',
        'nim' => '192410101035',
        'usia' => '20',
        ],
        [
        'nama' => 'Rachma',
        'nim' => '192410101007',
        'usia' => '20',
        ],
        [
        'nama' => 'Vivi',
        'nim' => '192410101040',
        'usia' => '20',
        ],
    ];
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <title>Dasar PHP</title>
</head>
<body>
   <h1>Data Mahasiswa</h1>
   <table>
   <thead>
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Usia</th>
        </tr>
   </thead>
   <tbody>
        <?php foreach($mahasiswa as $mhs => $val): ?>
            <tr>
                <td><?= $val['nama'] ?></td>
                <td><?= $val['nim'] ?></td>
                <td><?= $val['usia'] ?></td>
            </tr>
        <?php endforeach; ?>
   </tbody>
   </table>
</body>
</html>

<!-- switch sama dengan if tapi modifikasinya terbatas spesifik hanya untuk satu data -->