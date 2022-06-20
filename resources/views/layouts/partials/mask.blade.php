<script src="{{ asset('vendor/jquery/jquery-3.6.0.min.js')}}"></script>
<script src="{{ asset('vendor/jquery-mask/jquery.mask.min.js')}}"></script>

<script>
    $('.date').mask('00/00/0000');
    $('.cep').mask('00000-000');
    $('.uf').mask('SS');
    $('.cpf').mask('000.000.000-00');
    $('.phone').mask('(00) 0000-0000');
    $('.cellphone').mask('(00) 00000-0000');

    $(document).on('blur', '#cep', function(){
        const cep = $(this).val();

        $.ajax({
            url: 'https://viacep.com.br/ws/'+cep+'/json/',
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                $('#uf').val(data.uf);
                $('#bairro').val(data.bairro);
                $('#rua').val(data.logradouro);    
                $('#cidade').val(data.localidade);         
                $('#complemento').val(data.complemento);
            }
        });
        
    });
</script>


<script>
    $("#teste").click(function() {
    $('#inp').html(function(i, val) { return +val+1 });
}
</script>