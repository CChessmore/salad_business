<?php

	class Salad {
	
		public $name;
		public $size;
		public $price;
		public $image;
		public $ingredients = array();
		
		public function isPreMade($name) {
			$test = 'Chef';
				if($name == $test) {
					$this->size = 'Large';
					$this->price = 10.99;
					$this->image = 'chefIMG.jpg';
					$this->ingredients = array('lettuce','egg','cheddar','carrots','ranch dressing');
				}
		}
	}
	class Ingredient {
		public $name;
		public $price;
		public $category;
		public $picture;
	}
	
	class Category {
		public $name;
		public $price;
	}
	
	class Categories {
		public function readAllCategories() {
			$file = new Files();
			$categoryArray = $file->readArray('categories.csv');
			return($categoryArray);
		}
	}
	
	class Files {
		function readArray($fileName) {
			$file_handler=fopen($fileName,'r');
			$infoArray = array();
			while(!feof($file_handler)) {
			$line=preg_replace('/[\r\n]/','',fgets($file_handler));
			if(strlen($line)==0) {
				continue;
			}
			$content=explode(';',$line);
			$infoArray[]=$content;
			}
			return $infoArray;
		}
		function addToFile($data,$fileName) {
			$file_handler=fopen($fileName,'a');
			$dataString = implode(';',$data);
			fwrite($file_handler,$dataString."\n");
			fclose($file_handler);
		}
		function sendtoJSON($dataArray) {
			$jsonString = json_encode($dataArray);
			return $jsonString;
		}
	}