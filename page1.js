function validate(type) {
    if(document.form1.textinput.value=='')
    {
    alert('Fill the Input box before submitting');
    return false;
    }else{

 if($_POST['option']=='1'){
       var res=30.48*document.form1.textinput.value;
        var unit=" Centimeter";
            
        }
        else if($_POST['option']=='2'){
            var res=0.305*document.form1.textinput.value;
        var unit=" meter";
        }
        else if($_POST['option']=='3'){
            var res=document.form1.textinput.value;
        var unit=" feet";
        }
        else if($_POST['option']=='4'){
            var res=0.000305*document.form1.textinput.value;
        var unit=" kilometer";
        }

         else if($_POST['option']=='5'){
            var res=12*document.form1.textinput.value;
        var unit=" inches";
        }
document.getElementById("result").innerHTML=res.toFixed(2) + unit;
return false;
    }
}