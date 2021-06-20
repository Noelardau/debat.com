
var $render = $('.message')

$('form').on('submit',function(e){
    e.preventDefault()
    let pseudo = $('.pseudo').val()
    let mdp1 = $('.mdp1').val()
    let mdp2 = $('.mdp2').val()
if(mdp1 == mdp2){

    $.post('traitement/addUser.php',{pseudo:pseudo,pass1:mdp1,pass2:mdp2},(data)=>{

        $render.html(data)

        $('.pseudo').val('')
        $('.mdp1').val('')
        $('.mdp2').val('')
        setTimeout(()=>{
            $render.html('')
        },1500)

    })



}else{
    $render.html('<div class="ui message red">Verification du mot de pass non réussi</div>')
    $('.mdp2').css({
        color:'red'
    })
    setTimeout(()=>{
        $render.html('')
        $('.mdp2').css({
            color:'inherit'
        })
    },1500)
}




    

})

