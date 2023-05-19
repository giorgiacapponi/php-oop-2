 <?php



   $products=[
      new Food("gnammy gnammy","royal gnammy",10.40,new Category("dog",">10kg"),"crocchette","https://www.toptrade360.com/77997-large_default/crocchette-cani-monge-059886-special-dog-excellence-mini-adult-monoprotein-800gr.jpg"),
      new Food("bau bau","purina",18.50,new Category("dog",">2kg"),"crocchette","https://th.bing.com/th/id/OIP.Stp3X4xqzgB_lf1UWiV3TgHaHa?pid=ImgDet&w=500&h=500&rs=1"),
      new Food("super gnam","royal gnammy",16.50,new Category("cat",">3kg"),"crocchette","https://th.bing.com/th/id/OIP.1TQdP9sOTLIiUKN3gKYqlgHaHa?pid=ImgDet&rs=1"),
      new Food("miao miao","royal gnammy",12.50,new Category("cat",">1kg"),"crocchette","https://th.bing.com/th/id/R.5ba7cd2ab8fab81340a1283643b24414?rik=rAt9ZAIbdqBUmg&riu=http%3a%2f%2fshop-cdn.shpp.ext.zooplus.io%2fbilder%2feukanuba%2fhairball%2fcontrol%2fadult%2f0%2f400%2f55679_pla_eukanuba_hairball_4kg_0.jpg&ehk=V56quKquGrJrfOmYntNJY7OiZNxcr26xIsfREMSdxcw%3d&risl=&pid=ImgRaw&r=0"),
      new Toys("ball ball","super funny",2.50,new Category("cat"),"ball","https://www.petingros.it/tmb/t630x630/giochi_per_gatti_413/58126%20gioco%203%20palle.jpg"),
      new Toys("tira tira ","super funny",4.50,new Category("dog"),"rope","https://th.bing.com/th/id/R.803eb21e7c65e14a807524e23a54b7b5?rik=4m%2fU5VJwoUqTWA&pid=ImgRaw&r=0"),
   ];


try{
  $products[0]->setPrice(2);
}catch(Exception $err){
   echo $err->getMessage();
};
