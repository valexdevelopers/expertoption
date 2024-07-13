
<script>
    $(document).ready(function(){
       $("body").bind("cut copy paste",function(e){
         e.preventDefault();
       })
       $("body").on("contextmenu",function(e){
         return false;
       });
    }) 
      </script>

    <!-- <body 
    oncut="return false" oncopy="return false" onpaste="return false"
    > -->
<script>
    $(document).keydown(function(event){
      if(event.keyCode == 123){
        return false;
      }else if(event.ctrlKey && event.shiftKey && event.keyCode == 73){
        return false;
      }
    })
    document.addEventListener('contextmenu',event => event.preventDefault())
</script>