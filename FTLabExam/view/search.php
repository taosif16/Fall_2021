<!DOCTYPE html>
<html>

<body>

    <h3>Search Faculty </h3>

    Search By Faculty Name:<br>
    <input type="text" id="fname" name="fname">
    <br><br>
    Search By Research Interest:<br>
    <input type="text" id="ri" name="ri">
    <br><br>
    Search By Designation:<br>
    <select id="designation" name="designation">
        <option value="">Select Designation</option>
        <option value="lecturer">Lecturer</option>
        <option value="ap">Assistant Professor</option>
        <option value="professor"> Professor</option>
    </select>
    <br><br>
    <button id="search" onclick=" AjaxFunction()"> Search </button>
    <br>

    <h2 id="message"></h2>
    <script src="../js/myjs.js">

    </script>

</body>

</html>