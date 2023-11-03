<html>

<head>

        <title>Tampil Data Mahasiswa</title>
</head>
<body>
    <center>
             <table>
                    <tr>
                        <th colspan="3">
                        Tampil Nama Mahasiswa
                        </th>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <hr>
                    </td>
                        </tr>
                    <tr>
                 <th>NIS</th>
                 <th>:</th>
                 <td>
                    <?= $kode; ?>
                </td>
            </tr>
            <tr>
                 <td>Kelas</td>
                 <td>:</td>
                 <td>
                    <?= $nama; ?>
                </td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td>
                    <?= $sks; ?>
                </td>
             </tr>
             <tr>
                 <td>Tempat Lahir</td>
                 <td>:</td>
                 <td>
                    <?= $nama; ?>
                </td>
            </tr>
            <tr>
                 <td>Alamat</td>
                 <td>:</td>
                 <td>
                    <?= $nama; ?>
                </td>
            </tr>
            <tr>
                 <td>Jenis Kelamin</td>
                 <td>:</td>
                 <td>
                    <?= $nama; ?>
                </td>
            </tr>
             <tr>
                    <td colspan="3" align="center">
                         <a href="<?= base_url('mahasiswa'); 
?>">Kembali</a>
                    </td>

                </tr>
            </table>
        </center>
</body>



</html>