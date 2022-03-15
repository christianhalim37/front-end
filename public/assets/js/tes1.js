(function() {

    var parent = document.querySelector(".price-slider");
    if(!parent) return;
  
    var
      rangeS = parent.querySelectorAll("input[type=range]"),
      numberS = parent.querySelectorAll("input[type=number]");
  
    rangeS.forEach(function(el) {
      el.oninput = function() {
        var slide1 = parseFloat(rangeS[0].value);
        numberS[0].value = slide1;
      }
    });
  
    numberS.forEach(function(el) {
      el.oninput = function() {
          var number1 = parseFloat(numberS[0].value);
        rangeS[0].value = number1;
      }
    });
  
  })();