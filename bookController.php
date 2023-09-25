<?php
include_once('bookModel.php');
class bookController
{
    function invoke()
    {
        $model_data = new bookModel();
        $row_data = $model_data->getData();
        $no = 1;
        $data = "
                <table border=1>
                    <tr>
                        <td>no</td>
                        <td>Judul</td>
                        <td>Pengarang</td>
                        <td>Tahun</td>
                    </tr>
            ";
        foreach ($row_data as $key => $value) {
            $data .= "
                <tr>
                    <td>$no</td>
                    <td>" . $value->judul . "</td>
                    <td>" . $value->pengarang . "</td>
                    <td>" . $value->penerbit . "</td>
                    <td>" . $value->tahun . "</td>
                </tr>
            ";
            $no++;
        }
        $data .= "</table>";
        include_once('bookViev.php');
    }

    function invokeDB()
    {
        $model_data = new BookModel();
        $row_data = $model_data->getDataDB();
        $no = 1;
        $data = "<table border='1'>
        <tr>	<th>No</th><th>Judul</th><th>Pengarang</th><th>Penerbit</th><th>Tahun</th>
        </tr>";
        while ($row = mysqli_fetch_object($row_data)) {
            $data .= "<tr>
        <td>$no</td>
        <td>" . $row->judul . "</td>
        <td>" . $row->pengarang . "</td>
        <td>" . $row->penerbit . "</td>
        <td>" . $row->tahun . "</td>
        </tr>";
            $no++;
        }
        $data .= "</table>";
        include('bookviev.php');
    }
}
