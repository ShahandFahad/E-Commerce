<?php   include_once('./includes/headerNav.php'); ?>
<div class="overlay" data-overlay></div>
<!--
    - HEADER
  -->
<header>
  <!-- top head action, search etc in php -->
  <!-- inc/topheadactions.php -->
  <?php require_once './includes/topheadactions.php'; ?>
  <!-- mobile nav in php -->
  <!-- inc/mobilenav.php -->
  <?php require_once './includes/mobilenav.php'; ?>

    <style>
        * {
    font-family: Arial, Helvetica, sans-serif;
    box-sizing: border-box;

}
:root{
    --main-maroon: #CE5959;
    --deep-maroon: #89375F;
}

.appointments-section {
    width: 80%;
    margin-left: auto;
    margin-right: auto;
    margin-top: 20px;
}

input {
    border: none;
    outline: none;
}

.appointment-heading {
    text-align: center;
}

.appointment-head {
    font-size: 40px;
    font-weight: 700;
    margin-bottom: 0;
    color: var( --main-maroon);
}

.appointment-line {
    width: 160px;
    height: 3px;
    border-radius: 10px;
    background-color: var( --main-maroon);
    display: inline-block;
}

.edit-detail-field .child-detail-inner {
    width: 100%;
    display: flex;
    margin-top: 10px;
    justify-content: space-between;
    margin-left: auto;
    margin-right: auto;
}

.Add-child-section {
    margin-top: 40px;
}

.Add-child-section .child-heading-t {
    font-size: 25px;
    font-weight: 700;
    color: var( --main-maroon);
}

.Add-child-section .child-fields1 {
    width: 49%;
    height: 55px;
    border: 1px solid var( --main-maroon);
    border-radius: 5px;
    margin-bottom: 30px;
    padding: 15px;
    background-color: #FFFFFF;
    position: relative;
    box-shadow: 2px 2px 2px rgb(185, 184, 184);
}

.Add-child-section .child-fields1 input {
    color: #000000;
    font-weight: 700;
    width: 100%;
    background-color: transparent;
}

.Add-child-section .child-fields1::before {
    position: absolute;
    content: "First Name";
    top: -10px;
    background-image: linear-gradient(#FFFCF6, #FFFFFF);
    padding-left: 4px;
    padding-right: 4px;
    color: var( --main-maroon);
    font-weight: 600;
    font-size: 13px;
}

.Add-child-section .child-fields1 input {
    color: #000000;
    font-weight: 700;
    width: 100%;
    background-color: transparent;
}

.Add-child-section .child-fields3 {
    width: 49%;
    height: 55px;
    border: 1px solid var( --main-maroon);
    border-radius: 5px;
    margin-bottom: 30px;
    padding: 15px;
    background-color: #FFFFFF;
    position: relative;
    box-shadow: 2px 2px 2px rgb(185, 184, 184);
}

.Add-child-section .child-fields3 input {
    color: #000000;
    font-weight: 700;
    width: 100%;
    background-color: transparent;
}

.Add-child-section .child-fields3::before {
    position: absolute;
    content: "Last Name";
    top: -10px;
    background-image: linear-gradient(#FFFCF6, #FFFFFF);
    padding-left: 4px;
    padding-right: 4px;
    color: var( --main-maroon);
    font-weight: 600;
    font-size: 13px;
}

.Add-child-section .child-fields4 {
    width: 49%;
    height: 55px;
    border: 1px solid var( --main-maroon);
    border-radius: 5px;
    margin-bottom: 30px;
    padding: 15px;
    background-color: #FFFFFF;
    position: relative;
    box-shadow: 2px 2px 2px rgb(185, 184, 184);
}

.Add-child-section .child-fields4::before {
    position: absolute;
    content: "House Number or Name";
    top: -10px;
    background-image: linear-gradient(#FFFCF6, #FFFFFF);
    padding-left: 4px;
    padding-right: 4px;
    color: var( --main-maroon);
    font-weight: 600;
    font-size: 13px;
}

.Add-child-section .child-fields4 input {
    color: #000000;
    font-weight: 700;
    width: 100%;
    background-color: transparent;
}

.Add-child-section .child-fields5 {
    width: 49%;
    height: 55px;
    border: 1px solid var( --main-maroon);
    border-radius: 5px;
    margin-bottom: 30px;
    padding: 15px;
    background-color: #FFFFFF;
    position: relative;
    box-shadow: 2px 2px 2px rgb(185, 184, 184);
}

.Add-child-section .child-fields5::before {
    position: absolute;
    content: "Street or Road";
    top: -10px;
    background-image: linear-gradient(#FFFCF6, #FFFFFF);
    padding-left: 4px;
    padding-right: 4px;
    color: var( --main-maroon);
    font-weight: 600;
    font-size: 13px;
}

.Add-child-section .child-fields5 input {
    color: #000000;
    font-weight: 700;
    width: 100%;
    background-color: transparent;
}

.Add-child-section .child-fields6 {
    width: 49%;
    height: 55px;
    border: 1px solid var( --main-maroon);
    border-radius: 5px;
    margin-bottom: 30px;
    padding: 15px;
    background-color: #FFFFFF;
    position: relative;
    box-shadow: 2px 2px 2px rgb(185, 184, 184);
}

.Add-child-section .child-fields6::before {
    position: absolute;
    content: "Town or City";
    top: -10px;
    background-image: linear-gradient(#FFFCF6, #FFFFFF);
    padding-left: 4px;
    padding-right: 4px;
    color: var( --main-maroon);
    font-weight: 600;
    font-size: 13px;
}

.Add-child-section .child-fields6 input {
    color: #000000;
    font-weight: 700;
    width: 100%;
    background-color: transparent;
}

.Add-child-section .child-fields7 {
    width: 49%;
    height: 55px;
    border: 1px solid var( --main-maroon);
    border-radius: 5px;
    margin-bottom: 30px;
    padding: 15px;
    background-color: #FFFFFF;
    position: relative;
    box-shadow: 2px 2px 2px rgb(185, 184, 184);
}

.Add-child-section .child-fields7::before {
    position: absolute;
    content: "Post Code";
    top: -10px;
    background-image: linear-gradient(#FFFCF6, #FFFFFF);
    padding-left: 4px;
    padding-right: 4px;
    color: var( --main-maroon);
    font-weight: 600;
    font-size: 13px;
}

.Add-child-section .child-fields7 input {
    color: #000000;
    font-weight: 700;
    width: 100%;
    background-color: transparent;
}

.Add-child-section .child-fields8 {
    width: 49%;
    height: 55px;
    border: 1px solid var( --main-maroon);
    border-radius: 5px;
    margin-bottom: 30px;
    padding: 15px;
    background-color: #FFFFFF;
    position: relative;
    box-shadow: 2px 2px 2px rgb(185, 184, 184);
}

.Add-child-section .child-fields8::before {
    position: absolute;
    content: "Contact Number";
    top: -10px;
    background-image: linear-gradient(#FFFCF6, #FFFFFF);
    padding-left: 4px;
    padding-right: 4px;
    color: var( --main-maroon);
    font-weight: 600;
    font-size: 13px;
}

.Add-child-section .child-fields8 input {
    color: #000000;
    font-weight: 700;
    width: 100%;
    background-color: transparent;
}

.Add-child-section .child-fields9 {
    width: 49%;
    height: 55px;
    border: 1px solid var( --main-maroon);
    border-radius: 5px;
    margin-bottom: 30px;
    padding: 15px;
    background-color: #FFFFFF;
    position: relative;
    box-shadow: 2px 2px 2px rgb(185, 184, 184);
}

.Add-child-section .child-fields9::before {
    position: absolute;
    content: "Email Address";
    top: -10px;
    background-image: linear-gradient(#FFFCF6, #FFFFFF);
    padding-left: 4px;
    padding-right: 4px;
    color: var( --main-maroon);
    font-weight: 600;
    font-size: 13px;
}

.Add-child-section .child-fields9 input {
    color: #000000;
    font-weight: 700;
    width: 100%;
    background-color: transparent;
}

.Add-child-section .Address-field {
    width: 100%;
    height: 55px;
    border: 1px solid var( --main-maroon);
    border-radius: 5px;
    margin-bottom: 30px;
    padding: 15px;
    background-color: #FFFFFF;
    position: relative;
    box-shadow: 2px 2px 2px rgb(185, 184, 184);
}

.Add-child-section .Address-field input {
    color: #000000;
    font-weight: 700;
    width: 100%;
    height: 100%;
}

.Add-child-section .Address-field::before {
    position: absolute;
    content: "Country Name";
    top: -10px;
    background-image: linear-gradient(#FFFCF6, #FFFFFF);
    padding-left: 4px;
    padding-right: 4px;
    color: var( --main-maroon);
    font-weight: 600;
    font-size: 13px;
}

.Add-child-section .child-dob p {
    font-size: 25px;
    font-weight: 700;
    color: var( --main-maroon);
}

.Add-child-section .dob-fields {
    margin-top: 20px;
    width: 60%;
    height: 55px;
    border: 1px solid var( --main-maroon);
    border-radius: 5px;
    margin-bottom: 30px;
    padding: 15px;
    background-color: #FFFFFF;
    padding-right: 30px;
    position: relative;
    box-shadow: 2px 2px 2px rgb(185, 184, 184);
    display: flex;
    justify-content: space-between;
}

.Add-child-section .dob-fields span svg {
    width: 25px;
    height: 25px;
    margin-left: auto;
}

.Add-child-section .dob-fields input {
    color: #000000;
    font-weight: 700;
    width: 80%;
    background-color: transparent;
}

.child-register-btn {
    padding-top: 5px;
}

.child-register-btn p {
    width: 550px;
    height: 60px;
    background-color: var( --main-maroon);
    box-shadow: 0px 0px 4px #615f5f;
    line-height: 60px;
    color: #FFFFFF;
    margin-left: auto;
    border-radius: 8px;
    text-align: center;
    cursor: pointer;
    font-size: 19px;
    font-weight: 600;
}

.Add-child-section .Address-field textarea {
    display: none;
}

@media screen and (max-width: 794px) {


    .child-register-btn p {
        width: 100%;
    }

    .edit-detail-field .child-heading-t {
        margin-bottom: 25px;
    }

    .edit-detail-field .child-detail-inner {
        width: 100%;
        display: flex;
        flex-direction: column;
        margin-top: 0px;
        justify-content: unset;
    }

    .child-fields,
    .child-fields1,
    .child-fields3 {
        width: 100% !important;
    }

    .dob-fields {
        width: 100% !important;
    }
}

@media screen and (max-width: 629px) {
    .Add-child-section {
        width: 80%;
        margin-left: auto;
        margin-right: auto;
    }
}

@media screen and (max-width: 409px) {
    .Add-child-section {
        width: 90%;
        margin-left: auto;
        margin-right: auto;
    }
}

@media screen and (max-width:628px) {
    .appointments-section {
        width: 100% !important;

    }

}

.error-ms {
    color: var( --main-maroon);
    margin-bottom: 10px;
}
    </style>
</header>

<body>
    
                <div class="appointments-section">

                    <div class="appointment-heading">
                            <p class="appointment-head">CheckOut</p>
                            <span class="appointment-line"></span>

                        </div>
                   
                    <div class="inner-appointment">
                
                    <section class="edit-detail-field">
                        <div class="Add-child-section">
                            <div class="child-detail-inner">
                              
                                <div class="child-fields1">
                                    <input type="text" style="color: #676767;" placeholder="First Name">
                                </div>
                                <div class="child-fields3">
                                    <input type="text" style="color: #676767;" placeholder="Last Name">
                                </div>

                            </div>
                            <div class="child-detail-inner">
                              
                                <div class="child-fields child-fields4">
                                    <input type="text" placeholder="P-134">
                                </div>
                                <div class="child-fields child-fields5 ">
                                    <input type="text" placeholder="A5">
                                </div>

                            </div>
                            <div class="child-detail-inner">
                              
                                <div class="child-fields child-fields6">
                                    <input type="text" placeholder="Manchester">
                                </div>
                                <div class="child-fields child-fields7 ">
                                    <input type="text" placeholder="38000">
                                </div>

                            </div>
                            
                            <div class="child-detail-inner">
                              
                                <div class="child-fields Address-field">
                                    <input type="text" style="color: #676767;" placeholder="United kingdom">
                                  
                                </div>

                               

                            </div>
                            <div class="child-detail-inner">
                              
                                <div class="child-fields child-fields8">
                                    <input type="text" placeholder="+1 0000-0000-0000">
                                </div>
                                <div class="child-fields child-fields9">
                                    <input type="text" placeholder="example@email.com">
                                </div>

                            </div>
                         
                            <div class="child-register-btn">
                                <span class="error-ms"></span>
                                <p onclick="checkFields()">Proceed To Pay</p>
                            </div>


                        </div>

                    </section>

                    
                   
                        
                    </div>

                    




            </div>



            <script>
                let fields = document.querySelectorAll('.child-fields input');
                let error = document.querySelector('.error-ms');
                function checkFields(){
                    console.log(fields);
                for(let i = 0 ; i < 9 ; i++)
                {
                    if(fields[i].value === '')
                    {
                        error.innerHTML = "Please fill all fields. " ;
                    }else{
                        error.innerHTML = "Sorry ! its Looks like its not available in your Country.  " ;

                    }
                } 

  }

            

            
            </script>
          
</body>







<?php require_once './includes/footer.php'; ?>
