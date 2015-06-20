<div id="block1">
  <div class="ten columns offset-by-two">
    <table>
      <tr>
        <td>Zaufało nam już</td>
        <td class="highlight"><?php echo $data['customers']; ?> klientów</td>
      </tr>
      <tr>
        <td>Przekazalismy</td>
        <td class="highlight"><?php echo $data['packages']; ?> paczek</td>
      </tr>
      <tr>
        <td>W pocie czoła pracuje</td>
        <td class="highlight"><?php echo $data['workers']; ?> pracowników</td>
      </tr>
    </table>
  </div>
</div>

<div id="block2">
  <div id="container">
    <div class="row">
      <div class="one-half column">
        <img src="templates/images/map.jpg">
      </div>
      <div class="one-half column" style="margin-top: 5%">
        <h4>Filia w <span class="highlight">każdym</span> województwie</h4>
        <h4>Działamy w
        <span class="highlight"s>
          <?php echo $data['cities']; ?>
        </span> miastach</h4>
        <h4>Dotrzemy <span class="highlight">wszędzie</span></h4>
        <h4>Bo dla nas granice <span class="highlight">nie istnieją</span></h4>
      </div>
    </div>
  </div>
</div>

<?php include('find.php'); ?>
