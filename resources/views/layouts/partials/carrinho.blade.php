<script>
    @if(isset($p))
        function inc(){
            let q = document.getElementById('quantidade');

            document.getElementById('valor')
                .innerText = "Valor Item: R$ " +  @json($p->valor) * q.value;

        if(q.value < 10){
            return q.value++;
        };  
    }

    @endif
   

    function dec(){
        let a = document.getElementById('quantidade');
        
        return a.value--;    
    }

</script>