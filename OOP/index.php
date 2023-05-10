<?php
require_once('product.php');
require_once('cdMusic.php');
require_once('cdRack.php');

echo "<hr>";
echo "[PRODUCT INFORMATION]";
echo "<br><br>";

// Product CD 1
$productCd1 = new Product();
$productCd1->setName("Born Pink");
$productCd1->setPrice(600000);
$productCd1->setDiscount(20);

echo "Product Name : " . $productCd1->getName() . "<br>";
echo "Product Price : " . $productCd1->getPrice() . "<br>";
echo "Discount : " . $productCd1->getDiscount() . "%" . "<br>";

echo "<br>";

// Product CD 2
$productCd2 = new Product();
$productCd2->setName("Butter");
$productCd2->setPrice(700000);
$productCd2->setDiscount(15);

echo "Product Name : " . $productCd2->getName() . "<br>";
echo "Product Price : " . $productCd2->getPrice() . "<br>";
echo "Discount : " . $productCd2->getDiscount() . "%" . "<br>";

echo "<br>";

// Product CD 3
$productCd3 = new Product();
$productCd3->setName("Butterfly");
$productCd3->setPrice(400000);
$productCd3->setDiscount(10);

echo "Product Name : " . $productCd3->getName() . "<br>";
echo "Product Price : " . $productCd3->getPrice() . "<br>";
echo "Discount : " . $productCd3->getDiscount() . "%" . "<br>";

echo "<br>";

// Product Rack 1
$productRack1 = new Product();
$productRack1->setName("Wood Rack");
$productRack1->setPrice(500000);
$productRack1->setDiscount(20);

echo "Product Name : " . $productRack1->getName() . "<br>";
echo "Product Price : " . $productRack1->getPrice() . "<br>";
echo "Discount : " . $productRack1->getDiscount() . "%" . "<br>";

echo "<br>";

// Product Rack 2
$productRack2 = new Product();
$productRack2->setName("Plastic Rack");
$productRack2->setPrice(300000);
$productRack2->setDiscount(15);

echo "Product Name : " . $productRack2->getName() . "<br>";
echo "Product Price : " . $productRack2->getPrice() . "<br>";
echo "Discount : " . $productRack2->getDiscount() . "%" . "<br>";

echo "<br>";

// Product Rack 3
$productRack3 = new Product();
$productRack3->setName("Alumunium Rack");
$productRack3->setPrice(400000);
$productRack3->setDiscount(10);

echo "Product Name : " . $productRack3->getName() . "<br>";
echo "Product Price : " . $productRack3->getPrice() . "<br>";
echo "Discount : " . $productRack3->getDiscount() . "%" . "<br>";
echo "<hr>";

//CD Music
echo "CD MUSIC";
echo "<br><br>";

// Music 1
$music1 = new CDMusic();
$music1->setName($productCd1->getName());
$music1->setPrice($productCd1->getPrice());
$music1->setDiscount($productCd1->getDiscount());
$music1->setArtist("Blackpink");
$music1->setGenre("Pop");

echo "Product Name : " . $music1->getName() . "<br>";
echo "Product Price : " . $music1->getPrice() . "<br>";
echo "Discount : " . $music1->getDiscount() . "%" . "<br>";
echo "Artist Name : " . $music1->getArtist() . "<br>";
echo "Music Genre : " . $music1->getGenre() . "<br>";
echo "Price After Discount : " . $music1->calculatePrice() . "<br>";

echo "<br>";

// Music 2
$music2 = new CDMusic();
$music2->setName($productCd2->getName());
$music2->setPrice($productCd2->getPrice());
$music2->setDiscount($productCd2->getDiscount());
$music2->setArtist("BTS");
$music2->setGenre("Pop");

echo "Product Name : " . $music2->getName() . "<br>";
echo "Product Price : " . $music2->getPrice() . "<br>";
echo "Discount : " . $music2->getDiscount() . "%" . "<br>";
echo "Artist Name : " . $music2->getArtist() . "<br>";
echo "Music Genre : " . $music2->getGenre() . "<br>";
echo "Price After Discount : " . $music2->calculatePrice() . "<br>";


echo "<br>";

// Music 3
$music3 = new CDMusic();
$music3->setName($productCd3->getName());
$music3->setPrice($productCd3->getPrice());
$music3->setDiscount($productCd3->getDiscount());
$music3->setArtist("New Jeans");
$music3->setGenre("Pop");

echo "Product Name : " . $music3->getName() . "<br>";
echo "Product Price : " . $music3->getPrice() . "<br>";
echo "Discount : " . $music3->getDiscount() . "%" . "<br>";
echo "Artist Name : " . $music3->getArtist() . "<br>";
echo "Music Genre : " . $music3->getGenre() . "<br>";
echo "Price After Discount : " . $music3->calculatePrice() . "<br>";

echo "<hr>";

// CD Rack
echo "CD RACK";
echo "<br><br>";

// Rack 1
$rack1 = new CDRack();
$rack1->setName($productRack1->getName());
$rack1->setPrice($productRack1->getPrice());
$rack1->setDiscount($productRack1->getDiscount());
$rack1->setCapacity("50");
$rack1->setModel("Wood");

echo "Product Name : " . $rack1->getName() . "<br>";
echo "Product Price : " . $rack1->getPrice() . "<br>";
echo "Discount : " . $rack1->getDiscount() . "%" . "<br>";
echo "Kapsitas : " . $rack1->getCapacity() . "<br>";
echo "Model : " . $rack1->getModel() . "<br>";
echo "Price After Discount : " . $rack1->calculatePrice() . "<br>";

echo "<br>";

// Rack 2
$rack2 = new CDRack();
$rack2->setName($productRack2->getName());
$rack2->setPrice($productRack2->getPrice());
$rack2->setDiscount($productRack2->getDiscount());
$rack2->setCapacity("70");
$rack2->setModel("Plastic");

echo "Product Name : " . $rack2->getName() . "<br>";
echo "Product Price : " . $rack2->getPrice() . "<br>";
echo "Discount : " . $rack2->getDiscount() . "%" . "<br>";
echo "Kapasitas : " . $rack2->getCapacity() . "<br>";
echo "Model : " . $rack2->getModel() . "<br>";
echo "Price After Discount : " . $rack2->calculatePrice() . "<br>";

echo "<br>";

// Rack 3
$rack3 = new CDRack();
$rack3->setName($productRack3->getName());
$rack3->setPrice($productRack3->getPrice());
$rack3->setDiscount($productRack3->getDiscount());
$rack3->setCapacity("40");
$rack3->setModel("Alumunium");

echo "Product Name : " . $rack3->getName() . "<br>";
echo "Product Price : " . $rack3->getPrice() . "<br>";
echo "Discount : " . $rack3->getDiscount() . "%" . "<br>";
echo "Kapasitas : " . $rack3->getCapacity() . "<br>";
echo "Model : " . $rack3->getModel() . "<br>";
echo "Price After Discount : " . $rack3->calculatePrice() . "<br>";
echo "<hr>";
