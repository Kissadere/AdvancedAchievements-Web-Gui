<?php
  require "includes/controller.php";
  include "templates/header.php";
?>
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
                              <span id="wb_uid0"><?php echo $langSuccessMainTitle ?></span>
                           </div>
                        </div>
                     </div>
                  </section>
               </div>
               <div id="wb_gridFormContainer">
                  <section id="gridFormContainer">
                     <div class="row">
                        <div class="col-1">
                           <div id="wb_formLabelCategory">
                              <span id="wb_uid1"><?php echo $langSuccessMessage ?></span>
                           </div>
                           <div id="wb_formDescMeta">
                              <span id="wb_uid2"><?php echo $langSuccessDescription ?></span>
                           </div>
                           <div id="wb_CssMenu1">
                              <ul id="CssMenu1" role="menubar" class="nav">
                                 <li class="nav-item firstmain"><a role="menuitem" class="nav-link" href="./" target="_self"><?php echo $langBtnNewAchievement ?></a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </section>
               </div>
            </div>
         </div>
      </main>
   </div>
</body>
<?php
  include "templates/footer.php";
?>
