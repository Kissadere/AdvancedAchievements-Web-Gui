<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Zibuu | Generador de logros</title>
<meta name="description" content="Sistema de generación de logros personalizados para Advanced Achievements.">
<meta name="author" content="Zibuu Entertainment">
<meta name="robots" content="index, nofollow">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
<link href="css/aachGenerator.css" rel="stylesheet">
<link href="css/index.css" rel="stylesheet">
</head>
<body>
   <div id="container">
   </div>
   <div id="wb_gridMain">
      <main id="gridMain">
         <div class="row">
            <div class="col-1">
               <div id="wb_gridTopMisc">
                  <section id="gridTopMisc">
                     <div class="row">
                        <div class="col-1">
                           <div id="wb_mainTitle">
                              <span id="wb_uid0">GENERADOR DE LOGROS</span>
                           </div>
                        </div>
                     </div>
                  </section>
               </div>
               <div id="wb_gridMenuContainer">
                  <section id="gridMenuContainer">
                     <div class="row">
                        <div class="col-1">
                           <div id="wb_menuLabelType">
                              <span id="wb_uid1">TIPO DE LOGRO</span>
                           </div>
                           <div id="wb_goMenu">
                              <form id="goMenu" role="menu">
                                 <select id="goMenu-select" name="goMenu" onchange="onChangegoMenu()">
                                    <option class="_self" value="#" selected>Selecciona una opción</option>
                                    <option class="_self" value="./new-achievement/blockplace.php" role="menuitem">Places</option>
                                    <option class="_self" value="./new-achievement/blockbreak.php" role="menuitem">Breaks</option>
                                    <option class="_self" value="./new-achievement/entitykills.php" role="menuitem">Kills</option>
                                    <option class="_self" value="./new-achievement/targetshoot.php" role="menuitem">Targets Shoot</option>
                                    <option class="_self" value="./new-achievement/playercrafts.php" role="menuitem">Crafts</option>
                                    <option class="_self" value="./new-achievement/animalbreeding.php" role="menuitem">Breeding</option>
                                    <option class="_self" value="./new-achievement/playerconnections.php" role="menuitem">Connections</option>
                                    <option class="_self" value="./new-achievement/playerdeaths.php" role="menuitem">Deaths</option>
                                    <option class="_self" value="./new-achievement/usedarrows.php" role="menuitem">Arrows</option>
                                    <option class="_self" value="./new-achievement/thrownsnowballs.php" role="menuitem">Snowballs</option>
                                    <option class="_self" value="./new-achievement/throwneggs.php" role="menuitem">Eggs</option>
                                    <option class="_self" value="./new-achievement/capturedfish.php" role="menuitem">Fish</option>
                                    <option class="_self" value="./new-achievement/capturedtreasures.php" role="menuitem">Trersures</option>
                                    <option class="_self" value="./new-achievement/itembreaks.php" role="menuitem">Item Breaks</option>
                                    <option class="_self" value="./new-achievement/eatenitems.php" role="menuitem">Eaten Items</option>
                                    <option class="_self" value="./new-achievement/animalshear.php" role="menuitem">Shear</option>
                                    <option class="_self" value="./new-achievement/cowmilking.php" role="menuitem">Milk</option>
                                    <option class="_self" value="./new-achievement/bucketwater.php" role="menuitem">Water Buckets</option>
                                    <option class="_self" value="./new-achievement/bucketlava.php" role="menuitem">Lava Buckets</option>
                                    <option class="_self" value="./new-achievement/itemenchantments.php" role="menuitem">Enchantments</option>
                                    <option class="_self" value="./new-achievement/villagertrades.php" role="menuitem">Trades</option>
                                    <option class="_self" value="./new-achievement/usedanvils.php" role="menuitem">Anvils Used</option>
                                    <option class="_self" value="./new-achievement/usedbeds.php" role="menuitem">Beds</option>
                                    <option class="_self" value="./new-achievement/maxlevel.php" role="menuitem">Max. Level</option>
                                    <option class="_self" value="./new-achievement/usedpotions.php" role="menuitem">Consumed Potions</option>
                                    <option class="_self" value="./new-achievement/playedtime.php" role="menuitem">Played Time</option>
                                    <option class="_self" value="./new-achievement/distancefoot.php" role="menuitem">Distance Foot</option>
                                    <option class="_self" value="./new-achievement/distancepig.php" role="menuitem">Distance Pig</option>
                                    <option class="_self" value="./new-achievement/distancehorse.php" role="menuitem">Distance Horse</option>
                                    <option class="_self" value="./new-achievement/distanceminecart.php" role="menuitem">Distance Minecart</option>
                                    <option class="_self" value="./new-achievement/distanceboat.php" role="menuitem">Distance Boat</option>
                                    <option class="_self" value="./new-achievement/distancegliding.php" role="menuitem">Distane Gliding</option>
                                    <option class="_self" value="./new-achievement/distancellama.php" role="menuitem">Distance Llama</option>
                                    <option class="_self" value="./new-achievement/distancesneaking.php" role="menuitem">Distance Sneaking</option>
                                    <option class="_self" value="./new-achievement/itemdrops.php" role="menuitem">Item Drops</option>
                                    <option class="_self" value="./new-achievement/itempickup.php" role="menuitem">Item Pickups</option>
                                    <option class="_self" value="./new-achievement/worldplow.php" role="menuitem">Hoe Plowings</option>
                                    <option class="_self" value="./new-achievement/worldfertilising.php" role="menuitem">Fertilising</option>
                                    <option class="_self" value="./new-achievement/animaltaming.php" role="menuitem">Taming</option>
                                    <option class="_self" value="./new-achievement/usedbrewing.php" role="menuitem">Brewing</option>
                                    <option class="_self" value="./new-achievement/usedfireworks.php" role="menuitem">Fireworks</option>
                                    <option class="_self" value="./new-achievement/usedmusic.php" role="menuitem">Music Discs</option>
                                    <option class="_self" value="./new-achievement/usedpearls.php" role="menuitem">Ender Pearls</option>
                                    <option class="_self" value="./new-achievement/usedfurnance.php" role="menuitem">Smelting</option>
                                 </select>
                              </form>
                           </div>
                        </div>
                     </div>
                  </section>
               </div>
            </div>
         </div>
      </main>
   </div>
   <script src="scripts/jquery-1.12.4.min.js"></script>
   <script>   
   function onChangegoMenu(){var a=document.getElementById('goMenu-select'),b=a.options[a.selectedIndex].value,c=a.options[a.selectedIndex].className;a.selectedIndex=0;a.blur();b&&(NewWin=window.open(b,c),window.NewWin.focus())};
   </script>
   <script>   
   $(document).ready(function()
   {
      $("a[href*='#gridMain']").click(function(event)
      {
         event.preventDefault();
         $('html, body').stop().animate({ scrollTop: $('#wb_gridMain').offset().top }, 600, 'linear');
      });
   });
   </script>
</body>
</html>