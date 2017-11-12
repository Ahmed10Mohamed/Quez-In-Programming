<!DOCTYBE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>QUize</title>
    <link href="materialize.min.css" rel="stylesheet">
    
</head>
<body style="margin-top: 200px" class="blue-grey">
<div class="container">
    <div class="row">
        <div class="col m12">
            <div style="background-color: #f1f1f1 " class="card ">
                <div class="card-content blue-grey-text center">
                    <?php
                    session_start();
                    if (isset($_SESSION['name'])){
                        echo "<h2 class='card-tittle'>Well Come ".$_SESSION['name']."</h2>";
                    echo "
                     <div id='result1'>
                       <h5>Choose the quiz you want to test in</h5>
                      <input id='result' type='submit' value='PHP Ques'  class='btn-large orange white-text'>
                      <input id='html' type='submit' value='HTML Ques'  class='btn-large orange white-text'>
                      <input id='css' type='submit' value='CSS Ques'  class='btn-large orange white-text'>    
                  </div>
                       
                    ";

                    }
                    else{
                        echo "So You Can't Come This Page Directly You Are Redirect To LogInl";
                        header("Refresh:5,url=index.html");
                    }
                    ?>


                </div>
            </div>
        </div>
    </div>
</div>

<script src="jquery-3.1.1.min.js"></script>
<script src="materialize.min.js"></script>
<script src="main.js"></script>
<script src="qoution.js"></script>
</body>
</html>