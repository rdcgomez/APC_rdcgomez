<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mypage_add extends CI_Model {

 	public function set_input(){

		 if(isset($_POST['btn-save']))
		 {
			// variables for input data
			$first_name 		   	= $_POST['first_name'];
			$last_name 			= $_POST['last_name'];
			$user_city 			= $_POST['user_city'];
			$email 			    = $_POST['email_address'];
			$contact_number 		= $_POST['contact_number'];
			$url_website 			= $_POST['url_website'];
			$gender 				= $_POST['gender'];
			// variables for input data

			// sql query for inserting data into database
			// sql query for inserting data into database

			// sql query execution function

	       <script type="text/javascript">
	       alert('Data Are Inserted Successfully ');
	       window.location.href='mypagedatabase.php';
	       </script>
	       <?php
	       }
	        else
	        {
	       ?>
	         <script type="text/javascript">
	         alert('error occured while inserting your data');
	         </script>

		  }
		}
}
