$('.ui.button').click(function(e){
    e.preventDefault()

    $.post('traitement/addTheme.php',{titre:$('.titre').val()},(data)=>{
        

        $('.mess').html(data)

        setTimeout(()=>{
            $('.mess').html('')
        },2000)
        $('.titre').val('')

    })



})   
      
      
