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
numberInput.addEventListener('input', getFactFetch);
  
function getFactFetch() {
  let number = numberInput.value;
 fetch('http://numbersapi.com/'+number)
  .then(response => response.text())
  .then(data => {
    if(number != '') {
      fact.style.display == 'block';
      factText.innerText = data;
    }
  })
  .catch(err => console.log(err))
}






</script>

</body>
</html>
