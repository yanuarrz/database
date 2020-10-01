<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,700" rel="stylesheet" />
    <title>Daftar Peminjam</title>
    <style>
        body {
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }
    </style>
</head>

<body background="assets/889245.jpg" class="flex items-center justify-center" style="font-family: 'Source Sans Pro', sans-serif background-image: linear-gradient(to right top, #051937, #004d7a, #008793, #00bf72, #a8eb12);">
    <div class="container ">
        <br>
        <h1 class="text-5xl text-1xl text-center font-bold text-white">Daftar Barang<br></h1>
        <h3 class="text-4xl text-1xl text-center font-bold text-white">1461800113</h3>
        <br><br>
        <div class="items-center justify-center flex items-center my-2 w-full rounded-lg">
            <table class="shadow-lg bg-white">
                <thead class="text-black">
                    <tr class="bg-yellow-400 flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
                        <th class="p-3 text-left">No</th>
                        <th class="p-3 text-left">Nama Barang</th>
                        <th class="p-3 text-left">Kategori</th>
                        <th class="p-3 text-left">Satuan</th>
                        <th class="p-3 text-left">Harga Beli</th>
                        <th class="p-3 text-left">Harga Jual</th>
                    </tr>
                </thead>
        </div>
        <tbody class="flex-1 sm:flex-none">
            <?php
            $num = 1;
            foreach ($sql as $row) { ?>
                <tr class="flex flex-col flex-no wrap sm:table-row mb-2 sm:mb-0">
                    <td class="border-grey-light border hover:bg-gray-100 p-3"><?= $num; ?></td>
                    <td class="border-grey-light border hover:bg-gray-100 p-3"><?= $row->nm_barang ?></td>
                    <td class="border-grey-light border hover:bg-gray-100 p-3"><?= $row->nm_kategori ?></td>
                    <td class="border-grey-light border hover:bg-gray-100 p-3"><?= $row->nm_satuan ?></td>
                    <td class="border-grey-light border hover:bg-gray-100 p-3"><?= $row->hrg_jual ?></td>
                    <td class="border-grey-light border hover:bg-gray-100 p-3"><?= $row->hrg_beli ?></td>
                </tr>
            <?php $num++;
            } ?>
        </tbody>
        </table>
    </div>
</body>

</html>