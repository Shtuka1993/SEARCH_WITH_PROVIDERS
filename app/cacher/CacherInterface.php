<?php
	namespace App\Cacher;

	use App\DTO\DTOResults;

	interface CacheInterface {
		public function get(String $query):DTOResults;
	}
?>