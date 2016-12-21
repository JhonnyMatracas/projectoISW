
    function borraLI(div,id){  
                 var li = div + id;
                    $(li).remove(); 
    }

    function togglemenu(){ 
      $('#menu-producto').toggle('show');
      $('#grid-productos').toggleClass("main-col col-sm-9 col-md-9 pull-right","main-col col-sm-12 col-md-12");
      $('#p-container').toggleClass("product-container16","product-container8");
      $('.productos').toggleClass("col-lg-3","col-lg-4");
      $('#productsearchlist').toggleClass("margin-left-2","margin-left-20");
      $('#ojo').toggleClass("fa-eye-slash fa-eye");
     
    }
    function showListJS(){

     $('.list').show("slow");
     
    }
     function showMenMen(){

     $('#men-men').toggle('show');
     
    }
    function showFiltros(){

     $('#filtros').toggle('show');
     
    }
    function hideListJS(){ 
     $('.list').hide("slow");
     
    }


    function getShopCart(id){  
                var div = $(id);
                $.ajax({
                    url: "http://fernandomfdz.ddns.net/proyectos/store/index/action/getShopCart",
                    dataType: "html",
                    success: function(html) {
                
                        var divs = html.split('<!--contador-->');
                        div.html( divs[0] );
                        var contador =  divs[1].split('<!--Cart-->');
                         $("#contador-carritoXL").html( contador[0] );
                         $("#contador-carrito").html( contador[0] );
                         var cart =  contador[1].split('<!--panel-->');
                         $("#tcart").html( cart[0] );
                         $("#tsum").html( cart[1] );
                    },
                    error: function(e) 
                    {
                        alert('Error: ' + e);
                    }
                });
    }

    function addItem(pr_id,cantidad){ 
         var dataString = 'pr_id='+ pr_id +'&cantidad='+ cantidad;
                $.ajax({
                type: "POST",
                url: "http://fernandomfdz.ddns.net/proyectos/store/index/action/addShopCart",
                data: dataString,
                cache: false,
                success: function(html){
                    getShopCart("#carritoXS-expand"); 
                    getShopCart("#carrito-expand");
                }
                });  
    }


        function delItem(pr_id,cantidad){ 
         var dataString = 'pr_id='+ pr_id;
                $.ajax({
                type: "POST",
                url: "http://fernandomfdz.ddns.net/proyectos/store/index/action/delItem",
                data: dataString,
                cache: false,
                success: function(html){
                    getShopCart("#carritoXS-expand"); 
                    getShopCart("#carrito-expand");
                }
                });  
    }

    function deleteItem(id){

    var dataString = 'pr_id='+ id;
                $.ajax({
                type: "POST",
                url: "http://fernandomfdz.ddns.net/proyectos/store/index/action/delShopCart",
                data: dataString,
                cache: false,
                success: function(html){ 
                borraLI(".XSc",id);  
                borraLI(".C",id);
                getShopCart("#carritoXS-expand"); 
                getShopCart("#carrito-expand");
                }
                });
   }

     $( "#new_nick" ).keyup(function() {
            var dataString = 'nick='+ $( "#new_nick" ).val();
                $.ajax({
                type: "POST",
                url: "http://fernandomfdz.ddns.net/proyectos/store/index/action/validateSignUp",
                data: dataString,
                cache: false,
                success: function(html){ 
                     var divs = html.split('<!--error-->');
                        
                    if (divs[0]==1) {
                        $("#submit").removeClass("disabled");
                        $('#nonavailable_nick').hide();
                        $('#available_nick').show();
                        $('#nick_error').hide();

                    }else{
                        $("#submit").addClass("disabled");
                        $('#available_nick').hide();
                        $('#nonavailable_nick').show();
                        $('#nick_error').show();
                        $('#nick_error').html(divs[1]);

                    }
                }
                });

        });

        $( "#new_email" ).change(function() {
            var dataString = 'email='+ $( "#new_email" ).val();
                $.ajax({
                type: "POST",
                url: "http://fernandomfdz.ddns.net/proyectos/store/index/action/validateSignUp",
                data: dataString,
                cache: false,
                success: function(html){ 
                    if (html==1) {
                        $("#submit").removeClass("disabled");
                        $('#nonice_email').hide();
                        $('#nice_email').show();
                    }else{
                        $("#submit").addClass("disabled");
                        $('#nice_email').hide();
                        $('#nonice_email').show();

                    }
                }
                });
        });
       
        $( "#new_pass1" ).keyup(function() {
            var dataString = 'pass1='+ $( "#new_pass1" ).val();
                $.ajax({
                type: "POST",
                url: "http://fernandomfdz.ddns.net/proyectos/store/index/action/validateSignUp",
                data: dataString,
                cache: false,
                success: function(html){ 
                     var divs = html.split('<!--error-->');
                        
                    if (divs[0]==1) {
                        $("#submit").removeClass("disabled");
                        $('#nonice_pass').hide();
                        $('#nice_pass').show();
                        $('#pass_error').hide();

                    }else{
                        $("#submit").addClass("disabled");
                        $('#nice_pass').hide();
                        $('#nonice_pass').show();
                        $('#pass_error').show();
                        $('#pass_error').html(divs[1]);

                    }
                }
                });
                if ($( "#new_pass1" ).val() == $( "#new_pass2" ).val()) {
                    $("#submit").removeClass("disabled");
                       $('#nonice_pass2').hide();
                        $('#nice_pass2').show(); 
                        $('#pass_error2').hide();
                    }else{
                        $("#submit").addClass("disabled");
                        $('#nice_pass2').hide();
                        $('#nonice_pass2').show();
                        $('#pass_error2').show();
                        $('#pass_error2').html("Las contraseñas no coinciden");

                    }
        });
        $( "#new_pass2" ).keyup(function() {
                    if ($( "#new_pass1" ).val() == $( "#new_pass2" ).val()) {
                        $("#submit").removeClass("disabled");
                       $('#nonice_pass2').hide();
                        $('#nice_pass2').show(); 
                        $('#pass_error2').hide();
                    }else{
                        $("#submit").addClass("disabled");
                        $('#nice_pass2').hide();
                        $('#nonice_pass2').show();
                        $('#pass_error2').show();
                        $('#pass_error2').html("Las contraseñas no coinciden");

                    }
                
        });  




