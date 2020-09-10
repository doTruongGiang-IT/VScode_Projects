function check(x){
    if(x.value=="") x.value=1;
    else{
        var i=Number(x.value);
        if(isNaN(i)) x.value=0;
        if(i>10) x.value=10;
        if(i<1) x.value=1;
    }
}