
function PrecioPersona(){
    let personas = document.getElementById('personas').value;
    let personas_vip = document.getElementById('prs').value;
    let personas_palco = document.getElementById('prsPalco').value;

    let precioTotal_vip = document.getElementById('tot');
    let precioTotal_palco = document.getElementById('tot_palco');
    let precioTotal = document.getElementById('total');
    let precio = 140;

    if(personas_palco == 1){
        precioTotal_palco.value = precio*1+20;
    }else if(personas_palco == 2){
        precioTotal_palco.value = precio*2+20;
    }else if(personas_palco == 3){
        precioTotal_palco.value = precio*3+20;
    }else if(personas_palco == 4){
        precioTotal_palco.value = precio*4+20;
    }else if(personas_palco == 5){
        precioTotal_palco.value = precio*5+20;
    }else if(personas_palco == 6){
        precioTotal_palco.value = precio*6+20;
    }else if(personas_palco == 7){
        precioTotal_palco.value = precio*7+20;
    }else if(personas_palco == 8){
        precioTotal_palco.value = precio*8+20;
    }

    if(personas_vip == 1){
        precioTotal_vip.value = precio*1+50;
    }else if(personas_vip == 2){
        precioTotal_vip.value = precio*2+50;
    }else if(personas_vip == 3){
        precioTotal_vip.value = precio*3+50;
    }else if(personas_vip == 4){
        precioTotal_vip.value = precio*4+50;
    }else if(personas_vip == 5){
        precioTotal_vip.value = precio*5+50;
    }else if(personas_vip == 6){
        precioTotal_vip.value = precio*6+50;
    }else if(personas_vip == 7){
        precioTotal_vip.value = precio*7+50;
    }else if(personas_vip == 8){
        precioTotal_vip.value = precio*8+50;
    }
    
    if(personas == 1){
        precioTotal.value = precio*1;
    }else if(personas == 2){
        precioTotal.value = precio*2;
    }else if(personas == 3){
        precioTotal.value = precio*3;
    }else if(personas == 4){
        precioTotal.value = precio*4;
    }else if(personas == 5){
        precioTotal.value = precio*5;
    }else if(personas == 6){
        precioTotal.value = precio*6;
    }else if(personas == 7){
        precioTotal.value = precio*7;
    }else if(personas == 8){
        precioTotal.value = precio*8;
    } 
}