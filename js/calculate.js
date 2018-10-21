  var ans1w;
    
                function addNumbers1()
                {

                        var valu1 = document.getElementById("valu1").value;
                        var valu2 = document.getElementById("valu2").value;
                        var valu3 = document.getElementById("value3").value;
                        var ansqD = document.getElementById("answer1");
                        ans1w = document.getElementById("status2");
                        var e = document.getElementById("ddlViewBy").value;
                        if(document.getElementById('radioMale').checked){
                            ansqD.value = (valu2*10)+(valu1*625)-(5*valu3)+5;}
                        else{
                            ansqD.value = (valu2*10)+(valu1*625)-(5*valu3)-161;}
                    
                        if(e =="one"){
                            ans1w.value = 1.53*ansqD.value;
                        }
                        if(e =="two"){
                            ans1w.value = 1.76*ansqD.value;
                        }
                        if(e =="three"){
                            ans1w.value = 2.25*ansqD.value;

                        }
                    }

function addNum2()
                {
                        
                        var vaue1 = document.getElementById("v1").value;
                        var vaue2 = document.getElementById("v2").value;
                        var answD1 = document.getElementById("answr");
                        var ansq1 = document.getElementById("stats");
                         var e1 = document.getElementById("ddlViewBy1").value;
                     answD1.value = vaue2*2.2*3500/vaue1;
                     if(e1 =="one"){
                            ansq1.value = ans1w.value-answD1.value;
                        }
                        if(e1 =="two"){
                            ansq1.value = ans1w.value+answD1.value;
                        }
                    }
                    
    