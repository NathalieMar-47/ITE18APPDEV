<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Housing Management</title>
    <link rel="stylesheet" href="./CSS/crud.css">
</head>
<body>
    <table>
        <tr>
            <td>
                <form autocomplete="off" onsubmit="onFormSubmit(event)">
                    <div>
                        <label for="propertyId">Property ID</label>
                        <input type="text" name="propertyId" id="propertyId">
                    </div>
                    <div>
                        <label for="propertyName">Property Name</label>
                        <input type="text" name="propertyName" id="propertyName">
                    </div>
                    <div>
                        <label for="location">Location</label>
                        <input type="text" name="location" id="location">
                    </div>
                    <div>
                        <label for="price">Price</label>
                        <input type="number" name="price" id="price">
                    </div>
                    <div>
                        <label for="status">Status</label>
                        <select name="status" id="status">
                            <option value="Available">Available</option>
                            <option value="Sold">Sold</option>
                            <option value="Rented">Rented</option>
                        </select>
                    </div>
                    <div class="form_action--button">
                        <input type="submit" value="Submit">
                        <input type="reset" value="Reset">
                    </div>
                </form>
            </td>
        </tr>
    </table>
    <table class="list" id="housingList">
        <thead>
            <tr>
                <th>Property ID</th>
                <th>Property Name</th>
                <th>Location</th>
                <th>Price</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
    <script src="./JAVA/crud.js"></script>
</body>
</html>
