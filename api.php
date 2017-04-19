<?php
 
require_once "product_manager.php";
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
header('Access-Control-Allow-Methods: GET,PUT,POST,DELETE');

// get the HTTP method, path and body of the request
$method = $_SERVER['REQUEST_METHOD'];
$request = explode('/', trim($_SERVER['PATH_INFO'],'/'));
$table = $request[0];

switch ($table) 
{
	case 'product':
		$EntityManager = new ProductManager();
	break;
}

if(count($request)>1)
	$entityId = $request[1];
else
	$entityId = null;
	
switch ($method) 
{
  case 'GET':
	if($entityId==null){
		$entities = $EntityManager->listEntities(null, null, null, null); 
		echo json_encode($entities);
	}
	else{
		$entity = $EntityManager->loadEntity($entityId);
		echo json_encode($entity);
	}
	break;
  case 'PUT':
	$putdata = file_get_contents("php://input");
	$request = json_decode($putdata);
	$EntityManager->updateEntity($request->id, $request->name);
	break;
  case 'POST':
	$postdata = file_get_contents("php://input");
	$request = json_decode($postdata);
	$id = $EntityManager->createEntity($request->name);
	echo $id;
	break;
  case 'DELETE':
	$EntityManager->deleteEntity($entityId);
	break;
}
 
?>