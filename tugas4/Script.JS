
    let TargetElement = document.getElementById("up");
    window.addEventListener('DOMContentLoaded', () => {
    })


window.addEventListener('scroll', () => {
        const currentScrollY = window.scrollY; // Vertical scroll position
        const currentScrollX = window.scrollX; // Horizontal scroll position  

        if (currentScrollY >= 100){
            transparansi(true);
        } else {
            transparansi(false);
        } 
        
        console.log(`Scroll position: Y=${currentScrollY}, X=${currentScrollX}`);
    });

    function ButtonUp () {
        window.scrollTo(0,0);
    }
    
    function transparansi (a) {
        if (a != false){
            TargetElement.classList.add('tebalkan');
            document.getElementById("up").style.opacity = "0.4";
        } else {
            document.getElementById("up").style.opacity = "0.0";
            TargetElement.classList.remove('tebalkan');
        }
    }

    