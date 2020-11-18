$(document).ready(function(){
    
    $("#lookup").on("click",function(e){
        e.preventDefault();
        var text1= (document.getElementById("country").value);
        $.ajax({
            type:'GET',
            url:'world.php?country='+text1,
            success:function(data){
                $("#result").html(data);
            }
        });
    });
});