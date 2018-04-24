<?php
if (!defined('SECURE_PAGE'))
{
    die('<h1>Direct File Access Prohibited</h1>');
}
?>
<!doctype html>

<html lang="en">
<head>

    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
    <link rel="icon" href="./favicon.ico" type="image/x-icon">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="./bootstrap/4.0.0/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./css/dataTables.bootstrap4.min.css">

    <!-- Custom styles -->
    <link href="./css/custom.css" rel="stylesheet">
    <link href="./css/bootstrap-datetimepicker.css" rel="stylesheet" media="screen">

    <script src="./js/jquery-1.12.4.js"></script>

    <!-- Data Tables -->
    <script src="./js/jquery.dataTables.min.js"></script>
    <script src="./js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#myDataTable').DataTable({
                "order" : [[ 3, "desc"]]
            });
        });
    </script>

    <title></title>
</head>

<body>
<div class="container">
