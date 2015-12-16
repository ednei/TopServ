<?php
/**
 PHP API for Login, Register, Changepassword, Resetpassword Requests and for Email Notifications.
 **/
if (isset($_POST['tag']) && $_POST['tag'] != '') {
    // Get tag
    $tag = $_POST['tag'];
    // Include Database handler
    require_once 'include/DB_Functions.php';
    $db = new DB_Functions();
    // response Array
    $response = array("tag" => $tag, "success" => 0, "error" => 0);
    // check for tag type
    if ($tag == 'add_service') {
        // Request type is register new service
        $title = $_POST['title'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $cpf = $_POST['cpf'];
        if ($db->getUserID($cpf)) {
            // store user
			$user = $db->storeService($title, $description, $price);
			if ($user) {
				// user stored successfully
				$response["success"] = 1;
				$response["user"]["fname"] = $user["firstname"];
				$response["user"]["lname"] = $user["lastname"];
				$response["user"]["email"] = $user["email"];
				$response["user"]["uname"] = $user["username"];
				$response["user"]["uid"] = $user["unique_id"];
				$response["user"]["created_at"] = $user["created_at"];
				echo json_encode($response);
			} else {
			// user failed to store
			$response["error"] = 1;
			$response["error_msg"] = "JSON Error occured in Registartion";
			echo json_encode($response);
			}
        }
		else {
			// user dont exist - error response
			$response["error"] = 2;
			$response["error_msg"] = "User does not exist";
			echo json_encode($response);
} else {
    echo "TBD Web API";
}
?>