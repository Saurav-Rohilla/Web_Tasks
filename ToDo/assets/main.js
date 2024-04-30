let response;
// To get data in response
if (localStorage.getItem("savedRecords") != null) {
    response = JSON.parse(localStorage.getItem("savedRecords"));
}
else {
    (async function fetchingApi() {
        let data = await fetch("https://jsonplaceholder.typicode.com/todos/");
        response = await data.json();
    })();
}

// To fetch data
document.getElementById("form-button").addEventListener("click", function (e) {
    e.preventDefault();
    (async function api() {
        const tbody = document.querySelector("#data-container tbody")
        tbody.innerHTML = "";
        let result = document.querySelector("#data-container tbody");
        response.forEach((item) => {
            const row = document.createElement("tr");
            const itemId = item.id;
            if (itemId) {
                row.classList.add(itemId);
            }
            if (item.completed == true || item.completed == "true") {
                row.style.backgroundColor = "red";
            }
            else {
                row.style.backgroundColor = "green";
            }
            row.innerHTML = `
                <td>${item.userId}</td>
                <td>${item.id}</td>
                <td>${item.title}</td>
                <td>${item.completed}</td>
            `;
            result.appendChild(row);
        })

    })();

});

// To save data
document.getElementById('save-button').addEventListener('click', function (e) {
    e.preventDefault();
    const selectedbox = document.querySelector('input[name = "falseCheck"]:checked');
    let result = {
        userId: document.getElementById('userid-input').value,
        id: document.getElementById('id-input').value,
        title: document.getElementById('title-input').value,
        completed: selectedbox.value
    };
    response.push(result);
    localStorage.setItem("savedRecords", JSON.stringify(response));
});

// To change status
document.getElementById("status-button").addEventListener("click", function (e) {
    e.preventDefault();
    let input = prompt("Enter id of the record:");
    let status = prompt("Enter the status: True/False");
    status = status.toLowerCase();
    if (status == "true" || status == "false") {
        let result = response.find((item) => item.id == input)
        if (result) {
            result.completed = status;
            localStorage.setItem("savedRecords", JSON.stringify(response));
        }
        else {
            alert("No entry!!!");
        }
    }
    else
    {
        alert("Only true/false allowed!!!")
    }
});

// To Search 
document.getElementById("search-button").addEventListener('click', function (e) {
    e.preventDefault();
    let input = document.getElementById("search-area").value;
    const result = response.find((item) => item.title == input);
    if (result == null) {
        alert("No record found!!!");
    }
    else {
        alert(JSON.stringify(result));
    }
});

// To update data
document.getElementById("update-button").addEventListener("click", function (e) {
    e.preventDefault();
    let id = document.getElementById("id").value;
    let userId = document.getElementById("userId").value;
    let title = document.getElementById("title").value;
    let completed = document.querySelector('input[name = "statusCheck"]:checked');
    const result = response.find((item) => item.id == id)
    result.userId = userId;
    result.title = title;
    result.completed = completed.value;
    localStorage.setItem("savedRecords", JSON.stringify(response));
});

// To delete
document.getElementById("delete-button").addEventListener('click', function (e) {
    e.preventDefault();
    let input = document.getElementById("delete").value;
    response = response.filter((item) => item.id != input)
    localStorage.setItem("savedRecords", JSON.stringify(response));
});