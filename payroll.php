<html>
  <head>
    <title>Payroll System</title>
    <style>
      @font-face{
        font-family: "Custom Black";
        src: url("Fonts/TT Rounds Neue Trial Black.ttf");
      }
      @font-face{
        font-family: "Custom Demibold";
        src: url("Fonts/TT Rounds Neue Trial DemiBold.ttf");
      }
      *{
        box-sizing: border-box;
        font-size: 1.2vw;
        font-family: Custom Demibold;
      }
      .mother{
        width: 50%;   
        height: 60vh;
        padding: 0.3%;        
        float: left;  
      }
      .mother2{
        width: 100%;   
        padding: 0.3%;       
      }
      .header{
        background-color: #A37BB7;
        text-align: center;
        justify-content: center;
        vertical-align: middle;
      }
      .container1{
        background-color: #C1A7CE;
        border-radius: 10px;
        padding: 10px;
        width: 100%;  
      }
      .container2{
        background-color: #C1A7CE;
        border-radius: 10px;
        padding: 10px;
        width: calc(100% - 0.5vw);  
      }
      .table{
        background-color: #FCF7FE;
        width: 100%;
        border: 0.2vw solid #FCF7FE;
        border-radius: 5px;
      }
      .th{
        background-color: #A37BB7;
        color: #FCF7FE;
        font-family: Custom Black;
        font-size: 1.5rem;
        letter-spacing: 0.1rem;
      }
      .th2{
        color: #FCF7FE;
        font-family: Custom Black;
        font-size: 1.5rem;
      }
      .required{
        color: #6F082C;
        font-family: Custom Black;
        font-size: 1.5rem;
      }
      .disabled{
        border: 0px;
        background-color: #FCF7FE;   
        padding: 0px;
      }
      td{
        padding: 0.8%;  
        height: 1%;
        overflow: hidden;
      }
      body{
        margin: 0px;
      }
      br{
        line-height: 1dvh;
      }
      h1{
        color: #FCF7FE;
        font-family: Custom Black;
        font-size: 2rem;
        letter-spacing: 0.1rem;
      }
      input[type="text"], input[type="number"], select{
        width: 100%;       
      }
      input[type="button"], input[type="submit"]{
        color:#FCF7FE;
        font-family: Custom Black;
        font-size: 1.5rem;
        letter-spacing: 0.1rem;
        background-color: #753CC0;
        border-radius: 10px;
        border: 1px solid;
        padding: 1.5%;
        transition: 0.4s;
      }
      input[type="button"]:hover, input[type="submit"]:hover{
        background-color: #A37BB7;
      }
    </style>
  </head>
  <body>
    <div class="header">
      <h1>Payroll Form</h1>
    </div>

    <div style="margin:1dvh;">
      <form name="payroll" onsubmit="return require();" action="payroll.php" method="post">
        <div class="mother2">
          <div class="container1">
            <table width="100%">
              <tr>
                <td width="25%" class="th2">Employee ID<font class="required">*</font></td>
                <td width="25%" class="th2">First Name<font class="required">*</font></td>
                <td width="25%" class="th2">Last Name<font class="required">*</font></td>
                <td width="25%" class="th2">Position<font class="required">*</font></td>
              </tr>
              <tr>
                <td><input type="number" id="empID" required></td>
                <td><input type="text" id="fn" required></td>
                <td><input type="text" id="ln" required></td>
                <td>
                  <select id="position" onchange="changePosition()">
                    <option value="emp">Employee</option>
                    <option value="sup">Supervisor</option>
                    <option value="man">Manager</option>
                  </select>
                </td>
              </tr>
            </table>
          </div>
        </div>

        <br>

        <div class="mother">
          <div class="container2">
            <table class="table">
              <tr>
                <td width="40%" class="th">Earnings</td>
                <td width="20%" class="th">Rate</td>
                <td width="20%" class="th">Hours<font class="required">*</font></td>
                <td width="20%" class="th">Total</td>
              </tr>
              <tr>
                <td><input type="text" value="Employee" name="pos" id="pos" class="disabled" readonly></td>
                <td><input type="number" value="300.00" step=".01" min="0" name="rate" id="rate" class="disabled" readonly></td>
                <td><input type="number" min="0" name="hours" id="hours" required></td>
                <td><input type="number" value="0.00" step=".01" min="0" name="postot" id="postot" class="disabled" readonly></td>
              </tr>
              <tr>
                <td>Bonus</td>
                <td><center>-</center></td>
                <td><center>-</center></td>
                <td><input type="number" value="0.00" step=".01" min="0" name="bontot" id="bontot" class="disabled" readonly></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
            </table>
          </div>

          <br>

          <div class="container2">
            <table class="table">
              <tr>
                <td width="50%" class="th"></td>
                <td width="50%" class="th">Current</td>
              </tr>
              <tr>
                <td class="th">Total Gross Pay</td>
                <td><input type="number" value="0.00" step=".01" min="0" name="tgp" class="disabled" readonly></td>
              </tr>
              <tr>
                <td class="th">Total Deductions</td>
                <td><input type="number" value="0.00" step=".01" min="0" name="td" class="disabled" readonly></td>
              </tr>
              <tr>
                <td class="th">Net Pay</td>
                <td><input type="number" value="0.00" step=".01" min="0" name="np" class="disabled" readonly></td>
              </tr>
            </table>
            
            <br>

            <input type="submit" value="Generate Payslip" name="gen" style="height: 7dvh; vertical-align: middle;">
          </div>
        </div>

        <div class="mother">
          <div class="container2">
            <table class="table">
              <tr>
                <td width="50%" class="th">Deductions</td>
                <td width="50%" class="th">Total</td>
              </tr>
              <tr>
                <td>Social Security System</td>
                <td><input type="number" value="0.00" step="0.01" min="0" name="sss" class="disabled" readonly></td>
              </tr>
              <tr>
                <td>Pagibig</td>
                <td><input type="number" value="0.00" step="0.01" min="0" name="ibig" class="disabled" readonly></td>
              </tr>
              <tr>
                <td>Tax</td>
                <td><input type="number" value="0.00" step="0.01" min="0" name="tax" class="disabled" readonly></td>
              </tr>
            </table>
          </div>

          <br>

          <div class="container2" name="fordisplay" style="height:13dvh; justify-content:center; vertical-align: middle; float: left;">
            <?php
                if (isset($_POST['gen'])){
                    include("connect.php");
                    
                    $eID = $_POST['empID'];
                    $fName = $_POST['fn'];
                    $lName = $_POST['ln'];
                    $posi = $_POST['position'];
                    $rate = $_POST['rate'];
                    $hours = $_POST['hours'];
                    $gross = $_POST['postot'];
                    $bonus = $_POST['bontot'];
                    $sss = $_POST['sss'];
                    $pagibig = $_POST['ibig'];
                    $tax = $_POST['tax'];
                    $totalDeductions = $_POST['td'];
                    $netPay = $_POST['np'];

                    $insert = "INSERT into payroll (empid, lastname, firstname, position, rate, hrw, gross, bonus, sss, tax, pagibig, total_deduction, netpay) values ('$eID', '$fName', '$lName', '$posi', '$rate', '$hours', '$gross', '$bonus', '$sss', '$pagibig', '$tax', '$totalDeductions', '$netPay')";

                    mysqli_query($connect, $insert) or die ("Error in Query.");
                    print("<center>Payslip for $fName $lName created!!</center>");
                }
            ?>  
           <form name="display">
              <input type="button" value="Display Payslips" name="display" style="height: 7dvh; justify-content:center; vertical-align:middle;">
            </form>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>

<script>
  function require(){
    const empID = document.getElementById('empID').value.trim();
    const fn = document.getElementById('fn').value.trim();
    const ln = document.getElementById('ln').value.trim();
    const hours = document.getElementById('hours').value.trim();
    const position = document.getElementById('position').value;

    if (!empID || !fn || !ln || !hours || !position) {
      alert("Please fill in all required fields.");
      return false; // prevent form submission
    }

    return true; // allow form submission
  }
</script>

<!--echo"<script language=\"javascript\">
            var rate = 300;
            var bonus, grossPay, totalGrossPay, SSS, Tax, Pagibig, totalDeductions, netPay;
          
            function empty(){
              var reset = confirm(\"Are you sure you want to create a new payslip?\");
              if(reset == true){
                  payroll.empID.value = \"\";
                  payroll.fn.value = \"\";
                  payroll.ln.value = \"\";
                  payroll.hours.value = \"\";
                  payroll.rec.value = \"\";
                  payroll.postot.value = \"0.00\";
                  payroll.bontot.value = \"0.00\";
                  payroll.ibig.value = \"0.00\";
                  payroll.sss.value = \"0.00\";
                  payroll.tax.value = \"0.00\";
                  payroll.tgp.value = \"0.00\";
                  payroll.td.value = \"0.00\";
                  payroll.np.value = \"0.00\";
              }
            }
          
            function changePosition(){
              var position = document.getElementById(\"position\").value;
              rate = 300;
              if(position == \"emp\"){
                rate = 300;
                payroll.pos.value = \"Employee\";
              }
              else if(position == \"sup\"){
                rate = 500;
                payroll.pos.value = \"Supervisor\";           
              }
              else if(position == \"man\"){
                rate = 700;          
                payroll.pos.value = \"Manager\";
              }
              payroll.rate.value = parseFloat(rate).toFixed(2);
            }
          
            function generate(){
              if(((payroll.hours.value == null) || (payroll.hours.value == \"\")) || ((payroll.empID.value == null) || (payroll.empID.value == \"\"))|| (payroll.fn.value == \"\") || (payroll.ln.value == \"\")){
                alert(\"Please input all required fields.\");
              }
              else{
                grossPay = rate * payroll.hours.value;
                payroll.postot.value = parseFloat(grossPay).toFixed(2);
                
                if((grossPay >= 0) && (grossPay <= 2999)){
                  bonus = 0;
                }
                else if((grossPay >= 3000) && (grossPay <= 4999)){
                  bonus = grossPay * .15;  
                }
                else if((grossPay >= 5000) && (grossPay <= 9999)){
                  bonus = grossPay * .20;  
                }
                else if((grossPay >= 10000) && (grossPay <= 14999)){
                  bonus = grossPay * .25;  
                }
                else if(grossPay >= 15000){
                  bonus = grossPay * .30;  
                }
                else{
                  alert(\"Error in entered work hours. Please only use positive integers.\");  
                }
                payroll.bontot.value = parseFloat(bonus).toFixed(2);
                  
                SSS = grossPay * .03;
                payroll.sss.value = parseFloat(SSS).toFixed(2);
                  
                Pagibig = grossPay * .10;
                payroll.ibig.value = parseFloat(Pagibig).toFixed(2);
                  
                if((grossPay >= 0) && (grossPay <= 1999)){
                  Tax = 0;
                }
                else if((grossPay >= 2000) && (grossPay <= 3999)){
                  Tax = grossPay * .18;  
                }
                else if((grossPay >= 4000) && (grossPay <= 7999)){
                  Tax = grossPay * .23;  
                }
                else if((grossPay >= 8000) && (grossPay <= 14999)){
                  Tax = grossPay * .25;  
                }
                else if(grossPay >= 15000){
                  Tax = grossPay * .30;  
                }
                else{
                  alert(\"Error in entered work hours. Please only use positive integers.\");  
                }
                payroll.tax.value = parseFloat(Tax).toFixed(2);
                
                totalGrossPay = grossPay + bonus;
                totalDeductions = SSS + Pagibig + Tax;
                netPay = totalGrossPay - totalDeductions;
                payroll.tgp.value = parseFloat(totalGrossPay).toFixed(2);
                payroll.td.value = parseFloat(totalDeductions).toFixed(2);
                payroll.np.value = parseFloat(netPay).toFixed(2);
                payroll.rec.value = payroll.fn.value + \" \" + payroll.ln.value;
              }
            }
          </script>";-->