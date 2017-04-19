<?php
	interface EntityManager {
		public function createEntity( $newProductName );
		public function listEntities( $where, $orderby, $start, $max );
		public function	loadEntity( $id );
		public function updateEntity( $id, $newName );
		public function deleteEntity( $id );
	}
?>