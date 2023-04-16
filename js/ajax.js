    $(function(){
          $("#carregando").hide();
          
             $("ul#menu a").click(function(){
                pagina = ""+$(this).attr('href')
                
                $("#carregando").ajaxStart(function(){
                   $(this).show()
                   })
                $("#carregando").ajaxStop(function(){
                   $(this).hide();
                   
                })
                
                $("#conteudo").load(pagina);
                return false;
             })
    })
