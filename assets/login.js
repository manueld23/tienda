$(document).on("ready", main);

function main(){
    $("#login").submit(function(event){
        event.preventDefault();
        $.ajax({
            url:$(this).attr("action"),
            type:$(this).attr("method"),
            data:$(this).serialize(),
            success:function(resp){
                alert(resp);
            }
        });
    });
}