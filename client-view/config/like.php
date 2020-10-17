<?php 
	$host = 'localhost';
	$username = 'root';
	$password = '';
	$db = 'mydb';
	$con = mysqli_connect($host,$username,$password,$db) or  
	die(mysqli_error($con));

	$count = "SELECT id FROM account WHERE username ='".$_SESSION['name']."'";
    $query = mysqli_query($con, $count) or die(mysqli_error($con));
    $post = mysqli_fetch_array($query); 
    extract($post);


	$query = 'SELECT * FROM images';
    $re = mysqli_query($con, $query) or die(mysqli_error($con));
    $post = mysqli_fetch_array($re);

    $query = 'SELECT image_textfile FROM images';
    $result = mysqli_query($con, $query) or die(mysqli_error($con)); 
                    
 
    // if user has clicked the like or dislike button    
   if(isset($_POST['action'])){
    	$post_id = $_POST['post_id'];
    	$action = $_POST['action'];
    	switch ($action) {
    		case 'like':
    			# code...
    		    $query = "INSERT INTO rating_info (post_id, user_id, rating_action) VALUES ($post_id, $id, '$action') ON DUPLICATE KEY UPDATE rating_action ='like' ";
    			break;
    		case 'unlike':
    			# code...
    		    $query = "DELETE FROM rating_info WHERE user_id = $id AND post_id =$post_id";
    			break;
    		
    		default:
    			# code...
    			break;
    	}
    	    mysqli_query($con, $query);
    	    echo getRating($post_id);
    	    exit(0);
    }

    function getRating($id){
    	global $con;
		$rating = array();
		$likes_query = "SELECT COUNT(*) FROM rating_info WHERE post_id = $id AND rating_action='like'";
    	$like_rs = mysqli_query($con, $likes_query);
    	$likes =  mysqli_fetch_array($like_rs); 
    	$rating =[
    		'likes' => $likes[0]
    	];
    	return json_encode($rating);
    }


    function getlikes($id){
    	global $con;
		$likes_query = "SELECT COUNT(*) FROM rating_info WHERE post_id = $id AND rating_action='like'";
    	$like_rs = mysqli_query($con, $likes_query);
    	$likes =  mysqli_fetch_array($like_rs); 
        return $likes[0];
    }

    function userLiked($post_id){
    	global $con;

		$count = "SELECT id FROM account WHERE username ='".$_SESSION['name']."'";
	    $query = mysqli_query($con, $count) or die(mysqli_error($con));
	    $post = mysqli_fetch_array($query); 
	    extract($post);

		$query = "SELECT * FROM rating_info WHERE user_id = $id AND post_id = $post_id AND rating_action='like'";
    	$rs = mysqli_query($con, $query);
    	$number = mysqli_num_rows($rs);
    	if ($number > 0) {
    		return true;
    	}else{
            return false;
    	}
    }
?>