<!DOCTYPE html>
<html>

<head>
    <title>Transactions</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
        }

        table tr th,
        table tr td {
            padding: 5px;
            border: 1px #eee solid;
        }

        tfoot tr th,
        tfoot tr td {
            font-size: 20px;
        }

        tfoot tr th {
            text-align: right;
        }
    </style>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Student ID</th>
                <th>Name</th>
                <th>Date</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($generalData as $data): ?>
                <tr>
                    <td><?= $data['id'] ?></td>
                    <td><?= $data['name'] ?></td>
                    <td><?= $data['date'] ?></td>
                    <td><?= $data['status'] ?></td>
                </tr>

            <?php endforeach ?>

        </tbody>
        <tfoot>
            <tr>
                <th colspan="3">Total Present:</th>
                <td><!-- YOUR CODE --></td>
            </tr>
            <tr>
                <th colspan="3">Total Absent:</th>
                <td><!-- YOUR CODE --></td>
            </tr>
        </tfoot>
    </table>
</body>

</html>