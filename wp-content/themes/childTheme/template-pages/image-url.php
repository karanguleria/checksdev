<?php
/*   
 Template Name: Image URL Api
*/
?>

<?php 
header("Content-type: application/json; charset=utf-8");

if(isset($_GET['layouts']) && !empty($_GET['layouts']) ){
    
    $post_id = get_page_by_path( $_GET['layouts'], 'OBJECT', 'layouts');
    $post_image = get_the_post_thumbnail_url($post_id);
    
    $message = array('message'=>'success', 'image'=> $post_image);

echo json_encode($message);
    
} else {
    
$message = array('message'=>'failure');

echo json_encode($message);
    
    
}


?>