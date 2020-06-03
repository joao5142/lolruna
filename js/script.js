function verificar(form){
   

     if(form.nome.value=="" ){
        form.nome.placeholder="O campo nome não pode ser vazio";
       
        form.nome.focus();  
         return false;
       
     }else if(form.nome.value.lenght < 10){
        form.nome.placeholder="Digite um nome com mais de 10 caracteres";
       
        form.nome.focus();
      
         return false;

     }else if(form.email.value==""){
          form.email.placeholder="Preencha o campo e-mail corretamente";
          form.email.focus();

 
          return false;

     }else  if(form.telefone.value==""|| form.telefone.value == null  ){
        form.telefone.placeholder="O campo nao pode ser vazio";
      
        form.telefone.focus();
    
        return false;

     }else{
        return true;
     }

    
}