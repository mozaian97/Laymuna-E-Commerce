<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([


         [
          "name"=>'Amazon Aware Men\'s Cotton Slim Chino'	,
          "price"=>55,
          "Subcategory_id"=>1,
          "Category_id"=>1,
          "description"=>'98% Cotton, 2% Elastane
          Imported
          Zipper closure
          Machine Wash Cold
          Made with Organic Content Standard (OCS) 100 certified organic cotton and certified carbon neutral by ClimatePartner. Learn about our third party sustainability certifications below.
          Sits below the waist with a slim fit through hip and thigh
          Soft, durable cotton blend with a gentle stretch for all day comfort
          Zipper closure',
          "image"=>'https://m.media-amazon.com/images/I/71t3kgOY5gL._AC_SY500._SX._UX._SY._UY_.jpg',
          'Deleted_Status'=>0,
        ],
        [
         "name"=>'Lee Men\'s Pant'	,
         "price"=>60,
         "Subcategory_id"=>1,
         "Category_id"=>1,
         "description"=>'97% Cotton, 3% Spandex
         Imported
         Button closure
         Machine Wash
         STRAIGHT FIT. With a straight fit through the hip and thigh, these khaki pants sit at the natural waist with a flex waistband for comfort. These straight fit pants provides a tailored look that keeps you comfortable all day long',
         "image"=>'https://m.media-amazon.com/images/I/71+kC7OQ1TL._AC_SX522._SX._UX._SY._UY_.jpg',
         'Deleted_Status'=>0,
       ],
       [
        "name"=>'Unionbay Men\'s Pant'	,
        "price"=>75,
        "Subcategory_id"=>1,
        "Category_id"=>1,
        "description"=>'94% Nylon, 6% Spandex
        Imported
        Button closure
        Machine Wash
        Stretch, lightweight, quick drying fabric for comfort and east of movement
        Stretch fabric is quick drying, water resistant and UPF 50
        Mesh lined pockets 1 side leg pocket with zip closure zip back pockets',
        "image"=>'https://m.media-amazon.com/images/I/81V9WeRSbnL._AC_UY500_.jpg',
        'Deleted_Status'=>0,
      ],
      [
       "name"=>'Lee Men\'s Jeans'	,
       "price"=>17,
       "Subcategory_id"=>1,
       "Category_id"=>1,
       "description"=>'98% Cotton, 2% Spandex
       Imported
       Zipper closure
       Machine Wash
       SLIM FIT. When you’re on the move, these straight leg jeans will be your go to. Designed with a slim fit and Extreme Motion flex waistband, these pants are made to keep you comfortable through any activity'
             ,
       "image"=>'https://m.media-amazon.com/images/I/81xg9897IJL._AC_UY500_.jpg',
       'Deleted_Status'=>0,
     ],
     [
      "name"=>'Men\'s Slim-fit Flat-Front Chino Pant'	,
      "price"=>20,
      "Subcategory_id"=>1,
      "Category_id"=>1,
      "description"=>'60% Cotton, 40% Polyester
      Imported
      Zipper closure
      Machine Wash
      This slim-fit chino pant features wrinkle-free fabric, a flat-front design, and button-through back welt pockets for a tailored look and all-day comfort'  ,
      "image"=>'https://m.media-amazon.com/images/I/71TOtMq54ML._AC_UX569_.jpg',
      'Deleted_Status'=>0,
    ],
    [
     "name"=>'Pack of 3 Athletic Tech Men\'s Joggers'	,
     "price"=>65,
     "Subcategory_id"=>1,
     "Category_id"=>1,
     "description"=>'Men\'s Joggers: If you are looking for high-quality lightweight men\'s jogger workout sweatpants then look no further. We are proud to offer durable workout clothes for men.
     Men\'s Active Tech Joggers Material: High-quality Tricot men\'s athletic pants make for the ideal workout pants for men'
 ,
     "image"=>'https://m.media-amazon.com/images/I/61AzPdpewoL._AC_UX522_.jpg',
     'Deleted_Status'=>0,
   ],
   [
    "name"=>'Dickies Men\'s 874 Flex Work Pant'		,
    "price"=>84,
    "Subcategory_id"=>1,
    "Category_id"=>1,
    "description"=>'65% Polyester, 35% Cotton
    Imported
    Hook and Eye closure
    Machine Wash
    Our highest rise, sits at the natural waist. Traditional workwear waistband; consider sizing up on first purchase'
       ,
    "image"=>'https://m.media-amazon.com/images/I/4167Qht8giS._AC_UY500_.jpg',
    'Deleted_Status'=>0,
  ],
  [
   "name"=>'Men\'s Classic-fit Wrinkle-Resistant Flat-Front Chino Pant'		,
   "price"=>24,
   "Subcategory_id"=>1,
   "Category_id"=>1,
   "description"=>'60% Cotton, 40% Polyester
   Imported
   Zipper closure
   Machine Wash
   A flat-front dressy chino that offers classic style all week long; made to be wrinkle-resistant and easy-care with a traditional relaxed look and fit'
       ,
   "image"=>'https://m.media-amazon.com/images/I/71AQlnEIoDS._AC_UY500_.jpg'	,
   'Deleted_Status'=>0,
 ],
 [
  "name"=>'Dockers Men\'s Pant'		,
  "price"=>31,
  "Subcategory_id"=>1,
  "Category_id"=>1,
  "description"=>'98% Cotton, 2% Elastane
  Imported
  Button closure
  Machine Wash
  Lux Cotton Stretch
  Wrinkle-free technology, super durable buttons, permanent crease, shirt gripper
  Flex Comfort Waistband'
    ,
  "image"=>'https://m.media-amazon.com/images/I/71nKjjjmWqL._AC_UX425_.jpg'	,
  'Deleted_Status'=>0,
],
[
 "name"=>'Dockers Men\'s Classic Pants'		,
 "price"=>17,
 "Subcategory_id"=>1,
 "Category_id"=>1,
 "description"=>'64% Cotton, 34% Polyester, 2% Elastane
 Imported
 Button closure
 Machine Wash
 Eased fit through seat and thigh, sits at waist with a straight leg
 Stretch for performance'
   ,
 "image"=>'https://m.media-amazon.com/images/I/81Asrl18JXL._AC_UY500_.jpg'	,
 'Deleted_Status'=>0,
],
[
 "name"=>'Under Armour Men\'s Brawler Pants'		,
 "price"=>33,
 "Subcategory_id"=>1,
 "Category_id"=>1,
 "description"=>'100% Polyester
 Imported
 Pull On closure
 Machine Wash
 Smooth tricot knit exterior with a brushed interior for soft comfort & warmth
 Material wicks sweat & dries really fast'
   ,
 "image"=>'https://m.media-amazon.com/images/I/417sSTJxKGL._AC_UX522_.jpg'	,
 'Deleted_Status'=>0,
],
[
 "name"=>'Men\'s Pull-on Moisture Wicking Hiking Pant'		,
 "price"=>25,
 "Subcategory_id"=>1,
 "Category_id"=>1,
 "description"=>'100% Polyester
 Imported
 Pull On closure
 Machine Wash
 This classic, versatile hiking pant provides a clean, modern look perfect for any occasion
 With 5 basic pockets and a moisture wicking fabric
 Sport made better: we listen to customer feedback and fine-tune every detail to ensure quality, fit, and comfort'

   ,
 "image"=>'https://m.media-amazon.com/images/I/81NJcxTVF3L._AC_UY500_.jpg'	,
 'Deleted_Status'=>0,
],
[
 "name"=>'Columbia Men\'s Rapid Rivers Pant'		,
 "price"=>18,
 "Subcategory_id"=>1,
 "Category_id"=>1,
 "description"=>'97% Cotton, 3% Elastane
 Imported
 Button closure
 Machine Wash'
   ,
 "image"=>'https://m.media-amazon.com/images/I/719c1IpXB-L._AC_UY500_.jpg'	,
 'Deleted_Status'=>0,
],
[
 "name"=>'Calvin Klein Men\'s Slim Fit Dress Pant'	,
 "price"=>13,
 "Subcategory_id"=>1,
 "Category_id"=>1,
 "description"=>'88% Polyester, 11% Rayon-Rayonne,1% Spandex
 Imported
 Button closure
 Dry Clean Only
 Ready to wear. Arrives with a finished hemmed to avoid extra tailoring.
 Tailored around your body s natural silhouette.
 Tapered leg in a stretch comfort fabric for ease of movement.'

   ,
 "image"=>  'https://m.media-amazon.com/images/I/71hTmZ4wK3L._AC_UY500_.jpg'	,
 'Deleted_Status'=>0,
],
[
 "name"=>'Lee Men\'s Performance Series'	,
 "price"=>12,
 "Subcategory_id"=>1,
 "Category_id"=>1,
 "description"=>'Imported
 Button closure
 Machine Wash
 STRAIGHT FIT. With a straight fit through the hip and thigh, these jeans sit just below the waist with an Extreme Flex waistband for natural comfort.
 CLASSIC 5-POCKET STYLING. A classic fit jean designed with an authentic five-pocket'

   ,
 "image"=> 'https://m.media-amazon.com/images/I/81kTteylupL._AC_SX522._SX._UX._SY._UY_.jpg'	,
 'Deleted_Status'=>0,
],
[
 "name"=>'LEE Men\'s Relaxed-Fit, Flat-Front Pant',
 "price"=>10,
 "Subcategory_id"=>1,
 "Category_id"=>1,
 "description"=>'73% Cotton, 25% Polyester, 2% Spandex
 Imported
 Zipper closure
 Machine Wash
 RELAXED FIT. These mid-rise pants feature a relaxed fit through the seat and thigh with a tapered leg. These flat front pants offer a timeless look perfect for any occasion.
 PERFORMANCE FABRIC. Spill your morning cup of Joe on the way in the office? It will glide right off without staining. Forget to iron last night? No need. Designed with ultra-performance stain and wrinkle-resistant fabric.'

   ,
 "image"=> 'https://m.media-amazon.com/images/I/71VXHsrpMKL._AC_UY500_.jpg'		,
 'Deleted_Status'=>0,
],
[
 "name"=>'Marmot Men\'s Knife Edge Jacket',
 "price"=>12,
 "Subcategory_id"=>2,
 "Category_id"=>1,
 "description"=>'100% Polyester
 Imported
 Marmot Men\'s Knife Edge Jacket, Black, Small
 Marmot
 Black'
   ,
 "image"=>'https://m.media-amazon.com/images/I/61d1nh5heAL._AC_UY500_.jpg'			,
 'Deleted_Status'=>0,
],
[
 "name"=>'DRI Duck Men\'s Cheyenne Jacket',
 "price"=>14,
 "Subcategory_id"=>2,
 "Category_id"=>1,
 "description"=>'100% Cotton
 Imported
 Zipper closure
 Machine Wash
 12 oz. 100% cotton quarry washed Boulder cloth canvas
 Made from heavy duty 12 oz. cotton quarry washed Boulder Cloth Canvas, soft and flexible, long wear and comfortable
 Sized for comfortable fit'
   ,
 "image"=>'https://m.media-amazon.com/images/I/71+NpqpwRyL._AC_UX522_.jpg'			,
 'Deleted_Status'=>0,
],
[
 "name"=>'Men\'s Long Sleeve Quilted Lined Flannel Shirt Jacket',
 "price"=>40,
 "Subcategory_id"=>2,
 "Category_id"=>1,
 "description"=>'Flannel
 Imported
 Button closure
 RELAXED FIT: Constructed with comfort in mind, this long sleeve quilted lined flannel shirt is a wardrobe essential for those cold Winter nights.
 HEAVYWEIGHT MATERIALS: Built with button cuffs and quilted polyester padding for more durability and added warmth.
 FOR ADDED WARMTH: Padded with diamond black quilted polyester to create extra warmth while also creating breathability, this is an extremely versatile flannel shirt.
 FUNCTIONAL STYLE: Lined with 100% cotton, this brushed flannel is made with style in mind. Wear it on the job or out to lunch, this essential closet staple can be worn for many occasions.'

   ,
 "image"=>  'https://m.media-amazon.com/images/I/91JqNJYhR2L._AC_UX522_.jpg'			,
 'Deleted_Status'=>0,
],
[
 "name"=>'Dickies Men\'s Insulated Eisenhower Front-Zip Jacket',
 "price"=>30,
 "Subcategory_id"=>2,
 "Category_id"=>1,
 "description"=>'65% Polyester, 35% Cotton
 Imported
 Zipper closure
 Machine Wash
 CLASSIC WORKWEAR: This tough, versatile jacket has classic styling, rugged durability & superior comfort making it one of our most popular twill work jackets. It’s constructed of poly/cotton twill, wrinkle resistant & vat dyed for superior color retention'

   ,
 "image"=>  'https://m.media-amazon.com/images/I/61zcfaJNRqL._AC_UX466_.jpg'			,
 'Deleted_Status'=>0,
],
[
 "name"=>'Dickies Men\'s Insulated Eisenhower Front-Zip Jacket',
 "price"=>30,
 "Subcategory_id"=>2,
 "Category_id"=>1,
 "description"=>'65% Polyester, 35% Cotton
 Imported
 Zipper closure
 Machine Wash
 CLASSIC WORKWEAR: This tough, versatile jacket has classic styling, rugged durability & superior comfort making it one of our most popular twill work jackets. It’s constructed of poly/cotton twill, wrinkle resistant & vat dyed for superior color retention'

   ,
 "image"=>  'https://m.media-amazon.com/images/I/61zcfaJNRqL._AC_UX466_.jpg'			,
 'Deleted_Status'=>0,
],
[
 "name"=>'Wolverine Men\'s Lockhart Jacket',
 "price"=>20,
 "Subcategory_id"=>2,
 "Category_id"=>1,
 "description"=>'100% Cotton
 Imported
 Zipper closure
 Machine Wash
 DURABLE DUCK 10oz. cotton duck shell for long lasting wear
 BI-SWING BACK Elasticized back provides full range of arm motion'
   ,
 "image"=>  'https://m.media-amazon.com/images/I/71OvyFWHyRL._AC_UX522_.jpg'
			,
 'Deleted_Status'=>0,
],
[
 "name"=>'Wolverine Men\'s Hooded Shirt Jacket',
 "price"=>25,
 "Subcategory_id"=>2,
 "Category_id"=>1,
 "description"=>'Cover: 100% Cotton; Lining: 100% Polyester
 Imported
 Snap closure
 Machine Wash
 Relaxed fit with extended tail
 Two snap front chest pockets with pencil opening on the left side and two lower side seam hand pockets'

   ,
 "image"=>  'https://m.media-amazon.com/images/I/61QmIgajZaL._AC_SX522._SX._UX._SY._UY_.jpg'

			,
 'Deleted_Status'=>0,
],

[
 "name"=>'Helly-Hansen 65551 Men\'s Alpha 3.0 Jacket',
 "price"=>16,
 "Subcategory_id"=>2,
 "Category_id"=>1,
 "description"=>'Face: 85% Polyamide, 15% Elastane; Back: 100% Polyurethane
 Imported
 Zipper closure
 Our best-selling ski jacket just got even better with the innovative Life Pocket
 Helly Tech Professional
 2 ply fabric construction
 4-way full stretch fabric
 H²Flow System mechanical venting for optimal comfort'

   ,
 "image"=> 'https://m.media-amazon.com/images/I/817cTsJlydS._AC_UY500_.jpg'


			,
 'Deleted_Status'=>0,
],
[
 "name"=>'Champion Stadium Packable Jacket',
 "price"=>16,
 "Subcategory_id"=>2,
 "Category_id"=>1,
 "description"=>'100% Recycled Polyester (2.8 Oz.)
 Imported
 Zipper closure
 Machine Wash
 100% recycled polyester fabric with water resistant coating. Iconic \'C\' patch on left sleeve
 Wind resistant.
 Loose fitting hem with shock cords to tighten.'

   ,
 "image"=>'https://m.media-amazon.com/images/I/61B6IGWQQ7L._AC_UX425_.jpg'
			,
 'Deleted_Status'=>0,
],

[
 "name"=>'Columbia Men\'s Flash Forward Windbreaker',
 "price"=>16,
 "Subcategory_id"=>2,
 "Category_id"=>1,
 "description"=>'100% Polyester
 Imported
 Zipper closure
 Machine Wash
 COMFORTABLE WINDBREAKER: The Columbia Men\'s Flashback Windbreaker is a water resistant shell, designed to shield you and keep you warm on cool blustery days.
 WATER RESISTANT SHELL: Created from our matte face wind-breaking material'

   ,
 "image"=>'https://m.media-amazon.com/images/I/81T-vIbvNkL._AC_UX425_.jpg'

			,
 'Deleted_Status'=>0,
],
[
 "name"=>'Helly-Hansen Men\'s Team Crew Midlayer Jacket',
 "price"=>31,
 "Subcategory_id"=>2,
 "Category_id"=>1,
 "description"=>'Imported
 Waterproof, windproof and breathable midlayer jacket with Helly Tech fabric keeps water out and allows sweat to evaporate in order to keep you dry
 Fully lined with 100 gram Polartec fleece for additional warmth from cold wet weather
 Fleece lined collar and handwarmer pockets provide added comfort and a little extra insulation'
   ,
 "image"=>'https://m.media-amazon.com/images/I/81csEUjdC9L._AC_UX425_.jpg'
			,
 'Deleted_Status'=>0,
],
[
 "name"=>'Marmot Men\'s Magus Lightweight Waterproof Rain Jacket',
 "price"=>20,
 "Subcategory_id"=>2,
 "Category_id"=>1,
 "description"=>'Jacket: MemBrain 100% polyester with plain weave, 3.2 oz/yd; Liner: 100% polyester raschel fleece, 8.5 oz/yd
 Imported
 Zipper closure
 Machine Wash'
   ,
 "image"=>'https://m.media-amazon.com/images/I/81ES1APtIrL._AC_UY500_.jpg'
			,
 'Deleted_Status'=>0,
],
[
 "name"=>'Marmot Men\'s PreCip Jacket',
 "price"=>23,
 "Subcategory_id"=>2,
 "Category_id"=>1,
 "description"=>'100% Nylon
 Imported
 Zipper closure
 Machine Wash'
   ,
 "image"=>'https://m.media-amazon.com/images/I/910yzuZklGL._AC_UY500_.jpg'
			,
 'Deleted_Status'=>0,
],
[
 "name"=>'Marmot Men\'s Calen Insulated Puffer Jacket'	,
 "price"=>13,
 "Subcategory_id"=>2,
 "Category_id"=>1,
 "description"=>'100% Nylon
 Imported
 Machine Wash
 Insulated, lightweight Men\'s puffer jacket can be worn on its own in mild climates or as a shell in winter weather'

   ,
 "image"=>'https://m.media-amazon.com/images/I/91Qmjl+AiHL._AC_UY500_.jpg'
			,
 'Deleted_Status'=>0,
],
[
 "name"=>'Hanes Men\'s Hooded Sweatshirt'	,
 "price"=>10,
 "Subcategory_id"=>3,
 "Category_id"=>1,
 "description"=>'50% cotton/50% polyester, with up to 5% polyester created from recycled plastic
 Imported
 Pull On closure
 Machine Wash
 Soft, durable fleece with double-needle cover-seamed neck and armholes stays strong when you work or play hard.
 Machine wash it again and again without hesitation because it\'s pill-resistant
 Made with up to 5% polyester created from recycled plastic bottles.
 Dyed-to-match drawcord.'

   ,
 "image"=>'https://m.media-amazon.com/images/I/61GiJTR9PjL._AC_SX425._SX._UX._SY._UY_.jpg'
			,
 'Deleted_Status'=>0,
],
[
 "name"=>'Men\'s Crewneck Sweater',
 "price"=>105,
 "Subcategory_id"=>3,
 "Category_id"=>1,
 "description"=>'100% Cotton
 Imported
 Machine Wash
 This casual wardrobe-essential comes in a lightweight fabric perfect for comfortable everyday wear
 Features ribbing on the collar, hem, and cuffs to keep you warm
 Everyday made better: we listen to customer feedback and fine-tune every detail to ensure quality, fit, and comfort'


   ,
 "image"=>'https://m.media-amazon.com/images/I/A12vuIEU-5L._AC_UX425_.jpg'
			,
 'Deleted_Status'=>0,
],

[
 "name"=>'Hanes Men\'s Full-Zip Eco-Smart Hoodie',
 "price"=>150,
 "Subcategory_id"=>3,
 "Category_id"=>1,
 "description"=>'50% Cotton, 50% Polyester
 Imported
 Machine Wash
 Either tagless or with easily removed tearaway tag for comfort
 Cozy 7.8-ounce fleece made with up to 5 percent polyester created from recycled plastic
 Double-needle cover-seamed neck and armholes
 Pill-resistant fabric with high-stitch density for durability'

   ,
 "image"=>'https://m.media-amazon.com/images/I/71ZE0VUjkSL._AC_UX522_.jpg'
			,
 'Deleted_Status'=>0,
],
[
 "name"=>'Hanes Men\'s Crewneck Sweatshirt',
 "price"=>175,
 "Subcategory_id"=>3,
 "Category_id"=>1,
 "description"=>'90% cotton/10% polyester
 Imported
 shirts closure
 Heavyweight and durable fleece made with 90% cotton/10% polyester
 9.7 oz. fleece is our heaviest and warmest fleece making it ideal for keeping out the cold
 Patented low-pill fabric
 Stretch ribbed cuffs and relaxed hem
 Imported'

   ,
 "image"=>'https://m.media-amazon.com/images/I/61TYIYCffFL._AC_SY500._SX._UX._SY._UY_.jpg'
			,
 'Deleted_Status'=>0,
],
[
 "name"=>'Hanes Men\'s EcoSmart Sweatshirt',
 "price"=>75,
 "Subcategory_id"=>3,
 "Category_id"=>1,
 "description"=>'50% Cotton, 50% Polyester
 Imported
 Machine Wash
 Cozy 7.8-ounce fleece made with up to 5 percent polyester created from recycled plastic
 Pill-resistant fabric with high-stitch density for durability
 Lay flat collar keeps its shape wash after wash
 All the comfort of Hanes with our famous tag-free collar
 Either tagless or with easily remove the tear away tag for comfort'

   ,
 "image"=>'https://m.media-amazon.com/images/I/81w5md5ziuL._AC_SX522._SX._UX._SY._UY_.jpg'

			,
 'Deleted_Status'=>0,
],
[
 "name"=>'Men\'s Fleece Crewneck Sweatshirt',
 "price"=>80,
 "Subcategory_id"=>3,
 "Category_id"=>1,
 "description"=>'52% Cotton, 48% Polyester
 Imported
 Machine Wash
 This classic crewneck sweatshirt features ribbing on the collar, hem, and cuffs to keep you warm
 With accent stitching details
 Everyday made better: we listen to customer feedback and fine-tune every detail to ensure quality, fit, and comfort'


   ,
 "image"=>'https://m.media-amazon.com/images/I/91NRoSbBRvL._AC_SX522._SX._UX._SY._UY_.jpg'


			,
 'Deleted_Status'=>0,
],
[
 "name"=>'Men\'s Cotton Cardigan Sweater',
 "price"=>40,
 "Subcategory_id"=>3,
 "Category_id"=>1,
 "description"=>'100% Cotton
 Imported
 Machine Wash
 Comfortable and versatile, this cotton sweater is perfect on its own or as a layer under a blazer or jacket
 This cardigan sweater features a long sleeve with ribbing at cuffs and waist and with front pockets
 Everyday made better: we listen to customer feedback and fine-tune every detail to ensure quality, fit, and comfort'

   ,
 "image"=>'https://m.media-amazon.com/images/I/A1v6G7a+U7L._AC_UX522_.jpg'
			,
 'Deleted_Status'=>0,
],
[
 "name"=>'Goodthreads Men\'s Soft Cotton Shawl Cardigan Sweater',
 "price"=>15,
 "Subcategory_id"=>3,
 "Category_id"=>1,
 "description"=>'100% Cotton
 Imported
 Machine Wash
 Easy through chest and tapered through waist
 Super-soft natural fiber midweight yarn
 Front welt pockets'
   ,
 "image"=>'https://m.media-amazon.com/images/I/A15WtTd+-rL._AC_SX425._SX._UX._SY._UY_.jpg'

			,
 'Deleted_Status'=>0,
],
[
 "name"=>'Vineyard Vines Men\'s Sweater',
 "price"=>55,
 "Subcategory_id"=>3,
 "Category_id"=>1,
 "description"=>'55% Cotton, 45% Polyester
 Imported
 Zipper closure
 Machine Wash
 MEN\'S 1/4-ZIP PULLOVER – Your favorite vineyard vines men\'s pullover sweater, with even more to love. This must-have quarter zip pullover has our signature whale embroidered logo on the chest, is easy to care for, and makes a great gift for any occasion.
 NEW, INCREDIBLY SOFT FABRIC – The best just got better. This 1/4-zip pullover for men features our new, incredibly soft fabric with moisture-wicking, wrinkle-resistance and a subtle stripe.'

   ,
 "image"=>'https://m.media-amazon.com/images/I/718Lv6sB8CS._AC_UX522_.jpg'
			,
 'Deleted_Status'=>0,
],

[
 "name"=>'Dockers Men\'s Regular Fit Long Sleeve Crewneck Sweater',
 "price"=>30,
 "Subcategory_id"=>3,
 "Category_id"=>1,
 "description"=>'60% Cotton, 40% Polyester
 Imported
 Pull On closure
 Machine Wash
 Damask main label
 French terry fabric
 Logo shell button'
   ,
 "image"=>'https://m.media-amazon.com/images/I/A17uB6jmivL._AC_UX425_.jpg'
			,
 'Deleted_Status'=>0,
],
[
 "name"=>'Goodthreads Men\'s Crewneck Sweater',
 "price"=>25,
 "Subcategory_id"=>3,
 "Category_id"=>1,
 "description"=>'100% Cotton
 Imported
 Machine Wash
 Perfect lightweight layering sweater in a waffle pattern thermal stitch. This 100% cotton sweater is lighter than our other soft cotton sweaters but more substantial than a traditional thermal t-shirt
 Ribbed collar, hem, and cuffs'
   ,
 "image"=>'https://m.media-amazon.com/images/I/A1toh5iAsWL._AC_UX425_.jpg'

			,
 'Deleted_Status'=>0,
],
[
 "name"=>'Men\'s Long-Sleeve Soft Touch V-Neck Sweater',
 "price"=>60,
 "Subcategory_id"=>3,
 "Category_id"=>1,
 "description"=>'56% Cotton, 23% Polyester, 18% Acrylic, 3% Spandex
 Imported
 Machine Wash
 This classic soft touch V-neck sweater features ribbing on the collar, hem, and cuffs to keep you warm
 Comes in a relaxed fit, easy through the chest
 Model is 6\'1" and wearing a size Medium
 Everyday made better: we listen to customer feedback and fine-tune every detail to ensure quality, fit, and comfort'

   ,
 "image"=>'https://m.media-amazon.com/images/I/A1ApjR8+aAL._AC_SX466._SX._UX._SY._UY_.jpg'
			,
 'Deleted_Status'=>0,
],
[
 "name"=>'Gildan Adult Fleece Crewneck Sweatshirt',
 "price"=>145,
 "Subcategory_id"=>3,
 "Category_id"=>1,
 "description"=>'50% Cotton, 50% Polyester
 Imported
 Pull On closure
 Machine Wash
 Fabric Weight: 8.0 oz/sq.yd.
 Classic fit
 Brushed interior provides superior cozy softness'
   ,
 "image"=>'https://m.media-amazon.com/images/I/71GCRwlYsLL._AC_UX522_.jpg'
			,
 'Deleted_Status'=>0,
],
[
 "name"=>'Under Armour Men\'s Rival Fleece Full Zip Hoodie',
 "price"=>145,
 "Subcategory_id"=>3,
 "Category_id"=>1,
 "description"=>'80% Cotton, 20% Polyester
 Imported
 Machine Wash
 Ultra soft, mid weight cotton blend fleece with brushed interior for extra warmth
 Open hand pockets
 Ribbed cuffs & bottom hem'
   ,
 "image"=>'https://m.media-amazon.com/images/I/81KcCgbuKEL._AC_SX425._SX._UX._SY._UY_.jpg'
			,
 'Deleted_Status'=>0,
],

[
 "name"=>'Comfort Colors Men\'s Adult 1/4 Zip Sweatshirt',
 "price"=>150,
 "Subcategory_id"=>3,
 "Category_id"=>1,
 "description"=>'80% Cotton, 20% Polyester
 Imported
 Quarter Zip
 Pull On closure
 Machine Wash
 Soft washed garment dyed fabric
 Self fabric lined collar'
   ,
 "image"=>'https://m.media-amazon.com/images/I/91sLMIzqKDL._AC_UX522_.jpg'

			,
 'Deleted_Status'=>0,
],
[
 "name"=>'Goodthreads Men\'s Soft Cotton V-Neck Summer Sweater',
 "price"=>30,
 "Subcategory_id"=>3,
 "Category_id"=>1,
 "description"=>'70% Cotton, 30% Nylon
 Imported
 Machine Wash
 Comfortable and versatile, this soft cotton sweater features a crew neckline, and ribbing at the hem and cuffs
 Care Tip: since this a 100% cotton sweater it will shrink in a hot dryer To minimize shrinkage- use low heat; to maintain size- lay flat to dry
 At Goodthreads, we are on a mission to create incredible clothes crafted with care'
   ,
 "image"=>'https://m.media-amazon.com/images/I/91EnFqseeFL._AC_SX466._SX._UX._SY._UY_.jpg'


			,
 'Deleted_Status'=>0,
],
[
 "name"=>'Nautica Men\'s Ribbed Sweater',
 "price"=>170,
 "Subcategory_id"=>3,
 "Category_id"=>1,
 "description"=>'56% Cotton, 44% Rayon
 Imported
 No Closure closure
 Machine Wash
 Slip-on style; crew neck with ribbed collar
 Classic-fit; long sleeves with ribbed cuffs; ribbed hem
 J-class logo at chest
 Classic-fit ribbed sweater'
   ,
 "image"=>'https://m.media-amazon.com/images/I/91pugeVGbmL._AC_UX425_.jpg'


			,
 'Deleted_Status'=>0,
],

[
 "name"=>'Lacoste Men\'s Long Sleeve V Neck Cotton Jersey Sweater',
 "price"=>200,
 "Subcategory_id"=>3,
 "Category_id"=>1,
 "description"=>'100% Cotton
 Imported
 Pull On closure
 Machine Wash
 Classic Fit
 Classic ribbed V-neck, pullover style
 100% organic cotton jersey feels soft all year round'
   ,
 "image"=>'https://m.media-amazon.com/images/I/71Aq-mMO0AL._AC_SX466._SX._UX._SY._UY_.jpg'



			,
 'Deleted_Status'=>0,
],
[
 "name"=>'Champion Men\'s Powerblend Fleece Crew'
,
 "price"=>123,
 "Subcategory_id"=>3,
 "Category_id"=>1,
 "description"=>'100% Cotton
 Imported
 Machine Wash
 Warm and comfortable 9 oz. Blended cottonpoly fleece
 Reduced pill
 Reduced shrinkage'
   ,
 "image"=>'https://m.media-amazon.com/images/I/81o2f5GDiuL._AC_UX466_.jpg'

			,
 'Deleted_Status'=>0,
],
[
 "name"=>'Gildan Adult Fleece Zip Hooded Sweatshirt'
,
 "price"=>23,
 "Subcategory_id"=>3,
 "Category_id"=>1,
 "description"=>'50% Cotton, 50% Polyester
 Imported
 Pull On closure
 Machine Wash
 Fabric Weight: 8.0 oz/sq.yd.
 Classic fit with Set-in sleeves'
   ,
 "image"=>'https://m.media-amazon.com/images/I/51p-uzJzAyL._AC_SX522._SX._UX._SY._UY_.jpg'
			,
 'Deleted_Status'=>0,
],
[
 "name"=>'adidas Men\'s Lite Racer Adapt Running Shoe'
,
 "price"=>23,
 "Subcategory_id"=>4,
 "Category_id"=>1,
 "description"=>'100% Synthetic
 Rubber sole
 adidas men\'s Running Shoe
 The adidas brand has a long history and deep-rooted connection with sport. Everything we do is rooted in sport.
 Driven by a relentless pursuit of innovation as well as decades of accumulating sports science expertise, we cater for all, from elite professional athletes and teams to any individual who wants to make sport part of their lives.'

   ,
 "image"=>'https://m.media-amazon.com/images/I/81D-AGiRC+L._AC_SX500._SX._UX._SY._UY_.jpg'

			,
 'Deleted_Status'=>0,
],
[
 "name"=>'Columbia Men\'s Bahama Vent PFG Lace Relaxed Boat Shoe'
,
 "price"=>23,
 "Subcategory_id"=>4,
 "Category_id"=>1,
 "description"=>'100% Rubber
 Imported
 Rubber sole
 OMNI-SHIELD: Go ahead, try and get dirty. Omni-Shield helps you stay clean and dry by resisting the absorption of liquids. Unlike most fabrics that absorb moisture, Omni-Shield repels moisture and dries quickly—avoiding stains and keeping you clean.
 ADVANCED TECHNOLOGY: The Men\'s Bahama Vent Relaxed PFG Boat Shoe features our waterproof and breathable construction, lightweight, durable midsole for long lasting comfort and high energy return, and our advanced traction rubber sole for slip-free movement on wet ground.'

   ,
 "image"=>'https://m.media-amazon.com/images/I/71eiPWYIHVL._AC_UX500_.jpg'

			,
 'Deleted_Status'=>0,
],
[
 "name"=>'Rockport Men\'s Eureka Walking Shoe'
,
 "price"=>23,
 "Subcategory_id"=>4,
 "Category_id"=>1,
 "description"=>'San crispino
 Imported
 Rubber sole
 GENUINE LEATHER: Leather upper is easy to clean and maintain, so these walking shoes for men look and feel even better with time
 FATIGUE-FIGHTING FOOTBED: Latex foam footbed generously cushions the foot to help reduce foot fatigue as you stand and walk
 BREATHABLE LINING: Moisture-wicking mesh lining offers breathability to create extra-comfortable walking shoes for men
 IMPACT-ABSORBING: EVA midsole provides flexible, lightweight impact absorption'   ,
 "image"=>'https://m.media-amazon.com/images/I/61rtuwpKtoL._AC_UX500_.jpg'

			,
 'Deleted_Status'=>0,
],
[
 "name"=>'adidas Men\'s Runfalcon 2.0 Running Shoe'
,
 "price"=>30,
 "Subcategory_id"=>4,
 "Category_id"=>1,
 "description"=>'100% Rubber
 Rubber sole
 Men\'s casual athletic sneakers for an active lifestyle
 Regular fit
 Mesh upper for lightweight breathability and no-sew heel for support
 EVA midsole for lightweight cushioning
 Rubber outsole for durability and traction'   ,
 "image"=>'https://m.media-amazon.com/images/I/81yOtHoB2BL._AC_UX500_.jpg'
			,
 'Deleted_Status'=>0,
]
]);
    }
}


/*


        [ 'name'=>'Pack of 3 Athletic Tech Mens Joggers',
          'price'=>'65.00',
          'image'=>'https://m.media-amazon.com/images/I/61AzPdpewoL._AC_UX522_.jpg',
          	'description'=>'
          Men\'s Joggers: If you are looking for high-quality lightweight men s jogger workout sweatpants then look no further. We are proud to offer durable workout clothes for men.
          Mens Active Tech Joggers Material: High-quality Tricot mens athletic pants make for the ideal workout pants for men.
          ',
          'Subcategory_id'=>1],
          [
          'name'=>'Dickies Men\'s 874 Flex Work Pant',
          'price'=>'84.00',
          'image'=>'https://m.media-amazon.com/images/I/4167Qht8giS._AC_UY500_.jpg',
          'description'=>'
          65% Polyester, 35% Cotton
          Imported
          Hook and Eye closure
          Machine Wash
          Our highest rise, sits at the natural waist. Traditional workwear waistband; consider sizing up on first purchase.
          ',
          'Subcategory_id'=>1],

          [
          'name'=>'Men\'s Classic-fit Wrinkle-Resistant Flat-Front Chino Pant',
          'price'=>'81.00',
          'image'=>'https://m.media-amazon.com/images/I/71AQlnEIoDS._AC_UY500_.jpg',
          'description'=>'60% Cotton, 40% Polyester
          Imported
          Zipper closure
          Machine Wash
          A flat-front dressy chino that offers classic style all week long; made to be wrinkle-resistant and easy-care with a traditional relaxed look and fit
          ',
          'Subcategory_id'=>1],
          [
          'name'=>'Dockers Men\'s Pant',
          'price'=>'30.00',
          'image'=>'https://m.media-amazon.com/images/I/71nKjjjmWqL._AC_UX425_.jpg',
          'description'=>'
          98% Cotton, 2% Elastane
          Imported
          Button closure
          Machine Wash
          Lux Cotton Stretch
          Wrinkle-free technology, super durable buttons, permanent crease, shirt gripper
          Flex Comfort Waistband',
          'Subcategory_id'=>1],

          [
          'name'=>'Dockers Men\'s Classic Pants',
          'price'=>'45.00',
          'image'=>'https://m.media-amazon.com/images/I/81Asrl18JXL._AC_UY500_.jpg',
          'description'=>'
          64% Cotton, 34% Polyester, 2% Elastane
          Imported
          Button closure
          Machine Wash
          Eased fit through seat and thigh, sits at waist with a straight leg
          Stretch for performance
          ',
          'Subcategory_id'=>1],
          [
          'name'=>'
          Under Armour Men\'s Brawler Pants',
          'price'=>'33.00',
          'image'=>'https://m.media-amazon.com/images/I/417sSTJxKGL._AC_UX522_.jpg',
          'description'=>
          '
          100% Polyester
          Imported
          Pull On closure
          Machine Wash
          Smooth tricot knit exterior with a brushed interior for soft comfort & warmth
          Material wicks sweat & dries really fast',
          'Subcategory_id'=>1],
          	[
            'name'=>'Men\'s Pull-on Moisture Wicking Hiking Pant',
            'price'=>'25.00',
            'image'=>'https://m.media-amazon.com/images/I/81NJcxTVF3L._AC_UY500_.jpg',
            'description'=>'100% Polyester
          Imported
          Pull On closure
          Machine Wash
          This classic, versatile hiking pant provides a clean, modern look perfect for any occasion
          With 5 basic pockets and a moisture wicking fabric
          Sport made better: we listen to customer feedback and fine-tune every detail to ensure quality, fit, and comfort
          ',
          'Subcategory_id'=>1],
          [
          'name'=>'Columbia Men\'s Rapid Rivers Pant',
          'price'=>'28.00',
          'image'=>'https://m.media-amazon.com/images/I/719c1IpXB-L._AC_UY500_.jpg',
          'description'=>'
          97% Cotton, 3% Elastane
          Imported
          Button closure
          Machine Wash',
          'Subcategory_id'=>1],

          [

          'name'=>'Calvin Klein Men\'s Slim Fit Dress Pant',
          'price'=>'28.00',
          'image'=>'https://m.media-amazon.com/images/I/71hTmZ4wK3L._AC_UY500_.jpg',
          'description'=>'88% Polyester, 11% Rayon-Rayonne,1% Spandex
          Imported
          Button closure
          Dry Clean Only
          Ready to wear. Arrives with a finished hemmed to avoid extra tailoring.
          Tailored around your body s natural silhouette.
          Tapered leg in a stretch comfort fabric for ease of movement.',
          'Subcategory_id'=>1],

          [
          'name'=>'Lee Men\'s Performance Series',
          'price'=>'43.00',
          'image'=>'https://m.media-amazon.com/images/I/81kTteylupL._AC_SX522._SX._UX._SY._UY_.jpg',
          'description'=>'Imported
          Button closure
          Machine Wash
          STRAIGHT FIT. With a straight fit through the hip and thigh, these jeans sit just below the waist with an Extreme Flex waistband for natural comfort.
          CLASSIC 5-POCKET STYLING. A classic fit jean designed with an authentic five-pocket
          ',
          'Subcategory_id'=>1],
          [
          'name'=>'LEE Men\'s Relaxed-Fit, Flat-Front Pant',
          'prcie'=>'70.00',
          'image'=>'https://m.media-amazon.com/images/I/71VXHsrpMKL._AC_UY500_.jpg',
          'description'=>'73% Cotton, 25% Polyester, 2% Spandex
          Imported
          Zipper closure
          Machine Wash
          RELAXED FIT. These mid-rise pants feature a relaxed fit through the seat and thigh with a tapered leg. These flat front pants offer a timeless look perfect for any occasion.
          PERFORMANCE FABRIC. Spill your morning cup of Joe on the way in the office? It will glide right off without staining. Forget to iron last night? No need. Designed with ultra-performance stain and wrinkle-resistant fabric.
          ',
          'Subcategory_id'=>1]
        ]
      */
