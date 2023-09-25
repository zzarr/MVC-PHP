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
}
