<?php session_start();
// session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.19/dist/css/uikit.min.css" />
    <script src="https://kit.fontawesome.com/33e495fb35.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <!-- custom js file link  -->
   <script src="stationary.js" defer></script>

</head>
<body>
   <style>
      nav {
   background-color: rgba(255, 255, 255, 0.8);
   height: 50px;
   border-radius: 20px;
   box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
 }
 
 ul {
   list-style: none;
   margin: 0;
   padding: 0;
   display: flex;
   justify-content: space-between;
   align-items: center;
   height: 100%;
 }
 
 li {
   display: inline-block;
   margin: 0;
   padding: 0;
   height: 100%;
   font-size: 18px;
 }
 
 li.left {
   margin-left: 50px;
 }
 
 li.right {
   margin-right: 50px;
 }
 
 a {
   color: #000;
   text-decoration: none;
   padding: 10px 20px;
   /* border-radius: 20px; */
   transition: background-color 0.2s ease-in-out;
 }
 
 a:hover {
   background-color: #eee;
 }
 .container .products-container {

   margin-top: 20px;

}
   </style>
    <link rel="stylesheet" href="def.css">
   
<div class="container">

   <h3 class="title">Stationery Products </h3>
   <nav>
      <ul>
        <li class="left"><a href="#">Contribute us</a></li>
        <li class="right"><a href="mycart.php">Cart</a></li>
      </ul>
    </nav>

   <div class="products-container">

      <div class="product" data-name="p-1">
         <img src="raw1.jpg" alt="" width="250px" height="250px">
         <h3>Origami Sheets</h3>
         <div class="price">&#8377;40</div>
      </div>

      <div class="product" data-name="p-2">
         <img src="raw2.jpg" alt="" width="250px" height="250px">
         <h3>Printed Papers</h3>
         <div class="price">&#8377;30</div>
      </div>

      <div class="product" data-name="p-3">
         <img src="raw3.jpg" alt="" width="250px" height="250px">
         <h3>Craft Scissors</h3>
         <div class="price">&#8377;200</div>
      </div>

      <div class="product" data-name="p-4">
         <img src="raw4.jpg" alt="" width="250px" height="250px">
         <h3>Scissor</h3>
         <div class="price">&#8377;130</div>
      </div>

      <div class="product" data-name="p-5">
         <img src="raw5.jpg" alt="" width="250px" height="250px">
         <h3>Painting Brush</h3>
         <div class="price">&#8377;299</div>
      </div>

      <div class="product" data-name="p-6">
         <img src="raw6.jpg" alt="" width="250px" height="250px">
         <h3>Ice-Cream Sticks</h3>
         <div class="price">&#8377;142</div>
      </div>
      <div class="product" data-name="p-7">
        <img src="raw7.jpg" alt="" width="250px" height="250px">
        <h3>Cello Tapes</h3>
        <div class="price">&#8377;30</div>
     </div>

     <div class="product" data-name="p-8">
        <img src="raw8.jpg" alt="" width="250px" height="250px">
        <h3>Cello Tape Dispenser</h3>
        <div class="price">&#8377;170</div>
     </div>

     <div class="product" data-name="p-9">
        <img src="raw9.jpg" alt="" width="250px" height="250px">
        <h3>Brown Tape</h3>
        <div class="price">&#8377;40</div>
     </div>
     <div class="product" data-name="p-10">
        <img src="raw10.jpg" alt="" width="250px" height="250px">
        <h3>Double Sided Tape</h3>
        <div class="price">&#8377;70</div>
     </div>
     <div class="product" data-name="p-11">
        <img src="raw11.webp" alt="" width="250px" height="250px">
        <h3>Pipe Cleaner</h3>
        <div class="price">&#8377;170</div>
     </div>
     <div class="product" data-name="p-12">
        <img src="raw12.jpg" alt="" width="250px" height="250px">
        <h3>Pipe Cleaner</h3>
        <div class="price">&#8377;310</div>
     </div>
     <div class="product" data-name="p-13">
        <img src="raw13.jpg" alt="" width="250px" height="250px">
        <h3>Artist Water Colour</h3>
        <div class="price">&#8377;240</div>
     </div>
     <div class="product" data-name="p-14">
        <img src="raw14.jpeg" alt="" width="250px" height="250px">
        <h3>Artist Water Colour</h3>
        <div class="price">&#8377;199</div>
     </div>
     <div class="product" data-name="p-15">
        <img src="raw15.jpg" alt="" width="250px" height="250px">
        <h3>Flash Water Colors</h3>
        <div class="price">&#8377;699</div>
     </div>
     <div class="product" data-name="p-16">
        <img src="raw16.jpg" alt="" width="250px" height="250px">
        <h3>Pencil Colour</h3>
        <div class="price">&#8377;480</div>
     </div>
     <div class="product" data-name="p-17">
        <img src="raw17.jpg" alt="" width="250px" height="250px">
        <h3>Camel Oil Pastels</h3>
        <div class="price">&#8377;50</div>
     </div>
     <div class="product" data-name="p-18">
        <img src="raw18.jpeg" alt="" width="250px" height="250px">
        <h3>Oil Pastels from Gallery</h3>
        <div class="price">&#8377;850</div>
     </div>
     <div class="product" data-name="p-19">
        <img src="raw19.jpg" alt="" width="250px" height="250px">
        <h3>Camel Oil Pastels</h3>
        <div class="price">&#8377;270</div>
     </div> 
     <div class="product" data-name="p-20">
        <img src="raw20.jpg" alt="" width="250px" height="250px">
        <h3>Fevicol</h3>
        <div class="price">&#8377;40</div>
     </div> 
     <div class="product" data-name="p-21">
        <img src="raw21.jpg" alt="" width="250px" height="250px">
        <h3>Fevi Stick</h3>
        <div class="price">&#8377;180</div>
     </div>
      <div class="product" data-name="p-22">
        <img src="raw22.jpg" alt="" width="250px" height="250px">
        <h3>Fevicol</h3>
        <div class="price">&#8377;600</div>
     </div> 
     <div class="product" data-name="p-23">
        <img src="raw23.jpg" alt="" width="250px" height="250px">
        <h3>Craft Glue</h3>
        <div class="price">&#8377;199</div>
     </div> 
     <div class="product" data-name="p-24">
        <img src="raw24.jpg" alt="" width="250px" height="250px">
        <h3>Galvanised Wire</h3>
        <div class="price">&#8377;8 /m</div>
     </div> 
     <div class="product" data-name="p-25">
        <img src="raw25.jpg" alt="" width="250px" height="250px">
        <h3>Paper Clips</h3>
        <div class="price">&#8377;99</div>
     </div>
    <div class="product" data-name="p-26">
        <img src="raw26.jpg" alt="" width="250px" height="250px">
        <h3>Pins</h3>
        <div class="price">&#8377;133</div>
     </div> 
     <div class="product" data-name="p-27">
        <img src="raw27.jpg" alt="" width="250px" height="250px">
        <h3>Paper Clips(Stainless Steel)</h3>
        <div class="price">&#8377;99</div>
     </div> 
     <div class="product" data-name="p-28">
        <img src="raw28.jpg" alt="" width="250px" height="250px">
        <h3>Drawing Notebook</h3>
        <div class="price">&#8377;80</div>
     </div>
     <div class="product" data-name="p-29">
        <img src="raw29.jpg" alt="" width="250px" height="250px">
        <h3>Classmate Drawing Copy</h3>
        <div class="price">&#8377;270</div>
     </div> 
     <div class="product" data-name="p-30">
        <img src="raw30.jpg" alt="" width="250px" height="250px">
        <h3>Classmate Drawing Notebook</h3>
        <div class="price">&#8377;79</div>
     </div> 
     <div class="product" data-name="p-31">
        <img src="raw31.jpg" alt="" width="250px" height="250px">
        <h3>Drawing Cardboard</h3>
        <div class="price">&#8377;649</div>
     </div> 
     <div class="product" data-name="p-32">
        <img src="raw32.jpg" alt="" width="250px" height="250px">
        <h3>Drawing Board</h3>
        <div class="price">&#8377;11623</div>
     </div> 
     <div class="product" data-name="p-33">
        <img src="raw33.jpg" alt="" width="250px" height="250px">
        <h3>Painting Canvas</h3>
        <div class="price">&#8377;270</div>
     </div> 
     <div class="product" data-name="p-34">
        <img src="raw34.jpg" alt="" width="250px" height="250px">
        <h3>Fine Art Canvas Board</h3>
        <div class="price">&#8377;74</div>
     </div> 
     <div class="product" data-name="p-35">
        <img src="raw35.jpg" alt="" width="250px" height="250px">
        <h3>Craft clay</h3>
        <div class="price">&#8377;7291</div>
     </div> 
     <div class="product" data-name="p-36">
        <img src="raw36.jpg" alt="" width="250px" height="250px">
        <h3>Pottery Clay</h3>
        <div class="price">&#8377;99</div>
     </div> 
     <div class="product" data-name="p-37">
        <img src="raw37.jpg" alt="" width="250px" height="250px">
        <h3>Terracotta Clay</h3>
        <div class="price">&#8377;90</div>
     </div> 
     <div class="product" data-name="p-38">
        <img src="raw38.jpg" alt="" width="250px" height="250px">
        <h3>Pottery Spinner Wheel</h3>
        <div class="price">&#8377;2724</div>
     </div> 
     <div class="product" data-name="p-39">
        <img src="raw39.jpg" alt="" width="250px" height="250px">
        <h3>Colour Tape</h3>
        <div class="price">&#8377;97</div>
     </div> <div class="product" data-name="p-40">
        <img src="raw40.jpg" alt="" width="250px" height="250px">
        <h3>Washi Tapes</h3>
        <div class="price">&#8377;389</div>
     </div> 
     <div class="product" data-name="p-41">
        <img src="raw41.jpg" alt="" width="250px" height="250px">
        <h3>Washi Tapes</h3>
        <div class="price">&#8377;459</div>
     </div> 
     <div class="product" data-name="p-42">
        <img src="raw42.jpg" alt="" width="250px" height="250px">
        <h3>Washi Tapes</h3>
        <div class="price">&#8377;369</div>
     </div> 
     <div class="product" data-name="p-43">
        <img src="raw43.jpg" alt="" width="250px" height="250px">
        <h3>Glitters</h3>
        <div class="price">&#8377;159</div>
     </div> 
     <div class="product" data-name="p-44">
        <img src="raw44.jpg" alt="" width="250px" height="250px">
        <h3>Glitters</h3>
        <div class="price">&#8377;229</div>
     </div> 
     <div class="product" data-name="p-45">
        <img src="raw45.jpg" alt="" width="250px" height="250px">
        <h3>Card Boards</h3>
        <div class="price">&#8377;900</div>
     </div> 
     <div class="product" data-name="p-46">
        <img src="raw46.jpg" alt="" width="250px" height="250px">
        <h3>Card Boards</h3>
        <div class="price">&#8377;178</div>
     </div> 
     <div class="product" data-name="p-47">
        <img src="raw47.jpg" alt="" width="250px" height="250px">
        <h3>Cylindrical Cardboard</h3>
        <div class="price">&#8377;500</div>
     </div> 
     <div class="product" data-name="p-48">
        <img src="raw48.jpg" alt="" width="250px" height="250px">
        <h3>Round Cardboard</h3>
        <div class="price">&#8377;90</div>
     </div> 
     <div class="product" data-name="p-49">
        <img src="raw49.jpg" alt="" width="250px" height="250px">
        <h3>Mirrors</h3>
        <div class="price">&#8377;100</div>
     </div> 
     <div class="product" data-name="p-50">
        <img src="raw50.jpg" alt="" width="250px" height="250px">
        <h3>Mirrors</h3>
        <div class="price">&#8377;100</div>
     </div> 
     <div class="product" data-name="p-51">
        <img src="raw51.jpg" alt="" width="250px" height="250px">
        <h3>Mirrors</h3>
        <div class="price">&#8377;110</div>
     </div> 
     <div class="product" data-name="p-52">
        <img src="raw52.jpg" alt="" width="250px" height="250px">
        <h3>Stapler</h3>
        <div class="price">&#8377;110</div>
     </div> 
     <div class="product" data-name="p-53">
        <img src="raw53.jpg" alt="" width="250px" height="250px">
        <h3>Mirrors</h3>
        <div class="price">&#8377;60</div>
     </div> 
     <div class="product" data-name="p-54">
        <img src="raw54.jpg" alt="" width="250px" height="250px">
        <h3>Craft Mirrors</h3>
        <div class="price">&#8377;150</div>
     </div> 
     <div class="product" data-name="p-55">
        <img src="raw55.jpg" alt="" width="250px" height="250px">
        <h3>Wools</h3>
        <div class="price">&#8377;250</div>
     </div> 
     <div class="product" data-name="p-56">
        <img src="raw56.jpg" alt="" width="250px" height="250px">
        <h3>Wools</h3>
        <div class="price">&#8377;260</div>
     </div> 
     <div class="product" data-name="p-57">
        <img src="raw57.jpg" alt="" width="250px" height="250px">
        <h3>Color Chalk </h3>
        <div class="price">&#8377;168</div>
     </div> 
     

   </div>
</div>
<div class="products-preview">
<form action="manage_cart.php" method="POST">

<div class="preview" data-target="p-1">
   <i class="fas fa-times"></i>
   <img src="raw1.jpg" alt=""width="250px" height="250px">
   <h3>Origami Sheets</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>Origami Papers Both Side Color Paper - 40 Pcs.We provide you with 6"x6" origami sheet with 12 different vivid colors.</p>
   <div class="price">&#8377;40</div>
   <div class="buttons">
   <button type="submit" class="btn btn-dark" name="Add_to_cart">Add To Cart</button>
   </div>
   <input type="hidden" name="Item_name" value="Origami sheets" >
      <input type="hidden" name="Item_price" value="40" >
</div>
</form>

<div class="preview" data-target="p-2">
   <i class="fas fa-times"></i>
   <img src="raw2.jpg" alt=""width="250px" height="250px">
   <h3>Printed Papers</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>Mix Design Craft Paper 15 Pcs.A4 printed decorative paper.Thick pre printed paper for Origami,Scrapbooking,Project(Big Dot)</p>
   <div class="price">&#8377;30</div>
   <div class="buttons">
      <a href="#" class="buy">buy now</a>
      <a href="#" class="cart">add to cart</a>
   </div>
</div>

<div class="preview" data-target="p-3">
   <i class="fas fa-times"></i>
   <img src="raw3.jpg" alt=""width="250px" height="250px">
   <h3>Craft Scissors</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>Crafteez set of 6 Zig Zag Scissors(Multicolor).Give attractive edges to chart papers,greeting cards.They are light weight to handle.</p>
   <div class="price">&#8377;200</div>
   <div class="buttons">
      <a href="#" class="buy">buy now</a>
      <a href="#" class="cart">add to cart</a>
   </div>
</div>

<div class="preview" data-target="p-4">
   <i class="fas fa-times"></i>
   <img src="raw4.jpg" alt=""width="250px" height="250px">
   <h3>Scissor</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>3M Scotch Scissors|6" Multipurpose|Comfort Grip Handle and Stainless Steel Blades|Paper,Photos,Crafts</p>
   <div class="price">&#8377;130</div>
   <div class="buttons">
      <a href="#" class="buy">buy now</a>
      <a href="#" class="cart">add to cart</a>
   </div>
</div>

<div class="preview" data-target="p-5">
   <i class="fas fa-times"></i>
   <img src="raw5.jpg" alt=""width="250px" height="250px">
   <h3>Painting Brush</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>Twizzle Art Brush Set for Artists,Painting Brushes Set of 10 Professional Round Pointed Tip Nylon Hair Artist Acrylic Paint Brush for Acrylic/Water Color/Oil Painting</p>
   <div class="price">&#8377;299</div>
   <div class="buttons">
      <a href="#" class="buy">buy now</a>
      <a href="#" class="cart">add to cart</a>
   </div>
</div>

<div class="preview" data-target="p-6">
   <i class="fas fa-times"></i>
   <img src="raw6.jpg" alt=""width="250px" height="250px">
   <h3>Ice-Cream Sticks</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>Okayji Wooden Ice Cream Stricks for DIY Crafts Project Work Popsicle Spoon Scrap,240_ Pieces,Cream Color</p>
   <div class="price">&#8377;142</div>
   <div class="buttons">
      <a href="#" class="buy">buy now</a>
      <a href="#" class="cart">add to cart</a>
   </div>
</div>
<div class="preview" data-target="p-7">
   <i class="fas fa-times"></i>
   <img src="raw7.jpg" alt=""width="250px" height="250px">
   <h3>Cello Tapes</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>TJIKKO Cello Tape/BOPP Tape/Packaging Tape Premium Grade 48 mm width 65 meter length Clear(Set of 2)</p>
   <div class="price">&#8377;30</div>
   <div class="buttons">
      <a href="#" class="buy">buy now</a>
      <a href="#" class="cart">add to cart</a>
   </div>
</div>
<div class="preview" data-target="p-8">
   <i class="fas fa-times"></i>
   <img src="raw8.jpg" alt=""width="250px" height="250px">
   <h3>Cello Tape Dispenser</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>MHK A. S ENTERPRISES Tape Dispenser with Matte Finish and Shrap Blade Parer Cutter(1-inch)</p>
   <div class="price">&#8377;170</div>
   <div class="buttons">
      <a href="#" class="buy">buy now</a>
      <a href="#" class="cart">add to cart</a>
   </div>
</div>
<div class="preview" data-target="p-9">
   <i class="fas fa-times"></i>
   <img src="raw9.jpg" alt=""width="250px" height="250px">
   <h3>Brown Tape</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>TJIKKO Cello Tape/BOPP Tape/Packaging Tape Premium Grade 48 mm width 65 meter length Brown(Set of 2)</p>
   <div class="price">&#8377;40</div>
   <div class="buttons">
      <a href="#" class="buy">buy now</a>
      <a href="#" class="cart">add to cart</a>
   </div>
</div>
<div class="preview" data-target="p-10">
   <i class="fas fa-times"></i>
   <img src="raw10.jpg" alt=""width="250px" height="250px">
   <h3>Double Sided Tape</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>Appreciate Good Quality 1inch Double Sided Tape.Set of 1 PC.Dispenser Foam Type(Manual)(Set of 1,Multicolor)</p>
   <div class="price">&#8377;70</div>
   <div class="buttons">
      <a href="#" class="buy">buy now</a>
      <a href="#" class="cart">add to cart</a>
   </div>
</div>
<div class="preview" data-target="p-11">
   <i class="fas fa-times"></i>
   <img src="raw11.webp" alt=""width="250px" height="250px">
   <h3>Pipe Cleaner</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>AmigozZ Pipe Cleaner 12":Multi Color:100 PCs:for Hobby Crafts,Scrapbooking,DIY Accessory(90 PCs)</p>
   <div class="price">&#8377;170</div>
   <div class="buttons">
      <a href="#" class="buy">buy now</a>
      <a href="#" class="cart">add to cart</a>
   </div>
</div>
<div class="preview" data-target="p-12">
   <i class="fas fa-times"></i>
   <img src="raw12.jpg" alt=""width="250px" height="250px">
   <h3>Pipe Cleaner</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>AmigozZ Pipe Cleaner 12":Multi Color:100 PCs:for Hobby Crafts,Scrapbooking,DIY Accessory(200 PCs)</p>
   <div class="price">&#8377;310</div>
   <div class="buttons">
      <a href="#" class="buy">buy now</a>
      <a href="#" class="cart">add to cart</a>
   </div>
</div>
<div class="preview" data-target="p-13">
   <i class="fas fa-times"></i>
   <img src="raw13.jpg" alt=""width="250px" height="250px">
   <h3>Artist Water Colour</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>Camel Artist's Warwe Color - 20ml Each,12 Shades</p>
   <div class="price">&#8377;240</div>
   <div class="buttons">
      <a href="#" class="buy">buy now</a>
      <a href="#" class="cart">add to cart</a>
   </div>
</div>
<div class="preview" data-target="p-14">
   <i class="fas fa-times"></i>
   <img src="raw14.jpeg" alt=""width="250px" height="250px">
   <h3>Artist Water Colour</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>Camel Artist Water Color Cakes - 18 Shades(Set of 19,Multicolor)</p>
   <div class="price">&#8377;199</div>
   <div class="buttons">
      <a href="#" class="buy">buy now</a>
      <a href="#" class="cart">add to cart</a>
   </div>
</div>
<div class="preview" data-target="p-15">
   <i class="fas fa-times"></i>
   <img src="raw15.jpg" alt=""width="250px" height="250px">
   <h3>Flash Water Colors</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>Flash Artist Watercolor Set|25 Colors|25 ml, 0.8 ft oz Each|Matt Finish|Rich Pigments,Vibrant,Non Toxic Paints for The Professinal Artist,Hobby Painters & Kids,Multicolor.</p>
   <div class="price">&#8377;699</div>
   <div class="buttons">
      <a href="#" class="buy">buy now</a>
      <a href="#" class="cart">add to cart</a>
   </div>
</div>
<div class="preview" data-target="p-16">
   <i class="fas fa-times"></i>
   <img src="raw16.jpg" alt=""width="250px" height="250px">
   <h3>Pencil Colour</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>Faber-Castell 48 Triangular Multicolor Pencils</p>
   <div class="price">&#8377;480</div>
   <div class="buttons">
      <a href="#" class="buy">buy now</a>
      <a href="#" class="cart">add to cart</a>
   </div>
</div>
<div class="preview" data-target="p-17">
   <i class="fas fa-times"></i>
   <img src="raw17.jpg" alt=""width="250px" height="250px">
   <h3>Camel Oil Pastels</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>Camel Student Oil Pastels 12 Shades with Free Scraping Tool</p>
   <div class="price">&#8377;50</div>
   <div class="buttons">
      <a href="#" class="buy">buy now</a>
      <a href="#" class="cart">add to cart</a>
   </div>
</div>
<div class="preview" data-target="p-18">
   <i class="fas fa-times"></i>
   <img src="raw18.jpeg" alt=""width="250px" height="250px">
   <h3>Oil Pastels from Gallery</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>Mungyo Gallery Artist's Soft Oil Pastels - 36 Colors.</p>
   <div class="price">&#8377;850</div>
   <div class="buttons">
      <a href="#" class="buy">buy now</a>
      <a href="#" class="cart">add to cart</a>
   </div>
</div>
<div class="preview" data-target="p-19">
   <i class="fas fa-times"></i>
   <img src="raw19.jpg" alt=""width="250px" height="250px">
   <h3>Camel Oil Pastels</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>Camel Student Oil Pastels with Reusable Plastic Box - 50 Shades.</p>
   <div class="price">&#8377;270</div>
   <div class="buttons">
      <a href="#" class="buy">buy now</a>
      <a href="#" class="cart">add to cart</a>
   </div>
</div>
<div class="preview" data-target="p-20">
   <i class="fas fa-times"></i>
   <img src="raw20.jpg" alt=""width="250px" height="250px">
   <h3>Fevicol</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>Pidilite Fevicol MR Easy Flow Squeeze Bottle - 105g,Ultimate Adhesive for Students Project Work & Serious Crafters.</p>
   <div class="price">&#8377;40</div>
   <div class="buttons">
      <a href="#" class="buy">buy now</a>
      <a href="#" class="cart">add to cart</a>
   </div>
</div>
<div class="preview" data-target="p-21">
   <i class="fas fa-times"></i>
   <img src="raw21.jpg" alt=""width="250px" height="250px">
   <h3>Fevi Stick</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>Shri Ram Stationary Fevistick Multi-Purpose Super Glue Stick Non Toxic Transparent Adhesive for Decoration & Craft Projects 8 Gram(6 packs also 1 FREE).</p>
   <div class="price">&#8377;180</div>
   <div class="buttons">
      <a href="#" class="buy">buy now</a>
      <a href="#" class="cart">add to cart</a>
   </div>
</div>
<div class="preview" data-target="p-22">
   <i class="fas fa-times"></i>
   <img src="raw22.jpg" alt=""width="250px" height="250px">
   <h3>Fevicol</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>Pidilite Fevicol MR Easy Flow Squeeze Bottle - 4Kg,Ultimate Adhesive for Students Project Work & Serious Crafters.</p>
   <div class="price">&#8377;600</div>
   <div class="buttons">
      <a href="#" class="buy">buy now</a>
      <a href="#" class="cart">add to cart</a>
   </div>
</div>
<div class="preview" data-target="p-23">
   <i class="fas fa-times"></i>
   <img src="raw23.jpg" alt=""width="250px" height="250px">
   <h3>Craft Glue</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>PIDILITE Fevicol Craft and General Adhesives(2 Fevistik 15gm, 2 Fevicol MR 200 gm, 1 Fevikwik and 1 Craft Glue, 1 Fevigum).</p>
   <div class="price">&#8377;199</div>
   <div class="buttons">
      <a href="#" class="buy">buy now</a>
      <a href="#" class="cart">add to cart</a>
   </div>
</div>
<div class="preview" data-target="p-24">
   <i class="fas fa-times"></i>
   <img src="raw24.jpg" alt=""width="250px" height="250px">
   <h3>Galvanised Wire</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>ART IFACT 10 Meters - 9 Gauge(3.7mm) Aluminium Sliver Art and Craft Wire for Jewellery Making,Flower Decoration and Floral Arrangement.</p>
   <div class="price">&#8377;8 /m</div>
   <div class="buttons">
      <a href="#" class="buy">buy now</a>
      <a href="#" class="cart">add to cart</a>
   </div>
</div>
<div class="preview" data-target="p-25">
   <i class="fas fa-times"></i>
   <img src="raw25.jpg" alt=""width="250px" height="250px">
   <h3>Paper Clips</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
   <div class="price">&#8377;99</div>
   <div class="buttons">
      <a href="#" class="buy">buy now</a>
      <a href="#" class="cart">add to cart</a>
   </div>
</div>
<div class="preview" data-target="p-26">
   <i class="fas fa-times"></i>
   <img src="raw26.jpg" alt=""width="250px" height="250px">
   <h3>Pins</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
   <div class="price">&#8377;133</div>
   <div class="buttons">
      <a href="#" class="buy">buy now</a>
      <a href="#" class="cart">add to cart</a>
   </div>
</div>
<div class="preview" data-target="p-27">
   <i class="fas fa-times"></i>
   <img src="raw27.jpg" alt=""width="250px" height="250px">
   <h3>Paper Clips(Stainless Steel)</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
   <div class="price">&#8377;99</div>
   <div class="buttons">
      <a href="#" class="buy">buy now</a>
      <a href="#" class="cart">add to cart</a>
   </div>
</div>
<div class="preview" data-target="p-28">
   <i class="fas fa-times"></i>
   <img src="raw28.jpg" alt=""width="250px" height="250px">
   <h3>Drawing Notebook</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
   <div class="price">&#8377;80</div>div>
   <div class="buttons">
      <a href="#" class="buy">buy now</a>
      <a href="#" class="cart">add to cart</a>
   </div>
</div>
<div class="preview" data-target="p-29">
   <i class="fas fa-times"></i>
   <img src="raw29.jpg" alt=""width="250px" height="250px">
   <h3>Classmate Drawing Copy</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
   <div class="price">&#8377;270</div>
   <div class="buttons">
      <a href="#" class="buy">buy now</a>
      <a href="#" class="cart">add to cart</a>
   </div>
</div>
<div class="preview" data-target="p-30">
   <i class="fas fa-times"></i>
   <img src="raw30.jpg" alt=""width="250px" height="250px">
   <h3>Classmate Drawing Notebook</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
   <div class="price">&#8377;79</div>
   <div class="buttons">
      <a href="#" class="buy">buy now</a>
      <a href="#" class="cart">add to cart</a>
   </div>
</div>
<div class="preview" data-target="p-31">
   <i class="fas fa-times"></i>
   <img src="raw31.jpg" alt=""width="250px" height="250px">
   <h3>Drawing Cardboard</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
   <div class="price">&#8377;649</div>
   <div class="buttons">
      <a href="#" class="buy">buy now</a>
      <a href="#" class="cart">add to cart</a>
   </div>
</div>
<div class="preview" data-target="p-32">
   <i class="fas fa-times"></i>
   <img src="raw32.jpg" alt=""width="250px" height="250px">
   <h3>Drawing Board</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
   <div class="price">&#8377;11623</div>
   <div class="buttons">
      <a href="#" class="buy">buy now</a>
      <a href="#" class="cart">add to cart</a>
   </div>
</div>
<div class="preview" data-target="p-33">
   <i class="fas fa-times"></i>
   <img src="raw33.jpg" alt=""width="250px" height="250px">
   <h3>Painting Canvas</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
   <div class="price">&#8377;270</div>
   <div class="buttons">
      <a href="#" class="buy">buy now</a>
      <a href="#" class="cart">add to cart</a>
   </div>
</div>
<div class="preview" data-target="p-34">
   <i class="fas fa-times"></i>
   <img src="raw34.jpg" alt=""width="250px" height="250px">
   <h3>Fine Art Canvas Board</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
   <div class="price">&#8377;74</div>
   <div class="buttons">
      <a href="#" class="buy">buy now</a>
      <a href="#" class="cart">add to cart</a>
   </div>
</div>
<div class="preview" data-target="p-35">
   <i class="fas fa-times"></i>
   <img src="raw35.jpg" alt=""width="250px" height="250px">
   <h3>Craft clay</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
   <div class="price">&#8377;7291</div>
   <div class="buttons">
      <a href="#" class="buy">buy now</a>
      <a href="#" class="cart">add to cart</a>
   </div>
</div>
<div class="preview" data-target="p-36">
   <i class="fas fa-times"></i>
   <img src="raw36.jpg" alt=""width="250px" height="250px">
   <h3>Pottery Clays</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
   <div class="price">&#8377;99</div>
   <div class="buttons">
      <a href="#" class="buy">buy now</a>
      <a href="#" class="cart">add to cart</a>
   </div>
</div>
<div class="preview" data-target="p-37">
   <i class="fas fa-times"></i>
   <img src="raw37.jpg" alt=""width="250px" height="250px">
   <h3>Terracotta Clay</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
   <div class="price">&#8377;90</div>
   <div class="buttons">
      <a href="#" class="buy">buy now</a>
      <a href="#" class="cart">add to cart</a>
   </div>
</div>
<div class="preview" data-target="p-38">
   <i class="fas fa-times"></i>
   <img src="raw38.jpg" alt=""width="250px" height="250px">
   <h3>Pottery Spinner Wheel</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
   <div class="price">&#8377;2724</div>
   <div class="buttons">
      <a href="#" class="buy">buy now</a>
      <a href="#" class="cart">add to cart</a>
   </div>
</div>
<div class="preview" data-target="p-39">
   <i class="fas fa-times"></i>
   <img src="raw39.jpg" alt=""width="250px" height="250px">
   <h3>Colour Tape</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
   <div class="price">&#8377;97</div>
   <div class="buttons">
      <a href="#" class="buy">buy now</a>
      <a href="#" class="cart">add to cart</a>
   </div>
</div>
<div class="preview" data-target="p-40">
   <i class="fas fa-times"></i>
   <img src="raw40.jpg" alt=""width="250px" height="250px">
   <h3>Washi Tapes</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
   <div class="price">&#8377;389</div>
   <div class="buttons">
      <a href="#" class="buy">buy now</a>
      <a href="#" class="cart">add to cart</a>
   </div>
</div>
<div class="preview" data-target="p-41">
   <i class="fas fa-times"></i>
   <img src="raw41.jpg" alt=""width="250px" height="250px">
   <h3>Washi Tapes</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
   <div class="price">&#8377;459</div>
   <div class="buttons">
      <a href="#" class="buy">buy now</a>
      <a href="#" class="cart">add to cart</a>
   </div>
</div>
<div class="preview" data-target="p-42">
   <i class="fas fa-times"></i>
   <img src="raw42.jpg" alt=""width="250px" height="250px">
   <h3>Washi Tapes</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
   <div class="price">&#8377;369</div>
   <div class="buttons">
      <a href="#" class="buy">buy now</a>
      <a href="#" class="cart">add to cart</a>
   </div>
</div>
<div class="preview" data-target="p-43">
   <i class="fas fa-times"></i>
   <img src="raw43.jpg" alt=""width="250px" height="250px">
   <h3>Glitters</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
   <div class="price">&#8377;159</div>
   <div class="buttons">
      <a href="#" class="buy">buy now</a>
      <a href="#" class="cart">add to cart</a>
   </div>
</div>
<div class="preview" data-target="p-44">
   <i class="fas fa-times"></i>
   <img src="raw44.jpg" alt=""width="250px" height="250px">
   <h3>Glitters</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
   <div class="price">&#8377;229</div>
   <div class="buttons">
      <a href="#" class="buy">buy now</a>
      <a href="#" class="cart">add to cart</a>
   </div>
</div>
<div class="preview" data-target="p-45">
   <i class="fas fa-times"></i>
   <img src="raw45.jpg" alt=""width="250px" height="250px">
   <h3>Card Boards</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
   <div class="price">&#8377;900</div>
   <div class="buttons">
      <a href="#" class="buy">buy now</a>
      <a href="#" class="cart">add to cart</a>
   </div>
</div>
<div class="preview" data-target="p-46">
   <i class="fas fa-times"></i>
   <img src="raw46.jpg" alt=""width="250px" height="250px">
   <h3>Card Boards</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
   <div class="price">&#8377;178</div>
   <div class="buttons">
      <a href="#" class="buy">buy now</a>
      <a href="#" class="cart">add to cart</a>
   </div>
</div>
<div class="preview" data-target="p-47">
   <i class="fas fa-times"></i>
   <img src="raw47.jpg" alt=""width="250px" height="250px">
   <h3>Cylindrical Cardboard</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
   <div class="price">&#8377;500</div>
   <div class="buttons">
      <a href="#" class="buy">buy now</a>
      <a href="#" class="cart">add to cart</a>
   </div>
</div>
<div class="preview" data-target="p-48">
   <i class="fas fa-times"></i>
   <img src="raw48.jpg" alt=""width="250px" height="250px">
   <h3>Round Cardboard</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
   <div class="price">&#8377;90</div>
   <div class="buttons">
      <a href="#" class="buy">buy now</a>
      <a href="#" class="cart">add to cart</a>
   </div>
</div>
<div class="preview" data-target="p-49">
   <i class="fas fa-times"></i>
   <img src="raw49.jpg" alt=""width="250px" height="250px">
   <h3>Mirrors</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
   <div class="price">&#8377;100</div>
   <div class="buttons">
      <a href="#" class="buy">buy now</a>
      <a href="#" class="cart">add to cart</a>
   </div>
</div>
<div class="preview" data-target="p-50">
   <i class="fas fa-times"></i>
   <img src="raw50.jpg" alt=""width="250px" height="250px">
   <h3>Mirrors</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
   <div class="price">&#8377;100</div>
   <div class="buttons">
      <a href="#" class="buy">buy now</a>
      <a href="#" class="cart">add to cart</a>
   </div>
</div>
<div class="preview" data-target="p-51">
   <i class="fas fa-times"></i>
   <img src="raw51.jpg" alt=""width="250px" height="250px">
   <h3>Mirrors</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
   <div class="price">&#8377;110</div>
   <div class="buttons">
      <a href="#" class="buy">buy now</a>
      <a href="#" class="cart">add to cart</a>
   </div>
</div>
<div class="preview" data-target="p-52">
   <i class="fas fa-times"></i>
   <img src="raw52.jpg" alt=""width="250px" height="250px">
   <h3>Stapler</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
   <div class="price">&#8377;110</div>
   <div class="buttons">
      <a href="#" class="buy">buy now</a>
      <a href="#" class="cart">add to cart</a>
   </div>
</div>
<div class="preview" data-target="p-53">
   <i class="fas fa-times"></i>
   <img src="raw53.jpg" alt=""width="250px" height="250px">
   <h3>Mirrors</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
   <div class="price">&#8377;60</div>
   <div class="buttons">
      <a href="#" class="buy">buy now</a>
      <a href="#" class="cart">add to cart</a>
   </div>
</div>
<div class="preview" data-target="p-54">
   <i class="fas fa-times"></i>
   <img src="raw54.jpg" alt=""width="250px" height="250px">
   <h3>Craft Mirrors</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
   <div class="price">&#8377;150</div>
   <div class="buttons">
      <a href="#" class="buy">buy now</a>
      <a href="#" class="cart">add to cart</a>
   </div>
</div>
<div class="preview" data-target="p-55">
   <i class="fas fa-times"></i>
   <img src="raw55.jpg" alt=""width="250px" height="250px">
   <h3>Wools</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
   <div class="price">&#8377;250</div>
   <div class="buttons">
      <a href="#" class="buy">buy now</a>
      <a href="#" class="cart">add to cart</a>
   </div>
</div>
<div class="preview" data-target="p-56">
   <i class="fas fa-times"></i>
   <img src="raw56.jpg" alt=""width="250px" height="250px">
   <h3>Wools</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
   <div class="price">&#8377;260</div>
   <div class="buttons">
      <a href="#" class="buy">buy now</a>
      <a href="#" class="cart">add to cart</a>
   </div>
</div>
<div class="preview" data-target="p-57">
   <i class="fas fa-times"></i>
   <img src="raw57.jpg" alt=""width="250px" height="250px">
   <h3>Colour Chalk</h3>
   <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
      <span>( 250 )</span>
   </div>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
   <div class="price">&#8377;168</div>
   <div class="buttons">
      <a href="#" class="buy">buy now</a>
      <a href="#" class="cart">add to cart</a>
   </div>
</div>

</div>

</body>
</html>
</body>
</html>