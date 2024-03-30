const sideLinks = document.querySelectorAll('.sidebar .side-menu li a:not(.logout)');

sideLinks.forEach(item => {
    const li = item.parentElement;
    item.addEventListener('click', () => {
        sideLinks.forEach(i => {
            i.parentElement.classList.remove('active');
        })
        li.classList.add('active');
    })
});

const menuBar = document.querySelector('.content nav .bx.bx-menu');
const sideBar = document.querySelector('.sidebar');

menuBar.addEventListener('click', () => {
    sideBar.classList.toggle('close');
});

function toggleElement(elementId) {
    const elementIds = ['overview', 'transactions', 'cards', 'loans', 'account', 'manage', 'account creator', 'payment'];

    elementIds.forEach(function(id) {
        var element = document.getElementById(id);
        if (element) {
            if (id === elementId) {
                const str = elementId;
                const str2 = str.charAt(0).toUpperCase() + str.slice(1);
                console.log("Page:", str2);
                document.getElementById("title").innerHTML = "FlowBank | "+ str2;
                document.getElementById("pagetitle").innerHTML = str2;
                element.style.display = "block"; // Show the specified element
            } else {
                element.style.display = "none"; // Hide other elements
            }
        }
    });
}

function changeTransactionStatus(rowid, rowidsender, rowidrecipient, rowamount, status){
    var id = document.getElementById(rowid).textContent;
    var idsend = document.getElementById(rowidsender).textContent.slice(4);
    var idrecipient = document.getElementById(rowidrecipient).textContent.slice(4);
    var amount = document.getElementById(rowamount).textContent;
    var targetUrl = "../templates/change status.php";
    var params = {
        id: id,
        idsender: idsend,
        idrecipient: idrecipient,
        amount: amount,
        status: status
    };

    fetch(targetUrl, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: new URLSearchParams(params)
    }).then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.text();
    }).then(data => {
        console.log(data);
    }).catch(error => {
        console.error('There was a problem with the fetch operation:', error);
    });
}

function navigateWithPost(url, mail, password) {
    var data = {
        email: mail,
        passpass: password
    };
    fetch(url, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(data),
    })
    .then(response => {
        console.log(response);
        window.location.href = url;
    })
    .catch(error => {
        console.error('Error:', error);
    });
}