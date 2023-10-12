<?php
 require __DIR__.'/users.php';

    $userId = $_GET['isbn'];
    $user = getUserById($userId);

    // echo '<pre>';
    // var_dump($user);
    // echo '</pre>';


?>
<table clas = "table">
    <tbody>
        <tr>
            <th>Title : </th>
            <td> <?php echo $user['title'] ?> </td>
        </tr>
        <tr>
            <th>Author:</th>
            <td> <?php echo $user['author'] ?> </td>
        </tr>
        <tr>
            <th>Available:</th>
            <td> <?php echo $user['available'] ?> </td>
        </tr>
        <tr>
            <th>Pages:</th>
            <td> <?php echo $user['pages'] ?> </td>
        </tr>
    </tbody>
</table>