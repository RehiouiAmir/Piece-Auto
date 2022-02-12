<!DOCTYPE HTML>
<html>
<head>
<title>PIÈCE-AUTO | Commande</title>
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
        <nav class="mobileUI-site-nav"> <a href="home.php">Home</a> <a href="prix.php">Prix</a> <a href="Commande.php" class="active">Commande</a> </nav>
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
            <h2>Commande en ligne</h2>
            <p class="subtitle">Votre commande s'effectue en quelques minutes </p>
            <div class="form-style-5">
              <form action="insert-cmd.php" method="POST">
                    <fieldset>
                    <legend><span class="number">1</span> Votre Informations</legend>
                          <input type="text" name="field1" placeholder="Votre Nom *" required="required" autofocus>
                          <input type="text" name="field2" placeholder="Votre Prénom *">
                          <input type="text" name="field3" placeholder="Votre Adreese *" required="required">
                          <input type="email" name="field4" placeholder="Votre Email *" required="required">
                          <input type="number" name="field5" placeholder="Votre Téléphone *">
                    <label for="pay">Votre Pay:</label>
                          <select id="pay" name="field6" >
                            <option value="Algerie">Algerie</option>
                            <option value="France">France</option>
                            <option value="England">England</option>
                            <option value="USA">USA</option>
                            <option value="Canada">Canada</option>
                            <option value="Autre">Autre</option>
                          </select>      
                    </fieldset>
                    <fieldset>
                    <legend><span class="number">2</span> Votre Commande</legend>
                        <label for="Piece">Pièce Commandée :</label>
                              <select id="Piece" name="field7">
                                <option value ="Disques de frein">Disques de frein</option>
                                <option value ="Plaquettes de frein">Plaquettes de frein</option>
                                <option value ="Filtre à huile">Filtre à huile</option>
                                <option value ="Bougies d'allumage">Bougies d'allumage</option>
                                <option value ="Filtre à Air">Filtre à Air</option>
                                <option value ="Filtre à Air">Pompe à vide</option>
                              </select>
                        <label for="ModePai">le mode de paiement:</label>
                               <select id="Modepai" name="field8">
                                <option value="Chèque">Chèque</option>
                                <option value="Sabb">Saab</option>
                              </select>      
                    <textarea name="field9" placeholder="Votre Commande spécialisé "></textarea>
                    </fieldset>
                              <input type="submit" name="Commander"   value="Commander" />
              </form>
              </div>

            <div class="alignleft">
            </div>
            <p>&nbsp;</p>
            </p>
          </section>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="12u">
        <div class="row">
        </div>
        
      </div>
      <div class="form-style-5">
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
</html>
