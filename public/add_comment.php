<?php

//add_comment.php

$connect = new PDO('mysql:host=localhost;dbname=enkaweb_rootagronadrzeka', 'root', '');

$error = '';
$name = '';
$message = '';

if(empty($_POST["name"]))
{
    $error .= '<p class="text-danger">Name is required</p>';
}
else
{
    $comment_name = $_POST["name"];
}

if(empty($_POST["message"]))
{
    $error .= '<p class="text-danger">Comment is required</p>';
}
else
{
    $comment_content = $_POST["message"];
}

if($error == '')
{
    $query = "
 INSERT INTO tbl_comment 
 (parent_comment_id, comment, comment_sender_name) 
 VALUES (:parent_comment_id, :comment, :comment_sender_name)
 ";
    $statement = $connect->prepare($query);
    $statement->execute(
        array(
            ':parent_comment_id' => $_POST["comment_id"],
            ':comment'    => $message,
            ':comment_sender_name' => $name
        )
    );
    $error = '<label class="text-success">Comment Added</label>';
}

$data = array(
    'error'  => $error
);

echo json_encode($data);

?>
