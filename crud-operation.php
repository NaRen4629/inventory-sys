<?php
session_start();
include('config/connection.php');

//add item
if (isset($_POST['addItems'])) {
	$database = new Connection();
	$db = $database->open();
	try {
		$stmt = $db->prepare("INSERT INTO `tb_item`(`cat_name`,`brand`,`model`,`item_status`,) VALUES (:cat_name, :brand, :model, :item_status)");
		$stmt->execute(array(':cat_name' => $_POST['categoryName'], ':brand' => $_POST['brand'], ':model' => $_POST['model'], ':item_status' => $_POST['itemStatus']));
		$_SESSION['item-alert'] = "Successfully added a item.";
		header('location: items.php');
	} catch (PDOException $e) {
		$_SESSION['item-alert'] = "Something went wrong! Cannot add a item.";
		header('location: items.php');
	}

	$database->close();
}


//add category
if (isset($_POST['addCategory'])) {
	$database = new Connection();
	$db = $database->open();
	try {
		// Prepare and execute the INSERT statement for tbl_category
		$stmtCategory = $db->prepare("INSERT INTO `tbl_category`(`cat_name`) VALUES (:cat_name)");
		$stmtCategory->execute(array(':cat_name' => $_POST['categoryName']));

		// Prepare and execute the INSERT statement for tbl_subcategory
		$stmtSubcategory = $db->prepare("INSERT INTO `tbl_subcategory`(`sub_name`) VALUES (:sub_name)");
		$stmtSubcategory->execute(array(':sub_name' => $_POST['categoryType']));
		$_SESSION['category-alert'] = "Successfully added a category";
		header('location: category.php');
	} catch (PDOException $e) {
		$_SESSION['category-alert'] = "Something went wrong! Cannot add a category";
		header('location: category.php');
	}

	$database->close();
}
//add location
if (isset($_POST['addlocation'])) {
	$database = new Connection();
	$db = $database->open();
	try {
		$stmt = $db->prepare("INSERT INTO `tb_location`(`roomnumber`, `roomtype`, `roomdescription`,`roomstatus`) VALUES (:roomnumber, :roomtype, :roomdescription, :roomstatus)");
		$stmt->execute(array(':roomnumber' => $_POST['roomnumber'], ':roomtype' => $_POST['roomtype'], ':roomdescription' => $_POST['roomdescription'], ':roomstatus' => $_POST['roomstatus']));

		$_SESSION['location-alert'] = "Succussfully added a location";
		header('location: datatable-location.php');
	} catch (PDOException $e) {
		$_SESSION['location-alert'] = "Something went wrong! Cannot add a location";
		header('location: datatable-location.php');
	}

	//close connection
	$database->close();
}

//add roomtypes
if (isset($_POST['addroomtypes'])) {
	$database = new Connection();
	$db = $database->open();
	try {
		$stmt = $db->prepare("INSERT INTO `tb_roomtypes`(`roomtypes`, `roomtypedescription`) VALUES (:roomtypes, :roomtypedescription)");
		$stmt->execute(array(':roomtypes' => $_POST['roomtypes'], ':roomtypedescription' => $_POST['roomtypedescription']));

		$_SESSION['roomtypes-alert'] = "Succussfully added a room type";
		header('location: datatable-roomtypes.php');
	} catch (PDOException $e) {
		$_SESSION['roomtypes-alert'] = "Something went wrong! Cannot add a room type";
		header('location: datatable-roomtypes.php');
	}

	//close connection
	$database->close();
}




//add supplier
if (isset($_POST['addSupplier'])) {
	$database = new Connection();
	$db = $database->open();
	try {
		$stmt = $db->prepare("INSERT INTO `tb_supplier`(`firstname`, `middlename`, `lastname`, `businessname`, `businessaddress`, `phonenumber`, `telephonenumber`, `email`, `status`) VALUES (:firstname, :middlename, :lastname, :businessname, :businessaddress, :phonenumber, :telephonenumber, :email, :status)");
		$stmt->execute(array(':firstname' => $_POST['firstname'], ':middlename' => $_POST['middlename'], ':lastname' => $_POST['lastname'], ':businessname' => $_POST['businessname'], ':businessaddress' => $_POST['businessaddress'], ':phonenumber' => $_POST['phonenumber'], ':telephonenumber' => $_POST['telephonenumber'], ':email' => $_POST['email'], ':status' => $_POST['status']));

		$_SESSION['supplier-alert'] = "Succussfully added a supllier";
		header('location: supplier.php');
	} catch (PDOException $e) {
		$_SESSION['supplier-alert'] = "Something went wrong! Cannot add a supplier";
		header('location: supplier.php');
	}

	//close connection
	$database->close();
}



//edit category
if (isset($_POST['editCategory'])) {
	$database = new Connection();
	$db = $database->open();
	try {
		$catId = $_POST['categoryId'];
		$catName = $_POST['categoryName'];
		$catType = $_POST['categoryType'];
		$catStatus = $_POST['categoryStatus'];


		$sql = "UPDATE tb_category SET `cat_name` = '$catName', `cat_type` = '$catType', `cat_status` = '$catStatus' WHERE cat_id = '$catId'";
		$db->exec($sql);
		$_SESSION['category-alert'] = "Category updated successfully";
		header('location: category.php');
	} catch (PDOException $e) {
		$_SESSION['category-alert'] = 'Something went wrong. Cannot update category';
		header('location: category.php');
	}

	//close connection
	$database->close();
}

//delete location
if (isset($_POST['deletelocation'])) {
	$loc_id = $_POST['loc_id'];

	$database = new Connection();
	$db = $database->open();

	try {
		$sql = "DELETE FROM tb_location WHERE loc_id = :loc_id";
		$stmt = $db->prepare($sql);
		$stmt->bindParam(':loc_id', $loc_id);
		$stmt->execute();

		$_SESSION['location-alert'] = "Location deleted successfully";
		header('location: datatable-location.php');
	} catch (PDOException $e) {
		$_SESSION['location-alert'] = "Something went wrong. Cannot delete location: " . $e->getMessage();
		header('location: datatable-location.php');
	}

	// Close connection
	$database->close();
}

//delete roomtypes
if (isset($_POST['deleteroomtypes'])) {
	$rmtypes_id = $_POST['rmtypes_id'];

	$database = new Connection();
	$db = $database->open();

	try {
		$sql = "DELETE FROM tb_roomtypes WHERE rmtypes_id = :rmtypes_id";
		$stmt = $db->prepare($sql);
		$stmt->bindParam(':rmtypes_id', $rmtypes_id);
		$stmt->execute();

		$_SESSION['roomtypes-alert'] = "Room Type deleted successfully";
		header('location: datatable-roomtypes.php');
	} catch (PDOException $e) {
		$_SESSION['roomtypes-alert'] = "Something went wrong. Cannot delete Room Type: " . $e->getMessage();
		header('location: datatable-roomtypes.php');
	}

	// Close connection
	$database->close();
}

//edit location
if (isset($_POST['editlocation'])) {
	$database = new Connection();
	$db = $database->open();
	try {
		$loc_id = $_POST['loc_id'];
		$roomnumber = $_POST['roomnumber'];
		$roomtype = $_POST['roomtype'];
		$roomdescription = $_POST['roomdescription'];
		$roomstatus = $_POST['roomstatus'];

		$sql = "UPDATE tb_location SET `roomnumber` = '$roomnumber', `roomtype` = '$roomtype', `roomdescription` = '$roomdescription', `roomstatus` = '$roomstatus' WHERE loc_id = '$loc_id'";
		$db->exec($sql);
		$_SESSION['location-alert'] = "Location updated successfully";
		header('location: datatable-location.php');
	} catch (PDOException $e) {
		$_SESSION['location-alert'] = 'Something went wrong. Cannot update location';
		header('location: datatable-location.php');
	}

	//close connection
	$database->close();
}

//edit roomtypes
if (isset($_POST['editroomtypes'])) {
	$database = new Connection();
	$db = $database->open();
	try {
		$rmtypes_id = $_POST['rmtypes_id'];
		$roomtypes = $_POST['roomtypes'];
		$roomtypedescription = $_POST['roomtypedescription'];

		$sql = "UPDATE tb_roomtypes SET `roomtypes` = '$roomtypes', `roomtypedescription` = '$roomtypedescription' WHERE rmtypes_id = '$rmtypes_id'";
		$db->exec($sql);
		$_SESSION['roomtypes-alert'] = "Room Type updated successfully";
		header('location: datatable-roomtypes.php');
	} catch (PDOException $e) {
		$_SESSION['roomtypes-alert'] = 'Something went wrong. Cannot update Room Type';
		header('location: datatable-roomtypes.php');
	}

	//close connection
	$database->close();
}


//edit supplier
if (isset($_POST['editSupplier'])) {
	$database = new Connection();
	$db = $database->open();
	try {
		$suppid = $_POST['suppid'];
		$firstname = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$lastname = $_POST['lastname'];
		$businessname = $_POST['businessname'];
		$businessaddress = $_POST['businessaddress'];
		$phonenumber = $_POST['phonenumber'];
		$telephonenumber = $_POST['telephonenumber'];
		$email = $_POST['email'];
		$status = $_POST['status'];

		$sql = "UPDATE tb_supplier SET `firstname` = '$firstname', `middlename` = '$middlename', `lastname` = '$lastname', `businessname` = '$businessname', `businessaddress` = '$businessaddress', `phonenumber` = '$phonenumber', `telephonenumber` = '$telephonenumber', `email` = '$email', `status` = '$status' WHERE suppid = '$suppid'";
		$db->exec($sql);
		$_SESSION['supplier-alert'] = "Supplier updated successfully";
		header('location: supplier.php');
	} catch (PDOException $e) {
		$_SESSION['supplier-alert'] = 'Something went wrong. Cannot update supplier';
		header('location: supplier.php');
	}

	//close connection
	$database->close();
}

// delete supplier
if (isset($_POST['deleteSupplier'])) {
	$suppid = $_POST['suppid'];

	$database = new Connection();
	$db = $database->open();

	try {
		$sql = "DELETE FROM tb_supplier WHERE suppid = :suppid";
		$stmt = $db->prepare($sql);
		$stmt->bindParam(':suppid', $suppid);
		$stmt->execute();

		$_SESSION['supplier-alert'] = "Supplier deleted successfully";
		header('location: supplier.php');
	} catch (PDOException $e) {
		$_SESSION['supplier-alert'] = "Something went wrong. Cannot delete supplier: " . $e->getMessage();
		header('location: supplier.php');
	}

	// Close connection
	$database->close();
}

// delete category
if (isset($_POST['deleteCategory'])) {
	$suppid = $_POST['cat_id'];

	$database = new Connection();
	$db = $database->open();

	try {
		$sql = "DELETE FROM tb_category WHERE cat_id = :suppid";
		$stmt = $db->prepare($sql);
		$stmt->bindParam(':suppid', $suppid);
		$stmt->execute();

		$_SESSION['category-alert'] = "Category deleted successfully";
		header('location: category.php');
	} catch (PDOException $e) {
		$_SESSION['category-alert'] = "Something went wrong. Cannot delete Category: " . $e->getMessage();
		header('location: category.php');
	}

	// Close connection
	$database->close();
}

// Add Employee
if (isset($_POST['addEmployee'])) {
	$database = new Connection();
	$db = $database->open();
	try {
		$stmt = $db->prepare("INSERT INTO `tbl_employee_information` (`Employee_ID`, `Last_Name`, `First_Name`, `Middle_Name`, `Password`, `Position`, `Contact_Number`, `Status`) VALUES (:Employee_ID, :Last_Name, :First_Name, :Middle_Name, :Password, :Position, :Contact_Number, :Status)");

		$stmt->execute(array(
			':Employee_ID' => $_POST['Employee_ID'],
			':Last_Name' => $_POST['Last_Name'],
			':First_Name' => $_POST['First_Name'],
			':Middle_Name' => $_POST['Middle_Name'],
			':Password' => $_POST['Password'],
			':Position' => $_POST['Position'],
			':Contact_Number' => $_POST['Contact_Number'],
			':Status' => $_POST['Status']
		));

		$_SESSION['Employee-alert'] = "Successfully added a supplier";
		header('location: employee.php');
	} catch (PDOException $e) {
		$_SESSION['Employee-alert'] = "Something went wrong! Cannot add a supplier";
		header('location: employee.php');
	}

	// Close connection
	$database->close();
}



//edit Employee
if(isset($_POST['editEmployee'])) {
    $database = new Connection();
    $db = $database->open();

    try {
        $emp_ID = $_POST['emp_ID'];
        $Employee_ID = $_POST['Employee_ID'];
        $Last_Name = $_POST['Last_Name'];
        $First_Name = $_POST['First_Name'];
        $Middle_Name = $_POST['Middle_Name'];
        $Password = $_POST['Password'];
        $Position = $_POST['Position'];
        $Contact_Number = $_POST['Contact_Number'];
        $Status = $_POST['Status'];

        $stmt = $db->prepare("UPDATE tbl_employee_information SET Employee_ID = :Employee_ID, Last_Name = :Last_Name, First_Name = :First_Name, Middle_Name = :Middle_Name, Password = :Password, Position = :Position, Contact_Number = :Contact_Number, Status = :Status WHERE emp_ID = :emp_ID");
        
        $stmt->bindParam(':Employee_ID', $Employee_ID);
        $stmt->bindParam(':Last_Name', $Last_Name);
        $stmt->bindParam(':First_Name', $First_Name);
        $stmt->bindParam(':Middle_Name', $Middle_Name);
        $stmt->bindParam(':Password', $Password);
        $stmt->bindParam(':Position', $Position);
        $stmt->bindParam(':Contact_Number', $Contact_Number);
        $stmt->bindParam(':Status', $Status);
        $stmt->bindParam(':emp_ID', $emp_ID);
        
        $stmt->execute();

        $_SESSION['Employee-alert'] = "Employee updated successfully";
        header('location: employee.php');
    } catch (PDOException $e) {
        $_SESSION['Employee-alert'] = 'Something went wrong. Cannot update Employee';
        header('location: employee.php');
        // Optionally, you can log the error message for debugging.
        error_log('Error updating employee: ' . $e->getMessage());
    } finally {
        $database->close();
    }
}

//delete Employee
if (isset($_POST['deleteEmployee'])) {
	$emp_ID = $_POST['emp_ID'];
	$database = new Connection();
	$db = $database->open();
	try {
	$sql = "DELETE FROM tbl_employee_information WHERE emp_ID=:emp_ID";
	$stmt = $db->prepare($sql);
	$stmt->bindParam(':emp_ID', $emp_ID);
	$stmt->execute();
	$_SESSION['Employee-alert'] = "Employee deleted successfully";
	header('location: employee.php');
	} catch (PDOException $e) {
	$_SESSION['Employee-alert'] = "Something went wrong. Cannot delete supplier: " . $e->getMessage();
	header('location: employee.php');
	}
	// Close connection
	$database->close();
	}


//add user
if (isset($_POST['addUsers'])) {
		$database = new Connection();
		$db = $database->open();
		try {
			$stmt = $db->prepare("INSERT INTO `tbl_user_levels` (`Employee_ID`, `Password`, `Userlevel`, `Status`) VALUES (:Employee_ID, :Password, :Userlevel, :Status)");
	
			$stmt->execute(array(
				':Employee_ID' => $_POST['Employee_ID'],
				':Password' => $_POST['Password'],
				':Userlevel' => ($_POST['Userlevel'] === 'custom') ? $_POST['customInput'] : $_POST['Userlevel'], // Use customInput if Userlevel is 'custom'
				':Status' => $_POST['Status'],
			));
	
			$_SESSION['User-alert'] = "Successfully added a User";
			header('location: user.php');
		} catch (PDOException $e) {
			$_SESSION['User-alert'] = "Something went wrong! Cannot add a User";
			header('location: user.php');
		}
	
		// Close connection
		$database->close();
	}
	
	
//edit Employee
if(isset($_POST['editUser'])) {
    $database = new Connection();
    $db = $database->open();

    try {
        $user_id = $_POST['user_id'];
        $Employee_ID = $_POST['Employee_ID'];
        $Password = $_POST['Password'];
        $Userlevel  = $_POST['Userlevel'];
        $Status = $_POST['Status'];

        $stmt = $db->prepare("UPDATE tbl_user_levels SET Employee_ID=:Employee_ID, Password=:Password, Userlevel=:Userlevel, Status=:Status WHERE user_id=:user_id");
        
        $stmt->bindParam(':Employee_ID', $Employee_ID);
        $stmt->bindParam(':Password', $Password);
        $stmt->bindParam(':Userlevel', $Userlevel);
        $stmt->bindParam(':Status', $Status);
        $stmt->bindParam(':user_id', $user_id);
        
        $stmt->execute();

        $_SESSION['User-alert'] = "User updated successfully";
        header('location: user.php');
    } catch (PDOException $e) {
        $_SESSION['User-alert'] = 'Something went wrong. Cannot update User';
        header('location: user.php');
        // Optionally, you can log the error message for debugging.
        error_log('Error updating employee: ' . $e->getMessage());
    } finally {
        $database->close();
    }
	
	
}
	
//delete Employee
if (isset($_POST['deleteUser'])) {
	$user_id = $_POST['user_id'];
	$database = new Connection();
	$db = $database->open();
	try {
	$sql = "DELETE FROM tbl_user_levels WHERE user_id=:user_id";
	$stmt = $db->prepare($sql);
	$stmt->bindParam(':user_id', $user_id);
	$stmt->execute();
	$_SESSION['User-alert'] = "User deleted successfully";
	header('location: user.php');
	} catch (PDOException $e) {
	$_SESSION['User-alert'] = "Something went wrong. Cannot delete User: " . $e->getMessage();
	header('location: user.php');
	}
	// Close connection
	$database->close();
	}

	//add request form
	
//add request
if (isset($_POST['add-request'])) {
  // Decode the JSON data sent from the client
  $data = json_decode(file_get_contents("php://input"));

  $number = $data->number;
  $item = $data->item;
  $quantity = $data->quantity;
  $price = $data->price;

  // Create a connection to the database
  $db = new Connection();
  $conn = $db->open();

  // Insert data into the tbl_request table
  $sql = "INSERT INTO tbl_request (Request_No, Quality, Price, Date) VALUES (?, ?, ?, NOW())";

  try {
	  $stmt = $conn->prepare($sql);
	  $stmt->execute([$number, $item, $price]);
  } catch (PDOException $e) {
	  echo "Error: " . $e->getMessage();
  }

  // Close the database connection
  $db->close();

  // Generate and save a PDF (you will need to customize this part)
  require('tcpdf/tcpdf.php');
  $pdf = new TCPDF();
  // Add your PDF content here

  $pdf->Output('request_form.pdf', 'F'); // Save the PDF file with a given name

  echo "Data saved and PDF generated.";
}


?>




