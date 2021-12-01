//Variables globales
//Plazo
var pla=0;
//Prestamo
var pres=0;
//Nombre
var nom;
//Formulario
var form;
//Pago (el que se paga por plazos)
var pago=0;
//Lo que deposita el cliente
var deposito=0;
//Cantidad de pago
var pagardeuda=0;
var nuevo=0;
//Acumulador
var contador=1;
var con=0;
//id tabla
var tableId = 'tab';
var idglobal;
//acumulador de dinero
var dinero = 0;
$("#miForm").submit(function(e){
  e.preventDefault();
  var data = $(this).serialize();
  $.ajax({
      url: "https://bancoexamen.herokuapp.com/php/post.php",
      type: "POST",
      data: data,
      dataType: 'JSON',
      success: function(response){
          console.log(response);
          if(response == "Ok"){
              Swal.fire({
                  icon: 'success',
                  title: 'Genial',
                  text: '¡Datos guardados!',
                  timer: 1500,
                })
          }else{
              Swal.fire({
                  icon: 'error',
                  title: 'Oopps...',
                  text: 'Ocurrio un problema :(!',
                })
          }
      }
  });
});

var getData = function(){
    
nom = document.getElementById("nombre").value;
pla = document.getElementById("plazo").value;
pres = document.getElementById("prestamo").value;
console.log("Estos son los valores: " + nom + " " +pla+ " " +pres);

pago=pres/pla;

do
    {
    document.getElementById("tab").innerHTML=document.getElementById("tab").innerHTML+
                        `<tr id="${contador}" class="filafondo">
                            <th scope="row">${contador}</th>
                            <td>${pres}</td>
                            <td>${pago}</td>
                            <td id="${contador}">${pagardeuda}</td>
                            <td><button class="btn-sm btn-primary boton" id="${con}" onclick="cambiar()">Pagar deuda</button></td>
                        </tr>`;
                        contador=contador+1;
                        con=con+1;
    }
    while(contador<=pla);
    return(false);
}

 

function cambiar(){
    var filafondo = document.getElementsByClassName('filafondo');
    var botones = document.getElementsByClassName('boton');
    for(var i = 0; i < botones.length; i++){
        botones[i].addEventListener('click', capturar);
      }
      pagardeuda = parseInt(prompt("Ingrese el pago que desea ingresar"));
    function capturar(){
        console.log(this.id);
        filafondo[this.id].children[3].innerHTML = pagardeuda;
    }
    
    dinero = dinero + pagardeuda;
    console.log(dinero);
}

//comparacion de deuda
function calculo(){
    if(dinero>=pres){
        let resto;
        resto = dinero-pres;
        Swal.fire({
            icon: 'success',
            title: 'Genial',
            text: 'Deuda saldada y su cambio es: '+resto,
          });
        $("#estatus").val('Deuda saldada');
        $('#copianombre').val(nom);
        $('#copiaprestamo').val(pres);
        $('#copiaplazos').val(pla);
    }else{
        let resto = dinero-pres;
        Swal.fire({
            icon: 'error',
            title: 'Oopps...',
            text: 'Deuda no saldada ingrese una nueva cantidad en su ultimo plazo!',
            footer: 'TENGA EN CUENTA QUE SU DINERO SE SUMARA A LO QUE INGRESO ANTERIORMENTE',
          });
        $("#estatus").val('Deuda aun NO saldada');
        $('#copianombre').val(nom);
        $('#copiaprestamo').val(pres);
        $('#copiaplazo').val(pla);
        $('#copiadeuda').val(resto);
    }
    return(false);
}
(function(document) {
    'use strict';

    var LightTableFilter = (function(Arr) {

      var _input;

      function _onInputEvent(e) {
        _input = e.target;
        var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
        Arr.forEach.call(tables, function(table) {
          Arr.forEach.call(table.tBodies, function(tbody) {
            Arr.forEach.call(tbody.rows, _filter);
          });
        });
      }

      function _filter(row) {
        var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
        row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
      }

      return {
        init: function() {
          var inputs = document.getElementsByClassName('light-table-filter');
          Arr.forEach.call(inputs, function(input) {
            input.oninput = _onInputEvent;
          });
        }
      };
    })(Array.prototype);

    document.addEventListener('readystatechange', function() {
      if (document.readyState === 'complete') {
        LightTableFilter.init();
      }
    });

  })(document);


