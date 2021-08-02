var ctx = document.getElementById("ganancia").getContext("2d");
var mychart=new Chart(ctx,{
    type:"pie",
    data:{
        labels:["Lunes","Martes","Miércoles","Jueves","Viernes"],
        datasets:[
            {
                label:"Ganancias generadas en la semana",
                backgroundColor: ["#E94057","#3639fce0","#50b101","#d9e630","#ffa318"],
                data:[230.0,150.0,350.0,340.0,520.0]
            }
        ]
    }
,options:{
    
    responsive:false
    
}});