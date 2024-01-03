<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f5f5f5;
            color: #333;
        }

        .container-fluid {
            margin: 20px auto;
            max-width: 1200px;
        }

        .panel-heading {
            background-color: #337ab7;
            color: #fff;
            padding: 15px;
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            border-bottom: 2px solid #1e4677;
        }

        .panel-body {
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .btn-primary {
            background-color: #337ab7;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }

        .btn-primary:hover {
            background-color: #1e4677;
        }

        .table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .table th,
        .table td {
            padding: 15px;
            text-align: center;
            border: 1px solid #ddd;
        }

        .table thead {
            background-color: #337ab7;
            color: #fff;
        }

        .table tbody tr:hover {
            background-color: #f5f5f5;
        }

        .btn-xs {
            padding: 8px 15px;
            font-size: 14px;
            border-radius: 3px;
            margin-right: 5px;
        }

        .btn-danger {
            background-color: #d9534f;
            color: #fff;
            border: none;
        }

        .btn-danger:hover {
            background-color: #c9302c;
        }

        .btn-default {
            background-color: #5bc0de;
            color: #fff;
            border: none;
        }

        .btn-default:hover {
            background-color: #46b8da;
        }

        .glyphicon {
            margin-right: 5px;
        }
    </style>
</head>

<body>

    <section class="container-fluid">
        <div class="panel-heading">LIST TYPE CAR</div>
        <div class="panel-body">
            <a href="<?php echo base_url('home/formtambah'); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New Car</a>

            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Car Code</th>
                            <th>Options</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($database as $db) : ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $db->jenis; ?></td>

                                <td>
                                    <a href="<?php echo base_url('home/detail/' . $db->kdmobil); ?>" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> View</a>
                                    <a href="<?php echo base_url('home/formedit/' . $db->kdmobil); ?>" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</a>
                                    <a href="<?php echo base_url('home/hapusdata/' . $db->kdmobil); ?>" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Delete</a>
                                </td>
                            </tr>
                        <?php
                        $no++;
                        endforeach;
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

</body>

</html>
