<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <form>
      <label for="first-name">First name :</label><br />
      <input type="text" name="first-name" /><br />
      <label for="last-name">Last Name</label><br />
      <input type="text" name="last-name" /><br />
      <p>Gender</p>
      <input name="Gender" type="radio" value="M" />Male
      <br />
      <input name="Gender" type="radio" value="F" />Female
      <br />
      <p>Nationality</p>
      <select name="nationality">
        <option value="Indonesia">Indonesia</option>
        <option value="Jepang">Jepang</option>
        <option value="Belanda">Belanda</option>
      </select>
      <p>Language Spoken</p>
      <input type="checkbox" id="language1" name="language1" value="indonesia" />
      <label for="language1">Bahasa Indonesia</label><br />
      <input type="checkbox" id="language2" name="language2" value="inggris" />
      <label for="language2">Bahasa Inggris</label><br />
      <input type="checkbox" id="language3" name="language3" value="other" />
      <label for="language3">Other</label><br />
      <label for="Bio">Bio</label><br />
      <textarea name="bio" id="" cols="30" rows="10"></textarea><br />
      <a href="welcome.html"><button type="button">Sign Up</button></a>
    </form>
  </body>
</html>