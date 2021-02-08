<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Zibuu | Advanced Achievements</title>
<meta name="description" content="Sistema de generación de logros personalizados para Advanced Achievements.">
<meta name="author" content="Zibuu Entertainment">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
<link href="../css/aachGenerator.css" rel="stylesheet">
<link href="../css/distancehorse.css" rel="stylesheet">
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
                              <span id="wb_uid0">DISTANCIA RECORRIDA A CABALLO</span>
                           </div>
                        </div>
                     </div>
                  </section>
               </div>
               <div id="wb_gridFormContainer">
                  <form name="gridFormContainer" method="post" action="../builder/constructor.php" enctype="multipart/form-data" accept-charset="UTF-8" id="gridFormContainer">
                     <input type="hidden" name="achievementType" value="distanceHorse" id="achievementType">
                     <input type="hidden" name="formCompletion" value="true" id="formCompletion">
                     <div class="row">
                        <div class="col-1">
                           <div id="wb_formLabelDisplayname">
                              <span id="wb_uid1">NOMBRE DEL LOGRO</span>
                           </div>
                           <input type="text" id="formFieldDisplayname" name="achievementDisplayName" value="" maxlength="16" autocomplete="off" spellcheck="false" required>
                           <div id="wb_formLabelMessage">
                              <span id="wb_uid2">DESCRIPCIÓN DEL LOGRO</span>
                           </div>
                           <input type="text" id="formFieldMessage" name="achievementDescription" value="" maxlength="64" autocomplete="off" spellcheck="false" required>
                           <div id="wb_formLabelTier">
                              <span id="wb_uid3">TIER DEL LOGRO</span>
                           </div>
                           <select name="achievementTier" size="1" id="formFieldTier" autocomplete="off">
                              <option selected value="normal">Común</option>
                              <option value="rare">Raro</option>
                           </select>
                           <div id="wb_formLabelObjective">
                              <span id="wb_uid4">OBJETIVO A COMPLETAR</span>
                           </div>
                           <input type="number" id="formFieldObjective" name="achievementObjective" value="" maxlength="3" autocomplete="off" spellcheck="false" required min="1" max="999">
                           <div id="wb_formLabelRewards">
                              <span id="wb_uid5">RECOMPENSA POR COMPLETAR</span>
                           </div>
                           <div id="wb_formDescOxygen">
                              <span id="wb_uid6">En caso de elegir oxígeno, cada treinta niveles; es una burbuja de oxígeno extra.</span>
                           </div>
                           <select name="achievementReward" size="1" id="formFieldReward" autocomplete="off">
                              <option selected value="Money">Monedas</option>
                              <option value="Experience">Niveles de experiencia</option>
                              <option value="IncreaseMaxOxygen">Oxígeno</option>
                              <option value="IncreaseMaxHealth">Corazones</option>
                           </select>
                           <hr id="formSeparatorRewards">
                           <input type="number" id="formFieldRewardData" name="achievementRewardData" value="10" maxlength="4" autocomplete="off" spellcheck="false" required min="1" max="9999">
                           <hr id="formSeparator">
                           <input type="submit" id="formButtonSubmit" name="" value="Generar">
                           <hr id="formButtonSeparator">
                           <input type="reset" id="formButtonClear" name="" value="Limpiar campos">
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </main>
   </div>
   <script src="../scripts/jquery-1.12.4.min.js"></script>
   <script>
   $(document).ready(function()
   {
      $("a[href*='#gridMain']").click(function(event)
      {
         event.preventDefault();
         $('html, body').stop().animate({ scrollTop: $('#wb_gridMain').offset().top }, 600, 'linear');
      });
      $("a[href*='#gridFormContainer']").click(function(event)
      {
         event.preventDefault();
         $('html, body').stop().animate({ scrollTop: $('#wb_gridFormContainer').offset().top }, 600, 'linear');
      });
   });
   </script>
</body>
</html>
