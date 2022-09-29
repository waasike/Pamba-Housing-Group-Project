<!DOCTYPE html>
<html>

<head>

    <title>Find A Home</title>
    <!-- -favicon-->
  <link rel="shortcut icon" href="pamba.png" type="image/svg+xml">
    
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
  integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">

    <!--- custom css link-->
    <!-- <link rel="stylesheet" href="css/form.css"> -->

    <!-- bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<style>

/* FIND A HOME SECTION EDITS */
li {
  list-style: none;
}

a {
  text-decoration: none;
  color: inherit;
}

span,
ion-icon {
  display: block;
}

button {
  background: none;
  border: none;
  font: inherit;
}

button {
  cursor: pointer;
}

ion-icon {
  pointer-events: none;
}

.header {
  position: fixed;
  top: 0;
  left: 0;
  width: 20%;
  height: 50px;
  background-color: hsl(0, 0%, 100%);
  padding-block: 15px;
  z-index: 4;
}

.header>.container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: 50px;
}


.nav-toggle-btn .line {
  width: 30px;
  height: 2px;
  background-color: hsl(0, 0%, 0%);
  transition: 0.25s ease;
}

.nav-toggle-btn .line:not(:last-child) {
  margin-block-end: 8px;
}

.nav-toggle-btn.active .line-1 {
  transform: translateY(10px) rotate(45deg);
}

.nav-toggle-btn.active .line-2 {
  transform: translateX(-100%);
  opacity: 0;
}

.nav-toggle-btn.active .line-3 {
  transform: translateY(-10px) rotate(-45deg);
}

.navbar3 {
  position: absolute;
  top: calc(100% + 1px);
  left: 0;
  width: 100%;
  background-color: hsl(0, 0%, 100%);
  padding-inline: 30px;
  max-height: 0;
  overflow: hidden;
  visibility: hidden;
  transition: 0.3s cubic-bezier(0.33, 0.85, 0.4, 0.96);
}

.navbar3.active {
  max-height: 250px;
  visibility: visible;
  transition-duration: 0.5s;
}

.navbar3-list {
  margin-block: 25px;
}

.navbar3-link {
  color: hsl(0, 0%, 0%);
  font-family: 'Poppins', sans-serif;
  font-weight: 500;
}

.navbar-link {
  text-decoration: none;
  color: rgb(117, 106, 106);
  line-height: 35px;
}

.navbar-link:hover {
  color: rgb(140, 182, 216);
  text-decoration: none;
}

#house {
  /* background-color:  hsl(192, 24%, 96%); */
  margin-top: 8%;
}

#house2 {
  margin-top: 10%;
}

.home2 {
  margin-top: 3%;
}

#icons1 {
  color: rgb(112, 198, 218);
}

#icons2 {
  color: rgb(112, 198, 218);
  margin-bottom: -10%;
  margin-left: 22%;
}

#select:is(:hover, :focus) {
  background-color: white;
  color: black;
}

#title {
  margin-left: 33%;

}

#select {
  background-color: rgb(155, 208, 219);
  border: none;
}

button {
  padding: 2%;
  margin-top: 5%;
}

p {
  text-align: center;
  margin-top: 60px;
  font-size: 18px;
}

#contact {
  color: #fff;
}

#contact .jumbotron {
  background-color: rgb(160, 158, 154);
  color: white;
  width: 80%;
  height: 350px;
  margin-left: 10%;
}

#contact {
  text-align: center;
}

#icon {
  display: flex;
  justify-content: center;
}

#icon img {
  margin-right: 20px;
  width: 30px;
  height: 30px;
}

#house-size {
  margin-top: 5%;
}
</style>
<body>
        <header class="header" data-header>
            <div class="container">
        
              <nav class="navbar3" data-navbar>
                <ul class="navbar3-list">
        
                  <li>
                    <a href="index.html#home" class="navbar-link" data-nav-link>Home</a>
                  </li>
        
                  <li>
                    <a href="index.html#about" class="navbar-link" data-nav-link>About</a>
                  </li>
        
                  <li>
                    <a href="index.html#house" class="navbar-link" data-nav-link>Houses</a>
                  </li>
        
                  <li>
                    <a href="form.html" class="navbar-link" data-nav-link>Find A Home</a>
                  </li>
        
                  <li>
                    <a href="index.html#team" class="navbar-link" data-nav-link>Team</a>
                  </li>
        
                  <li>
                    <a href="index.html#contact" class="navbar-link" data-nav-link>Contact Us</a>
                  </li>
        
                </ul>
              </nav>
        
              <button class="nav-toggle-btn" aria-label="toggle menu" data-nav-toggler>
                <span class="line line-1"></span>
                <span class="line line-2"></span>
                <span class="line line-3"></span>
              </button>
        
            </div>
          </header>
    <!-- </div> -->
    <div class="container-fluid">
        <div class="home2">
            <form id="house">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="jumbotron text-black">
                           
                            <h3 id="title">FIND YOUR HOME</h3>
                            <p>Hello, We are here to ensure that you have a smooth time when finding your new home</p>

                            <div class="form-group">
                                <label for="location"><i class="fa fa-map-marker" aria-hidden="true" id="icons1"> &nbsp;
                                </i>LOCATION</label>
                                <select class="form-control" id="location" required>
                                <option value="SELECT">SELECT </option>
                                <option>KILIMANI</option>>
                                <option>NGONG</option>
                                <option>JACARANDA</option>
                                <option>MOMBASA ROAD</option>
                                <option>WESTLANDS</option>
                                <option>THINDIGUA,KIAMBU ROAD</option>
                            </select>
                            </div>

                            <label for="house-size"><span class='fa-stack'><i class='far fa-square fa-stack-2x'
                                id="icons1"></i><i class='fas fa-home fa-spin fa-stack-1x'
                                id="icons1"></i></span> &nbsp;</i>HOUSE SIZE</label>
                            <select class="form-control" id="house-size" required>
                            <option value="SELECT">SELECT</option>
                            <option value="BUNGALOW">BUNGALOW</option>
                            <option value="ONE-BEDROOM">ONE BEDROOM</option>
                            <option value="TWO-BEDROOM">TWO BEDROOM</option>
                            <option value="THREE-BEDROOM">THREE-BEDROOM</option>
                            <option value="BEDSITTER">BEDSITTER</option>
                        </select>
                            <div>
                                <button type="submit" class="btn btn-success" id="select">SELECT</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>

            </form>

            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="jumbotron text-black" id="house">
                        <h3>FOR BOOKINGS WITH LANDLORDS</h3>
                        <form action="https://gmail.us2.list-manage.com/subscribe?u=aec39503ac1341d4413de3fe5&id=a655b6de3b" method="POST">
                            <div class="form-group">
                                <label for="email"><i class="fas fa-envelope"></i>Email address:</label>
                                <input type="email" value="" name="EMAIL" class="form-control" id="mce-EMAIL" required>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-success" id="select">SUBMIT</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>

        <div id="contact">

            <div class="jumbotron">
                <div class="row">
                    <div class="col-md-4" id="copy">
                        <h3>Contact us</h3>
                        <p> Email: pambahousing@gmail.com</p>
                        <p> Phone number : +254 712 345 678</p>
                    </div>
                    <div class="col-md-4">
                        <h3>Locate us</h3>
                        <P>Nairobi, Kenya</P>
                        <p> Copyright 2020 Pamba Housing. <br> All Rights Resrved</p>
                    </div>
                    <div class="col-md-4">
                        <div class="foot">
                            <h3>Connect with us</h3>
                            <div id="icon">
                            <div id="icon">
                                <div class="icon">
                                    <a href=" "><img src="socials/instagram1.png" alt=" "></a>
                                </div>
                                <br>
                                <div class="icon">
                                    <a href=" "><img src="socials/twitter1.png" alt=" "></a>
                                </div>
                                <br>
                                <div class="icon">
                                    <a href=" "><img src="socials/facebook1.png" alt=" "></a>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="jquery-3.5.1.js "></script>
    <script src="js/form.js"></script>
</body>

</html>
<script>
    const addEventOnElem = function (elem, type, callback) {
    if (elem.length > 1) {
      for (let i = 0; i < elem.length; i++) {
        elem[i].addEventListener(type, callback);
      }
    } else {
      elem.addEventListener(type, callback);
    }
  }
  
  
// toggle navbar

  const navbar = document.querySelector("[data-navbar]");
  const navLinks = document.querySelectorAll("[data-nav-link]");
  const navToggler = document.querySelector("[data-nav-toggler]");
  
  const toggleNavbar = function () {
    navbar.classList.toggle("active");
    navToggler.classList.toggle("active");
  }
  
  addEventOnElem(navToggler, "click", toggleNavbar);
  
  const closeNavbar = function () {
    navbar.classList.remove("active");
    navToggler.classList.remove("active");
  }
  
  addEventOnElem(navLinks, "click", closeNavbar);
  
  
  
// header active
  
  const header = document.querySelector("[data-header]");
  
  window.addEventListener("scroll", function () {
    if (window.scrollY > 100) {
      header.classList.add("active");
    } else {
      header.classList.remove("active");
    }
  });


// locate a house 
function LocateAhouse(location, houseSize) {
    this.location = location;
    this.houseSize = houseSize;
    this.landlordNo = 0;
    this.rentAmount = 0;
};

LocateAhouse.prototype.housePrice = function () {
    if (this.location === "SELECT") {
        if (this.houseSize === "BUNGALOW") {
            this.rentAmount = 30000;
        } else if (this.houseSize === "TWO-BEDROOM") {
            this.rentAmount = 20000;
        } else if (this.houseSize === "ONE-BEDROOM") {
            this.rentAmount = 15000;
        } else if (this.houseSize === "BEDSITTER") {
            this.rentAmount = 10000;
        } else if (this.houseSize === "SINGLE") {
            this.rentAmount = 5000;
        }
    } else if (this.location === "KILIMANI") {
        if (this.houseSize === "BUNGALOW") {
            this.rentAmount = 35000;
        } else if (this.houseSize === "ONE-BEDROOM") {
            this.rentAmount = 18000;
        } else if (this.houseSize === "TWO-BEDROOM") {
            this.rentAmount = 23000;
        }else if (this.houseSize === "THREE-BEDROOM") {
            this.rentAmount = 33000;
        }else if (this.houseSize === "BEDSITTER") {
            this.rentAmount = 13000;
        }
    
    }else if (this.location === "NGONG") {
            if (this.houseSize === "BUNGALOW") {
                this.rentAmount = 35000;
            } else if (this.houseSize === "ONE-BEDROOM") {
                this.rentAmount = 18000;
            } else if (this.houseSize === "TWO-BEDROOM") {
                this.rentAmount = 23000;
            }else if (this.houseSize === "THREE-BEDROOM") {
                this.rentAmount = 33000;
            }else if (this.houseSize === "BEDSITTER") {
                this.rentAmount = 13000;
            }
   
    } else if (this.location === "JACARANDA") {
        if (this.houseSize === "BUNGALOW") {
            this.rentAmount = 31500;
        } else if (this.houseSize === "ONE-BEDROOM") {
            this.rentAmount = 15500;
        } else if (this.houseSize === "TWO-BEDROOM") {
            this.rentAmount = 18000;
        }else if (this.houseSize === "THREE-BEDROOM") {
            this.rentAmount = 20000;
        }else if (this.houseSize === "BEDSITTER") {
            this.rentAmount = 7500;
        } 
    } else if (this.location === "MOMBASA ROAD") {
        if (this.houseSize === "BUNGALOW") {
            this.rentAmount = 31500;
        } else if (this.houseSize === "ONE-BEDROOM") {
            this.rentAmount = 18000;
        } else if (this.houseSize === "TWO-BEDROOM") {
            this.rentAmount = 15500;
        }else if (this.houseSize === "THREE-BEDROOM") {
            this.rentAmount = 21000;
        }else if (this.houseSize === "BEDSITTER") {
            this.rentAmount = 7500;
        }
    } else if (this.location === "WESTLANDS") {
        if (this.houseSize === "BUNGALOW") {
            this.rentAmount = 31500;
        } else if (this.houseSize === "ONE-BEDROOM") {
            this.rentAmount = 18000;
        } else if (this.houseSize === "TWO-BEDROOM") {
            this.rentAmount = 15500;
        } else if (this.houseSize === "THREE-BEDROOM") {
            this.rentAmount = 20000;
        } else if (this.houseSize === "BEDSITTER") {
            this.rentAmount = 7500;
        } 
    } else if (this.location === "THINDIGUA,KIAMBU ROAD") {
        if (this.houseSize === "BUNGALOW") {
            this.rentAmount = 36000;
        } else if (this.houseSize === "ONE-BEDROOM") {
            this.rentAmount = 16500;
        } else if (this.houseSize === "TWO-BEDROOM") {
            this.rentAmount = 19500;
        } else if (this.houseSize === "THREE-BEDROOM") {
            this.rentAmount = 20000;
        } else if (this.houseSize === "BEDSITTER") {
            this.rentAmount = 9500;
        } 
    };
}; $(document).ready(function () {
    $("#house").submit(function (event) {
        event.preventDefault(); var location = $("#location").val(); var houseSize = $("#house-size").val(); var newTenant = new LocateAhouse(location, houseSize);
        newTenant.housePrice();
        newTenant.landNo();
        alert("The house in " + location + " is " + houseSize + " and the total rent amount Ksh. " + newTenant.rentAmount);
    });
});
LocateAhouse.prototype.landNo = function (location, houseSize) {
    if (this.location === "SELECT") {
        if (this.houseSize === "BUNGALOW") {
            this.landlordNo = "The landLord name Mwaura +254704902382";
            alert(this.landlordNo);
        } else if (this.houseSize === "TWO-BEDROOM") {
            this.landlordNo = "The landLord name Mathew Mark +254724821093";
            alert(this.landlordNo);
        } else if (this.houseSize === "ONE-BEDROOM") {
            this.landlordNo = "The landLord name Steve +254755849302";
            alert(this.landlordNo);
        } else if (this.houseSize === "BEDSITTER") {
            this.landlordNo = "The landLord name Kerry +254723834058";
            alert(this.landlordNo);
        } else if (this.houseSize === "SINGLE") {
            this.landlordNo = "The landLord name Christine +254733029384";
            alert(this.landlordNo);
        }
    }
    else if (this.location === "KILIMANI") {
        if (this.houseSize === "BUNGALOW") {
            this.landlordNo = "The landLord's name is Claire Wambui +254704902382";
            alert(this.landlordNo);
        } else if (this.houseSize === "ONE-BEDROOM") {
            this.landlordNo = "The landLord's name is Claire Wambui +254704902382";
            alert(this.landlordNo);
        } else if (this.houseSize === "TWO-BEDROOM") {
            this.landlordNo = "The landLord's name is Claire Wambui +254704902382";
            alert(this.landlordNo);
        } else if (this.houseSize === "THREE-BEDROOM") {
            this.landlordNo = "The landLord's name is Claire Wambui +254704902382";
            alert(this.landlordNo);
        } else if (this.houseSize === "BEDSITTER") {
            this.landlordNo = "The landLord's name is Claire Wambui +254704902382";
            alert(this.landlordNo);
        }
    }
    else if (this.location === "NGONG") {
        if (this.houseSize === "BUNGALOW") {
            this.landlordNo = "The landLord's name is Peter Ruto +254713409768";
            alert(this.landlordNo);
        } else if (this.houseSize === "ONE-BEDROOM") {
            this.landlordNo = "The landLord's name is Peter Ruto +254713409768";
            alert(this.landlordNo);
        } else if (this.houseSize === "TWO-BEDROOM") {
            this.landlordNo = "The landLord's name is Peter Ruto +254713409768";
            alert(this.landlordNo);
        } else if (this.houseSize === "THREE-BEDROOM") {
            this.landlordNo = "The landLord's name is Peter Ruto +254713409768";
            alert(this.landlordNo);
        } else if (this.houseSize === "BEDSITTER") {
            this.landlordNo = "The landLord's name is Peter Ruto +254713409768";
            alert(this.landlordNo);
        }
    }
    else if (this.location === "JACARANDA") {
        if (this.houseSize === "BUNGALOW") {
            this.landlordNo = "The landLord's name is Edgar Obare +254713409768";
            alert(this.landlordNo);
        } else if (this.houseSize === "TWO-BEDROOM") {
            this.landlordNo = "The landLord's name is Edgar Obare +254713409768";
            alert(this.landlordNo);
        } else if (this.houseSize === "ONE-BEDROOM") {
            this.landlordNo = "The landLord's name is Edgar Obare +254713409768";
            alert(this.landlordNo);
        }else if (this.houseSize === "THREE-BEDROOM") {
            this.landlordNo = "The landLord's name is Edgar Obare +254713409768";
            alert(this.landlordNo);
        }else if (this.houseSize === "BEDSITTER") {
            this.landlordNo = "The landLord's name is Edgar Obare +254713409768";
            alert(this.landlordNo);
        }
    }
    else if (this.location === "MOMBASA ROAD") {
        if (this.houseSize === "BUNGALOW") {
            this.landlordNo = "The landLord's name is Spenser Malema +254713409768";
            alert(this.landlordNo);
        } else if (this.houseSize === "ONE-BEDROOM") {
            this.landlordNo = "The landLord's name is Spenser Malema +254713409768";
            alert(this.landlordNo);
        } else if (this.houseSize === "TWO-BEDROOM") {
            this.landlordNo = "The landLord's name is Spenser Malema +254713409768";
            alert(this.landlordNo);
        } else if (this.houseSize === "THREE-BEDROOM") {
            this.landlordNo = "The landLord's name is Spenser Malema +254713409768";
            alert(this.landlordNo);
        } else if (this.houseSize === "BEDSITTER") {
            this.landlordNo = "The landLord's name is Spenser Malema +254713409768";
            alert(this.landlordNo);
        }
    }
    else if (this.location === "WESTLANDS") {
        if (this.houseSize === "BUNGALOW") {
            this.landlordNo = "The landLord's name is Spenser Malema +254713409768";
            alert(this.landlordNo);
        } else if (this.houseSize === "ONE-BEDROOM") {
            this.landlordNo = "The landLord's name is Spenser Malema +254713409768";
            alert(this.landlordNo);
        } else if (this.houseSize === "TWO-BEDROOM") {
            this.landlordNo = "The landLord's name is Spenser Malema +254713409768";
            alert(this.landlordNo);
        } else if (this.houseSize === "THREE-BEDROOM") {
            this.landlordNo = "The landLord's name is Spenser Malema +254713409768";
            alert(this.landlordNo);
        } else if (this.houseSize === "BEDSITTER") {
            this.landlordNo = "The landLord's name is Spenser Malema +254713409768";
            alert(this.landlordNo);
        }
    }
    else if (this.location === "THINDIGUA,KIAMBU ROAD") {
        if (this.houseSize === "BUNGALOW") {
            this.landlordNo = "The landLord's name is Suzan Wakesho +254713409768";
            alert(this.landlordNo);
        } else if (this.houseSize === "ONE-BEDROOM") {
            this.landlordNo = "The landLord's name is Suzan Wakesho +254713409768";
            alert(this.landlordNo);
        } else if (this.houseSize === "TWO-BEDROOM") {
            this.landlordNo = "The landLord's name is Suzan Wakesho +254713409768";
            alert(this.landlordNo);
        } else if (this.houseSize === "THREE-BEDROOM") {
            this.landlordNo = "The landLord's name is Suzan Wakesho +254713409768";
            alert(this.landlordNo);
        } else if (this.houseSize === "BEDSITTER") {
            this.landlordNo = "The landLord's name is Suzan Wakesho +254713409768";
            alert(this.landlordNo);
        }
    }
    ;
};

</script>