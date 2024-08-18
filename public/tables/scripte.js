document.addEventListener('DOMContentLoaded', function() {
    const tableForm = document.getElementById('tableForm');
    const tableList = document.getElementById('tableList');

    tableForm.addEventListener('submit', function(event) {
        event.preventDefault();

        // Get form data
        const formData = new FormData(tableForm);
        const tableTitle = formData.get('tableTitle');
        const image = formData.get('image');
        const price = formData.get('price');
        const typeTable = formData.get('typeTable');
        const description = formData.get('description');
        const nombrePer = formData.get('nombrePer');

        // Create table item HTML
        const tableItemHTML = `
            <div class="tableItem">
                <h2>${tableTitle}</h2>
                <p>Price: ${price}</p>
                <p>Type: ${typeTable}</p>
                <p>Description: ${description}</p>
                <p>Seats: ${nombrePer}</p>
                <img src="${image}" alt="${tableTitle}">
            </div>
        `;

        // Append table item to list
        tableList.insertAdjacentHTML('beforeend', tableItemHTML);

        // Reset form
        tableForm.reset();
    });
});
