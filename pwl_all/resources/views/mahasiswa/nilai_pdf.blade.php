<!DOCTYPE html>
<html>

<head>
    <title>NIlai Mahasiwa</title>
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }
    </style>
    <center>
        <h5>Laporan Artikel</h4>
    </center>
    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>Mata Kuliah</th>
                <th>Semester</th>
                <th>Nilai</th>
                <th>Grade</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($nilai as $a)
                <tr>
                    <td>{{ $a->matakuliah->nama }}</td>
                    <td>4</td>
                    <td>{{ $a->nilai }}</td>
                    <td>
                        @if ($a->nilai > 88)
                            A
                        @else
                            B
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
