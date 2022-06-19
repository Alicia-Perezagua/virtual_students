const largeDevices = matchMedia('(min-width: 1000px)');

const largeSize = mql_l => {
  mql_l.matches ? ($("#prueba_color").css("background-color", "red"), $("#prueba_color").html("<h1>Large Size</h1>")) : this.mediumSize
}
  
largeDevices.addEventListener('change', largeSize); 
largeSize(largeDevices);
  
const mediumDevices = matchMedia('(min-width: 400px)' && '(max-width: 1000px)');
  
const mediumSize = mql_m => {
  mql_m.matches ? ($("#prueba_color").css("background-color", "blue"), $("#prueba_color").html("<h1>Medium Size</h1>")) : this.smallSize
}
  
mediumDevices.addEventListener('change', mediumSize);
mediumSize(mediumDevices);
  
const smallDevices = matchMedia('(max-width: 400px)');

const smallSize = mql_s => {
  mql_s.matches ? ($("#prueba_color").css("background-color", "yellow"), $("#prueba_color").html("<h1>Small Size</h1>")) : this.mediumSize
} 
  
smallDevices.addEventListener('change', smallSize); 
smallSize(smallDevices); 