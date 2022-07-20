<div class="footer">
      <div class="links">
        <div class="leftFooter">
          <!-- <img src="./images/Logo.png" alt="#logo">
          <p>A new way to make the payments <br>easy, reliable and secure</p> -->
          <div class="socialLinks">
            <ul>
              <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
              <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></i></a></li>             
            </ul>
          </div>
          <div class="logo">
            <img src="./images/safety.png" alt="">
          </div>
          
        </div>
        <div class="rightFooter">
          <div class="usefulLinks">
            <p>Useful Links</p>
            <ul>
              <li><a href="about.php" target="_blank">About us</a></li>
              <li><a href="signup.php" target="_blank">Explore</a></li>
              <li><a href="trust&Safety.php" target="_blank">Trust & Safety</a></li>
              <li><a href="terms&Policies.php" target="_blank">Terms & Policies</a></li>
            </ul>
          </div>
          <div class="community">
            <p>Community</p>
            <ul>
              <li><a href="helpCenter.php" target="_blank">Help Center</a></li>
              <li><a href="Contact.php" target="_blank">Contact Us</a></li>
              <li><a href="contactSales.php" target="_blank">Request a Demo</a></li>
              <li><a href="careers.php" target="_blank">Careers</a></li>
            </ul>
          </div>


          <!-- <div class="partners">
            <p>Partners</p>
            <ul>
              <li><a href="#">Our Partners</a></li>
              <li><a href="#">Become a partner</a></li>
            </ul>
          </div> -->
        </div>
      </div>
      <div class="copyright">
        <div class="text">  
          <p> Copyright &copy; TaxLix  | 2022 </p>
          <p>All rights reserved.</p>
        </div>
      </div>
    </div>

    <script type="text/javascript">
    const body = document.querySelector("body"),
    nav = document.querySelector("nav"),
    modeToggle = document.querySelector(".dark-light"),
    searchToggle = document.querySelector(".searchToggle"),
    sidebarOpen = document.querySelector(".sidebarOpen"),
    siderbarClose = document.querySelector(".siderbarClose");

    let getMode = localStorage.getItem("mode");
      if(getMode && getMode === "dark-mode"){
        body.classList.add("dark");
      }

    // js code to toggle dark and light mode
    modeToggle.addEventListener("click" , () =>{
      modeToggle.classList.toggle("active");
      body.classList.toggle("dark");

      // js code to keep user selected mode even page refresh or file reopen
      if(!body.classList.contains("dark")){
          localStorage.setItem("mode" , "light-mode");
      }else{
          localStorage.setItem("mode" , "dark-mode");
      }
    });

    //   js code to toggle sidebar
    sidebarOpen.addEventListener("click" , () =>{
      nav.classList.add("active");
    });

    body.addEventListener("click" , e =>{
      let clickedElm = e.target;

      if(!clickedElm.classList.contains("sidebarOpen") && !clickedElm.classList.contains("menu")){
        nav.classList.remove("active");
      }
    });
  </script>