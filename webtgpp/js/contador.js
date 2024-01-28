//creo una clase para conseguir que un textarea tenga un contador de caracteres
var TextareaContador = new Class({
   //defino un constructor, que recibe el id del textarea
   initialize: function(idTextarea){
      //recupero el elemento textarea con la funci�n dolar
      this.textarea = $(idTextarea);
      //creo un elemento SPAN para mostrar el contador
      this.campoContador = new Element ("span", {"class": "estilocontador"});
      //inyecto el contador despu�s del textarea
      this.campoContador.inject(this.textarea, "after");
      
      //creo un evento para el textarea, keyup, para cuando el usuario suelta la tecla
      this.textarea.addEvent("keyup", function(){
         //simplemente llamo a un m�todo de esta clase que cuenta caracteres
         this.cuentaCaracteres();
      }.bind(this)
      );
      
      //llamo al m�todo que cuenta caracteres, para inicializar el contador
      this.cuentaCaracteres();
   },
   
   //creo un m�todo para contar los caracteres
   cuentaCaracteres: function(){
      //simplemente escribo en el campo contador el n�mero de caracteres actual del textarea
      this.campoContador.set("html", "N�mero caracteres: " + this.textarea.value.length);
   }
});   

//creo un evento para cuando est� listo el DOM de la p�gina
window.addEvent("domready", function(){
   //creo el objeto TextareaContador, pasando el identificador del textarea que se pretende contar caracteres.
   texto = new TextareaContador("textocontador");
   otro = new TextareaContador("otro");
});
