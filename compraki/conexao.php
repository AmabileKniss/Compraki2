<?php
$link = mysqli_connect("localhost", "aluno", "aluno", "compraki");

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
} else {
    echo "deu bom";
}

