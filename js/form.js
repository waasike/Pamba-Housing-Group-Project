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
