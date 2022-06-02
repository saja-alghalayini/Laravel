

@extends('layouts.master')
@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<body>
    

<div class="about-section">
  <h1>About Us Page</h1>
  <p>Some text about who we are and what we do.</p>
  <p>Resize the browser window to see that this page is responsive by the way.</p>
</div>

<h1 style="text-align:center">Our Team</h1>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="https://cdn.discordapp.com/attachments/976104176255901736/980156713544073256/IMG_20220226_152009.jpg" alt="Sara" style="width:100%">
      <div class="container">
        <h2>Sara Kitefan</h2>
        <p class="title">CEO & Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>Sara@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/285564294_4194790927411722_8228121123847000365_n.png?_nc_cat=111&ccb=1-7&_nc_sid=aee45a&_nc_ohc=A7ZpxIsTDNwAX8zuzMG&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AVInbH2CjHwo1Cu0jwWoZ0VouPvzcvggClRcQxDJb-QnKw&oe=62BD8736" alt="Saj" style="width:100%">
      <div class="container">
        <h2>Saja Al Ghalayini</h2>
        <p class="title">Art Director</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>saja@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/284711189_3601934559930112_3369448966235901876_n.jpg?stp=dst-jpg_p403x403&_nc_cat=111&ccb=1-7&_nc_sid=aee45a&_nc_ohc=vB4UEkcOgVEAX_1I0au&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AVJBEv3YpEDaBv8ewebe6w8F19gsr-GoyNNxatD3EufvlA&oe=62BD16B9" alt="Aya" style="width:100%">




      <div class="container">
        <h2>Aya AlSawa</h2>
        <p class="title">Designer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>aya@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>



<div class="container-form">
  <form action="action_page.php">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div>


</body>
</html>

@endsection