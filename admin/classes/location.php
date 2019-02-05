<?php
require_once("includes/config.php");

 
 // Fetch all countries list
function getCountries() {
     //try {
	  global $con;
       $query = "SELECT id, name FROM countries order by name asc";
       $result = mysqli_query($con,$query);
       if(!$result) {
         throw new exception("Country not found.");
       }
       $res = array();
       while($resultSet = mysqli_fetch_assoc($result)) {
        $res[$resultSet['id']] = $resultSet['name'];
       }
       $data = array('status'=>'success', 'tp'=>1, 'msg'=>"Countries fetched successfully.", 'result'=>$res);
    // } catch (Exception $e) {
       //$data = array('status'=>'error', 'tp'=>0, 'msg'=>$e->getMessage());
     //} finally {
        return $data;
     //}
   }

  // Fetch all states list by country id
  function getStates($countryId) {
     //try {
	   global $con;
       $query = "SELECT id, name FROM states WHERE country_id=".$countryId." order by name asc";
       $result = mysqli_query($con,$query);
       if(!$result) {
         throw new exception("State not found.");
       }
       $res = array();
       while($resultSet = mysqli_fetch_assoc($result)) {
        $res[$resultSet['id']] = $resultSet['name'];
       }
       $data = array('status'=>'success', 'tp'=>1, 'msg'=>"States fetched successfully.", 'result'=>$res);
    // } catch (Exception $e) {
       //$data = array('status'=>'error', 'tp'=>0, 'msg'=>$e->getMessage());
     //} finally {
        return $data;
     //}
   }

 // Fetch all cities list by state id
  function getCities($stateId) {
    //try {
		  global $con;
       $query = "SELECT id, name FROM cities WHERE state_id=".$stateId." order by name asc";
       $result = mysqli_query($con,$query);
       if(!$result) {
         throw new exception("City not found.");
       }
       $res = array();
       while($resultSet = mysqli_fetch_assoc($result)) {
        $res[$resultSet['id']] = $resultSet['name'];
       }
       $data = array('status'=>'success', 'tp'=>1, 'msg'=>"Cities fetched successfully.", 'result'=>$res);
     //} catch (Exception $e) {
       //$data = array('status'=>'error', 'tp'=>0, 'msg'=>$e->getMessage());
    // } finally {
        return $data;
     //}
   }  
// Fetch all districts  list by state id
  function getDistricts($stateId) {
     //try {
		  global $con;
       $query = "SELECT id, name FROM districts WHERE state_id=".$stateId." order by name asc";
       $result = mysqli_query($con,$query);
       if(!$result) {
         throw new exception("District not found.");
       }
       $res = array();
       while($resultSet = mysqli_fetch_assoc($result)) {
        $res[$resultSet['id']] = $resultSet['name'];
       }
       $data = array('status'=>'success', 'tp'=>1, 'msg'=>"Districts fetched successfully.", 'result'=>$res);
    // } catch (Exception $e) {
      // $data = array('status'=>'error', 'tp'=>0, 'msg'=>$e->getMessage());
    // } finally {
        return $data;
     //}
   }     
   // Fetch all districts  list by state id
function getDistricts1($stateId) {
    // try {
		  global $con;
       $query = "SELECT id, name FROM districts WHERE division_id=".$stateId." order by name asc";
       $result = mysqli_query($con,$query);
       if(!$result) {
         throw new exception("District not found.");
       }
       $res = array();
       while($resultSet = mysqli_fetch_assoc($result)) {
        $res[$resultSet['id']] = $resultSet['name'];
       }
       $data = array('status'=>'success', 'tp'=>1, 'msg'=>"Districts fetched successfully.", 'result'=>$res);
     //} catch (Exception $e) {
      // $data = array('status'=>'error', 'tp'=>0, 'msg'=>$e->getMessage());
     //} finally {
        return $data;
     //}
   } 
// Fetch all districts  list by state id
 function getDivisions($stateId) {
     //try {
		  global $con;
       $query = "SELECT id, name FROM division WHERE state_id=".$stateId." order by name asc";
       $result = mysqli_query($con,$query);
       if(!$result) {
         throw new exception("Division not found.");
       }
       $res = array();
       while($resultSet = mysqli_fetch_assoc($result)) {
        $res[$resultSet['id']] = $resultSet['name'];
       }
       $data = array('status'=>'success', 'tp'=>1, 'msg'=>"Divisions fetched successfully.", 'result'=>$res);
     //} catch (Exception $e) {
       //$data = array('status'=>'error', 'tp'=>0, 'msg'=>$e->getMessage());
     //} finally {
        return $data;
     //}
   } 

?>
