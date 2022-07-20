<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/Logo.png" type="image/png">
    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="css/style.css">
   
    <!-- FONT AWESOME LINK  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
    <!-- ===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <title>Taxlix</title>
</head>
<body> 
  <nav>
    <div class="upperNav">
    <p class="call">Call : <a href="tel:9088668829"> +91 90886 68829</a></p>
    <p class="mail">email : <a href="mailto:figgitech@gmail.com">support@taxlix.com</a></p>
    <button class="callBack"><a href="callback.php">Request a Callback</a></button>
    </div>
    <div class="nav-bar">
      <i class='bx bx-menu sidebarOpen' ></i>
      <span class="logo navLogo"><a href="#"><img src="images/Logo.png" alt="#logo"></a></span>
      
      <div class="menu">
        <div class="logo-toggle">
          <span class="logo"><a href="#"><img src="images/Logo.png" alt="#logo"></a></span>
          <i class='bx bx-x siderbarClose'></i>
        </div>
        
        <ul class="nav-links darkLight-searchBox">
          <li><a href="#home">Home</a></li>
          <li><a href="#productsForEveryone">Products</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="about.php" target="_blank">About</a></li>
          <li><a href="contact.php" target="_blank">Contact</a></li>
           <li><a href="#">More</a>
            <ul>
              <li><a href="careers.php" target="_blank">Career</a></li>
              <li><a href="helpCenter.php" target="_blank">Help Center</a></li>
              <li><a href="glossary.php" target="_blank">Glossary</a></li>
              <li><a href="trust&Safety.php" target="_blank">Trust and Safety</a></li>
              <li><a href="products.php" target="_blank">Products</a></li>
              <li><a href="services.php" target="_blank">Services</a></li>
            </ul>
          </li>
          <li><a href="login_form.php" target="_blank" style="border-radius: 5px; background-color: #fff; color: #05085e; font-size:14px; padding: 5px 12px;">SignIn/SignUp</a></li>
          <div class="dark-light">
            <i class='bx bx-moon moon'></i>
            <i class='bx bx-sun sun'></i>
          </div>
        </ul>
      </div>
    </div>
    
  </nav>
  <!-- HOME SECTION STARTS HERE  -->
  <div id="home">
    <div class="heading">
      <h1>Save  Money,<br>Save Time.</h1>
      <p>India's largest tax and financial <br> services software platform</p>
      <!-- <button type="submit">Get Started</button> -->
      <a href="signup.php" target="_blank"><button>Get Started</button></a>
    </div>
    
    <!-- GET UPDATES SECTION STARTS HERE  -->
    <div class="getUpdates">
      <form action="#" method="POST">
        <h1>Get Updates</h1>
        <div class="updatesContainer">
          <div class="firstRow">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="text" name="email" placeholder="Your Email" required>
          </div>
          <div class="secondRow">
            <input type="text" name="mobile" placeholder="Your Mobile" required>
            <input type="text" name="whatsappNumber" placeholder="Your Whatsapp Number" required>
          </div>
          <div class="thirdRow">
            <select name="state" id="" required>
              <option value="#" selected required>Choose...</option>
              <option value="Andhra Pradesh">Andhra Pradesh</option>
              <option value="Arunachal Pradesh">Arunachal Pradesh</option>
              <option value="Assam">Assam</option>
              <option value="Bihar">Bihar</option>
              <option value="Chattisgarh">Chattisgarh</option>
              <option value="Goa">Goa</option>
              <option value="Gujrat">Gujrat</option>
              <option value="Haryana">Haryana</option>
              <option value="Himachal Pradesh">Himachal Pradesh</option>
              <option value="Jharkhand">Jharkhand</option>
              <option value="Karnatka">Karnatka</option>
              <option value="Kerala">Kerala</option>
              <option value="Madhya Pradesh">Madhya Pradesh</option>
              <option value="Maharashtra">Maharashtra</option>
              <option value="Manipur">Manipur</option>
              <option value="Meghalaya">Meghalaya</option>
              <option value="Mizoram">Mizoram</option>
              <option value="Nagaland">Nagaland</option>
              <option value="Odisha">Odisha</option>
              <option value="Punjab">Punjab</option>
              <option value="Rajasthan">Rajasthan</option>
              <option value="Sikkim">Sikkim</option>
              <option value="Tamilnadu">Tamilnadu</option>
              <option value="Telangana">Telangana</option>
              <option value="Tripura">Tripura</option>
              <option value="Uttar Pradesh">Uttar Pradesh</option>
              <option value="Uttarakhand">Uttarakhand</option>
              <option value="West Bengal">West Bengal</option>
              <option value="Andaman & Nicobar Islands">Andaman & Nicobar Islands</option>
              <option value="Chandigarh">Chandigarh</option>
              <option value="Dadra Nagar Haveli & Daman Diu">Dadra Nagar Haveli & Daman Diu</option>
              <option value="Delhi">Delhi</option>
              <option value="Jammu & Kashmir">Jammu & Kashmir</option>
              <option value="Ladakh">Ladakh</option>
              <option value="Lakshadeep">Lakshadeep</option>
              <option value="Puducherry">Puducherry</option>
            </select>
            <button type="submit">Get Updates</button>
          </div>
          <p>Get updates on Whatsapp <input type="checkbox" name="whatsapp" id="" checked></p> 
        </div>
        <div class="reaches">
          <div class="updateContainer">
            <h2>50,000+</h2>
            <p>Happy Customers</p>
            
          </div>
          <div class="updateProfessional">
            <h2>300+</h2>
            <p>Professionals</p>
          </div>
          <div class="updatePartner">
            <h2>250+</h2>
            <p>Partners</p>
          </div>
        </div>
      </form>
      
    </div>
    

  </div>
  <!-- CARD & HOME SECTION ENDS HERE  -->
  
  <!-- REACH SECTION STARTS HERE  -->
  <header>
    <div class="reach">
      <div class="contentBox">
        <div class="activeUsers">
          <h1>250K+</h1>
          <p>USER ACTIVE</p>
        </div>
        
        <div class="tradeValue">
          <h1>&#8377; 10 lacs+</h1>
          <p>Trade Value Filled</p>
        </div>
        
        <div class="taxReturn">
          <h1>&#8377; 10 lacs+</h1>
          <p>Tax Return Filled</p>
        </div>
      </div>
    </div>
    <!-- REACH SECTION ENDS HERE  -->
    
    <!-- POPULAR PRODUCTS SECTION STARTS HERE  -->
    <div id="popularProducts">
      <h1>Popular Products</h1>
      <div class="contentContainer">
        <a href="./eFiling.php" target="_blank" class="popularProductContentBox">
          <div class="icon">
            <div class="rectangleBox">
              <p>&#x25;</p>
            </div>
          </div>
          <h2>ITR e-filing</h2>
          <p>File tax returns in under 7 minutes</p>
        </a>
        
        <a href="./eInvoicing.php" target="_blank" class="popularProductContentBox">
          <div class="icon">
            <div class="rectangleBox">
              <p>&#36;</p>
            </div>
          </div>
          <h2>E-invoicing</h2>
          <p>Bulk invoice in Tally or any ERP</p>
        </a>
        
        <a href="./gst.php" target="_blank" class="popularProductContentBox">
          <div class="icon">
            <div class="rectangleBox">
              <p class="gst">GST</p>
            </div>
          </div>
          <h2>GST Software</h2>
          <p>G1-G9 filings made 3x faster</p>
        </a>
        
        
      </div>
    </div>
    <!-- POPULAR PRODUCTS SECTION ENDS HERE  -->
      
    <!-- ASSOCIATE BRAND SECTION STARTS HERE  -->
    <div id="associateBrands">
      <h1>Associated Brands</h1>
      <div class="logos">
        <div class="logo1">
          <img src="./images/swiggy.png" alt="">
        </div>
        <div class="logo1">
          <img src="./images/bosch.png" alt="">
        </div>
        <div class="logo1">
          <img src="./images/hero.png" alt="">
        </div>
        <div class="logo1">
          <img src="./images/mahindra.png" alt="">
        </div>
        <div class="logo1">
          <img src="./images/zomato.png" alt="">
        </div>
      </div>
    </div>
    <!-- ASSOCIATE BRAND SECTION ENDS HERE  -->
      
    <!-- PRODUCT FOR EVERYONE SECTION STARTS HERE  -->
    <div id="productsForEveryone">
      <div class="productsForEveryoneHeading">
        <h1>Products for everyone</h1>
        <p>Built for scale, made by experts and secure by design. bringing you maximum tax savings, unmatched speed and complete peace of mind.</p>
      </div>
      <div class="prodcuctsVariety">
        <div class="productsVarietyContainer">
          <img src="./images/icons/delivery.png" alt="#icon">
          <h2>For Individuals</h2>
          <a href="individual.php" target="_blank"><img class="arrow" src="./images/icons/Upward Arrow.png" alt="#arrow"></a>
        </div>
        <div class="productsVarietyContainer">
          <img src="./images/icons/studying.png" alt="#icon">
          <h2>For Experts</h2>
          <a href="expert.php" target="_blank"><img class="arrow" src="./images/icons/Upward Arrow.png" alt="#arrow"></a>
        </div>
        <div class="productsVarietyContainer">
          <img src="./images/icons/discuss.png" alt="#icon">
          <h2>For Enterprise</h2>
          <a href="enterprise.php" target="_blank"><img class="arrow" src="./images/icons/Upward Arrow.png" alt="#arrow"></a>
          
        </div>
        <div class="productsVarietyContainer">
          <img src="./images/icons/progress.png" alt="#icon">
          <h2>For SME's</h2>
          <a href="sme.php" target="_blank"><img class="arrow" src="./images/icons/Upward Arrow.png" alt="#arrow"></a>
          
        </div>
      </div>
    </div>
    <!-- PRODUCT FOR EVERYONE SECTION ENDS HERE  -->
    
    <!-- PRODUCT DESIGN SECTION STARTS HERE  -->
    <div id="productDesign">
      <h1>All our <span>products</span> are designed <br> to deliver</h1>
      <div class="productDesignHeadings">
        <img src="./images/icons/corkboard.png" alt="#image">
        <div class="productDesignLowerPart">
          <div class="taxSaving">
            <div class="productDesignIcons">
              <img src="./images/icons/Money Box.png" alt="">
              <h2>Maximum tax savings</h2>
              <p>Businesses save upto 2-7% of their net GST with us every month. Individuals can save upto &#8377;86,500 by filing their tax returns through us.</p>
            </div>
          </div>
          
          <div class="taxSaving">
            <div class="productDesignIcons">
              <img src="./images/icons/Time Machine.png" alt="">
              <h2>Maximum tax savings</h2>
              <p>Businesses save upto 2-7% of their net GST with us every month. Individuals can save upto &#8377;86,500 by filing their tax returns through us.</p>
            </div>
          </div>
          
          <div class="taxSaving">
            <div class="productDesignIcons">
              <img src="./images/icons/Today.png" alt="">
              <h2>Maximum tax savings</h2>
              <p>Businesses save upto 2-7% of their net GST with us every month. Individuals can save upto &#8377;86,500 by filing their tax returns through us.</p>
            </div>
          </div>
        </div> 
      </div>
    </div>
    <!-- PRODUCT DESIGN SECTION ENDS HERE  -->
    
    <!-- SERVICE SECTION STARTS HERE  -->
    <div id="services">
      <div class="serviceHeadings">
        <h1>Looking for expert services?</h1>
        <p>In addition to providing software services, we also offer expert services to help you manage your business and legal compliances.</p>
      </div>
      <div class="servicesBoxContainer">
        <div class="serviceBox">
          <h2>FOR YOU</h2>
          <div class="serviceElements">
            <div class="elementHeading">
              <img src="./images/icons/Total Sales.png" alt="#icon">
              <h3>ITR Filing Assistance</h3>
              <p>Get expert assistance in tax filing for salaried and self-employed individuals, NRIs, Capital gains, and more.</p>
            </div>
          </div>
          <div class="serviceElements">
            <div class="elementHeading">
              <img src="./images/icons/Todo List.png" alt="#icon">
              <h3>TDS Sale of Property</h3>
              <p>Hassale-Free 26QB compliance on sale of Property</p>
            </div>
          </div>
          <div class="serviceElements">
            <div class="elementHeading">
              <img src="./images/icons/Data Protection.png" alt="#icon">
              <h3>Legal Services</h3>
              <p>For drafting and review of legal documents such as Sale deed, Vendor agreement, Cofounders agreement etc.</p>
            </div>
          </div>
          <div class="allServices">
            <a href="services.php" target="_blank">See all Services</a>
          </div>
        </div>
        <div class="serviceBox">
          <h2>FOR YOUR BUSINESSES</h2>
          <div class="serviceElements">
            <div class="elementHeading">
              <img src="./images/icons/Launch.png" alt="#icon">
              <h3>Launch and run a startup</h3>
              <p>Legal drafting, documentation review, change in company name etc.</p>
            </div>
          </div>
          <div class="serviceElements">
            <div class="elementHeading">
              <img src="./images/icons/parliament 1.png" alt="#icon">
              <h3>Governament Registarations</h3>
              <p>Registration for Shop licence, PF, PAN, FSSAI and more.</p>
            </div>
          </div>
          <div class="serviceElements">
            <div class="elementHeading">
              <img src="./images/icons/Check Circle.png" alt="#icon">
              <h3>Trademark & digital signature</h3>
              <p>Trademark registrations and renewals; Digital signature certificates.</p>
            </div>
          </div>
          <div class="allServices">
            <a href="services.php" target="_blank">See all Services</a>
          </div>
        </div>
      </div>
    </div>
    <!-- SERVICE SECTION ENDS HERE  -->
    
    <!-- SECURITY SECTION STARTS HERE  -->
    <div id="security">
      <h1>Committed to <span>security</span></h1>
      <div class="securityHeadings">
        <div class="securityLeftArea">
          <p>We value your data as if it were ours. All our certifications and licenses, including GSP, were awarded after rigorous scrutiny of our systems and multiple VAPT audits.</p>
        </div>
        <div class="securityRightArea">
          <img src="./images/icons/playing.png" alt="#image">
        </div>
      </div>
      <div class="securityLowerPart">
        <div class="encription taxSaving">
          <div class="icons">
            <img src="./images/icons/Keybase.png" alt="">
            <h2>Encription</h2>
            <p>Your data is transmitted across SSL certified pathways. We are SOC2 2 compliant.</p>
          </div>
        </div>
        <div class="privacy taxSaving">
          <div class="icons">
            <img src="./images/icons/Security Lock.png" alt="">
            <h2>Privacy</h2>
            <p>We do nit share your or your clients' data with unaffiliated third parties for their ownpurposes.</p>
          </div>    
        </div>
        <div class="dataStorage taxSaving">
          <div class="icons">
            <img src="./images/icons/Storage.png" alt="">
            <h2>Data Storage </h2>
            <p>We use ISO 27001 certified data centres, which are quarterly VAPT tested and externally audited.</p>
          </div>  
        </div>
      </div>
    </div>
    <!-- SECURITY SECTION ENDS HERE  -->
      
    <!-- FEEDBACK SECTION STARTS HERE  -->
    <div id="feedback">
      <h1>What people are saying <br>about us</h1>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae, dignissimos? Suscipit neque ratione, vitae expedita possimus cumque magni libero fugiat ullam quaerat deserunt dicta? Iste.</p>
      <div class="feedBackContainer">
        <div class="leftShift">
          <!-- <img src="./images/icons/Upward Arrow.png" alt="#arrow"> -->
        </div>
        <div class="profileHolder">
          <div class="profileCard">
            <p>"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam, officia? Ullam, deserunt."</p>
            <div class="profileInfo">
                <div class="pic">
                  <img src="./images/icons/profile.png" alt="#ProfilePic">
                  <h2>Brigitta Ina</h2>
                </div>
            </div>
          </div>
          
          <div class="profileCard">
            <p>"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam, officia? Ullam, deserunt."</p>
            <div class="profileInfo">
                <div class="pic">
                  <img src="./images/icons/profile.png" alt="#ProfilePic">
                  <h2>Brigitta Ina</h2>
                </div>
              
            </div>
          </div>
          <div class="profileCard">
            <p>"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam, officia? Ullam, deserunt."</p>
            <div class="profileInfo">
              <div class="pic">
                <img src="./images/icons/profile.png" alt="#ProfilePic">
                <h2>Brigitta Ina</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="rightShift">
          <!-- <img src="./images/icons/Upward Arrow.png" alt="#arrow"> -->
        </div>
      </div>
    </div>
    <!-- SERVICE SECTION ENDS HERE  -->
        
    <!-- FREQUENTLY ASKED QUESTIONS SECTION STARTS HERE  -->
    <div class="fq">
      <!-- QUESTIONS ARES  -->
      <h1>Frequently asked questions</h1>
      <div class="questions">
        <div class="questionBox">
          <label >Who should file an ITR?</label>
          <p>An individual whose annual income is more than the basic exemption limit of Rs. 2.5 lacs, should file an ITR. The basic exemption limit for senior citizens (60 years onwards and less tham 80 years) is Rs. 3 lacs, and for super senior citizens is Rs. 5 Lac. </p>
        </div>
        
        <div class="questionBox">
          <label >How can I claim deductions for tax saving ?</label>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum sequi quas autem, tempora adipisci ipsa est eaque et esse quaerat quidem optio officiis quisquam dicta iure omnis reprehenderit cupiditate in numquam dolores deleniti praesentium quod vel. Reprehenderit nisi minima autem, molestiae labore iste a consequatur ut cum, facilis, animi recusandae.</p>
        </div>    
        
        <div class="questionBox">
          <label >I receive my salary income after deduction of TDS. Am i required to file an income tax return ?</label>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum sequi quas autem, tempora adipisci ipsa est eaque et esse quaerat quidem optio officiis quisquam dicta iure omnis reprehenderit cupiditate in numquam dolores deleniti praesentium quod vel. Reprehenderit nisi minima autem, molestiae labore iste a consequatur ut cum, facilis, animi recusandae.</p>
        </div>
        
        <div class="questionBox">
          <label >How do I check TDS details from my form 26AS?</label>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum sequi quas autem, tempora adipisci ipsa est eaque et esse quaerat quidem optio officiis quisquam dicta iure omnis reprehenderit cupiditate in numquam dolores deleniti praesentium quod vel. Reprehenderit nisi minima autem, molestiae labore iste a consequatur ut cum, facilis, animi recusandae.</p>
        </div>
        
        <div class="questionBox">
          <label >How can I claim an income tax refund ?</label>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem cum pariatur tenetur? Dignissimos assumenda magnam exercitationem! Mollitia fugiat officia quidem maxime vel provident laboriosam assumenda est adipisci. Ut accusamus est quaerat nihil in odit quidem corporis vero temporibus eligendi deleniti, debitis ullam modi ab nesciunt quasi distinctio ducimus ex suscipit?</p>
        </div> 
        
        <div class="query">
          <p><strong>More Questions?</strong> </p>
          <p class="call">Call Us : <a href="tel:9088668829">9088668829</a></p>
          <p class="mail">Mail Us : <a href="mailto:figgitech@gmail.com">support@taxlix.com</a></p>
        </div>      
      </div>  
    </div>   
  </header>

  <footer>
    <?php 
      include 'footer.php';
    ?>
  </footer>
  
  
</body>
</html>
