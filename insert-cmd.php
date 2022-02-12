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

        
</head>
<style type="text/css">
.form-style-5{
    max-width: 500px;
    padding: 10px 20px;
    background: #f4f7f8;
    margin: 10px auto;
    padding: 20px;
    background: #f4f7f8;
    border-radius: 8px;
    font-family: Georgia, "Times New Roman", Times, serif;
}
.form-style-5 fieldset{
    border: none;
}
.form-style-5 legend {
    font-size: 1.4em;
    margin-bottom: 10px;
}
.form-style-5 label {
    display: block;
    margin-bottom: 8px;
}
.form-style-5 input[type="text"],
.form-style-5 input[type="date"],
.form-style-5 input[type="datetime"],
.form-style-5 input[type="email"],
.form-style-5 input[type="number"],
.form-style-5 input[type="search"],
.form-style-5 input[type="time"],
.form-style-5 input[type="url"],
.form-style-5 textarea,
.form-style-5 select {
    font-family: Georgia, "Times New Roman", Times, serif;
    background: rgba(255,255,255,.1);
    border: none;
    border-radius: 4px;
    font-size: 16px;
    margin: 0;
    outline: 0;
    padding: 7px;
    width: 100%;
    box-sizing: border-box; 
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box; 
    background-color: #e8eeef;
    color:#8a97a0;
    -webkit-box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
    box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
    margin-bottom: 30px;
    
}
.form-style-5 input[type="text"]:focus,
.form-style-5 input[type="date"]:focus,
.form-style-5 input[type="datetime"]:focus,
.form-style-5 input[type="email"]:focus,
.form-style-5 input[type="number"]:focus,
.form-style-5 input[type="search"]:focus,
.form-style-5 input[type="time"]:focus,
.form-style-5 input[type="url"]:focus,
.form-style-5 textarea:focus,
.form-style-5 select:focus{
    background: #d2d9dd;
}
.form-style-5 select{
    -webkit-appearance: menulist-button;
    height:35px;
}
.form-style-5 .number {
    background: #B30406;
    color: #fff;
    height: 30px;
    width: 30px;
    display: inline-block;
    font-size: 0.8em;
    margin-right: 4px;
    line-height: 30px;
    text-align: center;
    text-shadow: 0 1px 0 rgba(255,255,255,0.2);
    border-radius: 15px 15px 15px 0px;
}

.form-style-5 input[type="submit"],
.form-style-5 input[type="button"]
{
    position: relative;
    display: block;
    padding: 19px 39px 18px 39px;
    color: #FFF;
    margin: 0 auto;
    background: #B30406;
    font-size: 18px;
    text-align: center;
    font-style: normal;
    width: 50%;
    border: 1px solid #B30406;
    border-width: 1px 1px 3px;
    margin-bottom: 10px;
}
.form-style-5 input[type="submit"]:hover,
.form-style-5 input[type="button"]:hover
{
    background: #750203;

}

</style>
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
              <form action="commande.php" >
                    <fieldset>
                    <legend  style="text-align: center;"> Votre Commande est envoyée</legend>
                    <input type="submit" name="Commander"   value="Nouvelle Commande" />
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
        <?php
                if(isset($_POST['field1']))      $nom=$_POST['field1'];
                else      $nom="";
                if(isset($_POST['field2']))      $prenom=$_POST['field2'];
                else      $prenom="";     
                if(isset($_POST['field3']))      $adr=$_POST['field3'];
                else      $adr="";     
                if(isset($_POST['field4']))      $Email=$_POST['field4'];
                else      $Email="";     
                if(isset($_POST['field5']))      $tel=$_POST['field5'];
                else      $tel="";     
                if(isset($_POST['field6']))      $pay=$_POST['field6'];
                else      $pay="";          
                if(isset($_POST['field7']))      $piece=$_POST['field7'];
                else      $piece="";          
                if(isset($_POST['field8']))      $mode=$_POST['field8'];
                else      $mode="";          
                if(isset($_POST['field9']))      $cmdsp=$_POST['field9'];
                else      $cmdsp="";          

                if(empty($nom) OR empty($prenom) OR empty($adr) OR empty($Email) OR empty($tel)
                      OR empty($pay) OR empty($piece) OR empty($mode) ) 
                { 
                  
                } 
            
            else {
              try {
                $conn = new PDO('mysql:host=localhost;dbname=tdw;charset=utf8', 'root', '');
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              
                  $sql = "INSERT INTO commande (Nom,Prénom,Adr,Tel,Email,Pay,pieceCmd,modepai,dmdsp )
                  VALUES ('$nom','$prenom','$adr','$Email','$tel','$pay','$piece','$mode','$cmdsp')";
                  // use exec() because no results are returned
                  $conn->exec($sql);                  
                }
                catch(PDOException $e) {
                  
                  
                  echo "Error: " . $e->getMessage();
                }
                $conn = null;
                
            }     
                              
              ?>
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
