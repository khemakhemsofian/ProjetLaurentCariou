const fondEcran = document.querySelector('#fondEcran');
let i = -1;
function changeImage(array){
  console.log(array.length);
  if(i < array.length){
    i++;
  }else {
    i = 0;
  }
  fondEcran.src = 'http://127.0.0.1:8000/upload/' + array[i]['imageEcran'];
}
fetch('http://127.0.0.1:8000/fond/ecran')
.then(function(response) {
   return response.json();
})
.then(function(response) {
  setInterval(changeImage(response[0]), 1000);
});
