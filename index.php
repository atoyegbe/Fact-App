<!DOCTYPE html>
<html>
  <head>
    <title>Fact App</title>

    <link rel="stylesheet" href="index.css">
  </head>
<body>
 
  <div class="container">
      <h1>Number Facts</h2>
        <p>Enter a number and get a random fact</p>
        <input type="text" id="numberInput" placeholder="Enter a number here">
    <div id="fact">
         <h2>Number Fact</h2>
         <p id="factText"></p>
    </div>
  </div>

<script>
let fact= document.querySelector("#fact");
let factText = document.querySelector("#factText");

let numberInput = document.querySelector("#numberInput");
numberInput.addEventListener('input', getFactAjax);

function getFactAjax() {
  let number = numberInput.value;

  let xhr = new XMLHttpRequest();
  xhr.open('GET', ' http://numbersapi.com/'+number);

  xhr.onload = function() {
    if(this.status == 200 && number != '' ) {
       fact.style.display == 'show';
       factText.innerText = this.responseText;
    }
  }

  xhr.send();
}







</script>

</body>
</html>
