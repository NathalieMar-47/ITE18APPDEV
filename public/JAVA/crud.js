// Function to handle form submission
function onFormSubmit(event) {
    event.preventDefault(); // Prevent the default form submission

    // Get form input values
    const propertyId = document.getElementById("propertyId").value;
    const propertyName = document.getElementById("propertyName").value;
    const location = document.getElementById("location").value;
    const price = document.getElementById("price").value;
    const status = document.getElementById("status").value;

    // Validate inputs (optional)
    if (!propertyId || !propertyName || !location || !price) {
        alert("Please fill in all fields.");
        return;
    }

    // Insert data into the table
    insertNewRecord({ propertyId, propertyName, location, price, status });

    // Reset the form
    document.querySelector("form").reset();
}

// Function to insert a new record into the table
function insertNewRecord(data) {
    const table = document.getElementById("housingList").getElementsByTagName("tbody")[0];

    // Create a new row
    const newRow = table.insertRow();

    // Insert cells for each field
    newRow.insertCell(0).textContent = data.propertyId;
    newRow.insertCell(1).textContent = data.propertyName;
    newRow.insertCell(2).textContent = data.location;
    newRow.insertCell(3).textContent = `$${data.price}`;
    newRow.insertCell(4).textContent = data.status;

    // Create actions cell
    const actionsCell = newRow.insertCell(5);
    actionsCell.innerHTML = `
        <button onclick="editRow(this)">Edit</button>
        <button onclick="deleteRow(this)">Delete</button>
    `;
}

// Function to edit a row
function editRow(button) {
    const selectedRow = button.parentElement.parentElement;

    // Populate form with the selected row's data
    document.getElementById("propertyId").value = selectedRow.cells[0].textContent;
    document.getElementById("propertyName").value = selectedRow.cells[1].textContent;
    document.getElementById("location").value = selectedRow.cells[2].textContent;
    document.getElementById("price").value = selectedRow.cells[3].textContent.slice(1); // Remove $ sign
    document.getElementById("status").value = selectedRow.cells[4].textContent;

    // Remove the row (optional, to avoid duplicates)
    selectedRow.remove();
}

// Function to delete a row
function deleteRow(button) {
    const selectedRow = button.parentElement.parentElement;
    selectedRow.remove();
}
