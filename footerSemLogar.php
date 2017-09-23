</div>
	<!-- RODAPÉ -->
	<div id="divFooter" class="row">
		<div class="col-md-1">	
		</div>
		<div class="col-md-2 text-center">
			<h3>ACESSO RÁPIDO</h3>
			<ul class="nav nav-pills nav-stacked">
				<li><a href="telaInicialSemLogar.php">Início</a></li>
				<li><a href="#">Produtos</a></li>
				<li><a href="#">Quem somos</a></li>
				<li><a href="#">Fale conosco</a></li>
			</ul>
		</div>
		<div class="col-md-3 text-center">
			<h3>ONDE ESTAMOS</h3>
			<strong class="text-center">Mato Grosso do Sul</strong><br>
			Av. João Batista Fernandes, 1415<br>
			Polo Empresarial Oeste<br>
			Campo Grande - MS<br>
			Fone: (67) 3378-2000<br>
			Fax: (67) 3378-2001<br>
		</div>
		<div class="col-md-3 text-center">
			<h3>&nbsp;</h3>
			<strong class="text-center">Mato Grosso</strong><br>
			R. Ipê Amarelo, QD 06 - LT 0<br>
			Bairro Novo Mundo<br>
			Várzea Grande - MT<br>
			Fone: (65) 3688-3900<br>
			Fax: (65) 3688-3900<br>
		</div>
		<div class="col-md-2 text-center">
			<h3>Fale conosco</h3>
			<span>
			De segunda à sexta<br>
			Das 08h às 18h<br>
			<h1>(11) 4935-2344</h1>
			compras@distlopes.com.br<br>
			</span>
		</div>	
		<div class="col-md-1"></div>
	</div>
	
	<!-- SOCKET DO RODAPÉ -->
	<div id="divSocket" class="row">
		<div class="col-md-12 text-center">
		<img src="img/maxima.png" width="25" height="21">&nbsp;&nbsp;&nbsp;Máxima Sistemas, Versão 4.8.2.3 , Copyright © 2008-2017 Todos os direitos reservados.
		</div>
	</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script>
	//plugin bootstrap minus and plus
//http://jsfiddle.net/laelitenetwork/puJ6G/
$('.btn-number').click(function(e){
    e.preventDefault();
    
    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[name='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {
            
            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            } 
            if(parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if(type == 'plus') {

            if(currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if(parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
});
$('.input-number').focusin(function(){
   $(this).data('oldValue', $(this).val());
});
$('.input-number').change(function() {
    
    minValue =  parseInt($(this).attr('min'));
    maxValue =  parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());
    
    name = $(this).attr('name');
    if(valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if(valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    
    
});
$(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
	</script>
  </body>
</html>