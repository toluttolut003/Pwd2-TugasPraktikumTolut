console.log("HEllo World");

$(document).ready(function () {
    //jq click enter
    $('#Hide').click(function(){
        $('#text').hide(); //untuk menghilangkan text fungsi hide
    })
    
    $('#Show').click(function(){
        $('#text').show(); //untuk menghilangkan text fungsi hide
    })

    $('#Toggle').click(function(){
        $('#text').toggle(); //untuk menghilangkan text fungsi hide
    })

    $('#besar').click(function (e) { 
        $('#kotak').animate({
            width: '400px',
            height: '400px',
        })
        
    });

    $('#kecil').click(function (e) { 
        $('#kotak').animate({
            width: '50px',
            height: '50px',
        })
        
    });
    //alt shift bawah
    $('#btn1').click(function (e) { 
        alert('Hasil : ' + $('#text').text())
        
    });

    $('#btn2').click(function (e) { 
        alert('Hasil : ' + $('#text').html())
        
    });

    $('#btn3').click(function (e) { 
        alert('Hasil : ' + $('#input').val())
        
    });

    $('#btn4').click(function (e) { 
        $('#text').attr('style', 'color: blue');
    });
    
    $('#tambah').click(function (e) { 
        $('<li id="list"> teks tambahan </li>').appendTo('ol';
    });

    $('#hapus').click(function (e) { 
        $('#list').remove();
    });

    //jq << untuk shortcut
    //jqclick dkk
});

$