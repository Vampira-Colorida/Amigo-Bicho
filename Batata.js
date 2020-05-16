/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*Script do relógio*/
function horario(){
    data = new Date();
    hora = data.getHours();
    if(hora<10){
     hora='0'+hora;
    }
    min = data.getMinutes();
    if(min<10){
     min='0'+min;
    }
    document.getElementById('relogio').innerHTML = hora+":"+min;
    setTimeout('horario()', 500);
}
function expande(id, id2){
    document.getElementById(id).style.display = "block";
    document.getElementById(id2).style.width = "300px";
   }

        
function recolhe(id, id2){
    document.getElementById(id).style.display = "none";
    document.getElementById(id2).style.width = "120px";
    }




