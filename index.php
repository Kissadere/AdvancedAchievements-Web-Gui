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
                              <span id="wb_uid0"><?php echo $langMainTitle ?></span>
                           </div>
                        </div>
                     </div>
                  </section>
               </div>
               <div id="wb_gridFormContainer">
                  <form name="gridFormContainer" method="post" action="builder/constructor.php" enctype="multipart/form-data" accept-charset="UTF-8" id="gridFormContainer">
                     <input type="hidden" name="formCompletion" value="true" id="formCompletion">
                     <div class="row">
                        <div class="col-1">
                           <div id="wb_formLabelCategory">
                              <span id="wb_uid1"><?php echo $langFormLabelCategory ?></span>
                           </div>
                           <select name="achievementType" size="1" id="formFieldCategory" autocomplete="off">
                              <optgroup label="<?php echo $langGroupComplex ?>">
                                 <option selected value="blockPlace"><?php echo $langBlockPlace  ?></option>
                                 <option value="blockBreak"><?php echo $langCatBlockBreak ?></option>
                                 <option value="entityKills"><?php echo $langCatEntityKills ?></option>
                                 <option value="targetShoot"><?php echo $langCatTargetShot ?></option>
                                 <option value="playerCrafts"><?php echo $langCatPlayerCrafts ?></option>
                                 <option value="animalBreeding"><?php echo $langCatAnimalBreeding ?></option>
                              </optgroup>
                              <optgroup label="<?php echo $langGroupSimple ?>">
                                 <option value="playerConnections"><?php echo $langCatPlayerConnections ?></option>
                                 <option value="playerDeaths"><?php echo $langCatPlayerDeaths ?></option>
                                 <option value="usedArrows"><?php echo $langCatUsedArrows ?></option>
                                 <option value="thrownSnowballs"><?php echo $langCatThrownSnowballs ?></option>
                                 <option value="thrownEggs"><?php echo $langCatThrownEggs ?></option>
                                 <option value="capturedFish"><?php echo $langCatCapturedFish ?></option>
                                 <option value="capturedTreasures"><?php echo $langCatCapturedTreasures ?></option>
                                 <option value="itemBreaks"><?php echo $langCatItemBreaks ?></option>
                                 <option value="eatenItems"><?php echo $langCatEatenItems ?></option>
                                 <option value="animalShear"><?php echo $langCatAnimalShear ?></option>
                                 <option value="cowMilking"><?php echo $langCatCowMilking ?></option>
                                 <option value="bucketWater"><?php echo $langCatBucketWater ?></option>
                                 <option value="bucketLava"><?php echo $langCatBucketLava ?></option>
                                 <option value="itemEnchantments"><?php echo $langCatItemEnchantments ?></option>
                                 <option value="villagerTrades"><?php echo $langCatVillagerTrades ?></option>
                                 <option value="usedAnvils"><?php echo $langCatUsedAnvils ?></option>
                                 <option value="usedBeds"><?php echo $langCatUsedBeds ?></option>
                                 <option value="maxLevel"><?php echo $langCatMaxLevel ?></option>
                                 <option value="usedPotions"><?php echo $langCatUsedPotions ?></option>
                                 <option value="playedTime"><?php echo $langCatPlayedTime ?></option>
                                 <option value="distanceFoot"><?php echo $langCatDistanceFoot ?></option>
                                 <option value="distancePig"><?php echo $langCatDistancePig ?></option>
                                 <option value="distanceHorse"><?php echo $langCatDistanceHorse ?></option>
                                 <option value="distanceMinecart"><?php echo $langCatDistanceMinecart ?></option>
                                 <option value="distanceBoat"><?php echo $langCatDistanceBoat ?></option>
                                 <option value="distanceGliding"><?php echo $langCatDistanceGliding ?></option>
                                 <option value="distanceLlama"><?php echo $langCatDistanceLlama ?></option>
                                 <option value="distanceSneaking"><?php echo $langCatDistanceSneaking ?></option>
                                 <option value="itemDrops"><?php echo $langCatItemDrops ?></option>
                                 <option value="itemPickup"><?php echo $langCatItemPickup ?></option>
                                 <option value="worldPlow"><?php echo $langCatWorldPlow ?></option>
                                 <option value="worldFertilising"><?php echo $langCatWorldFertilising ?></option>
                                 <option value="animalTaming"><?php echo $langCatAnimalTaming ?></option>
                                 <option value="usedFireworks"><?php echo $langCatUsedFireworks ?></option>
                                 <option value="usedMusic"><?php echo $langCatUsedMusic ?></option>
                                 <option value="usedPearls"><?php echo $langCatUsedPearls ?></option>
                                 <option value="usedFurnance"><?php echo $langCatUsedFurnance ?></option>
                              </optgroup>
                           </select>
                           <div id="wb_formLabelDisplayname">
                              <span id="wb_uid2"><?php echo $langFormLabelDisplayname ?></span>
                           </div>
                           <input type="text" id="formFieldDisplayname" name="achievementDisplayName" value="" maxlength="16" autocomplete="off" spellcheck="false" required>
                           <div id="wb_formLabelMessage">
                              <span id="wb_uid3"><?php echo $langFormLabelMessage ?></span>
                           </div>
                           <input type="text" id="formFieldMessage" name="achievementDescription" value="" maxlength="64" autocomplete="off" spellcheck="false" required>
                           <div id="wb_formLabelTier">
                              <span id="wb_uid4"><?php echo $langFormLabelTier ?></span>
                           </div>
                           <select name="achievementTier" size="1" id="formFieldTier" autocomplete="off">
                              <option selected value="normal"><?php echo $langTierCommon ?></option>
                              <option value="rare"><? php echo $langTierRare ?></option>
                           </select>
                           <div id="wb_formLabelMeta">
                              <span id="wb_uid5"><?php echo $langFormLabelMeta ?></span>
                           </div>
                           <div id="wb_formDescMeta">
                              <span id="wb_uid6">https://hub.spigotmc.org/javadocs/bukkit/org/bukkit/Material.html<br>https://hub.spigotmc.org/javadocs/bukkit/org/bukkit/entity/EntityType.html</span>
                           </div>
                           <input type="text" id="formFieldMeta" name="achievementMeta" value="" maxlength="32" autocomplete="off" spellcheck="false">
                           <div id="wb_formLabelObjective">
                              <span id="wb_uid7"><?php echo $langFormLabelObjective ?></span>
                           </div>
                           <input type="number" id="formFieldObjective" name="achievementObjective" value="" maxlength="<?php echo $systemLimitsLengthObjectives ?>" autocomplete="off" spellcheck="false" required min="1" max="<?php echo $systemLimitsObjectives ?>">
                           <div id="wb_formLabelRewards">
                              <span id="wb_uid8"><?php echo $langFormLabelRewards ?></span>
                           </div>
                           <div id="wb_formDescOxygen">
                              <span id="wb_uid9"><?php echo $langFormDescOxygen ?></span>
                           </div>
                           <select name="achievementReward" size="1" id="formFieldReward" autocomplete="off">
                              <option selected value="Money"><?php echo $langRewardMoney ?></option>
                              <option value="Experience"><?php echo $langRewardExperience ?></option>
                              <option value="IncreaseMaxOxygen"><?php echo $langRewardOxygen ?></option>
                              <option value="IncreaseMaxHealth"><?php echo $langRewardHealth ?></option>
                           </select>
                           <hr id="formSeparatorRewards">
                           <input type="number" id="formFieldRewardData" name="achievementRewardData" value="10" maxlength="<?php echo $systemLimitsLengthRewards ?>" autocomplete="off" spellcheck="false" required min="1" max="<?php echo $systemLimitsRewards ?>">
                           <hr id="formSeparator">
                           <input type="submit" id="formButtonSubmit" name="" value="<?php echo $langBtnSubmit ?>">
                           <hr id="formButtonSeparator">
                           <input type="reset" id="formButtonClear" name="" value="<?php echo $langBtnClear ?>">
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </main>
   </div>
</body>

<?php
  include "templates/footer.php";
?>
