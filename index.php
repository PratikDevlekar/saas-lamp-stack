<?php

$connect = mysqli_connect(
    'db',
    'saas_labs_docker',
    'password',
    'saas_labs_docker'
);

$query = 'SELECT * FROM token';

$result = mysqli_query($connect, $query);

while($record = mysqli_fetch_assoc($result)){
    echo '<h2>'.$record['id'].'</h2>';
    echo '<h2>'.$record['access_token'].'</h2>';
}