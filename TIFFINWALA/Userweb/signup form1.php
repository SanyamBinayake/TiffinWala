
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  body {
  background-image: url('images/background.jpeg');
background-repeat: no-repeat;
  font-family: raleway;
    background-attachment: fixed;
  background-size: cover;
  margin: 0;
}
.popup .content {
 position: absolute;
 top: 50%;
 left: 50%;
 transform: translate(-50%,-150%) scale(0);
 width: 300px;
 height: 450px;
 z-index: 2;
 text-align: center;
 padding: 20px;
 border-radius: 20px;
 background: #262626;
 box-shadow:  38px 38px 56px #1e1e1e, 
             -25px -25px 38px #1e1e1e;
 z-index: 1;
}
.popup .close-btn {
 position: absolute;
 right: 20px;
 top: 20px;
 width: 30px;
 height: 30px;
 color: white;
 font-size: 30px;
 border-radius: 50%;
 padding: 2px 5px 7px 5px;
 background: #292929;
 box-shadow:  5px 5px 15px #1e1e1e, 
             -5px -5px 15px #1e1e1e;
 }
.popup.active .content {
transition: all 300ms ease-in-out;
transform: translate(-50%,-50%) scale(1);
}
h1 {
 text-align: center;
 font-size: 32px;
 font-weight: 600;
 padding-top: 20px;
 padding-bottom: 10px;
}
marquee{
 font-size: 20px;
 font-weight: 600;
 padding-top: 15px;
 padding-bottom: 5px;
 color:#000000;
}
a {
 font-weight: 600;
 color: white;
}
select{
padding: 10px;
font-size: 16px;
border-radius: 10px;
border: none;
margin-bottom: 15px;
color: #bfc0c0;
background: #262626;
box-shadow: inset 5px 5px 5px #232323, 
            inset -5px -5px 5px #292929;
outline: none;
}
.input-field .validate {
padding: 10px;
font-size: 16px;
border-radius: 10px;
border: none;
margin-bottom: 15px;
color: #bfc0c0;
background: #262626;
box-shadow: inset 5px 5px 5px #232323, 
            inset -5px -5px 5px #292929;
outline: none;
}
.first-button {
color: white;
font-size: 18px;
font-weight: 500;
padding: 30px 50px;
border-radius: 40px;
border: none;
position: absolute;
top: 50%;
left: 20%;
transform: translate(-50%, -50%);
background: #262626;
box-shadow:  18px 18px 25px #1e1e1e, 
             -15px -15px 25px #1e1e1e;
transition: box-shadow .35s ease !important;
outline: none;
}
.first-button:active {  
background: linear-gradient(145deg, #222222, #292929);
box-shadow:  5px 5px 10px #262626, 
             -5px -5px 10px #262626;
border: none;
}
#send-button {
color: white;
font-size: 15px;
font-weight: 500;
margin-top: 20px;
padding: 10px;
border-radius: 40px;
border: none;
background: #262626;
/*box-shadow:  8px 8px 15px #202020, 
             -8px -8px 15px #2c2c2c;*/
transition: box-shadow .35s ease !important;
outline: none;
}
.tex{
  font-size: 18px;

}
.second-button:active{
background: linear-gradient(145deg,#222222, #292929);
box-shadow: 5px 5px 10px #262626, -5px -5px 10px #262626;
border: none;
outline: none;
}
p{
color: #bfc0c0;
padding: 20px;
}
</style>
</head>
<body >
  <form name="f1" id="f1" method="post" action="">
 <div class="popup" id="popup-1">
<center>
  <marquee scrollamount="10">Fill this form to deliver a tiffin in Nashik !!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Have a good day..</marquee>
<h1>Information to deliver tiffin</h1> 
  <div class="input-field"><input placeholder="Enter Full Name" id="name" name="name" class="validate"></div>
  <div class="input-field"><input placeholder="Number" name="number" id="number" class="validate"></div>
  <div class="input-field"><input type="email" placeholder="Email" id="email" name="email" class="validate"></div>
  <div class="input-field"><input placeholder="Address" id="address" name="address" class="validate"></div><h3>Mess Name</h3>
  <div class="tex" class="validate">
                  <select name="mname" id="mname">
                      <option>Select Mess</option>
                      <option>Annapurna Mess</option>                   
                      <option>RAMAS Mess</option>
                      <option>Nakul Mess</option>
                      </select></div>
                 <div class="tex" class="validate"> Plan :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <select name="plan" id="plan">
                      <option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Silver</option>
                      <option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gold</option>
                      <option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Platinum</option>                   
                          </select></div>
             Quantity : &nbsp;
             <select name="quantity" id="quantity">
                              <option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              </option>
                              <option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2&nbsp;&nbsp;&nbsp;</option>
                              <option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                              <option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                              <option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                              <option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                              <option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                              <option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                              <option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                             </select><br>
                        <div class="tex">Meal Type : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <select name="mtype" id="mtype">
                      <option>Lunch</option>
                      <option>Dinner</option>
                      <option>Both</option>                   
</select><br> 
<input type="hidden" name="cityName" id="cityName" value="nashik">
<input type="button"  value="Place Order" name="sub" id="send-button" onclick="val();" class="bg-purple-700 hover:bg-purple-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" >

     </center>
   </div>
  </div>
</form>
  <script type="text/javascript">
    with (document.forms.f1) {
  function val() {
    alert("Few seconds to place order");
    const form = document.getElementById('f1');
    const name = document.getElementById('name').value;
    const number = document.getElementById('number').value;
    const email = document.getElementById('email').value;
    const address = document.getElementById('address').value;
    const mname = document.getElementById('mname').value;
    const quantity = document.getElementById('quantity').value;
    const mtype = document.getElementById('mtype').value;
    const plan = document.getElementById('plan').value;
    const cityName = document.getElementById('cityName').value;

    const sendButton = document.getElementById('send-button');
    sub.disabled = true;

    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'send-email.php');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = () => {
      sendButton.disabled = false;
      alert(xhr.responseText);
      window.location.href="service.php";

      form.reset();
    };
    xhr.send(`name=${name}&number=${number}&email=${email}&address=${address}&mname=${mname}&quantity=${quantity}&mtype=${mtype}&plan=${plan}&cityName=${cityName}`);
  }
}

  </script>
  </body>
</html> 