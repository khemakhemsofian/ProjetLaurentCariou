const fondEcran = document.querySelector('#fondEcran');

var i = 0;

function changeImage(array){

  fondEcran.src = 'http://127.0.0.1:8000/upload/' + array[i]['imageEcran'];

  if(i >= array.length - 1){

    i = 0;

   }else {

    i++

   }

}

fetch('http://127.0.0.1:8000/fond/ecran')

.then(function(response) {

   return response.json();

})

.then(function(response) {

  setInterval(changeImage, 3000,response[0]);

});