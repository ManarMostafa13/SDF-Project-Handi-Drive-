<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>payment</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" integrity="sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

* {
  font-family: 'Noto Sans', sans-serif;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  scroll-behavior: smooth;
  text-transform: capitalize;
}
body{
  overflow-x: hidden;
   
   background: rgb(195,200,236);
background: linear-gradient(90deg, rgba(195,200,236,1) 0%, rgba(200,241,235,1) 53%, rgba(152,197,224,1) 100%);
 
}

        .container {
            margin: 0 auto;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 5rem;
        }

        main {
            width: 80%;
            border: none;
            border-radius: 5px;
            background: #f1f1f1;
        }

        section {
            padding: 10px;
            box-sizing: border-box;
        }

        .h1 {
            background-color: #333;
            color: aliceblue;
            text-align: center;
        }
        button{
            width: 20%;
            font-size: larger !important;
        }

      input{
            width: 50% !important;
     }
     .form{
        margin: 2%;
        text-align: center;
     }
     .fa-3x {
  font-size:30% !important;
}
  #finish{
    position: relative;
    left: 58%

  }

    </style>
    <script>
        var visa=true
        var fawry=true
        function displayVisaForm() {
            const formContainer = document.getElementById("div");
            const form = document.createElement("form");
            const OwnerInput= document.createElement("input");
            const NumberInput = document.createElement("input");
            const DateInput = document.createElement("input");
            const ConfirmButton = document.createElement("button");
            
            form.setAttribute("class", "form"); 
            OwnerInput.setAttribute("type", "text");
            OwnerInput.setAttribute("name", "name");
            OwnerInput.setAttribute("placeholder", "Card Owner");
           OwnerInput.setAttribute("class", "form-control");
           NumberInput.setAttribute("class", "form-control");
           NumberInput.setAttribute("placeholder", "Owner Number");
           NumberInput.setAttribute("type", "number");
            NumberInput.setAttribute("name", "card-number");
           DateInput.setAttribute("class", "form-control");
           DateInput.setAttribute("placeholder", "Expire Date");
            DateInput.setAttribute("type", "date");
            DateInput.setAttribute("name", "expiration-date");
            ConfirmButton.textContent = "Confirm";
            ConfirmButton.setAttribute("class", "btn btn-primary");

            form.appendChild(OwnerInput);
            form.appendChild(document.createElement("br"));

            form.appendChild(NumberInput);
            form.appendChild(document.createElement("br"));

            form.appendChild(DateInput);
            form.appendChild(document.createElement("br"));
            // form.appendChild(document.createElement("br"));

            form.appendChild(ConfirmButton);
           
            formContainer.innerHTML = "";
            if(visa)
            formContainer.appendChild(form);
            visa=false
        }
        function displayfawriForm(){
            var formContain = document.getElementById("f-div");
            var form = document.createElement("form");
            var emailInput= document.createElement("input");
            var NumberInput = document.createElement("input");
            var ConfButton = document.createElement("button");

            form.setAttribute("class", "form"); 
            emailInput.setAttribute("type", "email");
            emailInput.setAttribute("class", "form-control");
            emailInput.setAttribute("placeholder", "Email");
            NumberInput.setAttribute("type", "number");
            NumberInput.setAttribute("placeholder", "Number"); 
            NumberInput.setAttribute("class", "form-control");
            ConfButton.textContent = "Confirm";
            ConfButton.setAttribute("class", "btn btn-primary");


            form.appendChild(emailInput);
            form.appendChild(document.createElement("br"));

            form.appendChild(NumberInput);
            form.appendChild(document.createElement("br"));
            form.appendChild(ConfButton);
            
            formContain.innerHTML = "";
            if(fawry)
            formContain.appendChild(form);
            fawry=false
        }

    
    </script>
</head>
<body>
  {{-- <a href="home"><i class="fa-solid fa-house-user" style="font-size: 50px; margin: 4%;"></i></a> --}}

    <div class="container">
        <main>
            <h1 class="h1">Payment Methods</h1>
            <section>
                <button class="btn btn-primary" onclick="displayVisaForm()">Visa</button>
            </section>
            <div id="div"></div>
                <section>
                    <button class="btn btn-primary" onclick="displayfawriForm()">Fawri</button>
                </section>
                <div id="f-div"></div>
                <section>
                <a href=" http://127.0.0.1:8000/"><button class="btn btn-primary">cash</button></a>
            </section>
            
        </main>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js" integrity="sha512-3dZ9wIrMMij8rOH7X3kLfXAzwtcHpuYpEgQg1OA4QAob1e81H8ntUQmQm3pBudqIoySO5j0tHN4ENzA6+n2r4w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>