<!DOCTYPE html>
<html>

<head>
    <title>Attendance Records</title>
    <link rel="stylesheet" href="style.css">
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
                    <td><?= formatDate($data['date']) ?></td>
                    <td style="background-color: <?= $data['status'] === 'Present' ? 'rgb(144, 238, 144)' : 'rgb(255, 120, 120)' ?>;">
                        <?= $data['status'] ?>
                    </td>
                </tr>

            <?php endforeach ?>

        </tbody>
    </table>
</body>
<script src="script.js"></script>

</html>