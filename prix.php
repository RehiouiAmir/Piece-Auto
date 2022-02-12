<!DOCTYPE HTML>
<html>
<head>
<title>PIÈCE-AUTO | PRIX</title>
<meta charset="utf-8">
<noscript>
<link rel="stylesheet" href="css/5grid/core.css">
<link rel="stylesheet" href="css/5grid/core-desktop.css">
<link rel="stylesheet" href="css/5grid/core-1200px.css">
<link rel="stylesheet" href="css/5grid/core-noscript.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/style-desktop.css">
</noscript>
<script src="css/5grid/jquery.js"></script>
<script src="css/5grid/init.js?use=mobile,desktop,1000px&amp;mobileUI=1&amp;mobileUI.theme=none"></script>
<link rel="stylesheet" href="css/style-table-form-diaporama.css">

</head>
<body>
<div id="header-wrapper">
  <header id="header" class="5grid-layout">
    <div class="row">
      <div class="12u">
        <!-- Logo -->
        <h1><a href="#" class="mobileUI-site-name">PIÈCE-AUTO</a></h1>
        <p style="margin-left: 30px" > قطع غيـــــــــار  </p>
        <!-- Nav -->
        <nav class="mobileUI-site-nav"> <a href="home.php">Home</a> <a href="prix.php" class="active">Prix</a> <a href="commande.php">Commande</a>  </nav>
      </div>
    </div>
  </header>
</div>

</div>
<div id="wrapper">
  <div class="5grid-layout">
    <div id="page">
      <div class="row">
        <div class="12u">
          <section id="content">
            <h2>NOS  VENTES DE PIÈCES DÉTACHÉES</h2>
            <p class="subtitle">Achetez vos pièces auto en ligne ! Plus de 500 000 pièces détachées à PRIX Discount ! 10 ans d'expérience dans la pièce auto.</p>
            <div class="row">
            <div class="12u">
              <div class="row">
              </div>
              <?php
      
                      echo "<table style='border: solid 1px black;'>";
                      echo "<tr><th>Nom Produit</th><th>Quantity</th><th>Prix</th></tr>";
                      
                      class TableRows extends RecursiveIteratorIterator { 
                        function __construct($it) { 
                          parent::__construct($it, self::LEAVES_ONLY); 
                        }
                        function current() {
                          return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
                        }
                        function beginChildren() { 
                          echo "<tr>"; 
                        } 
                        function endChildren() { 
                          echo "</tr>" . "\n";
                        } 
                      } 
                
                      try {
                      $conn = new PDO('mysql:host=localhost;dbname=tdw;charset=utf8', 'root', '');
                      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $stmt = $conn->prepare("SELECT NomProduct, Quantity, Prix FROM Products"); 
                        $stmt->execute();
                        // set the resulting array to associative
                        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
                        foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
                          echo $v;
                          }
                      
                      }
                      catch(PDOException $e) {
                        echo "Error: " . $e->getMessage();
                      }
                      $conn = null;
                      echo "</table>";
              ?>
              
            </div>
          </div>
            <p>&nbsp;</p>
            </p>
          </section>
        </div>
      </div>
    </div>
   
          <div class="4u">
            <section>
              <div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="5grid-layout">
  <div id="copyright">
    <section>
      <p>&copy; Connectez-nous| Gmail: <a target="_blank" href="mailto:PIÈCE-AUTO@gmail.com">PIÈCE-AUTO</a> | Insgrame: <a target="_blank" href="http://html5templates.com/">HTML5Templates.com</a></p>
    </section>
  </div>
</div>
</body>
</html>
