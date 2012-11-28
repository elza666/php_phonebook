<?php include 'hlava.php'; ?>

  <!-- Menu -->
  <div id="menu-box" class="cleaning-box">
  
    <ul id="menu">
      <li><a href="/">Filtr1</a></li>
      <li><a href="/filtr2.php" class="first active">Filtr2</a></li>
      
    </ul>
  </div> <!-- Menu end -->
  <hr class="noscreen" />
  <div id="content"> 
  <!--
    <div id="column-1">
      <div class="content">-->
        <br>
        <p>Podpora záznamů více telefonních čísel</p>

        <!-- Formular -->
          <form method="get">
            <fieldset>
              <legend>Třídění podle prvního písmene příjmení:</legend>
                <label for="letter" class="float">Napiš písmeno:</label>
                <input name="letter" id="letter"class="inp-text"  type="text" size="30"
                      <?php if (isset($_GET['letter'])) { echo ' value="' . htmlspecialchars($_GET['letter'], ENT_QUOTES) . '"'; }?>>
                <input class="submit-button" type="submit" value="Odeslat" alt="ODESLAT"></p>
            </fieldset>
          </form>
        <!-- Formular end -->


<?php
// reset filtru
if (isset($_GET['letter'])) {
  echo '<p><a href="./filtr2.php">&times; zrušit filtr</a></p>';
}

// filtrovani seznamu
if (isset($_GET['letter'])) {

    // kontrola delky retezce

    $input = $_GET['letter'];
    $input = trim($input);

    if (strlen($input) > 1) {
      echo '<p>Chyba!<br>Délka řetězce musí být pouze 1 znak!</p>';
      }

  $seznam = filter1Prijmeni($seznam, $input);
}


// spojeni prvku pole 'seznam' do retezce a jeho vypis

if (count($seznam) > 0) {


  echo '<ul>';
  for($i=1; $i<=count($seznam); $i++) {
    $zaznam[$i] = implode(', ', $seznam[$i]);
    echo '<li>' . $zaznam[$i] . '</li>';
   } 
 
  echo '</ul>';
    
  }
  




?>


    <!-- </div>
    </div> Column 1 end -->
    

<hr class="noscreen" />


    <div class="cleaner">&nbsp;</div>
  </div>  <!-- Content of the site end -->

<hr class="noscreen" />

<?php include 'pata.php'; ?>

