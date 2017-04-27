function validar() {

  var valida=0;

  var miformulario= document.getElementById("miform");

  var txtNom=document.getElementById("txtNom").value;
  var txtPro=document.getElementById("txtPro").value;
  var txtEdad=document.getElementById("txtEdad").value;

  var elementos_formulario = miform.elements;
  var radFem=document.getElementById("radFem");
  var radMas=document.getElementById("radMas");



  document.getElementById("name").style.color="#f00";
  document.getElementById("pro").style.color="#f00";
  document.getElementById("edad").style.color="#f00";
  document.getElementById("gen").style.color="#f00";
  document.getElementById("code").style.color="#f00";


  if(txtNom.length == 0 || /^\s+$/.test(txtNom)){
      document.getElementById("name").innerHTML="No tecleaste tu nombre";
      
      
  }else{
    document.getElementById("name").innerHTML=" ";
    valida++;
  }

  if(txtPro.length == 0 || /^\s+$/.test(txtPro)){
      document.getElementById("pro").innerHTML="No tecleaste tu profesión";
    
      
  }else{
    document.getElementById("pro").innerHTML=" ";
    valida++;
    
  }

  if(txtEdad.length == 0 || /^\s+$/.test(txtEdad)){
      document.getElementById("edad").innerHTML="No tecleaste tu edad";
     
  
  }else{
    document.getElementById("edad").innerHTML=" ";
    valida++;
    
  }

for(i=0; i<elementos_formulario.length; i++){
    if(elementos_formulario[i].tagName == "INPUT") {
      if(elementos_formulario[i].type == "radio"){
          if ( elementos_formulario[i].checked) {
            document.getElementById("gen").innerHTML="";
            valida++;
        }else{ document.getElementById("gen").innerHTML="No seleccionaste un género";}
      }
    } 
  }

  for(i=0; i<elementos_formulario.length; i++){
    if(elementos_formulario[i].tagName == "INPUT") {
      if(elementos_formulario[i].type == "checkbox"){
          if ( elementos_formulario[i].checked) {
            document.getElementById("code").innerHTML="";
            valida++;
        }else{ document.getElementById("code").innerHTML="No seleccionaste 2 ó más tecnologías";}
      }
    } 
  }





if (valida>=6){ miformulario.submit(); }  





 /* opciones = document.getElementsByName("genero");

  var seleccionado = false;
  for(var i=0; i<opciones.length; i++) {    
    if(opciones[i].checked) {
      seleccionado = true;
    }
  }

  if(seleccionado==true){
    alert("Seleccionado true");
  	document.getElementById("myForm").submit();
    
  }
  else {
    alert("Selecciona el genero n.n");

  }*/








  
}