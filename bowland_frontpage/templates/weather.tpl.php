<?php
/**
 * @file
 * Template for the weather module.
 */
?>
<div class="weather">
  <?php foreach($weather as $place): ?>

    <?php if (empty($place['forecasts'])): ?>
      <?php print(t('Currently, there is no weather information available.')); ?>
    <?php endif ?>
    <?php foreach($place['forecasts'] as $forecast): ?>
      <?php foreach($forecast['time_ranges'] as $time_range => $data): ?>
        <div class="report"><p style="clear:left">
          <?php print $forecast['formatted_date']; ?><br />
          <?php if (isset($forecast['sun_info'])): ?>
            <?php if (is_array($forecast['sun_info'])): ?>
              <?php print(t('Sunrise: @time', array('@time' => $forecast['sun_info']['sunrise']))); ?><br />
              <?php  print(t('Sunset: @time', array('@time' => $forecast['sun_info']['sunset']))); ?><br />
            <?php else: ?>
              <?php print($forecast['sun_info']); ?><br />
            <?php endif ?>
          <?php endif ?>
          <?php // print $time_range; ?>
        </p>
        
        <div style="float:left;margin-right:0.5em;margin-bottom:0.5em" >
          <?php print $data['symbol']; ?>
        </div>
        <p>
          <span class="condition"><?php print $data['condition']; ?></span><br />
          <span class="temp"><?php print $data['temperature']; ?></span>
          <?php if (isset($data['windchill'])): ?>
            <br />
            <?php print(t('Feels like !temperature', array('!temperature' => $data['windchill']))); ?>
          <?php endif ?>
        </p>
        </div>
      <?php endforeach; ?>
    <?php endforeach; ?>

  <?php endforeach; ?>
     <p class="forecast"><a href="/weather">Detailed 10-day forecast</a><br />
    
    

    

</div>
