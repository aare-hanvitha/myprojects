<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Myprojects</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="assets/css/style.css" rel="stylesheet" />
</head>
<body>
<div class="circle"></div>
<header>
    <div class="header-top">
        <div class="header-top-content" >
            <span class="email"><i class="fa fa-envelope" aria-hidden="true"></i> aaresrikanth@gmail.com</span> 
            <span class="phone"><i class="fa fa-phone"></i> 9848148005</span>
        </div>
    </div>
    <div class="container">
        <div class="header-bottom">
            <div class="logo"><img src="assets/logos/sri_logo.png" width="100" /></div>
            <nav>
            <ul>
                <li><a href="/myprojects">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            </nav>
        </div>
    </div>
    
</header>

<script>

document.addEventListener("mousemove", moveCircle);
document.addEventListener("wheel", moveCircle);
function moveCircle(event) {
    const circle = document.querySelector(".circle");
    const x = event.clientX + window.scrollX; // Add scrollX to account for horizontal scroll
    const y = event.clientY + window.scrollY; // Add scrollY to account for vertical scroll

    circle.style.left = x + "px";
    circle.style.top = y + "px";
}
</script>
    


