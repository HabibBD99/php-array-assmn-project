<?php

namespace App\classes;


class ProductDemo{
    public $products = [];

  public function __construct(){
      $this->products = [
          0=>[
              'id'          => '1',
              'name'        => 'Mobile',
              'price'       => 28000,
              'description' => 'This is a Iphone Smartphone',
              'image'       => 'assets/img/iphone.jpg'
          ],
          1=>[
              'id'          => '2',
              'name'        => 'T-shirt',
              'price'       => 1350,
              'description' => 'This is a Very Nice T-Shirt',
              'image'       => 'assets/img/t_shirt.jpg'
          ],
          2=>[
              'id'          => '3',
              'name'        => 'Football',
              'price'       => 2500,
              'description' => 'This is a FIFA World Cup Football',
              'image'       => 'assets/img/football.jpg'
          ],
          3=>[
              'id'          => '4',
              'name'        => 'Charger',
              'price'       => 750,
              'description' => 'This is a Anroid Phone Type-C Charger',
              'image'       => 'assets/img/charger.jpg'
          ],
          4=>[
              'id'          => '5',
              'name'        => 'Bag',
              'price'       => 1250,
              'description' => 'This is a Very Nice Bag',
              'image'       => 'assets/img/bag_m.jpg'
          ]

      ];

  }

  public function showOutput(){

      return view('products_view', ['products' => $this->products]);




  }

}


?>