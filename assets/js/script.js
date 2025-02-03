/** 
 * Online Store Project
 * Author: Omindu Dissanayaka
 * University: Java Institute For Advance Technology
 */

function adminsignin() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    var form = new FormData();

    form.append("email", email);
    form.append("password", password);

    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var response = xhr.responseText;
            if (response == "Success") {
                Swal.fire({
                    position: "center",
                    icon: "success",
                    title: "Sign In Successful",
                    showConfirmButton: false,
                    timer: 1500
                }).then(() => {
                    setTimeout(() => {
                        window.location.href = "dashboard.php";
                    }, 1500);
                })
            } else {
                Swal.fire({
                    position: "center",
                    icon: "error",
                    title: "Oops...",
                    text: (response),
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        }
    }

    xhr.open("POST", "signinProcess.php", true);
    xhr.send(form);
}

/** Chart */


/** Product */

// Add Brand
function addBrand(){
   var brandName = document.getElementById("brandName").value;
  
   var form = new FormData();

   form.append("brandName", brandName);

   var xhr = new XMLHttpRequest();

   xhr.onreadystatechange = function() {
    if(xhr.readyState == 4 && xhr.status == 200){
        var response = xhr.responseText;
        if (response == "Success") {
            Swal.fire({
                position: "center",
                icon: "success",
                title: "Brand Name Added Successfully",
                showConfirmButton: false,
                timer: 1500
            }).then(() => {
                setTimeout(() => {
                    window.location.reload();
                }, 50);
            })
        } else {
            Swal.fire({
                position: "center",
                icon: "error",
                title: "Oops...",
                text: (response),
                showConfirmButton: false,
                timer: 1500
            });
        }
    }
   }
   xhr.open("POST", "addBrandProcess.php", true);
   xhr.send(form);
}

// Add Category

function addCategory(){
    var categoryName = document.getElementById("categoryName").value;
    
    var form = new FormData();

    form.append("categoryName", categoryName);

    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if(xhr.readyState == 4 && xhr.status == 200){
            var response = xhr.responseText;
            if (response == "Success") {
                Swal.fire({
                    position: "center",
                    icon: "success",
                    title: "Category Name Added Successfully",
                    showConfirmButton: false,
                    timer: 1500
                }).then(() => {
                    setTimeout(() => {
                        window.location.reload();
                    }, 50);
                })
            } else {
                Swal.fire({
                    position: "center",
                    icon: "error",
                    title: "Oops...",
                    text: (response),
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        }
    }
    xhr.open("POST", "addCategoryProcess.php", true);
    xhr.send(form);

}

// Add Color

function addColor(){
    var colorName = document.getElementById("colorName").value;
    
    var form = new FormData();

    form.append("colorName", colorName);

    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if(xhr.readyState == 4 && xhr.status == 200){
            var response = xhr.responseText;
            if (response == "Success") {
                Swal.fire({
                    position: "center",
                    icon: "success",
                    title: "Color Name Added Successfully",
                    showConfirmButton: false,
                    timer: 1500
                }).then(() => {
                    setTimeout(() => {
                        window.location.reload();
                    }, 50);
                })
            } else {
                Swal.fire({
                    position: "center",
                    icon: "error",
                    title: "Oops...",
                    text: (response),
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        }
    }
    xhr.open("POST", "addColorProcess.php", true);
    xhr.send(form);
}

// Add Size

function addSize(){
    var sizeName = document.getElementById("sizeName").value;
    
    var form = new FormData();

    form.append("sizeName", sizeName);

    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.status == 200){
            var response = xhr.responseText;
            if (response == "Success") {
                Swal.fire({
                    position: "center",
                    icon: "success",
                    title: "Size Name Added Successfully",
                    showConfirmButton: false,
                    timer: 1500
                }).then(() => {
                    setTimeout(() => {
                        window.location.reload();
                    }, 50);
                })
            } else {
                Swal.fire({
                    position: "center",
                    icon: "error",
                    title: "Oops...",
                    text: (response),
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        }
    }
    
    xhr.open("POST", "addSizeProcess.php", true);
    xhr.send(form);
}

// Add Product

function addProduct(){
    var pname = document.getElementById("pname").value;
    var desc = document.getElementById("desc").value;
    var brand = document.getElementById("brand").value;
    var category = document.getElementById("category").value;
    var color = document.getElementById("color").value;
    var size = document.getElementById("size").value;

    //images

    var img1 = document.getElementById("img1").files[0];
    var img2 = document.getElementById("img2").files[0];
    var img3 = document.getElementById("img3").files[0];

    if(!pname || !desc || !brand || !category || !color || !size){
        Swal.fire({
            position: "center",
            icon: "warning",
            title: "All fields are required!",
            text: "Please fill out all the fields before submitting",
        });
        return;
    }
}
