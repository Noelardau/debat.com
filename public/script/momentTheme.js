function showTheme(){

    $.get('traitement/themeInrealTime.php',(data)=>{
        $('.showTheme .header').html('Thème du moment: '+data)    
    })
    setTimeout(showTheme,2000)

}

showTheme()