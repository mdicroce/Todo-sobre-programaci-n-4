<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./baseStyle.css">
</head>
<body>
    <form action="action.php" method="post">
        <h1>Contact Form</h1>
        <h2><span class="number">1</span> Your basic info </h2>
        <label for="Name">Name</label>
        <input type="text" name="name" id="Name">
        <label for="e-mail">Email</label>
        <input type="email" name="e-mail" id="e-mail">
        <label for="pass">Password</label>
        <input type="password" name="password" id="pass">
        <label for="bithday">Bithday</label>
        <input type="datetime" name="bithday" id="bithday">
        <label for="sex">Sex: </label>
        <input type="radio" name="sex" value="male" id="male"><label for="male">Male</label> 
        <input type="radio" name="sex" value="female" id="female"> <label for="female">Female</label> 
        <h2><span class="number">2</span>Your profile</h2>
        <label for="about-you">About you</label>
        <textarea name="about-you" id="about-you" cols="30" rows="5"></textarea>
        <label for="role">Role</label>
        <select name="role" id="role">
            <option value="front-end">Front-end developer</option>
            <option value="back-end">Back-end developer</option>
            <option value="fullstack">Fullstack developer</option>
            <option value="UI/UX">UI/UX</option>
            <option value="Data-Scientist">Data-scientist</option>
        </select>
        <label for="interest">Interest</label>
        <input type="checkbox" name="Data Base" id="data-base">Data Base
        <input type="checkbox" name="Design" id="design">Design
        <input type="checkbox" name="Business" id="business">Business
        <input type="checkbox" name="Unit Test" id="unit-test">Unit Test
        <input type="checkbox" name="Cloud Development" id="cloud-dev">Cloud Development
        <input type="checkbox" name="Web Development" id="web-dev">Web Development
        <div class="button-area">
            <button type="submit">Send</button>
            <button type="reset">Reset</button>
        </div>
    
    </form>
</body>
</html>