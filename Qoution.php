<!DOCTYBE html>
<html>
 <head>
 <link href="materialize.min.css" rel="stylesheet">
 </head>
 <body>
    <h4>PHP Quiz</h4>
     <div id="div0">
         <h2 class="center">Start the Quiz</h2>
         <p class="center">Good luck!</p>
         <input type="submit" id="btn0" onclick="start()" value="Start The Quez" class="orange white-text btn-large">
     </div>
     <div id="div1" style="display: none" >
     <h5 name="u" >1. What does PHP stand for?</h5>

     <p>
         <input type="radio" id="i1" name="ans1" value="1">
         <label for="i1">PHP: Hypertext Preprocessor</label>
     </p>
     <p>
         <input type="radio" id="i2" name="ans1" value="2">
         <label for="i2">Personal Hypertext Processor</label>
     </p>
     <input id='btn1' type='submit' value='Next'  class="btn-large">
 </div>
    <div id="div2" style="display: none">
     <h5>2. How do you write "Hello World" in PHP</h5>

     <p>
         <input type="radio" id="i3" name="ans2" value="1"  >
         <label for="i3">Document.Write("Hello World");</label>
     </p>
     <p>
         <input type="radio" id="i4" name="ans2" value="2">
         <label for="i4">echo'Hello World';</label>
     </p>
     <input id='btn2' type='submit' value='Next' class="btn-large">
 </div>
    <div id="div3" style="display: none">
     <h5>3.  All variables in PHP start with which symbol?</h5>
     <p>
         <input type="radio" id="i5" name="ans3" value="1">
         <label for="i5">$</label>
     </p>
     <p>
         <input type="radio" id="i6" name="ans3" value="2">
         <label for="i6">&</label>
     </p>
     <input id='btn3' type='submit' value='Next' class="btn-large">

 </div>
     <div id="div4" style="display: none">
     <h5>4. What is the correct way to add 1 to the $count variable?</h5>
     <p>
         <input type="radio" id="i7" name="ans4" value="1">
         <label for="i7">++count</label>
     </p>
     <p>
         <input type="radio" id="i8" name="ans4" value="2">
         <label for="i8">count++</label>
     </p>
     <input id='btn4' type='submit' onclick="stop()" value='Finsh' class="btn-large">
 </div>
     <div id="div5" style="display: none">
    <p></p>
    <span class="center-align ">Result:</span><br>
    <span id="show_result"></span>/4<br>
    <span  id="paresent"></span>%<br>
    <span  id="study"></span><br>
     <span style="font-size: 18px; font-family: Arial,Tahoma; font-weight: bold">Time Spend</span><br>
     <span  id="timespend"></span><br>
    <input type="submit" id="tot_result" class="btn-large orange white-text" value="Show Result">
    <div id="show_results" style="display: none">
        <h4 class="blue-text center">Result</h4>
    <div >
        <h4 class="orange-text center">First Answer</h4>
        <span id="first_result"></span>
    </div>
     <div>
         <h4 class="orange-text center">Second Answer</h4>
         <span id="second_result"></span>
     </div>
     <div>
         <h4 class="orange-text center">Theard Answer</h4>
         <span id="theard_result"></span>
     </div>
      <div>
          <h4 class="orange-text center">Fourth Answer</h4>
          <span id="fourth_result"></span>
      </div>
    </div>
</div>
    <div id="showtime">
     <span id='time' class='right'> 00:00</span>
     <span class="right orange-text">Time Spand=</span>
    </div>
 <script src="jquery-3.1.1.min.js"></script>
 <script src="materialize.min.js"></script>
 <script src="qoution.js"></script>

 </body>
</html>


