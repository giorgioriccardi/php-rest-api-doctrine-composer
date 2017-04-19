<?php
// create_product.php
require_once "bootstrap.php";
 
use Doctrine\ORM\Doctrine_Query;

function createProduct($newProductName)
{

	$product = new Product();
	$product->setName($newProductName);

    global $entityManager;
	$entityManager->persist($product);
	$entityManager->flush();
	return $product->getId();
}

function listProducts($where, $orderby, $start, $max)
{
	$dql = "SELECT p FROM Product p"; 
	
	if($where!=null)
		$dql = $dql." WHERE BY ".$where;
		
	if($orderby!=null)
		$dql = $dql." ORDER BY ".$orderby;

	global $entityManager;
	$query = $entityManager->createQuery($dql);
	if($max==null)
		$max=20;
	if($start==null)
		$start=0;
	$query->setMaxResults($max);
	
	return  $query->getArrayResult();
}

function loadProduct($id)
{
	
	global $entityManager;
	$product = $entityManager->find('Product', $id);

	if ($product === null) {
		echo "Product $id does not exist.\n";
		exit(1);
	}

	return $product->toArray();
}

function updateProduct($id, $newName)
{
	
	global $entityManager;
	$product = $entityManager->find('Product', $id);

	if ($product === null) {
		echo "Product $id does not exist.\n";
		exit(1);
	}

	$product->setName($newName);

	$entityManager->flush();
}

function deleteProduct($id)
{
	
	global $entityManager;
	$product = $entityManager->find('Product', $id);

	if ($product === null) {
		echo "Product $id does not exist.\n";
		exit(1);
	}
	$product = $entityManager->remove($product);
	$entityManager->flush();
}






