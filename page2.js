
function isValid(){
      var ftoi=document.forms["mForm"]["ftoi"].value;
      var box1=document.forms["mForm"]["box1"].value;
      var box2=document.forms["mForm"]["box2"].value;
      
      
      if(ftoi===""||box1===""||box2==="")
      {
        document.getElementById("ftoiErr").innerHTML="Field Empty";
        document.getElementById("box1Err").innerHTML="Field Empty";
        document.getElementById("box2Err").innerHTML="Field Empty";
        return false;
      }
    }