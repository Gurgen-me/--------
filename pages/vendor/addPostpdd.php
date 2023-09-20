<?
$link = mysqli_connect("localhost", "root", "", "pdd");

if (!$link) {
    die();
}
if (!empty($_POST) && !empty($_FILES)) {
    $post_title = $_POST["title"];
    $post_text = $_POST["discription"];
    $image = $_FILES["add_image"];
    $blob_image = addslashes(file_get_contents($image["tmp_name"]));
    $date = date("jS\, M");

    function codeIniection($query)
    {
        $query = urldecode($query);
        $query = strip_tags($query);
        $query = trim($query . "=");
        $query = strtr($query, "+&=/", '     ');
    };

    codeIniection($post_text);
    codeIniection($post_title);

    $add = mysqli_query($link, "INSERT INTO pdd_posts(post_name, post_disc, image, date) VALUES ('$post_title','$post_text', '$blob_image', '$date')");
    header("Location: ../../index.php");
    die();
};