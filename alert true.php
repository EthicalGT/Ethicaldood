<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    

    
    <link rel="stylesheet" href="style5.css" />

    
  </head>
  <body>
    <section>
	
      <button class="show-modal" id="my_btn">Show Modal</button>
	  <a href="Insert.php"><button class="show-modal" id="newbtn">Go Back</button></a>
      <span class="overlay"></span>

      <div class="modal-box">
	  <img src="images/tick.png" alt="ticked..! class="tick">
        
        <h2>Thank You..!</h2>
        <h3>Your Data has been successfully inserted in Mysql database.</h3>

        <div class="buttons">
          <button class="close-btn" id="newbtn">Ok, Close</button>
          <button id="newbtn">Open File</button>
        </div>
      </div>
    </section>

    <script>
      const section = document.querySelector("section"),
        overlay = document.querySelector(".overlay"),
        showBtn = document.querySelector(".show-modal"),
        closeBtn = document.querySelector(".close-btn");

      showBtn.addEventListener("click", () => section.classList.add("active"));

      overlay.addEventListener("click", () =>
        section.classList.remove("active")
      );

      closeBtn.addEventListener("click", () =>
        section.classList.remove("active")
      );
	  document.getElementById("my_btn").click();
    </script>
  </body>
</html>
