<html> 
  <head> 
  <title>HOW TO: Beep when text field full Using Javascript</title> 
  <meta name="author" content="Shannon Norrell"> 
  <script language="javascript"> 
    function DoCheckLength(aTextBox) { 
      if (aTextBox.value.length>13) { 
        document.theForm.submit(); 
        //beep.play(); 
      } 
    } 
  </script> 
</head> 
<body> 
<?
echo "URL [".$_GET['ad'] ."] will be added to ad-block ASAP. 10x! ". "\n"; 
?>
  <FORM NAME="theForm" action=index.php> 

    <input type="text" maxlength="512" size="5" 
onkeyup="DoCheckLength(this);"
onmouseout="DoCheckLength(this);"
onkeyup="DoCheckLength(this);"
 ID="ad" NAME="ad"> 
  </FORM> 
</body> 
</html>
