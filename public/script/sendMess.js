
var date = new Date()

var dt = date.getDate()< 10 ? "0"+date.getDate() : date.getDate()
var month = date.getMonth() < 10 ? "0"+date.getMonth() : date.getMonth()
var ans = date.getFullYear()

var heure = date.getHours() < 10 ? "0" + date.getHours() : date.getHours()
var min = date.getMinutes() < 10 ? "0" + date.getMinutes() : date.getMinutes()
var sec = date.getSeconds() < 10 ? "0" + date.getSeconds() : date.getSeconds()

var dateFull = `${dt}/${month}/${ans} ${heure}:${min}:${sec}`

function render(){

    $.get('traitement/messInRealTime.php',(data)=>{
        $('.afficher').html(data)    
    })
    setTimeout(render,2000)

}

render()

// alert( $('.item.header'))
function showTheme(){

    $.get('traitement/themeInrealTime.php',(data)=>{
        $('.item.header').html(data)    
    })
    setTimeout(showTheme,2000)

}

showTheme()

$('.sendMess').click(function(){

    var contenu = $('textarea.contenuMess').val()

    $.post('traitement/sendMessage.php',{contenu:contenu,date_send:dateFull},(data)=>{
        $('.afficher').prepend(data)
        $('textarea.contenuMess').val('')
    })
    



})

$('textarea.contenuMess').on('keydown',function(e){
       if(e.key == 'Enter'){
           e.preventDefault()
          $('.sendMess').trigger('click')
       }

})

