<?php 
$conn =mysqli_connect('localhost','root','','php_mysql');
$sql = " select * from topic";
$result = mysqli_query($conn, $sql);
$list = '';
while($row = mysqli_fetch_array($result)){
    $escape_id = htmlspecialchars($row['id']);
    $escape_title = htmlspecialchars($row['title']);
    $list = $list."<li><a href = 'index.php?id={$escape_id}'>{$escape_title}</a></li>";
};


$article =  array(
    'title' => 'welcome',
    'description' => 'hello, php',
    'name' => '');
$create_link = "<a href='create.php'>CREATE</a>";


if(isset($_GET['id'])){
    $filtered_id = mysqli_real_escape_string($conn, $_GET['id']); // $_GET['id']의 보안설정
    $sql_join = "select * from topic left join author on topic.author_id = author.id where topic.id={$filtered_id}";
    $result_join = mysqli_query($conn, $sql_join);
    $row = mysqli_fetch_array($result_join);
    $article['title'] = htmlspecialchars($row['title']);
    $article['description'] = htmlspecialchars($row['description']);
    $article['name'] = 'by '.htmlspecialchars($row['name']);
    $create_link = '';
}

$sql_author = " select * from author";
$result_author = mysqli_query($conn, $sql_author);
$author_select = "<select name='author_id'>";
while($row = mysqli_fetch_array($result_author)){
    $author_select = $author_select."<option value={$row['id']}>{$row['name']}</option>";
}
$author_select = $author_select."</select>";
?>